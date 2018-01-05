<?php
namespace Store\Controller;
use Think\Controller;
class AddgoodController extends Controller {
    public function index(){
        $id = I('get.id');
        $sid = session('s_id');
        $goods = M('goods');

        $good = $goods->where('id='.$id)->find();

        $this->assign('good',$good);

    	//商品分类
        //SELECT `id`,`name`,`p_id`,`path`,concat(path,id) as bpath FROM `mls_goods_type`  ORDER BY bpath 
    	$goodType = M('goods_type');
    	$hType = $goodType
            ->field("`id`,`name`,`p_id`,`path`,concat(path,id) as bpath")
            ->order('bpath')
            ->select();
    	$this->assign('hType',$hType);

    	//店铺类别
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
    	//显示主页
    	$this->display();
    }


    public function pdate(){
//        echo 1;
    }







    //商品类别获取数据
    public function action(){
    	$goodType = M('goods_type');
    	$data = $goodType->where('p_id='.I('id'))->select();
    	if($data){
    		echo json_encode($data);
    	} else {
    		echo 0;
    	}
    }
    //获取店铺分类数据
    public function ptype(){
    	$personType = M('person_type');
    	$data = $personType->where('p_id='.I('id'))->select();
    	echo json_encode($data);
    }

    public function insert(){
        try {
           $data = I('get.');
           $data['addtime'] = time();
           $data['discount'] *= 10;
           $data['s_id'] = session('s_id');
           //$data['stock'] = 0;
           if($data['p_id'].strlen > 8){
            $result = M('person_type')->where('p_id='.$data['p_id'])->find(); 
            echo $result['id'];
            }
            $goods = M('goods');
            $result = $goods->add($data);
            dump($data);
    	echo $result;
        } catch (Exception $e) {
            echo 'false';            
        }
    }
}