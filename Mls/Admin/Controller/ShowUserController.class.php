<?php
namespace Admin\Controller;
use Think\Controller;
class ShowUserController extends Controller {
	public function index(){
			//导入第三方类库
		import('@.Class.Page');

		//接收表单传递的搜索条件
		$username = I('get.search');

		//组合查询条件
		$where['nickname'] = array('like','%'.$username.'%'); 

		$count = M('user')->where($where)->count();


		//进行第三方分页类配置
		$page = array(
			'total' => $count,//总数
			'url' => !empty($param['url']) ? $param['url'] : '',//URL配置
			'max' => !empty($param['max']) ? $param['max'] : 3,//每页显示多少条记录
			'url_model' => 1,//URL模式
			'ajax' =>  !empty($param['ajax']) ? true : false,//开启ajax分页
			'out' =>  !empty($param['out']) ? $param['out'] : false,//输出设置
			'url_suffix' => true,//url后缀
			'tags' => array('首页','上一页','下一页','尾页'),
			);

		//实例化第三方分页类库
		$p = new \Page($page);


		$data = M('user')->join('mls_user_info ON mls_user.id=mls_user_info.u_id')->where($where)->order('last_time desc')->limit($p->pagerows(),$p->maxrows())->select();
		// dump($data);
		// die;
		$this->assign('user',$data);
		
		$this->assign('pageNav',$p->get_page());
		$this->display();
	}
	Public function Mod(){
		$id = I('id');
		$data['id'] = $id;
		$res = M('user')->join('mls_user_info ON mls_user.id=mls_user_info.u_id')->where($data)->find();
		//dump($res);
		
		if($res){
			$this->assign('user_info',$res);
		}else{
			$this->error('添加数据失败');
		}
		$this->display();
	}

	Public function stateUP(){
		$id = I('id');
		$state = I('state');
		// dump($id);
		// $user = M('user')->where('id='.$id)->find();
		$data['id'] = $id;
		$data['state'] = $state;
		$res = M('user')->where('id='.$id)->save($data);
		if($res){
			$this->ajaxReturn($state);//成功
		}else{
			$this->ajaxReturn(2);//失败
		}
		
	}
		// 删除
	Public function delUser(){
		
		$num = session('power');
		// dump($num);	
		// dump(I('id'));
		if($num != 0){
				
			//权限不够
			$this->error('你没有权限删除');
		}else{
			$admin = M('user');
			$res = $admin->where('id='.I('id'))->delete();
			if($res){
				$this->ajaxReturn(0);
			}else{
				$this->ajaxReturn(1);
			}

		}
	}

}