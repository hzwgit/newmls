<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		//查询所有分类
		$type = M('goods_type');
		//查询一级分类
		$one = $type->field('id,name')->where('path="0,"')->order('id')->limit(4)->select();

		//查询轮播表
		$gp = M('good_play');
		//取状态为1的数据
		$data['show'] = '1';
		
		$playPic = $gp->field('s_id,pic')->where($data)->limit(6)->select();
		
		//人气推介单品
		$user = M();
		$hotGood = $user->table('mls_goods g,mls_good_pic gp')->where('g.id=gp.g_id and gp.state="1"')->field('g.id,g.name,g.price,g.discount,g.buy_num,gp.g_pic')->group('g.id')->order('g.discount')->limit(12)->select();
		
		//主页右三图
		$tGood = $user->table('mls_goods g,mls_good_pic gp')->where('g.id=gp.g_id')->field('g.id,gp.g_pic')->group('g.id')->order('g.stock')->limit(3)->select();
		//dump($tGood);
		
		//查询今天衣服上新
		$cloType = $type->field('id')->where(" path like '0,1,%'")->select();
		foreach($cloType as $val){
			$clo[] = $val['id'];
		}
		$clos = join(',',$clo);
		$good = M('goods');
		$first = strtotime("today");
		$last =  strtotime('today')+3600*24;
		$upCols = $good->where('t_id in ('.$clos.') and addtime>'.$first.' and addtime<'.$last)->count('id');
		//衣服展示
		$model = M();
		$colRes = $model->table('mls_goods gs,mls_good_pic gc')->field('gs.id,gs.summary,gc.g_pic')->where('gs.id=gc.g_id and gs.state="1" and gc.state="1" and gs.t_id in ('.$clos.')')->group('gs.id')->limit(10)->select();
		
		//查询今天鞋子上新
		$shoType = $type->field('id')->where(" path like '0,10,%'")->select();
		foreach($shoType as $val){
			$sho[] = $val['id'];
		}
		$shos = join(',',$sho);
		$upShoes = $good->where('t_id in ('.$shos.') and addtime>'.$first.' and addtime<'.$last)->count('id');
		//鞋子展示
		$shoRes = $model->table('mls_goods gs,mls_good_pic gc')->field('gs.id,gs.summary,gc.g_pic')->where('gs.id=gc.g_id and gs.state="1" and gc.state="1" and gs.t_id in ('.$shos.')')->group('gs.id')->limit(10)->select();
		
		//查询今天包包上新
		$bagType = $type->field('id')->where(" path like '0,39,%'")->select();
		foreach($bagType as $val){
			$bag[] = $val['id'];
		}
		$bags = join(',',$bag);
		$upBag = $good->where('t_id in ('.$bags.') and addtime>'.$first.' and addtime<'.$last)->count('id');
		//包包展示
		$bagRes = $model->table('mls_goods gs,mls_good_pic gc')->field('gs.id,gs.summary,gc.g_pic')->where('gs.id=gc.g_id and gs.state="1" and gc.state="1" and gs.t_id in ('.$bags.')')->group('gs.id')->limit(10)->select();
		
		
		//查询今天配饰上新
		$ornType = $type->field('id')->where(" path like '0,40,%'")->select();
		foreach($ornType as $val){
			$orn[] = $val['id'];
		}
		$orns = join(',',$orn);
		$upOrn = $good->where('t_id in ('.$orns.') and addtime>'.$first.' and addtime<'.$last)->count('id');
		//配饰展示
		$ornRes = $model->table('mls_goods gs,mls_good_pic gc')->field('gs.id,gs.summary,gc.g_pic')->where('gs.id=gc.g_id and gs.state="1" and gc.state="1" and gs.t_id in ('.$orns.')')->group('gs.id')->limit(10)->select();
		
		//所有店铺
		$shop = M('');
		$shops = $shop->table('mls_goods g,mls_shop s')->field('g.id gid,count(g.id) as total,sum(g.buy_num) as sum,s.name sname')->where('g.s_id=s.s_id')->limit(10)->group('s.s_id')->select();
		
		//店铺
		$this->assign('shops',$shops);
		
		//衣服
		$this->assign('upGood',$upCols);
		$this->assign('colRes',$colRes);
		
		//鞋子
		$this->assign('upShoes',$upShoes);
		$this->assign('shoRes',$shoRes);
		
		//包包
		$this->assign('upBag',$upBag);
		$this->assign('bagRes',$bagRes);
		
		//配饰
		$this->assign('upOrn',$upOrn);
		$this->assign('ornRes',$ornRes);
		
		
		$this->assign('hotGood',$hotGood);
		$this->assign('tGood',$tGood);
		$this->assign('playpic',$playPic);
		$this->assign('result',$one);
    	$this->display();
    }
	//
	//显示三级分类
	public function showGoods(){
		$id = I('id');//父ID
		$type = M();
		$sql = "select id,p_id,name from mls_goods_type where path like '0,{$id},%,'"; 
		$arr = $type->query($sql);
		
		echo json_encode($arr);
	}
	//显示弹出div类别
	public function showType(){
		$id = I('id');
		//查询二三级分类
		$type = M();
		$sql = "select id,name,p_id,path from mls_goods_type where path like '0,{$id},%' order by concat(path,id)";
		$childType = $type->query($sql);
		$str = '';
		//统计二级分类数量
		
		foreach($childType as $val){
			if(substr_count($val['path'],',') == 2){
				$str .= '<li>';
				$str .= '<h4><span target="_blank">'.$val['name'].'</span></h4><p>';
				continue;
			}elseif(substr_count($val['path'],',') == 3){
				$str .= '<a class="red_f" href="index.php/home/Guang/catalog/id/'.$val['id'].'/pid/'.$val['p_id'].'" target="_blank">'.$val[name].'</a>';
				continue;
			}
			$str .='</p></li><!>';
		}
		$strs = explode('<!>',$str);
		$newStr = implode($strs);
		echo $newStr;
		//<h4><a href="" target="_blank">夏季新品</a></h4>
		//echo $str;
	}
	//显示导航栏分类
	public function navTop(){
		$id = I('id');
		//查询子类
		$type = M('goods_type');
		$res = $type->field('id,name,p_id')->where('p_id='.$id)->select();
		echo json_encode($res);
	}
	public function search(){
		//接收输入输入框值
		$name = I('searchKey');
		
		//查询匹配相似商品
		$goods = M();
		$result = $goods->table('mls_goods gs,mls_good_pic gc')->field('gs.id,gs.name,gs.price,gs.stock,gs.discount,gs.buy_num,gs.summary,gc.g_pic')->where('gs.id=gc.g_id and gc.state="1" and gs.name like "%'.$name.'%"')->select();
		
		//查询结果数
		$num = count($result);
		
		$this->assign('result',$result);
		$this->assign('name',$name);
		$this->assign('num',$num);
		$this->display();
	}
}