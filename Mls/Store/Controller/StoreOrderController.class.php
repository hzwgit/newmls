<?php
/**
 * 商品订单
 */
namespace Store\Controller;
use Think\Controller;
class StoreOrderController extends Controller {
    public function index(){
        //加载第三方类库
        import('@.class.Page');
        $uid=session('sid');
        //接收搜索input信息
        $goodsname=I('get.goodsname');

        $post_oid=I('get.showid');
        
        $posts['info.o_id']=$post_oid;
        
        
        //判断搜索商店还是订单
        if(I('get.searchs')==2){
            //组合搜索条件
            $namewhere['info.o_id']=$goodsname;
        }else{
            //组合搜索条件
            $namewhere['g.name']=array('like','%'.$goodsname.'%');
        }
        //实例化模型
        
        $order=M('Order');
        //查询条数
        $count=$order
                ->join('(select * from mls_order_info where u_id='.$uid.') info  on info.o_id=mls_order.id',"right")
                ->join("(select id,name ,discount ,price from  mls_goods)  g  on g.id=info.g_id","left")
                ->join('(select g_id,g_pic from mls_good_pic group by g_id) gpic on gpic.g_id=info.g_id','left')
                ->join('(select id as userid ,nickname from mls_user) users on users.userid=info.u_id','left')
                ->order('mls_order.time asc')
                ->where($namewhere)
                ->where('mls_order.o_state!=4')
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
            'tags' => array('首页','上一页','下一页','尾页'),
            );
        //实例化第三方类库
        $p=new \Page($page);
        //查询sql语句
        $orderinfos=$order
                    ->join('(select * from mls_order_info where u_id='.$uid.') info  on info.o_id=mls_order.id',"right")
                    ->join("(select id,name ,discount ,price from  mls_goods)  g  on g.id=info.g_id","left")
                    ->join('(select g_id,g_pic from mls_good_pic group by g_id) gpic on gpic.g_id=info.g_id','left')
                    ->join('(select id as userid ,nickname from mls_user) users on users.userid=info.u_id','left')
                    ->order('mls_order.time desc')
                    ->where($namewhere)
                    ->where('mls_order.o_state!=4')
                // ->where('mls_order.o_state=1')
                    ->limit($p->pagerows(),$p->maxrows())
                    ->select();
    

        
        //定义状态数组
        // $arr=['未付款','已付款'];
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
        //遍历数据
        $this->assign('orderinfos',$orderinfos);
        // dump($orderinfos);
        
        
        $this->display();


    }
   public function info(){
		$showid=I('get.showid');
		
		$posts['info.o_id']=$showid;
		
		$order=M('Order');

		$result=$order->join('mls_order_info info  on info.o_id=mls_order.id',"right")
		->join("(select id,name as goodsnames,discount ,price from  mls_goods)  g  on g.id=info.g_id","left")
		// ->join('mls_good_pic gpic on gpic.g_id=info.g_id','left')
		->join('(select g_id,g_pic from mls_good_pic group by g_id) gpic on gpic.g_id=info.g_id','left')
		->join('(select id as userid ,nickname from mls_user) users on users.userid=info.u_id','left')
		->join('(select id as rid,u_id,address,street,name,phone from mls_goods_receipt) rec  on rec.rid=info.r_id')
		->where($posts)
		->select();
			$this->ajaxReturn($result);
			
		// dump($result);
		// $this->ajaxReturn(json_encode($result));

	}
    public function delete(){
        $delnum=I('get.num');
        
        // $this->ajaxReturn(1);
        // $del=M('order');
        // $data['o_state']="0";
        // $num=$del->where($delnum)->save($data);

        // $order=M('order');
        // $data['o_state']="0";
        // $ok=$order->where('id='."'$delnum'")->save($data);
        

        $info=M('order');
        $datas['o_state']="4";
        $op=$info->where('id='."'$delnum'")->save($datas);
        if($op>0){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(0);

        }


    }
    public function update(){
        $ho=I('post.orderid');
        // dump($ho);//
        //$newho=implode(',', $ho);
        //echo $newho;
        
        // $num=array();
        // $up=M('order_info');
        // $data['or_state']="2";
        // foreach($ho as $v){
        //     $num[]=$up->where('o_id='."'$v'")->save($data);
        //     // $k[]=$up->getLastSql();
        // }
        
        $onum=array();
        $oup=M('order');
        $dats['o_state']="2";
        foreach($ho as $v){
            $onum[]=$oup->where('id='."'$v'")->save($dats);
        }

        if( $onum){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(0);
        }
    }
    public function orderupdate(){
       // $this->display();
        $str=I('get.array');
        $strnum=I('get.arraynum');
        $oid=I('get.oid');

        $array=explode(',',$str);
        $arraynum=explode(',',$strnum);
        // dump($array);
        // dump($arraynum);

        $sql=M('goods_receipt');
        $oop="";
        // for($i=0;$i<count($array);$i++){
            // $sql->$arraynum[$i]="'$array[$i]'";
           // dump($arraynum);
           // dump($array);
           $data=array_combine($arraynum,$array);
            
            $oop=$sql->where('id='."'$oid'")->save($data);
              // $sql->getLastSql();
          $this->ajaxReturn($oop);

    
    }
    
    
}