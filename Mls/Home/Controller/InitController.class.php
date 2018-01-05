<?php
namespace Home\Controller;
use Think\Controller;
class InitController extends Controller {
    public function index(){
    	
    	$addr=M('goods_receipt');
    	$u_id=session('hid');

    	//查询u_id地址，分配到前台
    	$info=$addr->where('u_id='.$u_id)->select();
    	$this->assign('info',$info);
    	/*以上是地址遍历*/





        //把选中的宝贝分配到前台
    	$goods=session('order');

    	foreach($goods as $key=>$val){
            $goods[$key]['flag'] = true;

    	}
       // dump(session('order'));
       // dump(session('cart'));
       
        foreach($goods as $k=>$val){
            
            foreach($val as $ky => $v){
                //每个店铺的总价格
                $data[$k] += $v['price']*$v['num'];
                //每个店铺的总数量
                $mm[$k]+=$v['num'];
                //总价格
                $ta+=$v['price']*$v['num'];
            }
        }

        //分配每个商店的数量
        $this->assign('mm',$mm);
        //分配每个商店的价格
        $this->assign('data',$data);
        //分配总价格
        $this->assign('ta',$ta);
        //分配session
    	$this->assign('goods',$goods);
    	


        $this->display();



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
    public function del(){
    	$id=I('post.id');
    	$del=M('goods_receipt');
    	
    	$res=$del->where('id='.$id)->delete();
    	if($res){

    		$this->ajaxReturn($id);
    	}


    }
    //提交订单执行方法
    public function order(){
        //接收ajax数据
        $info=I('post.vals');
        //session赋值给$cart
        $cart=session('order');
        //session用户ID
        $userid=session('hid');
        //获取当前时间
        $time=time();
        //实例化订单表
        $order=M('order');
        //实例化订单详情表
        $orderinfo=M('order_info');
        //遍历ajax数据 商店=>留言
         $o=0;
        foreach($info as $ks=>$vs){
            foreach($vs as $k=>$v){
                $co[$k]=$v;
            }
        }



       
        foreach($cart as $key=>$val){
            //拼接订单号 时间戳+商店ID+用户ID
            $ordernum=$time.$key.$userid;
            $data['id']=$ordernum;
            $data['u_id']=$userid;
            $data['time']=$time;
            //添加信息到订单表
            $order->data($data)->add();
            unset($_SESSION['cart'][$key]);
            $onum=$ordernum;
            

           foreach($val as $k=>$v){
            $arg['o_id']=$ordernum;
            $arg['g_id']=$k;
            $arg['num']=$v['num'];
            $arg['u_id']=$userid;
            $arg['r_id']=$co['r_id'];
            $arg['message']=$co[$key];

            $ar[]=$orderinfo->data($arg)->add();



           }
        }
        if($ar){
               foreach($co as $k=>$v){
                    unset($_SESSION['cart'][$k]);
                    unset($_SESSION['order'][$k]);
             }
              $this->ajaxReturn($ar);
             // $this->redirect("Wallet/index");
        }
        





    }
}