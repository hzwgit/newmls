<?php
namespace Store\Controller;
use Think\Controller;
class GoodShowController extends Controller {
    public function index(){
    	$objGoods = M('goods');

    	$goods = $objGoods->select();

    	$this->assign('goods',$goods);


    	
    	$this->display();
    }

}