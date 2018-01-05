<?php
namespace Admin\Controller;
use Think\Controller;
class PlayManageController extends Controller {
    public function index(){
	  //查询首页轮播图
	  $gd = M('good_play');
	  $data['show'] = '1';
	  //查询图片
	  $goods = $gd->field('s_id,pic')->where($data)->select();
	  //dump($goods);
	  $this->assign('goods',$goods);
      $this->display();
    }
	public function upload(){
        //获取店铺ID
    	// $id = session('s_id');
    	$timestamp = time();
    	$md5timestamp = md5('unique_salt' . $timestamp);
    	$this->assign('timestamp',$timestamp);
    	$this->assign('md5timestamp',$md5timestamp);

    	if (!empty($_FILES)) {
            //图片上传设置
    		$config = array(   
    			'maxSize'    =>    3145728, 
    			'rootPath'	 =>    'Public',
    			'savePath'   =>    '/Uploads/',  
    			'saveName'   =>    array('uniqid',''), 
    			'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),  
    			'autoSub'    =>    true,   
    			'subName'    =>    array('date','Y-m-d'),
    			);
            $upload = new \Think\Upload($config);// 实例化上传类
            $info = $upload->upload();

            //判断是否有图
            if($info){
            	//$info=$info['Filedata']['savename'];
                //返回文件地址和名给JS作回调用
            	$data['pic'] = $info['Filedata']['savepath'].$info['Filedata']['savename'];
            	$goodPic = M('good_play');
            	$goodPic->add($data);
                //查询是否有封面、添加默认封面
            } else{
                $this->error($upload->getError());//获取失败信息
            }
        }
    }


        /**
     * 删除图片
     */
        public function del(){
        	$gpic =  I('pic');
			
        	$result = M('good_play')->where('pic=\''.$gpic.'\'')->delete();
        	if($result){
        		echo unlink('./Public'.$gpic);
        	}
        }
}