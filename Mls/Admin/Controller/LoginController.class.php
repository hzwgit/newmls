<?php
namespace Admin\Controller;
use Think\Controller;
class loginController extends Controller {
    public function index(){
      $this->display();
    }
   
    public function verify(){
        $data=array(
            'fontSize'    => 80,  
            'useNoise'=>false,
            'length'=>4,
            );
        $verify=new \Think\Verify($data);
        
        $verify->entry();

    }


    public function check_verify($code, $id = ''){
        $verify = new \Think\Verify();
        $verifyCheck = $verify->check($code, $id);
        $this->ajaxReturn($verifyCheck);
        
    }
    public function logins(){
        $data['username']=I('post.username');
        $data['password']=I('post.password','',md5);
        // $data['power']=1;
        
        $login=D('admin');
        
        $res=$login->where($data)->find();

      
        if($res){
             $id=$res['id'];
             $name=$res['username'];
             $power = $res['power'];
             session('power',$power);
             session('id',$id);
             session('username',$name);
             session('loginip',get_client_ip());
             session('logintime',time());
             session('islogin',1);
            // $this->success('登陆成功',U('Index/index'),2);
			 $this->redirect('Index/index');
             
        }else{
            //$this->error('登陆失败');
			$this->redirect('Login/index');

        }

    }

     //退出功能
    public function logout(){
        $flag = I('flag');

        if($flag){ 
            //清空session
            session(null);
            $this->ajaxReturn(1);
        }else{
             $this->ajaxReturn(0);
        } 
   }
}