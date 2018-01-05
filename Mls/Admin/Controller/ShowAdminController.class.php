<?php
namespace Admin\Controller;
use Think\Controller;
class ShowAdminController extends Controller {
	public function index(){
			//导入第三方类库
		import('@.Class.Page');

		//接收表单传递的搜索条件
		$username = I('get.search');

		//组合查询条件
		$where['username'] = array('like','%'.$username.'%'); 

		$count = M('admin')->where($where)->count();


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

		
		$data = M('admin')->where($where)->limit($p->pagerows(),$p->maxrows())->select();
		//$flag = I('flag');
		//if($flag){
		//dump($data);
		
		// dump($flag);
		//echo($flag);
		
			//
			// echo json_encode(value)
			//$this->ajaxReturn($data);
			$this->assign('admin',$data);
		
		//}
		
		$this->assign('pageNav',$p->get_page());

		$this->display();
	
}

	public function adminUp(){
		$data['power'] = I('power');
		$data['id'] = I('id');
		$num = session('power');
		if($data['id'] == session('id')){
			$this->ajaxReturn(3);
		}else{
		if($num == 0){
			$res = M('admin')->save($data);
				
			if($res){
				//成功
				$this->ajaxReturn(0);
			}else{
				// 失败
				$this->ajaxReturn(1);
			}
				
		}else{
				// 权限不够
			$this->ajaxReturn(2);
		}
		
		}
	}
	/*Public function passMod(){
	

		$this->display();
	}*/
	//修改密码
	Public function passMod(){
		$pass = I('newpass');
		$id = session('id');	
		$data['password'] = I('newpass','','md5');;
		$res = M('admin')->where('id='.$id)->save($data);
		//dump($res);
		//die;
			if($res){
				$this->ajaxReturn($pass);
			}else{
				$this->ajaxReturn(2);
			}
	}

	// 删除
	Public function delAdmin(){
		
		$num = session('power');
		// dump($num);	
		// dump(I('id'));
		if($num != 0){
				
			//权限不够
			$this->error('你没有权限删除');
		}else{
			$admin = M('Admin');
			$res = $admin->where('id='.I('id'))->delete();
			if($res){
				$this->ajaxReturn(0);
			}else{
				$this->ajaxReturn(1);
			}

		}
	}
}