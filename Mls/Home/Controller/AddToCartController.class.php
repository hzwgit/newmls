<?php
namespace Home\Controller;
use Think\Controller;
class AddToCartController extends Controller {
    public function index(){

    	$sion=session('cart');
    	// dump($sion);
		

        //接收get传参 求出新增加商品
        $shopid=I('get.shopid');
    	$val=I('get.id');
		$car=$sion[$shopid][$val];


        // $carnum=count($sion);
        // $this->assign('carnum',$carnum);
    	
        $this->assign('shopid',$val);
        //新增加的商品数量 
		$this->assign('num',I('get.num'));
    	
        //分配新增加的商品数据
        $this->assign('car',$car);

    	$this->display();



    }
}