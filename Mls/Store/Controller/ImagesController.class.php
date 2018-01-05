<?php
namespace Store\Controller;
use Think\Controller;
class ImagesController extends Controller {
    public function index(){
        //给前台分配商品ID
        $id = I('id');
        $this->assign('id',$id);

        $goods = M('good_pic')->where('g_id='.$id)->select();
        $this->assign('goods',$goods);
    	$this->display();
    }

    /**
     * 删除图片
     */
    public function del(){
        $gpic =  I('g_pic');
        $gid = I('g_id');
        $result = M('good_pic')->where('g_id='.$gid.' and g_pic=\''.$gpic.'\'')->find();
        if($result['state'] == '1'){
            echo '00';
            return;
        }
        $result = M('good_pic')->where('g_id='.$gid.' and g_pic=\''.$gpic.'\'')->delete();
        if($result){
            if($gpic == '/Uploads/default.jpg'){
                echo true;
                return;
            }
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
        $result = M('good_pic')->where('g_id='.$gid.' and g_pic=\''.$gpic.'\'')->save($data);
        if($result){
            M('good_pic')->where('g_id='.$gid.' and state="1" and g_pic!=\''.$gpic.'\'')->save(array('state'=>'0'));
            echo $result;
        }
    }

    /**
     * 上传添加
     */
    public function upload(){
        //获取商品ID
        $id = I('get.id');
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
                $data['g_id'] = $id;
	            $data['g_pic'] = $info['Filedata']['savepath'].$info['Filedata']['savename'];
	            $goodPic = M('good_pic');
	            $goodPic->add($data);
                //查询是否有封面、添加默认封面
                if(!$goodPic->where('state="1" and g_id='.$id)->find()){
                    $goodPic->where($goodPic->where('g_id='.$id)->field('g_pic')->find())->save(array('state'=>'1'));
                }
            	$this->ajaxReturn($data);
            }
            else{
                $this->error($upload->getError());//获取失败信息
            }
        }
    }


    /*
     * 头像上传
     */
    /*
    Public function uploadFace (){
        if (!IS_POST) {
            E('页面不存在');
        }
        $upload = $this->_upload('Face','180','180');
        $data = json_encode($upload);
        //$data = json_decode($obj);
        //$this->ajaxReturn(json_encode($upload),'JSON');
        $this->ajaxReturn($data,'JSON');
    }
    */




	/**
     * 图片上传处理
     * @param [String] $path [保存文件夹名称]
     * @param [String] $thumbWidth [缩略图宽度]
     * @param [String] $thumbHeight [缩略图高度]
     * @return [Array] [图片上传信息]
     */
        
        /*
    Private function _upload($path,$thumbWidth = '' , $thumbHeight = '') {
        $obj = new \Think\Upload();// 实例化上传类
        $obj->maxSize = C('UPLOAD_MAX_SIZE') ;// 设置附件上传大小
        $obj->savePath =C('UPLOAD_PATH').$path.'/'; // 设置附件上传目录
        $obj->exts =  C('UPLOAD_EXTS');// 设置附件上传类型
        $obj->saveName = array('uniqid','');//文件名规则
        $obj->replace = true;//存在同名文件覆盖
        $obj->autoSub = true;//使用子目录保存
        $obj->subName  = array('date','Ym');//子目录创建规则，
        $info = $obj->upload();
        if(!$info) {
            return array('status' =>0, 'msg'=> $obj->getError() );
        }else{
            if($info){    //生成缩略图
    
                $image = new \Think\Image();
    
                foreach($info as $file) {
                    
                    $thumb_file = C('UPLOAD_PATH') . $file['savepath'] . $file['savename'];
                    $save_path = C('UPLOAD_PATH') .$file['savepath'] . 'mini_' . $file['savename'];
                    $image->open( $thumb_file )->thumb( $thumbWidth, $thumbHeight,\Think\Image::IMAGE_THUMB_FILLED )->save( $save_path );
                    return array(
                            'status' => 1,
                            'savepath' => $file['savepath'],
                            'savename' => $file['savename'],
                            'pic_path' => $file['savepath'] . $file['savename'],
                            'mini_pic' => $file['savepath'] . 'mini_' .$file['savename']
                    );
                    //@unlink($thumb_file); //上传生成缩略图以后删除源文件
                }
            }else{
                foreach($info as $file) {
                    return array(
                            'status' => 1,
                            'savepath' => $file['savepath'],
                            'savename' => $file['savename'],
                            'pic_path' => $file['savepath'].$file['savename']
                    );
                }
            }
        }
    }
    */























}