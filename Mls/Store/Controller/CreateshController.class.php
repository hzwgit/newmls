<?php
namespace Store\Controller;
use Think\Controller;
class CreateshController extends CommonController {
    public function index(){
        $pic['pic'] = I('pic');
        if($pic){
            $this->assign('pic',$pic);
        }

    	$id = session('sid');
    	$shop = M('shop_info')->where('u_id='.$id)->find();
    	if($shop){
    		$user = M('user_info')->where('u_id='.$id)->find();
    		$shop['pic'] = $user['pic'];
    		$this->assign('use',$shop);
    	}else{
    	$user = M('user_info')->where('u_id='.$id)->find();
    	// dump($user);
    	// die;
    	if($user){
    		$this->assign('use',$user);
    	}else{
    		//$this->error('查询错误');
			$this->redirect('Login/index');
    	}
    	
    }
    	

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
                // $member = M('user_info');

             $file = __ROOT__.'/Public/Uploads/userpic/'.$savePicName."_162.jpg";
                $rs['status'] = 1;
                $rs['picUrl'] = $file;
                if($file){
                    session('pic',$file);
                     //$this->redirect('Createsh/index',array('pic'=>$file));
                }
              
                print json_encode($rs);

             

               
           
    }

    //验证身份证
    PUBLIC function Verif(){
    	$data['card'] = I('cards');
    	//$data['shop_name'] = I('shop_name');
    	$shop = M('shop_info')->where($data)->find();
    	//dump($shop);
    	if($shop){
    		$this->ajaxReturn(0);//已存在
    	}else{
    		$this->ajaxReturn(1);//可以用
    	}
    }
     //验证商店名字
    PUBLIC function shopName(){
    	//$data['card'] = I('cards');
    	$data['shop_name'] = I('shop_name');
    	$shop = M('shop_info')->where($data)->find();
    	//dump($shop);
    	if($shop){
    		$this->ajaxReturn(0);//已存在
    	}else{
    		$this->ajaxReturn(1);//可以用
    	}
    }

    //照片上传
    public function upload(){ 
    	//$flag = I('hidden');
    	// $data['id'] = I('flag');
    	$data['u_id']=session('sid');
    	$data['truename'] = I('truename');
    	$data['phone'] = I('phone');
    	$data['area'] = I('area');
    	$data['email'] = I('email');
    	$data['qq'] = I('qq');
    	$data['card'] = I('card');
    	$data['shop_name'] = I('shop_name');
        $data['hold_pic'] = I('hold_pic');

    	// dump(I('post.'));
    	// dump($_FILES);die;
    	// $data  = I('post.');
    	
    	// dump($data);
    		//dump($res);
    	//Think中的文件上传
    	// $upload = new \Think\Upload();// 实例化上传类   
     //    $upload->maxSize = 3145728 ;// 设置附件上传大小
     //    $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类
     //   	$upload->rootPath = './Public/Uploads/';
     //    $upload->savePath = 'userpic/'; // 设置附件上传目录
        
     //   	// 上传文件    
     //   	$info = $upload->upload();
       	//dump($info);die;

	       	// if(!$info) {
	       	// // 上传错误提示错误信息        
	       	// $this->error($upload->getError(),U('Createsh/index'));    
	       	// }else{
	       	// 	//上传完成后保存文件名并存入数据库
	       	// 	$file = __ROOT__.'/Public/Uploads/'.$info['hold_pic']['savepath'].$info['hold_pic']['savename'];

	       		//echo $file;
	       		//die;
	       		//实例化Member的Model类
	       		$member = M('shop_info');
	       		//$data['hold_pic'] = $file;
	       		$id = session('sid');

	       		  //数据库操作
                $img = $member->where('u_id='.$id)->find();
               //dump($img);
                //取出原来的对应图片路径信息
                $files = $img['hold_pic'];
	       		// echo $files;
	       		// die;
	       		//更新信息
	       		//$shop = M('shop_info')->where('card='.$data['card'])->find();
                $shop = $member->where('u_id='.$id)->find();//判断是否以前有没有申请
	       		//dump($shop);
	       		//dump($data);
	       		//die;
		    	if($shop){
		    		//echo 1;
		    		//为真则表示修改
		    		
		    		//dump($shop);
		    		$data['id'] = $shop['id'];
                    $data['power'] = 0;//初始化提交

		    		$res = M('shop_info')->save($data);
		    	}else{
		    		//echo 2;
		    		//// 为假则表示添加
		    		$res = M('shop_info')->add($data);
		    	}
	       		//dump($res);
	       		//判断更新是否成功
	       		if($res){ 
	       			//删除原来的图片
	       			//echo $files.'<br />';
	       			//echo str_replace(__ROOT__,'.',$files);
	       			$repfile = str_replace(__ROOT__,'.',$files);
	       			if(file_exists($repfile)){
	       				@unlink($repfile);
	       			}
					$this->redirect('Createsh/index');
	       			//$this->success('更新成功!',U('Createsh/index'));

	       		}else{ 
	       			//$this->error('更新失败!');
					 $this->redirect('Createsh/index');
	       		}
  
	   		}
    	
    	

   // }
}