	$flag = false;
	$('#loginForm').submit(function(){
		$name = $('#mlsUser').val();
		$pass = $('#password').val();
		if($name.length==0){
			$('#mlsUser').next().css('color','#f00').html('<br>请输入昵称');
				$flag = false;
		}else
		if($pass.length==0){

			$('#password').next().css('color','#f00').html('<br>请输入密码');
				$flag = false;
		}else{
		$.post('logins',{mlsUser:$name,password:$pass,lock:1},function(data){
			
			if(data == 0){
				$flag = true;
				if($flag=true){

				setTimeout($('#loginForm').submit(),10);
				}
				$('#veri').css('display','none');
			}else
			if(data == 1){
				$('#password').next().css('color','#f00').html('<br>用户名或密码错误');
				$flag = false;
			}else if(data == 2){
				$('#password').next().css('color','#f00').html('<br>你的账号已被锁定');
				$flag = false;
			}else if(data == 3){
				$flag = false;
				$('#veri').next().html('<input type="hidden" name="flag" value="true">');
				$('#veri').css('display','block');
			}/*else{
				$('#loginForm').submit(function(){
					return true;
				})
			}*/
		})
	}
		return $flag;
		
	
	})	
	
	/*$('#loginForm').submit(function(){
		return true;
	})*/

})