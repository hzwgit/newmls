<?php
namespace Admin\Controller;
use Think\Controller;
class CreateshController extends Controller {
    public function index(){
    			//导入第三方类库
		import('@.Class.Page');

		//接收表单传递的搜索条件
		$username = I('get.search');

		//组合查询条件
		$where['truename'] = array('like','%'.$username.'%'); 
		$where['power'] = array('NEQ','3');

		$count = M('shop_info')->where($where)->count();


		//进行第三方分页类配置
		$page = array(
			'total' => $count,//总数
			'url' => !empty($param['url']) ? $param['url'] : '',//URL配置
			'max' => !empty($param['max']) ? $param['max'] : 3,//每页显示多少条记录
			'url_model' => 1,//URL模式
			'ajax' =>  !empty($param['ajax']) ? true : false,//开启ajax分页
			'out' =>  !empty($param['out']) ? $param['out'] : false,//输出设置
			'url_suffix' => true,//url后缀
			'tags' => array('首页','上一页','下一页','尾页'),
			);

		//实例化第三方分页类库
		$p = new \Page($page);

		$data = M('shop_info')->where($where)->order('power asc')->limit($p->pagerows(),$p->maxrows())->select();
		// dump($data);
		// die;
		$this->assign('shop',$data);
		
		$this->assign('pageNav',$p->get_page());
		$this->display();
    	
    }
    public function powerUp(){
    	$data['id'] = I('id');
    	$data['power'] = I('power');
    	$res = M('shop_info')->save($data);

    if($res){
    	$shop_info = M('shop_info')->where('id='.$data['id'])->find();
    	//判断power值 做不同在操作
    	if($data['power']==3){
    		// $res = M('shop_info')->where($data)->save();
    			
    			$shop['name'] = $shop_info['shop_name'];

    			$shop['c_time'] = time();
    			$shop['s_id'] = $data['id'];
    			$result = M('shop')->add($shop);
    			$user['id'] = $shop_info['u_id'];
    			//修改user表内的power
    			$user['power'] = 2;
    			$reUser = M('user')->save($user);
    			//if($result && $reUser){
    				$this->ajaxReturn($shop_info['power']);//更新成功
    			// }else{
    			// 	$this->ajaxReturn(0);//更新失败
    			// }
    		}else{
    			$this->ajaxReturn($shop_info['power']);//更新成功
    		}
    	//$data = I('post.');
    	// dump($data);
  	  }
	}
}