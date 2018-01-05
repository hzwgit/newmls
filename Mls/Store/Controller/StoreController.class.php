<?php
/**
 * 商品类别
 */
namespace Store\Controller;
use Think\Controller;
class StoreController extends CommonController {
    public function index(){
        $this->display();
    }

	//加载聊天页面
    public function knilmi(){
    	//$id = session('s_id');
    	//$userinfo = M('user_info')->where('u_id='.$id)->find();
        $id = session('sid');
        $userinfo = M('user_info')->where('u_id='.$id)->find(); 
        $this->assign('userinfo',$userinfo);
        //alert($('.shop-wrap').attr('path-id'));
        //alert(window.parent.getElementsByClassName('shop-wrap')[0]);
    	$this->display('Store/knilmi');
    }
	//选择对应的函数
    public function actionK(){
    	$action = I('action');
    	$this->$action();
    }
    //查询用户列表
    public function selectUK(){
        $id = session('sid');
        //$userinfo = M('user_info')->where('u_id='.$id)->find();
        $user = M('chat_message')->where("id like '%-".$id."' and state='1'")->field('id')->order('time')->select();
        foreach($user as $val){
            $userM[] = explode('-',$val['id'])[0];
        }
        //M('user_info')->
        $userM = array_unique($userM);
        $userM = M()->table('mls_user_info i,mls_user u')->where('u.id=i.u_id and i.u_id in('.join(',',$userM).')')->select();
        //$this->assign('userM',$userM);
        $this->ajaxReturn($userM);
    }
    //插入数据
    public function insertK(){
        $arr = explode('-',I('id'));
        $time = time();
        $data['id'] = I('id');
        $data['u_id'] = $arr[1];
        $data['message'] = I('message');
        $data['time'] = $time;
        $data['state'] = '1';

        $result = M('chat_message')->add($data);
        if($result){
            echo 1;
        }else {
            echo 0;
        }
    }
    //查询数据
    public function selectK(){
    	//dump(I('get.'));exit;
    	$id = I('id');
        //echo $id;exit;
        $data = M('chat_message')->where('id=\''.$id.'\'')->order('time')->limit(I('limit'))->select();
        
		foreach($data as $key=>$val){
            $data[$key]['message'] = html_entity_decode($val['message']);
        }
    	$this->ajaxReturn($data);
    }    
    //统计条数，查看是否刷新
    public function selectCK(){
        $count = M('chat_message')->where('id=\''.I('id').'\'')->count();
        $this->ajaxReturn($count);
    }





/*
    //加载聊天页面
    public function knilmi(){
        $id = session('hid');
        $userinfo = m('user_info')->where('u_id='.$id)->find();
        $user = M('chat_message')->where('u_id='.$id.' ')->field('id')->select();
        foreach($user as $val){
            $userM[] = explode('-',$val['id'])[1];
        }
        //M('user_info')->
        $userM = array_unique($userM);
        unset($userM[0]);
        unset($userM[l4]);
        $userM = M()->table('mls_user_info i,mls_user u')->where('u.id=i.u_id and i.u_id in('.join(',',$userM).')')->select();
        $this->assign('userM',$userM);
        //dump($userM);exit;
        $this->assign('userinfo',$userinfo);
        $this->display('Share/knilmi');
    }

    //选择对应的函数
    public function actionK(){
        $action = I('action');
        $this->$action();
    }
    //查询用户列表
    public function selectUK(){
        $id = session('hid');
        //$userinfo = M('user_info')->where('u_id='.$id)->find();

        $user = M('chat_message')->where("id like '".$id."%' and state='1'")->field('id')->order('time')->select();
        foreach($user as $val){
            $userM[] = explode('-',$val['id'])[1];
        }
        //M('user_info')->
        $userM = array_unique($userM);
        $userM = M()->table('mls_user_info i,mls_user u')->where('u.id=i.u_id and i.u_id in('.join(',',$userM).')')->select();
        //$this->assign('userM',$userM);
        $this->ajaxReturn($userM);
    }
    //插入message数据
    public function insertK(){
        $arr = explode('-',I('id'));
        $time = time();
        $data['id'] = I('id');
        $data['u_id'] = $arr[0];
        $data['message'] = I('message');
        if(I('flag') == '1'){
            $data['message'] = '你好';
            $data['u_id'] = $arr[1];
        }
        $data['time'] = $time;
        $data['state'] = '1';

        $result = M('chat_message')->add($data);
        if($result){
            echo 1;
        }else {
            echo 0;
        }
    }
    //查询message数据
    public function selectK(){
        //dump(I('get.'));exit;
        $id = I('id');
        $data = M('chat_message')->where('id=\''.$id.'\'')->order('time')->limit(I('limit'))->select();
        $this->ajaxReturn($data);
    }
    //修改
    public function updateK(){
        $id = I('id');
        $aa = M('chat_message')->where('id=\''.$id.'\'')->save(array('state'=>'0'));
    }
    //统计条数，查看是否刷新
    public function selectCK(){
        $count = M('chat_message')->where('id=\''.I('id').'\'')->count();
        $this->ajaxReturn($count);
    }
    */
}


