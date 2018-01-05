<?php
namespace Admin\Controller;
use Think\Controller;
class ShowTypeController extends Controller {
	public function index(){
		//导入第三方类库
		import('@.Class.Page');

		//接收表单传递的搜索条件
		$typeName = I('get.search');

		//组合查询条件
		$where['name'] = array('like','%'.$typeName.'%'); 

		$count = M('goods_type')->where($where)->count();

		//进行第三方分页类配置
		$page = array(
			'total' => $count,//总数
			'url' => !empty($param['url']) ? $param['url'] : '',//URL配置
			'max' => !empty($param['max']) ? $param['max'] : 5,//每页显示多少条记录
			'url_model' => 1,//URL模式
			'ajax' =>  !empty($param['ajax']) ? true : false,//开启ajax分页
			'out' =>  !empty($param['out']) ? $param['out'] : false,//输出设置
			'url_suffix' => true,//url后缀
			'tags' => array('首页','上一页','下一页','尾页'),
			);

		//实例化第三方分页类库
		$p = new \Page($page);
		$gt = M('goods_type');

		$data = $gt->field("id,name,p_id,path,concat(path,id) as bpath")->where($where)->order('bpath')->limit($p->pagerows(),$p->maxrows())->select();
		
		//查询不含子类的类别
		$allId = $gt->field('id')->select();
		$allPath = $gt->field('path')->select();

		for($i=0;$i<count($allId);$i++){
			for($j=0;$j<count($allPath);$j++){
				$arr = explode(',',$allPath[$j]['path']);
				if(in_array($allId[$i]['id'],$arr)){
					unset($allId[$i]);
				}else{
					$results[] = $all[$i]['id'];
				}
			}
		}
		//相关类别显示
		foreach($data as &$val){
			//统计逗号个数
			$num = substr_count($val['path'],',');
			//改变类别显示
			$val['name'] = str_repeat('----》',$num-1).$val['name'];
		}
		$this->assign('allow',$allId);
		$this->assign('data',$data);
		
		$this->assign('pageNav',$p->get_page());
		
		$this->display();
	}
	
	//添加子类
	public function addType(){
		//父类ID
		$id = I('sid');

		//子类名
		$name = I('category');
		//类别表
		$type = M('goods_type');
		
		//查询父类path
		$fPath = $type->where('id='.$id)->getField('path');
		//设置子类path
		$sPath = $fPath.$id.',';
		
		//设置数值
		$data['name'] = $name;
		$data['path'] = $sPath;
		$data['p_id'] = $id;
		//添加数据
		$result = $type->add($data);
		//判断
		if($result){
			$this->redirect('index', array(), 2, '子类添加成功...');
		}else{
			$this->redirect('index', array(), 2, '子类添加失败...');
		}

	}
	
	//删除类别
	public function delType(){
		$id = I('id');
		//查询该类别下是否存在商品
		$goods = M('goods');
		$result = $goods->where('t_id='.$id)->select();
		//判断
		if($result){
			$this->redirect('index',array(),2,'该分类下存在商品不能删除');
		}else{
			$type = M('goods_type');
			$iResult = $type->where('id='.$id)->delete();
			if($iResult){
				$this->redirect('index',array(),2,'删除成功!');
			}else{
				$this->error('删除失败!');
			}	
		}	
	}
	//判断类别下是否存在商品
	public function isGood(){
		$id = I('id');
		$goods = M('goods');
		$result = $goods->where('t_id='.$id)->select();
		//判断
		if($result){
			$this->ajaxReturn(1);
		}else{
			$this->ajaxReturn(2);
		}
	}
}