<?php
namespace Home\Controller;
use Think\Controller;
class ShopinfoController extends Controller {
    public function index(){
        $id = session('s_id');

        //获取店铺id
        $gid = I('id');
        //$good = M('goods');
        //查询商品信息
        //$goodDeta = $good->field('s_id,name,price,summary,addtime,stock,discount,buy_num')->where('id='.$gid)->find();
        //接收店铺ID
        $goodDeta = $this->good($gid);
        $id = $goodDeta['s_id'];
        $this->assign('shopinfo',$goodDeta);

        //查询用户横幅图
        $banner = M('banners_pic')->where('s_id='.$id.' and state="1"')->find();
        $this->assign('banner',$banner);

    	//店铺类别
    	$personType = M('person_type');
    	$pType = $personType
	    	->where('s_id='.$id)
	    	->select();
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

        //获取轮播图
        $image = M('shop_good_play')->where('s_id='.$id)->select();
        $this->assign('image',$image);


        $goods = M()->table('mls_goods g,mls_good_pic p')->where('g.id=p.g_id and  g.s_id='.$id.' and p.state="1"')
        ->order('buy_num')->limit('0,10')->select();
        $this->assign('goods',$goods);
       // dump($goods);
        //dump($_SERVER);exit;
    	$this->display();
    }
    //获取商品信息
    public function good($gid){
        $good = M('goods');
        //查询商品信息
        return $good->field('s_id,name,price,summary,addtime,stock,discount,buy_num')->where('id='.$gid)->find();
    }

    //获取数据 ajax
    public function action(){
        //$where = '';
        $where = null;
        //$id = session('s_id');//店铺id 
        //获取商品id
        $gid = I('id');
        $goodDeta = $this->good($gid);
        //接收店铺ID
        $id = $goodDeta['s_id'];
        $page = I('page');//从第几个开始
        $order = I('order');//排序
        $pid = I('pid');//大类
        //$pid = 15;
        $sub = I('sub');// 小类
        //组合条件
        if($sub){
           //$where = $sub;
           $where = 'and g.p_id in("'.$sub.'")';
        }
        /*
        if($pid){
            $p_id = M('person_type')->field('p_id')->where('id='.$pid)->find();
            $where = M('person_type')->field('id')->where(' p_id='.$p_id['p_id'])->select();
            foreach($where as $val){
                $data[] = $val['id'];
            }
            //$where = join(',',$data);//获取大类下面的id集合
            $where = "and g.p_id in ('".join('\',\'',$data)."')";
        } 
        */
        $sub = $pid = null;
        $end = 10;//一次取几条
        $start = $page * $end;
        $goods = M()->table('mls_goods g,mls_good_pic p')->where('g.id=p.g_id and  g.s_id='.$id.' and p.state="1" '.$where)->order($order)->limit($start.','.$end)->select();
        $this->ajaxReturn($goods);
    }
}
