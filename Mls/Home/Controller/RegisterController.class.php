<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
    public function index(){
    	$this->display();
    }

    public function agreement(){
    	$this->display();
    }
    Public function handle(){
    
    	// $obj = I('post');
    	$user = M('user');
    	$data['nickname'] = I('nickname');
    	$res = $user->where($data)->find();
    	// dump($obj);
    	if($res){
    		//用户名已被注册
    		 $this->ajaxReturn(1);
    	}else{
    		//用户名未被注册
    		 $this->ajaxReturn(0);
    	}
    }
	// 验证码
	
    public function check_verify($code, $id = ''){
        $verify = new \Think\Verify();
        $verifyCheck = $verify->check($code, $id);
        $this->ajaxReturn($verifyCheck);
        
    }
        //注册信息添加
     Public function doregister(){
	 // $code,$id=''
        // $verify = new \Think\Verify();
      // $verifyCheck = $verify->check($code, $id);//验证码
           //$user = I('post.');
           //后台验证
    /*  $Use = D('User');
      if(!$Use->create()){
        //失败     
        exit($Use->getError());
      }else{*/   
           //dump($user);
            //接受传参
           $data['nickname'] =  I('nickname');
           $data['phone'] =  I('mobile');
           $data['c_time'] =  time();
           $data['last_time'] =  time();
           $data['pass'] =  I('password','','md5');
           $user = M('user');
	//   if($verifyCheck){
           $result = $user->add($data);
		   //dump($verifyCheck);
           // echo $result;
		   // die;
           if($result ){
            $userInfo = M('user_info');
            $Info['u_id'] = $result;
            $res = $userInfo->data($Info)->add();
          $this->redirect('Login/index');
            // $this->success('添加成功',U('Login/index'));
            
           }else{
               // $this->error('添加失败');
				$this->redirect('Register/index');
           }

    // }
  }
   public function showVerify(){ 
      $config = array(
        'fontSize' => 12,
        'length' => 3,
        'useNoise' => false,
        );
      $verify = new \Think\Verify($config);
      $verify->entry();
    }
      
   
}