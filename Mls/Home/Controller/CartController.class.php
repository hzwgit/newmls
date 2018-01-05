<?php
namespace Home\Controller;
use Think\Controller;
class CartController extends Controller {
    public function index(){

    	$sion=session('cart');
    	// dump($sion);
        // dump(session('order'));
    	$session=session('?homename');
    	

    	$this->assign('sion',$sion);
        $this->assign('session',$session);
    	$this->display();
    }
    public function login(){
    	$pass=I('post.pass','',md5);
    	$user=I('post.user');
    	$data=D('user');
    	$res=$data->where("nickname="."'$user'"." and pass="."'$pass'")->select();
    	// echo $data->getLastSql();
    	
    	if($res){
    		session('hpower',$power);
    		session('hid',$res[0]['id']);
    		session('homename',$user);
    		session('loginip',get_client_ip());
    		session('logintime',time());
    		session('ishlogin',1);
    		$this->ajaxReturn(1);

    	}else{
    		$this->ajaxReturn(0);

    	}
    }
    public function delgoods(){
    	$id=I('post.id');
        $shopid=I('post.shopid');
        unset($_SESSION['cart'][$shopid][$id]);
        unset($_SESSION['order'][$shopid][$id]);
        $cart = session('cart');
       // $num=$_SESSION['catr'];
       // $this->ajaxReturn($shopid);
       // $this->ajaxReturn($shopid);
        if(count($cart[$shopid])){

        	$this->ajaxReturn("2");
        }else{
             unset($_SESSION['cart'][$shopid]);
            if(count($_SESSION['cart'])){
                  $this->ajaxReturn("3");
            }else{
              
                $this->ajaxReturn("1");

            }

        }

		

       
    }
    public function donum(){
    	$num=I('post.order');
    	
        session('order',null); 

    	for($i=0;$i<count($num);$i++){
           // $ok[]=$num[$i]['sid'];
    		    // if (isset($_SESSION['cart'][$num[$i]['sid']]['gid'])) {
          		  $_SESSION['cart'][$num[$i]['sid']][$num[$i]['gid']]['num']=$num[$i]['nums'];
      		  // }
              $_SESSION['order'][$num[$i]['sid']][$num[$i]['gid']]=$_SESSION['cart'][$num[$i]['sid']][$num[$i]['gid']];
    	}

    	if($_SESSION['order']){

        	$this->ajaxReturn(1);
        }
    }

}