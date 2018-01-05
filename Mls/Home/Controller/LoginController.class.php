<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $flag = I('flag');
    if($flag == 1){
    $data['flag'] = $flag;
    //dump($data);
    $this->assign('Login',$flag);
    }
    
    	$this->display();
    }
    Public function dologins($code,$id=''){

    	$verify = new \Think\Verify();
    	$verifyCheck = $verify->check($code, $id);

    	
    	$data['nickname'] = I('mlsUser');
    	$data['pass'] = I('password','','md5');
    	$flag = I('flag');
    	
    	// data['lock'] = 1//防止越过前台直接登录
    	$res = M('user')->where($data)->find();
    	
    	// dump($res);
    	// die;
    	if($flag){
			if($res && $verifyCheck){

    			$id=$res['id'];
	            $name=$res['nickname'];
	            $power = $res['power'];
	            session('hpower',$power);
	            session('hid',$id);
	            session('homename',$name);
	            session('loginip',get_client_ip());
	            session('logintime',time());
	            session('ishlogin',1);
	            // $this->ajaxReturn(0);
	        	   $this->redirect('Index/index');
    	}else{
    		//$this->error('登录失败');
			$this->redirect('Login/index',array('flag' => '1'));
    	}
    	}else{
    	if($res){

    			$id=$res['id'];
                $data['last_time'] = time();
                M('user')->where('id='.$id)->save($data);
	            $name=$res['nickname'];
	            $power = $res['power'];
	            session('hpower',$power);
	            session('hid',$id);
	            session('homename',$name);
	            session('loginip',get_client_ip());
	            session('logintime',time());
	            session('ishlogin',1);
	            // $this->ajaxReturn(0);
	           // $this->success('登录成功',U('Index/index'));
			   $this->redirect('Index/index');
    	}else{
    		//$this->error('登录失败');
			$this->redirect('Login/index',array('flag' => '1'));
    	}
   	 }
    }

    Public function logins(){
    	$data['nickname'] = I('mlsUser');
    	$data['pass'] = I('password','','md5');
    	// data['lock'] = 1//防止越过前台直接登录
    	$res = M('user')->where($data)->find();
    	if($res){
    		if($res['state'] != 0){
    			$this->ajaxReturn(2);//用户被锁定
    		}else{
    			/*dump($res);
    			die;*/
	    		/*$id=$res['id'];
	            $name=$res['username'];
	            $power = $res['power'];
	            session('power',$power);
	            session('id',$id);
	            session('username',$name);
	            session('loginip',get_client_ip());
	            session('logintime',time());
	            session('islogin',1);*/
	            $this->ajaxReturn(0);
	           // $this->success('登录成功',U('Index/index'));
    		}
    		
    	}else{
    		
    		$ip = get_client_ip();
    		// $ip=$_SERVER['REMOTE_ADDR'];	 
    		// $ip =gethostbyname($url);
    		// dump($arr);
    		//获取缓存
    		$arr = S('data');
    		$nu = S('nu');
    		// echo $nu;
    		$i = S('i');

    		if(!in_array($ip,$arr)){
    			// 若不在 将这个ip写入数 
    			if(!$i){
    				$i=0; 
    			} 				
	    		$arr[$i] = $ip;
	    		$i++;
	    		S('i',$i);
	    		//session('ip',$ip) ;
	    		S('data',$arr,100);
	    		$nu = 1;
	    		S('nu',$nu);
	    		$this->ajaxReturn(1);


    		}else{ 
    			$nu++;
    			//ip在数组中,统计登录失败次数
    			if($nu>4){
    				S('nu',$nu,'100');
    				$this->ajaxReturn(3);//用户超出登录次数
    				
    			}else{
    				S('nu',$nu,'100');
    				$this->ajaxReturn(1);
    			}
    		}
    			
    	}
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
     //退出功能
    public function logout(){ 
        // $flag = I('flag');

        // if($flag){ 
            //清空session
            session(null);
			$this->redirect('Index/index');
    	
           // $this->success('退出成功',U('Index/index'));
           // $this->ajaxReturn(1);
        // }else{
        //      $this->ajaxReturn(0);
        // }

    }

  }
 
