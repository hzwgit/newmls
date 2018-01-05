<?php
namespace Admin\Controller;
use Think\Controller;
class AddAdminController extends Controller {
	public function index(){
		$this->display();
	}
	Public function Verification(){
		$data['username'] = I('str');
		//验证数据合法性
		$err = $this->getMan($data['username']);
		if($err==0){
			//判断标志位如果为真则连接数据库查询
			$flag = I('flag');
			if($flag){
				$admin = M('admin');
				$res = $admin->where($data)->find();
				if($res){
					$this->ajaxReturn(1);
				}else{
					$this->ajaxReturn(0);
				}
			}else{
				$this->ajaxReturn($err);
			}
			
		}else{
			//$flag[0] = $err;
			$this->ajaxReturn($err);
		}
		

	}
	public function admin(){
		$flag = true;
		$data['username'] = I('username');
		
		foreach ($data as $val) {
			// 便利验证符合则添加到数据库中
			$err = $this->getMan($val);
			if($err!=0){
				//dump($err);
				$flag = false;
				$this->error('添加失败');
				//$this->ajaxReturn($err);
			}
		}
		// 若都符合则添加数据库
		if($flag){
			if(I('pass') == I('btn_pass')){
			$data['password'] = I('pass','','md5');
		}
			$data['power'] = I('power');
			$admin = M('admin');
			//dump($data);
			$result = $admin->add($data);
			if($result){
				//$this->success('添加成功','../ShowAdmin/index');
				$this->redirect('ShowAdmin/index');
			}else{
				//$this->error('添加失败');
				$this->redirect('AddAdmin/index');
			}
			
		}


	}
	// 验证用户输出内容是否合法
	Public function getMan($user){
		 $err = 0;
		 $reChinese='/^([a-zA-Z0-9! @ # $ % ?_]){5,12}$/';
		$b_chinese = preg_match($reChinese,$user);
		 //$b_chinese=$reChinese.test($user);	
		//匹配正则不能包含空格
		 $reSpace='/\s/gi';
		// $b_space=$reSpace.test($user);
		$b_space = preg_match($reSpace,$user);
		// 验证是否是空
		if(!$user){
		 	// $(this).next().css('color','red').html("你还没填哦");
			$err = 4;
		}else 
		//验证内容合法性
		if(!$b_chinese){
			// $(this).next().css('color','red').html("请输入5-12位的字母或数字");
			$err = 2;
			
		}else if($b_space){
			// $(this).next().css('color','red').html("不能有空格");
			$err = 3;
		}
		else{
			// $(this).next().css('color','green').html("内容可用");
		}
		return $err;	
	}
}