$(function(){
	//控制按钮
	var $flag=false;
	var $fla = [];	
	//注册用户名验证
	 var $Reg1 = $('#mobile').blur(function(){
	
		var $mobile = $(this).val(); 
		var $re_mobile = /^1[3|5][0-9]\d{8}$/;
		var $b_mobile = $re_mobile.test($mobile)
		if(!$mobile){
			$(this).next().css('color','red').html("<img src='/Project/Mls/Home/Public/Images/no.jpg'><br><h4>你还没填手机号哦</h4>");
			
		}else{
		if(!$b_mobile){
			$(this).next().css('color','red').html("<img src='/Project/Mls/Home/Public/Images/no.jpg'><br><h4>请正确输入手机号</h4>");
			
		}else{
		$(this).next().css('color','green').html("<img src='/Project/Mls/Home/Public/Images/yes.jpg'><br><h4>手机号可用</h4>");
		$fla[0] = 1;
		}
			
		}
		return $fla;
		});
	//验证码
	$('#checkcode').bind('keyup',function(){
		var $code = $(this).val();
		if($(this).val().length>2){
				$.post("check_verify", {code:$code},function(data){
				if(data){
				$('#checkBox').next().html('');
					$('.success').attr('class','msg_ok');
					$fla[3] = 1;
				}else{
					$('.code_icon').next().attr('class','success');
					$('#checkBox').next().css('color','#f00').html("<h4>验证码错误</h4>");
				}
				
				} );
		}
	})
	//注册用户昵称验证
	$('#nickname').blur(function(){
		var $nickname = $(this).val(); 
		var $re_nickname =  /^[a-zA-Z\d\_\u2E80-\u9FFF]{4,12}$/;
		var $b_nickname = $re_nickname.test($nickname)
		if(!$nickname){
			$(this).next().css('color','red').html("<img src='/Project/Mls/Home/Public/Images/no.jpg'><br><h4>你还没填昵称哦</h4>");
			
		}else{
		if(!$b_nickname){
			$(this).next().css('color','red').html("<img src='/Project/Mls/Home/Public/Images/no.jpg'><br><h4>昵称为字母、数字、下划线、汉字且长度为4-12</h4>");
			
		}else{
			$.post("handle", {nickname:$nickname},function(data){
				if(data=='0'){
					$('#nickname').next().css('color','green').html("<img src='/Project/Mls/Home/Public/Images/yes.jpg'><br><h4>用户名可用</h4>");
					$fla[1] = 1;
				}else if(data=='1'){
					$('#nickname').next().css('color','#f00').html("<img src='/Project/Mls/Home/Public/Images/no.jpg'><br><h4>用户名已被注册</h4>");
				}
				
				} );
		}	
		}
		//alert($fla);
		return $fla;
		});	
		
	//用户密码强度验证
	$('#password').blur(function(){
		$(this).next().children().remove();
			//获取密码
			var $pwd=$(this).val();
			var $reChinese=/[\u0391-\uFFE5]+/;
			//匹配正则不能包含汉字
			var $b_chinese=$reChinese.test($pwd);	
			//匹配正则不能包含空格
			var $reSpace=/\s+/;
			var $b_space=$reSpace.test($pwd);
		//检测是否为空
		if($pwd.length==0){
			
			//$('#pw_safe').css('display','none');
			$(this).next().css('color','red').html("<img src='/Project/Mls/Home/Public/Images/no.jpg'><div><h4>你还没输入密码哦</h4></div>");
			
		}else if($pwd.length<6){
			//$('#pw_safe').css('display','none');			
			$(this).next().css('color','red').html("<img src='/Project/Mls/Home/Public/Images/no.jpg'><div><h4>密码长度不少于6位</h4><div>");	
			
		}else{
			//检测是否包含汉字
			if($b_chinese){
				$(this).next().css('color','red').html("<img src='/Project/Mls/Home/Public/Images/no.jpg'><div><h4>密码不能包含汉字</h4></div>");
			
			}else if($b_space){
				$(this).next().css('color','red').html("<img src='/Project/Mls/Home/Public/Images/no.jpg'><div><h4>密码不能包含空格</h4></div>");
			
			}else{
				$(this).next().html('');
				$(this).next().css('color','red').html("<img src='/Project/Mls/Home/Public/Images/yes.jpg'>");
				//合法则显示密码强度
				var $num = getResult($pwd);
				if($num==0){
					$('#pw_safe').css('display','block');
					$('.strength_l').css({background:'#f00'});			
				}else
				if($num==1){
					$('#pw_safe').css('display','block');
					$('.strength_l').css({background:'#f00'});
					$('.strength_m').css({background:'#f00'});
				}else if($num==2){
					$('#pw_safe').css('display','block');
					$('.strength_l').css({background:'#f00'});
					$('.strength_m').css({background:'#f00'});
					$('.strength_h').css({background:'#f00'});
				}
				//验证密码一致性
				$('#confpass').css({display:'block'});
				//获取第二此密码值
				$('#conf_password').blur(function(){
				var $check_pwd = $(this).val();
				if($pwd == $check_pwd){		
					$(this).next().css('color','green').html("<img src='/Project/Mls/Home/Public/Images/yes.jpg'><div><h4>密码可用</h4></div>");
				$fla[2] = 1;
				}else{
					$(this).next().css('color','red').html("<img src='/Project/Mls/Home/Public/Images/no.jpg'><div><h4>二次密码不一致</h4></div>");
				}
			});
			}
		}
			
		});
		
		//判断是否能登陆
		//获取同意条款是否选中
			
		$('#registerForm').submit(function(){
			if($fla[0]==1 && $fla[1] ==1 && $fla[2] ==1 &&$fla[3] ==1 ){
			$check = $('#agreement').attr('checked');
			
				if($check){
				$flag = true;
				}else{
				$flag = false;
				}				
			}else{
				$flag = false;
			}
			return $flag;
		})
		
	
		
	//定义检测函数,返回0/1/2分别代表差/一般/强
		function getResult(s){
				   var ls =-1;
				   if (s.match(/[a-z]/ig)){
					ls++;
				   }
				   if (s.match(/[0-9]/ig)){
					ls++;
				   }
				   if (s.match(/(.[^a-z0-9])/ig)){
					ls++;
				   }
				   return ls;
				}
	
})
