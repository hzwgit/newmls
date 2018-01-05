<?php
namespace Store\Controller;
use Think\Controller;
class InfoController extends Controller {
    public function index(){
    	$this->display();
    }

    public function action(){
    	$data = I('post.');
    	dump($data);
    	exit;
    }
}