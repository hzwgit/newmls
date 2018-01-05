<?php
namespace Home\Controller;
use Think\Controller;
class PersonController extends CommonController {
    public function index(){
    	$id = session('hid');
    	$user = M('user_info')->where('u_id='.$id)->find();
    	// dump($user);
    	// die;
    	if($user){
    		$this->assign('user',$user);
    	}else{
    		$this->error('查询失败');
    	}

    	$this->display();
    }
    public function upPass(){
    	$oPass = I('old','','md5');
    	$data['pass'] = $oPass;
    	$id = session('hid');
    	$data['id'] = $id;
    	$res = M('user')->where($data)->find();
    	// dump($res);
    	// die;
    	$this->display();
    }
      public function setPass(){
    	$oPass = I('old','','md5');
    	$data['pass'] = $oPass;
    	$id = session('hid');
    	$data['id'] = $id;
    	$res = M('user')->where($data)->find();
    	//dump($res);
    	if($res){
    		$data['pass'] = I('news','','md5');
	    	$result = M('user')->save($data);
	    	if($result){
	    		$this->ajaxReturn(0);//修改成功
	    	}else{
	    		$this->ajaxReturn(2);//
	    	}
    	}else{
    		$this->ajaxReturn(1);//密码错误
    	}
    	
    }
    public function filePic(){
    	//数据库操作
    	$id = session('hid');
	    $img = M('user_info')->field('pic')->where('u_id='.$id)->find();
	    //取出原来的对应图片路径信息
	     $files = $img['pic'];
	     $this->assign('pic',$files);


    	$this->display();
    }
    public function fileup(){
            $savePath = './Public/Uploads/userpic/';  //图片存储路径
            $savePicName = time();  //图片存储名称


            $file_src = $savePath.$savePicName."_src.jpg";  
             $filename162 = $savePath.$savePicName."_162.jpg"; 
            $filename48 = $savePath.$savePicName."_48.jpg"; 
             $filename20 = $savePath.$savePicName."_20.jpg";    

            $src=base64_decode($_POST['pic']);
            $pic1=base64_decode($_POST['pic1']);   
            // $pic2=base64_decode($_POST['pic2']);  
            //  $pic3=base64_decode($_POST['pic3']);  

            if($src) {
                file_put_contents($file_src,$src);
            }

             file_put_contents($filename162,$pic1);
             //实例化Member的Model类
                $member = M('user_info');

                $file = __ROOT__.'/Public/Uploads/userpic/'.$savePicName."_162.jpg";


                //接收更新的信息
                // $data['username'] = $_POST['username'];
                // $data['nickname'] = $_POST['nickname'];
                // $data['email'] = $_POST['email'];
                // $data['tel'] = $_POST['tel'];
                // $data['status'] = $_POST['status'];
                $data['pic'] = $file;
                $id = session('hid');

                //数据库操作
                $img = $member->field('pic')->where('u_id='.$id)->find();
                //取出原来的对应图片路径信息
                $files = $img['pic'];
                // echo $files;
                // die;
                //更新信息
                $num = $member->where('u_id='.$id)->save($data);

                //判断更新是否成功
                if($num){ 
                    //删除原来的图片
                    //echo $files.'<br />';
                    //echo str_replace(__ROOT__,'.',$files);

                    $repfile = str_replace(__ROOT__,'.',$files);
                    if($files != '/Project/Public/Uploads/userdefault.jpg'){
                        @unlink($repfile);
                    }
                     $rs['status'] = 1;
                 //  $rs['picUrl'] = $savePath.$savePicName;

                     print json_encode($rs);

                    $this->success('更新成功!',U('Person/filePic'));

                }else{ 
                    $this->error('更新失败!');
                }
          
           
    }

/*
     public function update(){ 
    	//dump(I('post.'));
    	//dump($_FILES);

    	//Think中的文件上传
    	$upload = new \Think\Upload();// 实例化上传类   
        $upload->maxSize = 3145728 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类
       	$upload->rootPath = './Public/Uploads/';
        $upload->savePath = 'userpic/'; // 设置附件上传目录

       	// 上传文件    
       	$info = $upload->upload();
       	// dump($info);die;
	       	if(!$info) {
	       	// 上传错误提示错误信息        
	       	$this->error($upload->getError(),U('Person/filePic'));    
	       	}else{
	       		//上传完成后保存文件名并存入数据库
	       		$file = __ROOT__.'/Public/Uploads/'.$info['attach']['savepath'].$info['attach']['savename'];

	       		//echo $file;
	       		//die;
	       		//实例化Member的Model类
	       		$member = M('user_info');

	       		//接收更新的信息
	       		// $data['username'] = $_POST['username'];
	       		// $data['nickname'] = $_POST['nickname'];
	       		// $data['email'] = $_POST['email'];
	       		// $data['tel'] = $_POST['tel'];
	       		// $data['status'] = $_POST['status'];
	       		$data['pic'] = $file;
	       		$id = session('hid');

	       		//数据库操作
	       		$img = $member->field('pic')->where('u_id='.$id)->find();
	       		//取出原来的对应图片路径信息
	       		$files = $img['pic'];
	       		// echo $files;
	       		// die;
	       		//更新信息
	       		$num = $member->where('u_id='.$id)->save($data);

	       		//判断更新是否成功
	       		if($num){ 
	       			//删除原来的图片
	       			//echo $files.'<br />';
	       			//echo str_replace(__ROOT__,'.',$files);
	       			$repfile = str_replace(__ROOT__,'.',$files);
	       			if(file_exists($repfile)){
	       				@unlink($repfile);
	       			}

	       			$this->success('更新成功!',U('Person/filePic'));

	       		}else{ 
	       			$this->error('更新失败!');
	       		}
  
	   		}

    }*/
     public function handle(){
     	$user['id'] = session('hid');
     	$nickname = I('nickname');
     	if(!empty($nickname)){
     		$user['nickname'] = $nickname;
     		$result = M('user')->save($user);
     	}
    	
    	
    	// if($result){
    	// 	$this->ajaxReturn(0);//修改成功
    	// }else{
    	// 	$this->ajaxReturn(1);//修改失败
    	// }
    	// dump(I('post.'));
    	$true = I('true_name');
    	if(!empty($true)){
    		$data['truename'] = I('true_name');
    	}
    	
    	$data['sex'] = I('gender');
    	$birth = I('birth');
    	//$birth =str_ireplace('+',' ',$birth);
    	//dump($birth);
    	if(!empty($birth)){
    	$time = strtotime($birth); 
    	$data['birth'] = $time;
    	}
    	
    	// dump($time);
    	// dump($data['birth']);
    	$pro = I('provinceid');
    	if($pro){
    		$data['address'] = I('provinceid').I('city_id');
    	}
    	
    	//dump($data['address']);
    	
    	$school = I('school_id');
    	if(!empty($school)){
    		$data['school'] = I('school_id');
    	}
    	$work = I('work_place');
    	if(!empty($work)){
    		$data['workunit'] = I('work_place');
    	}
    	$hobby = I('hobby');
    	if(!empty($hobby)){
   		 	$data['hobbies'] = I('hobby');
    	}
    	$weibo = I('weibo_add');
    	if(!empty($weibo)){
    		$data['micro'] = I('weibo_add');
    	}
    		$beauty = I('beauty');
    	if(!empty($beauty)){
    		$data['declaration'] = I('beauty');
    	}
    	$data['u_id'] = session('hid');
    	// dump($data);die;
    	$res = M('user_info')->save($data);
    	// dump($res);
    	if($res>0){
    		$this->ajaxReturn(0);//修改成功

    	}else{
    		$this->ajaxReturn(1);//修改失败
    	}


    }

}