<?php
namespace Store\Controller;
use Think\Controller;
class BannerController extends Controller {
       public function index(){
    	$id = session('s_id');
    	$goods = M('banners_pic')->where('s_id='.$id)->select();
        $this->assign('goods',$goods);
    	$this->display();
    }


    public function upload(){
        //获取店铺ID
    	$id = session('s_id');

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
            	$data['s_id'] = $id;
            	$data['pic'] = $info['Filedata']['savepath'].$info['Filedata']['savename'];
            	$result = M('banners_pic')->where('s_id='.$id)->select();
            	//echo $result;exit;
                if(!$result){
                	$data['state'] = '1';
                }
            	$goodPic = M('banners_pic');
            	$result = $goodPic->add($data);
				if($result){
					//echo $data['pic'];
					$this->ajaxReturn($data);
				}
				
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

        	$gpic =  I('g_pic');
        	$gid = I('g_id');
	        $result = M('banners_pic')->where('s_id='.$gid.' and pic=\''.$gpic.'\'')->find();
	        if($result['state'] == '1'){
	            echo '00';
	            return;
	        }
        	$result = M('banners_pic')->where('pic=\''.$gpic.'\'')->delete();
        	if($result){
        		echo unlink('./Public'.$gpic);
        	}
        }

    /**
     * 修改选中状态 
     */
    public function state(){
        $gpic =  I('g_pic');
        $gid = I('g_id');
        $data['state'] = '1';
        $result = M('banners_pic')->where('s_id='.$gid.' and pic=\''.$gpic.'\'')->save($data);
        echo $result;
        if($result){
            M('banners_pic')->where('s_id='.$gid.' and state="1" and pic!=\''.$gpic.'\'')->save(array('state'=>'0'));
            echo $result;
        }
    }

    }