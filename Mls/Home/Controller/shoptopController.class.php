<?php
namespace Home\Controller;
use Think\Controller;
class ShopinfoController extends Controller {
    public function index(){
        $id = session('s_id');
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
        //dump($pType);
        $this->assign('pType',$pType);


        $goods = M()->table('mls_goods g,mls_good_pic p')->where('g.id=p.g_id and  g.s_id='.$id.' and p.state="1"')
        ->order('buy_num')->limit('0,10')->select();
        $this->assign('goods',$goods);
       // dump($goods);

    	$this->display();
    }

    public function action(){
        //$where = '';
        $id = session('s_id');//店铺id 
        $page = I('page');//从第几个开始
        $order = I('order');//排序
        $pid = I('pid');//大类
        $sub = I('sub');// 小类
        if($sub){
           $where = $sub;
           $where = 'and g.p_id in("'.$where.'")';
        } else if($pid){
            $p_id = M('person_type')->field('p_id')->where('id='.$pid)->find();
            $where = M('person_type')->field('id')->where('id !='.$pid.' and p_id='.$p_id['p_id'])->select();
            foreach($where as $val){
                $data[] = $val['id'];
            }
            $where = join(',',$data);//获取大类下面的id集合
            $where = 'and g.p_id in("'.$where.'")';
        } else {
            $where = null;
        }
        $end = 10;//一次取几条
        $start = $page * $end;
        $goods = M()->table('mls_goods g,mls_good_pic p')->where('g.id=p.g_id and  g.s_id='.$id.' and p.state="1" '.$where)
        ->order($order)->limit($start.','.$end)->select();
        $this->ajaxReturn($goods);
    }
}
