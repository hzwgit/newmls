<?php
	namespace Admin\Controller;
	use Think\Controller;
	class CommonController extends Controller{
		public function _initialize(){
			$islogin=session('islogin');
			if(empty($islogin)){
				$this->redirect('Login/index');
			}


		}
		
	}