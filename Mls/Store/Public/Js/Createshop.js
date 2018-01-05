$(document).ready(function(){
	
	var $power = $('#hidden').val();
	//alert($power);
	if($power){
		if($power==0){
			$('#steps').css('display','none');
		$('#hidden').next().html('<h1>提交正在审核中,请不要修改数据.....</h1>')

		
	}else if($power == 1){
		$('#steps').css('display','none');
		$('#hidden').next().html('<h1>身份信息不合法,请修改后重新提交.....</h1>')
	}else if($power == 2){
		$('#steps').css('display','none');
		$('#hidden').next().html('<h1>图片信息不合法,请修改后重新提交.....</h1>');
	}
	}
	
})

$(function(){
	
	$('#location_p').change(function(){
		$p = $(this).val();
		$c = $('#location_c').val();
		//$a = $('location_a').val();
		$('#area').val($p+$c);
		//alert($a);
	})
	$('#location_c').change(function(){
		$c = $(this).val();
		$p = $('#location_p').val();
		// $a = $('location_a').val();
		// alert($c);
		$('#area').val($p+$c);
		//alert($a);
	})
	/*$('#location_a').change(function(){
		$a = $(this).val();
		// $c = $('#location_c').val();
		// $p = $('location_p').val();
		$('#area').append($a);
		//alert($a);
	})*/

//alert($('#location_p :selected').val())
//console.log($('#location_p :selected').val())
		

	
	//姓名$(function(){

	var $flag = true;
	$('input[name=truename]').blur(function(){
		//alert(1);
		$name = $('input[name=truename]').val()
		//alert($name.length)
		if($name.length==0){
			$flag = false;
			$('#scope').css('display','none');
			$('#hide').attr('class','red').html('请填写姓名');
		}else{
			$('#hide').css('display','none');
			//alert(2)
			$('input[name=cards_name]').val($name);
			
		}
	})
	//身份证名字
	$('input[name=cards_name]').blur(function(){
		//alert(1);
		$name = $('input[name=cards_name]').val();
		//alert($name.length)
		if($name.length==0){
			$flag = false;
			//$this.next().css('display','none');
			$(this).next().attr('class','red').html('请填写姓名');
		}
	})
	//手机
	$('#phone').blur(function(){
		$phone = $('#phone').val();
		var $re_mobile = /^1[3,5,8]\d{9}$/;
		//alert($pattern);
		var $space = $re_mobile.test($phone);
		// alert($space)
		if($phone){
			if($space){
				
				$('#hide1').attr('class','ng-hide');
			}else{
				$flag = false;
				$('#hide1').attr('class','red').html('手机号码格式不正确');	
			}

		}else{
			$flag = false;
				$('#hide1').attr('class','red').html('请输入手机号码');	
		}
	})

	//地址
	$('#area').blur(function(){
		var $area = $(this).val();
		if($area){
			
			$(this).next().attr('class','ng-hide')
		}else{
			$flag = false;
			$(this).next().attr('class','red').html('请输入详细地址')
		}
	})

	//邮箱
	$('#email').blur(function(){
		var $email = $(this).val();
		var $reEmail = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		var $space = $reEmail.test($email);
		//alert($space);
		if($email){
			if($space){
				
				$(this).next().attr('class','ng-hide')
			}else{
				$flag = false;
				$(this).next().attr('class','red').html('邮箱格式不正确')
			}

		}else{
			$flag = false;
			$(this).next().attr('class','red').html('请填写邮箱')
		}
	})
	//QQ
	$('#QQ').blur(function(){
		var $qq = $(this).val();
		var $reEmail = /[1-9][0-9]{4,}/;
		var $space = $reEmail.test($qq);
		//alert($space);
		if($qq){
			if($space){
			
				$(this).next().attr('class','ng-hide')
			}else{
				$flag = false;
				$(this).next().attr('class','red').html('QQ格式不正确')
			}

		}else{
			$flag = false;
			$(this).next().attr('class','red').html('请填写QQ')
		}
	})
	//身份证号码
	$('#cards').blur(function(){
		var $cards = $(this).val();
		var $reEmail = /^\d{15}|\d{18}$/;
		var $space = $reEmail.test($cards);
		var $power = $('#hidden').val();
		if(!$power){
			if($cards){
				if($space){
					$(this).next().attr('class','ng-hide');
					$.post('Verif',{cards:$cards},function(data){
						if(data==1){
						$('#cards').next().attr('class','green').html('身份证号码可用')	
						}else{
							$flag = false;
						$('#cards').next().attr('class','red').html('身份证号码已存在')
						}
					})
				}else{
					$flag = false;
					$(this).next().attr('class','red').html('身份证号码格式不正确')
				}

			}else{
				$flag = false;
				$(this).next().attr('class','red').html('请填写身份证号码')
			}
		}
		//alert($space);
		
	})
	//店铺名字
	$('#shop_name').blur(function(){
		var $shop_name = $(this).val();
		//var $reEmail = /^\d{15}|\d{18}$/;
		//var $space = $reEmail.test($cards);
		//alert($space);
		var $power = $('#hidden').val();
		if(!$power){
			if($shop_name){
				//$(this).next().attr('class','ng-hide');
				$.post('shopName',{shop_name:$shop_name},function(data){
					if(data==1){
					$('#shop_name').next().attr('class','green').html('店铺名字可用')	
					}else{
						$flag = false;
					$('#shop_name').next().attr('class','red').html('店铺名字已存在')
					}
				})
		}else{
			$flag = false;
			$(this).next().attr('class','red').html('请填写店铺名字')
		}
		}
		
	})


	//照片
	/*$('#hold_pic').change(function(){
		$('#fromIdcard').submit(function(){
			alert(1);
			return true;
		})
	})*/

	//提交
		
		$('#formInfo').submit(function(){
			// alert($flag);

			return true;
		})
	


})