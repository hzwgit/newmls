<?php
namespace Store\Controller;
use Think\Controller;
class CommonController extends Controller {
	//自动运行的控制器
	public function _initialize(){ 
		$flag = session('isslogin');
		//判断是否存在登陆标示
		if(empty($flag)){
			$this->redirect('Login/index');
		}
	}

}