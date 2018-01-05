$(function(){	
	var $flag=false;
	var $fla = [];	
	//用户密码强度验证
	$('#new_password').blur(function(){
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
			$(this).next().html("<div><h6>你还没输入密码哦</h6></div>");
			
		}else if($pwd.length<6){
			//$('#pw_safe').css('display','none');			
			$(this).next().html("<div><h6>密码长度不少于6位</h6><div>");	
			
		}else{
			//检测是否包含汉字
			if($b_chinese){
				$(this).next().html("<div><h6>密码不能包含汉字</h6></div>");
			
			}else if($b_space){
				$(this).next().html("<div><h6>密码不能包含空格</h6></div>");
			
			}else{
				$fla[1] = 1;
				$(this).next().html('');
				$(this).next().html("<img src='/Mls/Home/Public/Images/yes.jpg'>");
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
			}
		}
	});
	$('#confirm_password').blur(function(){
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
			$(this).next().html("<div><h6>你还没输入密码哦</h6></div>");
			
		}else if($pwd.length<6){
			//$('#pw_safe').css('display','none');			
			$(this).next().html("<div><h6>密码长度不少于6位</h6><div>");	
			
		}else{
			//检测是否包含汉字
			if($b_chinese){
				$(this).next().html("<div><h6>密码不能包含汉字</h6></div>");
			
			}else if($b_space){
				$(this).next().html("<div><h6>密码不能包含空格</h6></div>");
			
			}else{

				var $check_pwd = $('#new_password').val();
				if($pwd == $check_pwd){		
				$(this).next().css('color','green').html("<div><h6>密码可用</h6></div>");
				$fla[2] = 1;
				}else{
					$(this).next().html("<div><h6>二次密码不一致</h6></div>");
				}
			}
		}
	});
	

		$('.ext_submit').click(function(){
			if($fla[2] == 1 && $fla[1] == 1){
			// 获取参数
			old = $('#old_password').val();
			news = $('#new_password').val();

			$.post('setPass',{'old':old,'news':news},function(data){
				if(data == 0){
					//修改成功
					$('.ext_submit').prev().css('color','green').html('修改成功');
				}else
				if(data == 1){
					//密码错误
					//alert(1);
					$('.ext_submit').prev().css('color','red').html('密码错误');
				}else 
				if(data == 2){
					$('.ext_submit').prev().css('color','red').html('修改失败');
				}
			})
			}
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