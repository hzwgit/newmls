<?php
namespace Home\Controller;
use Think\Controller;
class GuangController extends Controller {
    public function index(){
		//接收主页动作
		$act = I('act');
		//判断
		switch($act){
			//热销
			case 'popular':
				$this->popular();
				break;
			//流行
			case 'hot':
				$this->hot();
				break;
			//新品
			case 'newGood':
				$this->newGood();
				break;
			//主题
			case 'topic':
				$this->topic();
				break;
		}
    }
	//热销商品
	public function popular(){
		$tab = M();
		//按被购买数量从大到小排序
		$result = $tab->table('mls_goods gs,mls_good_pic gp')->field('gs.id gid,gs.price gprice,gs.name gname,gs.buy_num gbuy,gs.summary gsa,gp.g_pic gpic')->where('gs.id=gp.g_id and gp.state="1"')->order('gs.buy_num desc')->select();
		
		$this->show();
		//分配数据
		$this->assign('act',1);
		$this->assign('result',$result);
		$this->display('index');
	}
	//流行元素
	public function hot(){
		$tab = M();
		//随便查
		$result = $tab->table('mls_goods gs,mls_good_pic gp')->field('gs.id gid,gs.price gprice,gs.name gname,gs.buy_num gbuy,gs.summary gsa,gp.g_pic gpic')->where('gs.id=gp.g_id and gp.state="1"')->select();
		
		$this->show();
		//分配数据
		
		$this->assign('act',0);
		$this->assign('result',$result);
		$this->display('index');
	}
	//新品上市
	public function newGood(){
		$tab = M();
		//按商品的上架时间排序
		$result = $tab->table('mls_goods gs,mls_good_pic gp')->field('gs.id gid,gs.price gprice,gs.name gname,gs.buy_num gbuy,gs.summary gsa,gp.g_pic gpic')->where('gs.id=gp.g_id and gp.state="1"')->order('gs.addtime desc')->select();
		
		$this->show();
		//分配数据
		$this->assign('act',2);
		$this->assign('result',$result);
		$this->display('index');
	}
	
	//显示一级分类
	public function show(){
		$type = M('goods_type');
		//查询一级分类
		$one = $type->field('id,name')->where('path="0,"')->order('id')->limit(4)->select();
		
		$this->assign('cata',$one);
	}
	
	//ajax传参
	public function addType(){
		
	}
	
	//主题
	public function topic(){
		
	}
	//分类显示
	public function catalog(){
		//取得类别ID
		$id = I('id');
		//父类ID
		$pid = I('pid');
		//查询父ID下所子类
		$type = M('goods_type');
		//分类信息
		$cata = $type->where('p_id='.$pid)->select();
		
		//设置查询条件
		$order = isset($_GET['where']) ? $_GET['where'] : '';
		$where = '';
		//过滤
		switch($order){
			case 'popular':
				$where = ' and gs.price<100';
			break;
			case 'hotSe':
				$where = ' and gs.price>100 and gs.price<300';
			break;
			case 'upNew':
				$where = ' and gs.price>300';
			break;
		}
		
		//类别下的商品信息 包括图片
		$list=M()->table(array('mls_goods'=>'gs','mls_good_pic'=>'gp'))
     ->where("gs.id=gp.g_id and gs.t_id={$id} and gp.state='1'".$where)->getField('gs.id gid,gs.name gname,gs.price gprice,gs.buy_num gbuy,gs.discount gdis,gs.t_id tid,gs.summary gsa,gp.g_pic gpic');
		//dump($list);exit;
		$this->assign('id',$id);
		$this->assign('pid',$pid);
		$this->assign('list',$list);
		$this->assign('pid',$pid);
		$this->assign('id',$id);
		$this->assign('cata',$cata);
		//dump($cata);
		$this->display();
	}
	//查看所有
	public function firstCatalog(){
		//一级分类ID
		$id = I('id');
		//接收排序方式
		$way = I('way');
		$order = '';
		
		switch($way){
			case 'pop':
				$order = 'gs.price';
				break;
			case 'hot':
				$order = 'gs.buy_num desc';
				break;
			case 'newUp':
				$order = 'gs.addtime';
				break;
			default:
				break;
		}
		
		$type = M('goods_type');
		//二级分类
		$cata = $type->field('id,name')->where('p_id='.$id)->select();
		//商品类别ID
		$tid = array();
		foreach($cata as $val){
			$tid[] = $val['id'];
		}
		//组合tid条件
		$in = implode(',',$tid);
		
		//查询三级分类
		$lastType = $type->field('id,name')->where('p_id in ('.$in.')')->select();
		$lastTid = array();
		foreach($lastType as $val){
			$lastTid[] = $val['id'];
		}
		//组合tid条件
		$inRes = implode(',',$lastTid);
		
		//查询商品信息
		$model = M();
		$result = $model->table('mls_goods gs,mls_good_pic gp')->field('gs.id gid,gs.name gname,gs.price gprice,gs.buy_num gbuy,gs.discount gdis,gs.t_id tid,gs.summary gsa,gp.g_pic gpic')->where('gs.id=gp.g_id and gp.state="1" and gs.t_id in ('.$inRes.')')->group('gs.id')->order($order)->select();
		//dump($result);
		
		$this->assign('id',$id);
		$this->assign('result',$result);
		$this->assign('cata',$cata);
		$this->display();
	}
	//查看三级分类
	public function showTypes(){
		//二级分类ID
		$id = I('id');
		$type = M('goods_type');
		$lastType = $type->field('id,name,p_id')->where('p_id='.$id)->select();
		
		echo json_encode($lastType);
	}
	//瀑布流ajax传值
	public function waterPage(){
		$page = I('page');
		$id = I('get.id');
		
		$num = 4;
		$start = ($page-1) * $num;
		$list=M()->table(array('mls_goods'=>'gs','mls_good_pic'=>'gp'))
     ->where("gs.id=gp.g_id and gs.t_id=".$id." and gp.state='1'")->order()->limit($start.','.$num)->getField('gs.id gid,gs.name gname,gs.price gprice,gs.buy_num gbuy,gs.discount gdis,gs.t_id tid,gs.summary gsa,gp.g_pic gpic');
	 
		$this->ajaxReturn($list);
	}
	//一级分类瀑布流ajax传值
	public function firstWaterPage(){
		$page = I('page');
		$id = I('id');

		$num = 5;
		$start = ($page-1) * $num;
		
		$type = M('goods_type');
		//二级分类
		$cata = $type->field('id,name')->where('p_id='.$id)->select();
		//商品类别ID
		$tid = array();
		foreach($cata as $val){
			$tid[] = $val['id'];
		}
		//组合tid条件
		$in = implode(',',$tid);
		
		//查询三级分类
		$lastType = $type->field('id,name')->where('p_id in ('.$in.')')->select();
		$lastTid = array();
		foreach($lastType as $val){
			$lastTid[] = $val['id'];
		}
		//组合tid条件
		$inRes = implode(',',$lastTid);
		
		$model = M();
		$list = $model->table('mls_goods gs,mls_good_pic gp')->field('gs.id gid,gs.name gname,gs.price gprice,gs.buy_num gbuy,gs.discount gdis,gs.t_id tid,gs.summary gsa,gp.g_pic gpic')->where('gs.id=gp.g_id and gp.state="1" and gs.t_id in ('.$inRes.')')->group('gs.id')->limit($start.','.$num)->select();
	 
		$this->ajaxReturn($list);
	}
	//主题显示瀑布流
	public function hotWaterPage(){
		
	}
}