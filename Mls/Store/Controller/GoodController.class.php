<?php
namespace Store\Controller;
use Think\Controller;
class GoodController extends Controller {
    public function index(){
    	//获取店铺id
    	$shop = M('shop');
    	$data = $shop->select();
    	//session('s_id',$data[0]['s_id']);
    	$sid = session('s_id');


        /************************搜索分页开始*******************************/
		//导入第三方类库
		import('@.Class.Page');
		//接收表单传递的搜索条件
		$name = I('get.search');
        $lt = I('get.lt');
        $gt = I('get.gt');
        $state = I('get.state');
        if($state === ''){
            $state = 1;
        }
        //给前台保存表单值
        $this->assign('name',$name);
        $this->assign('lt',$lt);
        $this->assign('gt',$gt);
        $this->assign('state',$state);
		//组合查询条件
        $where['g.s_id'] = array('eq',$sid);//店铺id
        $where['g.name'] = array('like','%'.$name.'%'); //搜索名称
        //获取商品状态
        $where['g.state'] = array('eq','1');//上架商品
        if($state === '0'){
            $where['g.state'] = array('eq','0');//下架商品
        }
        if($gt){//价格大于
            $where['price'] = array('egt',$gt);
        }
        if($lt){//价格
            $where['price'] = array('elt',$lt);
        }
        //获取总条数
		$count = M('goods g')->where($where)->count();
		//进行第三方分页类配置
		$page = array(
			'total' => $count,//总数
			'url' => !empty($param['url']) ? $param['url'] : '',//URL配置
			'max' => !empty($param['max']) ? $param['max'] : 5,//每页显示多少条记录
			'url_model' => 1,//URL模式
			'ajax' =>  !empty($param['ajax']) ? true : false,//开启ajax分页
			'out' =>  !empty($param['out']) ? $param['out'] : false,//输出设置
			'url_suffix' => true,//url后缀
			'tags' => array('首页','上一页','下一页','尾页'),
			);
		//实例化第三方分页类库
		$p = new \Page($page);
    	//实例化商品类、查询结果供前台遍历
    	$goods = M()
	    	->table('mls_goods g,mls_person_type p,mls_good_pic i')
	    	->where($where)
	    	->where('g.p_id=p.id and g.id=i.g_id and i.state="1"')
	    	->field('g.id,g.name name,g.price,g.addtime,g.state,g.summary,p.name pname,i.g_pic,discount,p.id pid')
	    	->limit($p->pagerows(),$p->maxrows())
	    	->select();

		$this->assign('pageNav',$p->get_page());
    	$this->assign('goods',$goods);//分配商品
        /************************搜索分页结束*******************************/



        //获取修改传过来的Id
        //$id = I('id');
        //if($id){
            //echo $id;
            //$good = $this->update($id);
            //dump($good);
            //$this->assign('good',$good);
        //}
    	//查询店铺类别
    	$type = M('person_type')
	    	->where('s_id='.$sid)
	    	->order('by_order')
	    	->select();
    	$this->assign('type',$type);

    	//第二个页面
    	$goodType = M('goods_type');
    	$hType = $goodType->select();
    	$this->assign('hType',$hType);

    	//店铺类别
    	$personType = M('person_type');
    	$pType = $personType
	    	->where('s_id='.$sid)
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
    	$this->display();
    }

    /**
     * 修改数据
     */
    public function select(){
    	$id = I('id');//修改那条数据
        //echo 1;
    	$data = M('goods')
    	->where('id='.$id)
    	->field('id,name,price,state,stock,discount,p_id,summary')
    	->find();
        //return $data;
        //$this->assign('good',$data);
    	echo json_encode($data);
    }

    public function update(){
             $data = I('get.');
             $id = I('get.id');
             $data['addtime'] = time();
             $data['discount'] *= 10;
             //$this->ajaxReturn($data);
             echo M('goods')->where('id='.$id)->save($data);
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

    /**
     * 添加数据
     */
    public function insert(){
        try {
           $data = I('get.');
           $data['addtime'] = time();
           $data['discount'] *= 10;
           $data['s_id'] = session('s_id');
           //dump($data);
           //$data['stock'] = 0;
           //echo $data['p_id'].strlen;
           if(strlen($data['p_id']) > 8){//判断是否是一级大类
            	$result = M('person_type')->where('p_id='.$data['p_id'])->find(); 
            	$data['p_id'] = $result['id'];
            	echo $result['id'];
            }
            //dump($data);exit;
            if($data['t_id'] == ''){
                echo false;
                return;
            }
            $goods = M('goods');
            $result = $goods->add($data);
            $img['g_id'] = $result;
            $img['g_pic'] = '/Uploads/default.jpg';
            $img['state'] = '1';
            M('good_pic')->add($img);
            M('good_size')->add(array('g_id'=>$result,'size'=>'S'));
            M('good_size')->add(array('g_id'=>$result,'size'=>'M'));
            M('good_size')->add(array('g_id'=>$result,'size'=>'L'));
            echo $result;
        } catch (Exception $e) {
            echo false;            
        }
    }


    /**
     * 下架
     */
    public function state(){
    	$id = I('id');//被下架的商品
    	$data['state'] = '0';
    	$result = M('goods')->where('id='.$id)->save($data);
    	echo $result;
    }

    /**
     * 删除 
     */
    public function del(){
        $id = I('id');//被下架的商品
        //$data['state'] = '0';
        $img = M('goods')->field('g_pic')->where('g_id='.$id)->select();
        $result = M('goods')->where('id='.$id)->delete();
        M('good_pic')->where('g_id='.$id)->delete();
        foreach ($img as $value) {
            if($value['g_pic'] == 'Uploads/default.jpg'){
                continue;
            }
            unlink('/Public'.$value['g_pic']);
        }
        echo $result;
    }

}