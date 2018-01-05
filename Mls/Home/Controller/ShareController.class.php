<?php
namespace Home\Controller;
use Think\Controller;
class ShareController extends Controller {
    public function index(){
		//接收商品ID
		$gid = I('id');
		$good = M('goods');
		//查询商品信息
		$goodDeta = $good->field('id,s_id,t_id,name,price,summary,addtime,stock,discount,buy_num')->where('id='.$gid)->find();
		
		//查询人气单品
		$model = M();
		$hotGood = $model->table('mls_goods gs,mls_good_pic gc')->field('gs.id,gs.name,gc.g_pic pic')->where('gs.id=gc.g_id and gs.id!='.$gid)->order('gs.discount')->limit(5)->select();
		
		//可能还喜欢同类商品
		$tid = $goodDeta['t_id'];
		//查询同类商品
		$aLike = $model->table('mls_goods gs,mls_good_pic gc')->field('gs.id,gs.name,gs.price,gc.g_pic')->where('gs.id=gc.g_id and gs.id!='.$gid)->order('gs.price desc')->group('gs.id')->limit(4)->select();

		
		
		//查询商品图片
		$goodPic = M('good_pic');
		$gPic = $goodPic->field('g_pic')->where('g_id='.$gid)->select();

		
		//查询商品尺码
		$size = M('good_size');
		$goodSize = $size->field('size')->where('g_id='.$gid)->select();

		
		//接收店铺ID
		$sid = $goodDeta['s_id'];
		$shop = M('shop');
		//查询店铺表信息
		$shopDeta = $shop->field('s_id,name,c_time')->where('s_id='.$sid)->find();

        $uid = M('shop_info')->where('id='.$sid)->field('u_id')->find();
        $this->assign('uid',$uid);
		
		//查询店铺评分表信息
		$sc = M('shop_score');
		$showScore = $sc->field('s_id,des_score,qua_score,ser_score,hai_score')->where('s_id='.$sid)->find();

		//查询商品所属地区
		$sInfo = M('shop_info');
		$sArea = $sInfo->field('area')->where('id='.$sid)->find();
		
		//查询店铺商品数量
		$goodNum = $good->where('s_id='.$sid)->count();
		
		//查询销售数量
		$sellNum = $good->where('s_id='.$sid)->sum('buy_num');
        
	    //分配商店IP	
        $this->assign('shopid',$sid); 

		//分配商品ID
		$this->assign('sid',$gid);
		$this->assign('hotGood',$hotGood);
		$this->assign('aLike',$aLike);
		$this->assign('sArea',$sArea);
		$this->assign('sellNum',$sellNum);
		$this->assign('goodNum',$goodNum);
		$this->assign('gdeta',$goodDeta);
		$this->assign('gPic',$gPic);
		$this->assign('goodSize',$goodSize);
		$this->assign('shopDeta',$shopDeta);
		$this->assign('showScore',$showScore);


		//获取店铺类别
    	$personType = M('person_type');
    	$pType = $personType->where('s_id='.$sid)->select();
        //遍历出所有的店铺类别p_id(父)组成新的数组
        foreach ($pType as $value) {
            $pid[] = $value['p_id'];
        }
        //判断p_id出现的次数
        $newpType = array_count_values($pid);
        //遍历店铺分类数组，每个值依次插入新数组中
        foreach ($pType as $key => $value) {
            $pType[$key]['states'] = $newpType[$value['p_id']];
        }
        $this->assign('pType',$pType);
        //$goods = M()->table('mls_goods g,mls_good_pic p')->where('g.id=p.g_id and  g.s_id='.$sid.' and p.state="1"')->order('buy_num')->limit('0,10')->select();
        //$this->assign('goods',$goods);
		
    	$this->display();
    }

    public function cart(){
        //加载第三方类库
        import('@.class.Cart');
        $cart=new \Cart();
        //接收商品参数
        $shopname=I('get.shopname');
        $id=I('get.goodsid');
        $name=I('get.goodsname');
        $price=I('get.goodsprice');
        $num=I('get.num');
        $img=I('get.goodspic');
        $size=I('get.size');
        $color=I('get.color');
        $discount=I('get.discount');
        $shopid=I('get.shopid');
    
            $cart->addItem($shopid,$id,$name,$price,$num,$img,$size,$color,$shopname,$discount);
                $session=session('cart');
                
                if(isset($session)){
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



    public function shopping(){
        $addr=M('goods_receipt');
        $u_id=session('hid');

        //查询u_id地址，分配到前台
        $info=$addr->where('u_id='.$u_id)->select();
        $this->assign('info',$info);
        /*以上是地址遍历*/
        $shopid=I('shopid');
       $goodsid=I('id');
	   $g=M('good_pic');
	   $p=$g->where('g_id='.$goodsid)->limit(1)->getField('g_pic');
	   
        $num=I('num');
        //$goodspic=I('get.pic');
        $color=I('color');
        $size=I('size');
        $goodsprice=I('goodsprice');
        $goodsname=I('goodsname');
        $shopname=I('shopname');
        $discount=I('discount');
        $this->assign('discount',$discount);
        $this->assign('shopid',$shopid);
        $this->assign('goodsid',$goodsid);
        $this->assign('color',$color);
        $this->assign('size',$size);
        $this->assign('goodsprice',$goodsprice);
        $this->assign('goodsname',$goodsname);
        $this->assign('shopname',$shopname);

        $this->assign('num',$num);
        $this->assign('goodspic',$p);
		//dump($goodspic);
        $this->display();
    }

    public function makeorder(){
        $textarea=I('post.textarea');
        $r_id=I('post.r_id');
        $shopid=I('post.shopid');
        $goodsid=I('post.goodsid');
        $num=I('post.num');
        $time=time();
        $userid=session('hid');
        $ordernums=$time.$shopid.$userid;

        $order=M('order');
        $data['time']=$time;
        $data['u_id']=session('hid');
        $data['id']=$ordernums;
        $rec=$order->data($data)->add();

        $orderinfo=M('order_info');
        $da['o_id']=$ordernums;
        $da['g_id']=$goodsid;
        $da['num']=$num;
        $da['u_id']=$userid;
        $da['r_id']=$r_id;
        $da['message']=$textarea;
        $re=$orderinfo->data($da)->add();
        $this->ajaxReturn($re);

        // $this->ajaxReturn($textarea);
        // $this->ajaxReturn($r_id);
        // $this->ajaxReturn($shopid);
        // $this->ajaxReturn($goodsid);
        // $this->ajaxReturn($num);

    }


    //加载聊天页面
    public function knilmi(){
    	$id = session('hid');
    	$userinfo = M('user_info')->where('u_id='.$id)->find();
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
    //插入数据
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
    //查询数据
    public function selectK(){
    	//dump(I('get.'));exit;
    	$id = I('id');
    	$data = M('chat_message')->where('id=\''.$id.'\'')->order('time')->limit(I('limit'))->select();
        foreach($data as $key=>$val){
            $data[$key]['message'] = html_entity_decode($val['message']);
        }
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
}