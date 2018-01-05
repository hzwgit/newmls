<?php
namespace Home\Controller;
use Think\Controller;
class WalletController extends Controller {
    public function index(){
    	$arr=I('tp');
    	$this->assign('arr',$arr);
    	$this->display();
    }
}