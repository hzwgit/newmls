<?php
namespace Admin\Controller;
use Think\Controller;
class TypeManageController extends Controller {
	public function index(){
		$this->display();
	}
	//增加一级类别
	public function add(){
		//接收表单值
		$cate = I('category');//类别名值
		$type = M('goods_type');
		$data['name'] = $cate;
		$result = $type->add($data);
		if($result){
			$this->success('数据插入成功！');
		}else{
			$this->error('数据插入失败！');
		}
	}
	//检测类型
	public function checkType(){
		//接收表单值
		$typeName = I('name');
		$data['name'] = $typeName;
		$type = M('goods_type');
		$data = $type->where($data)->select();
		if($data){
			echo 1;
		}else{
			echo 2;
		}
	}
	
	//添加子类
	public function addType(){
		$this->display();
	}
}