<?php
namespace Store\Controller;
use Think\Controller;
class ImageController extends Controller {
    public function index(){
    	$id = I('id');
    	$this->assign('id',$id);
    	$this->display();
    }


    //处理图片上传
    public function action(){
    	$id = I('id');
    	echo $id;
    	$upload = new \Think\Upload();// 实例化上传类   
        $upload->maxSize = 3145728 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类
       	$upload->rootPath = './Public/Uploads/';
        $upload->savePath = 'member/'; // 设置附件上传目录
       	// 上传文件    
       	$info = $upload->upload();
       	//dump($info);
       	if(!$info) {
	       	// 上传错误提示错误信息        
	       	$this->error($upload->getError(),U('Member/index'));    
	       	}else{
	       		//上传完成后保存文件名并存入数据库
	       		//$file = __ROOT__.'/Web/Public/Uploads/'.$info['file']['savepath'].$info['file']['savename'];
	       		$file = __PUBLIC__.'/Uploads/'.$info['pic']['savepath'].$info['pic']['savename'];
	       		//echo $file;die;
	       		//实例化Member的Model类
	       		$member = M('good_pic');
	       		$data['g_pic'] = $file;
	       		$data['g_id'] = $id;
	       		$data['state'] = 1;

	       		$member->add($data);


/*
	       		//数据库操作
	       		$img = $member->field('icon')->where('member_id='.$id)->find();
	       		//取出原来的对应图片路径信息
	       		$files = $img['icon'];

	       		//更新信息
	       		$num = $member->where('member_id='.$id)->save($data);

	       		//判断更新是否成功
	       		if($num){ 
	       			//删除原来的图片
	       			//echo $files.'<br />';
	       			//echo str_replace(__ROOT__,'.',$files);
	       			$repfile = str_replace(__ROOT__,'.',$files);
	       			if(file_exists($repfile)){
	       				@unlink($repfile);
	       			}

	       			$this->success('更新成功!',U('Member/index'));

	       		}else{ 
	       			$this->error('更新失败！',U('Member/mod?id='.$id));
	       		}
	       		*/
  
	   		}
    }
}