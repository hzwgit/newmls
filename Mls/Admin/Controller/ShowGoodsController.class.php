<?php
namespace Admin\Controller;
use Think\Controller;
class ShowGoodsController extends Controller {
	public function index(){
		$db = M();
		//接收下拉列表值
		$sel = I('get.opt');
		//接收页操作
		$act = I('get.act');
		//从第几条开始
		$start = isset($_GET['start']) ? $_GET['start'] : 0;
		//取几条
		$num = 5;
		
		//查询
		$where = '';
		
		if($sel != null){
			$where = " and gt.id={$sel}";
		}
		//共有多少条记录
		$sql = "select gs.name gname,gs.addtime gtime,gt.name tname,gt.id tid from mls_goods gs,mls_goods_type gt where gs.t_id=gt.id".$where;
		$total = count($db->query($sql));
		
		switch($act){
			case 'first':
				$start = 0;
				break;
			case 'prev':
				$start -= intval($num);
				if($start < 0){
					$start = 0;
				}
				break;
			case 'next':
				$start += intval($num);
				if(intval($start) >= intval($total)){
					if($num >= intval($start) - intval($total)){
						$start = intval($start)-intval($num);
					}else{
						$start = intval($start)-intval($num);
						$num = intval($start) - intval($total);
					}
				}
				break;
			case 'last':
				if(intval($start) >= intval($total)){
					$start = intval($start) - intval($num);
				}else{
					if(intval($total)<intval($num)){
						$num = intval($total);
						$start = intval($num)-intval($total);
					}else{
						$start = intval($total)-intval($num);
						$num = intval($total)-intval($start);
					}
				}
				break;
			case 'default':
				break;
		}
		
		//limit条件 
		$limit = " limit {$start},{$num} ";
		
		
		//联合查询商品表类别表
		$sql = "select gs.id gid,gs.name gname,gs.addtime gtime,gt.name tname,gt.id tid from mls_goods gs,mls_goods_type gt where gs.t_id=gt.id".$where." order by gid".$limit;
		//echo $sql;
		$result = $db->query($sql);	
		
		//共几页
		$pageTotal = ceil($total/$num);
		//当前页
		$pageNow = ceil($start/$num)+1;
		
		$this->assign('sel',$sel);
		$this->assign('now',$pageNow);
		$this->assign('pageTotal',$pageTotal);
		$this->assign('total',$total);
		$this->assign('start',$start);
		//查询类别
		$type = M();
		$data = $type->table('mls_goods,mls_goods_type')->field('mls_goods_type.id id,mls_goods_type.name name')->where('mls_goods_type.id=mls_goods.t_id')->group('mls_goods_type.id')->select();
		
		$this->assign('data',$data);
		$this->assign('result',$result);

		$this->display();
	}
	
	//跳转商品类别
	public function mod(){
		//查询商品类别表
		$types = $this->getList();
		$this->assign('types',$types);
		$this->display();
	}

	//查询类别
	public function getList($pid=0,&$result=array(),$spac=0){
		$spac = $spac+2;
		$type = M('goods_type');
		$res = $type->where('p_id='.$pid)->select();
		foreach($res as $val){
			$val['name'] = str_repeat("&nbsp;&nbsp;",$spac).'|--'.$val['name'];
			$result[] = $val;
			$this->getList($val['id'],$result,$spac);
		}
		return $result;
	}
	
	//查询类别是否存在子类
	public function hasChild(){
		$type = D('goods_type');
		//查询所有的id
		$res = $type->field('id')->select();
		$result = array();
		foreach($res as $val){
			$result[] = $type->field('p_id')->where('p_id='.$val['id'])->group('p_id')->select();
		}
		$arr = array();
		foreach($result as $val){
			if(!empty($val)){
				$arr[] = $val;
			}
		}
		echo json_encode($arr);
	}
	
	//商品类别修改
	public function modType(){
		//商品id
		$id = I('gid');
		//新类型
		$sid = I('opt');
		$good = M('goods');
		$data['t_id'] = $sid;
		$res = $good->where('id='.$id)->save($data);
		if(res){
			 $this->success('修改成功', 'index');
		}else{
			 $this->error('修改失败', 'index');
		}
	}
	//商品默认选中类别
	public function doSelect(){
		$id = I('id');
		//查询商品所属类别ID
		$good = M('goods');
		$tid = $good->field('t_id')->where('id='.$id)->select();
		$data = $tid[0]['t_id'];
		echo $data;
	}
	//显示商品图片
	public function showPic(){
		$id = I('id');
		$pic = M('good_pic');
		
		$result = $pic->field('g_pic')->where('g_id='.$id)->find();
		echo json_encode($result);
	}
}