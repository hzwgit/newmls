<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {
    public function index(){
   		import('@.class.Page');
		//接收搜索input信息
		// dump(session());
		$uid=session('hid');
		$desc=I('get.status');
		$whered='';
		switch ($desc) {
			case '1':
				$whered='mls_order.o_state=0';
				break;
			case '2':
				$whered='mls_order.o_state=1';
				break;
			case '3':
				$whered='mls_order.o_state=2';
				break;
			case '4':
				$whered='mls_order.o_state=3';
				break;
			case '5':
				$whered='mls_order.o_state=4';
				break;	

			default:
				$whered="";
				break;
		}
		$order=M('Order');
		//查询条数
		$count=$order
				->join('(select * from mls_order_info where u_id='.$uid.') info  on info.o_id=mls_order.id',"right")
				->join("(select id,name ,discount ,price from  mls_goods)  g  on g.id=info.g_id","left")
				->join('(select g_id,g_pic from mls_good_pic group by g_id) gpic on gpic.g_id=info.g_id','left')
				->join('(select id as userid ,nickname from mls_user) users on users.userid=info.u_id','left')
				->order("mls_order.time desc")
				
					->where($whered)

				// ->order('mls_order.time asc')
				// ->where($namewhere)
				// ->where('info.or_state=1')
				// ->where('mls_order.o_state=1')
				->count();
		
		//第三方类库配置
		$page=array(
			'total'=>$count,
			'url'=>!empty($param['url'])? $param['url']:'',
			'max'=>!empty($param['max'])?$param['max']:5,
			'url_model'=>1,
			'ajax' =>  !empty($param['ajax']) ? true : false,//开启ajax分页
			'out' =>  !empty($param['out']) ? $param['out'] : false,//输出设置
			'url_suffix' => true,//url后缀
			'tags' => array('<span style="color:#FFC0CB">首页</span>','<span style="bcolor:#FFC0CB">上一页</span>','<span style="color:#FFC0CB">下一页</span>','<span style="color:#FFC0CB">尾页</span>'),
			);
		//实例化第三方类库
		$p=new \Page($page);
		//查询sql语句
		$orderinfos=$order
					->join('(select * from mls_order_info where u_id='.$uid.') info  on info.o_id=mls_order.id',"right")
					->join("(select id,name ,discount,s_id ,price from  mls_goods)  g  on g.id=info.g_id","left")
					->join('(select g_id as goodsids,state as goodsstate,g_pic as goodspic from mls_good_pic  group by goodsids) gpic on gpic.goodsids=info.g_id','left')
					->join('(select id as userid ,nickname from mls_user) users on users.userid=info.u_id','left')
					->join('(select s_id,name as shopname from mls_shop) shop on shop.s_id=g.s_id','left')
					->order("mls_order.time desc")
					
					->where($whered)
					// ->where($namewhere)
					// ->where('info.or_state=1 and mls_order.o_state=1')
				 //    ->where('mls_order.o_state=1')
					->limit($p->pagerows(),$p->maxrows())
					->select();
	
		// dump($orderinfos);
		
		//定义状态数组
		$arr=['<strong>等待付款</strong>','<strong>等待发货</strong>','<strong>等待确认收货</strong>','<strong>交易成功</strong>','<strong>交易关闭</strong>'];

							$empty="<div id='caonima'><pre>
					　　　　　┏┓　　　┏┓
					　　　　┏┛┻━━━┻┗┓
					　　　　┃　　　　　　　┃
					　　　　┃　　　━　　　┃
					　　　　┃　┳┛　┗┳　┃
					　　　　┃　　　　　　　┃
					　　　　┃　　　┻　　　┃
					　　　　┗━┓　找　┏━┛
					　　　　　　┃　不　┃
					　　┏━━━┛　到　┃
					　┏┫　　　　　数　┃
					　┗┓　***　  据　┃
					　　┗┓┏┳━┓┏┏┛
					　　　┣┣┃　┣┣┃
					　　　┗┻┛　┗┻┛</pre></div>";
					$this->assign('empty',$empty);
		$this->assign('arr',$arr);
		//分页
		$this->assign('pageNav',$p->get_page());
		//遍历数据（）
		$this->assign('orderinfos',$orderinfos);
		// dump($orderinfos);
		
		// dump($orderinfos);
		$this->display();



    }
    public function delorder(){
    	//接收ajax传参
    	$arr=I('post.order');
    	// echo $arr;
    	//实例化order表模型
    	$order=M('order');
		$data['o_state']="4";
    	
    	$onum=$order->where('id='."'$arr'")->save($data);
    	// echo $order->getLastSql();
   


    	

  //   	$info=M('order_info');
		// $datas['or_state']="4";

  //   	$inum=$info->where('o_id='."'$arr'")->save($datas);
  //   	// echo $info->getLastSql();
    	

    	if($onum>0){
    	$this->ajaxReturn(1);

    	}else{
    	$this->ajaxReturn(0);

    	}
    	// if($onum>0){
    	// 	if($inum>0){
    	// 		$this->ajaxReturn(1);
    	// 	}else{
    	// 	$this->ajaxReturn(0);
    	// 	}
    	// }else{	
    	// 	$this->ajaxReturn(0);
    	// }



    }
    public function orderinfo(){
   		$uid=I('get.hid');
    	// dump($uid);
    	$orderid=I('get.orderid');
    	// dump($orderid);

    	//查询收货信息
   		$info=M('order');
   		$infos=$info->join('(select * from mls_order_info where u_id='.$uid.') info on info.o_id=mls_order.id')
   								->join('(select id as gid,s_id,name as gname,price,discount from mls_goods) goods on goods.gid=info.g_id')
   								->join('(select s_id as sid , name as shopname from mls_shop) shop on shop.sid=goods.s_id','left')
   								->join('(select g_id,g_pic from mls_good_pic  group by g_id) gpic on gpic.g_id=info.g_id','left')

   								->join('(select id as recid,address,street,name,phone from mls_goods_receipt) rec on rec.recid=info.r_id')

				   		 		->where('mls_order.id='."'$orderid'")
				   		    ->select();
			$arr=['<strong>等待付款</strong>','<strong>等待发货</strong>','<strong>等待确认收货</strong>','<strong>交易成功</strong>','<strong>交易关闭</strong>'];
			$this->assign('arr',$arr);
			// dump($infos);


   		$this->assign('infos',$infos);
   		// dump(session());

   		// dump($infos);

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

     public function gets(){
    	//接收ajax传参
    	$arr=I('post.order');
    	// echo $arr;
    	//实例化order表模型
    	$order=M('order');
		$data['o_state']="1";
    	
    	$onum=$order->where('id='."'$arr'")->save($data);

    	if($onum>0){
    	$this->ajaxReturn(1);

    	}else{
    	$this->ajaxReturn(0);

    	}
    }
    public function enter(){
    	$arr=I('post.order');
    	// echo $arr;
    	//实例化order表模型
    	$order=M('order');
		$data['o_state']="3";
    	
    	$onum=$order->where('id='."'$arr'")->save($data);

    	if($onum>0){
    	$this->ajaxReturn(1);

    	}else{
    	$this->ajaxReturn(0);

    	}
    }
}