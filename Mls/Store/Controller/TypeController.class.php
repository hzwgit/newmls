<?php
/**
 * 商品类别
 */
namespace Store\Controller;
use Think\Controller;
class TypeController extends Controller {


	/**
	 * 显示
	 */
    public function index(){
    	/*模拟数据*/
    	$shop = M('shop');
    	$data = $shop->select();
    	//dump($data);
    	//echo $data[0]['s_id'];
    	session('s_id');
    	/*遍历类别数据*/
    	$personType = M('person_type');
    	$types = $personType->where('s_id='.session('s_id'))->order('by_order')->select();
    	/*
    	$newdata = array();
    	foreach($types as $key=>$val){
    		if($vak['key']['p_id'] == 0){
    			$newdata['id']
    		}	
    	}
    	*/

    	$this->assign('types',$types);

    	$this->display();
    }

    /**
     * 修改、添加
     */
    public function data(){
    	try {
	    	$data = I('post.');
	    	//var_dump($data[0]['del']);
	    	$del = $data[0]['del'];
	    	unset($data[0]['del']);
	    	$personType = M('person_type');
	    	$time = time();
	    	$this->delete($personType,$del);
	    	foreach($data as $key=>$val){
	    		$val['s_id'] = session('s_id');
	    		$val['by_order'] = $key;
	    		//if($personType->where('id='.$val['id'])->find()){
	    		if($val['id'] != ''){
	    			$this->update($personType,$val['id'],$val);
	    			//$personType->where('id='.$val['id'])->save($val);
				} else {
	    			$val['ct_time'] = $time;
					//echo $personType->add($val);
					echo $this->insert($personType,$val);
				}
	    	}
    	} catch (Exception $e) {
    		echo 'false';	
    	}
    }

    /*修改*/
    public function update($personType,$id,$val){
    	$personType->where('id='.$id)->save($val);
    }
    /*添加*/
    public function insert($personType,$val){
        dump($val);
		return $personType->add($val);
	}
	/*删除*/
	public function delete($personType,$val){
		foreach($val as $v){
			$personType->where('id='.$v)->delete();
			//$personType->where('by_order='.$v)->delete();
		}
	}
    /**
     * 判断类下面是否有商品
     */
    public function select(){
        $id = I('get.id');
        $result = M('goods')->where('p_id='.$id)->select();
        if($result){
            echo '1';
        }
    }
}