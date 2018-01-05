<?php
namespace Home\Controller;
use Think\Controller;
class AddressController extends Controller {
	public function index(){

		$addr=M('goods_receipt');
    	$u_id=session('hid');

    	//查询u_id地址，分配到前台
    	$info=$addr->where('u_id='.$u_id)->select();
    	// dump($info);
    	$this->assign('info',$info);

		$this->display();

	}
	  public function del(){
    	$id=I('post.id');
    	$del=M('goods_receipt');
    	
    	$res=$del->where('id='.$id)->delete();
    	if($res){

    		$this->ajaxReturn($id);
    	}


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

     public function add(){
    	$address=I('post.address');
    	$addr=implode(' ',$address);
    	$id=I('post.id');
    	//接收数据
    	$data['address']=$addr;
    	$data['u_id']=session('hid');
    	$data['street']=I('post.street');
    	$data['phone']=I('post.phone');
    	$data['name']=I('post.nickname');
    	$defa=I('post.de');
    	$data['defaults']=empty($defa)?'0':$defa;
    	// $de=I('post.de');

    	//实例化 收货表模型
    	
    	$receipt=M('goods_receipt');
    	if($id){
    		$u_id=session('hid');
    		$do['defaults']='0';
    		$receipt->where('u_id='.$u_id)->save($do);
    		
    		$ok=$receipt->where('id='.$id)->save($data);
    		if($ok){
    			$this->ajaxReturn('save');
    		}

    	}else{
    		$u_id=session('hid');
    		$do['defaults']='0';
    		$receipt->where('u_id='.$u_id)->save($do);
    		$ok=$receipt->data($data)->add();
    		if($ok){
    			$this->ajaxReturn($ok);
    		}
    	}

    }
     public function change(){

    	$id=I('post.id');
    	$receipt=M('goods_receipt');
    	$info=$receipt->where('id='."'$id'")->getField('address');
    	$arr=explode(' ', $info);
    	$arr = json_encode($arr);
    	$this->ajaxReturn($arr);
    }
    public function setdefault(){
    	$id=I('post.id');
    	$u_id=session('hid');
    	$set=M('goods_receipt');
    	$do['defaults']="0";
    	$rec=$set->where('u_id='.$u_id)->save($do);
    	$data['defaults']='1';
    	$re=$set->where('id='.$id)->save($data);
    	$this->ajaxReturn($re);
    }
}