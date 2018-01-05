$(document).ready(function(){
	$('.power').each(function(){
	var $power = $(this).val();
	$p_id= $(this).attr('name');
	//alert($p_id);
	if($power ==0){
		$('.power[name='+$p_id+']').next().html('未审核');
	}else if($power==2){
		$('.power[name='+$p_id+']').next().html('图片不合法');
	}else if($power==1){
		$('.power[name='+$p_id+']').next().html('信息不合法');
	}else if($power==3){
		$('.power[name='+$p_id+']').next().html('已通过');
	} 

	})
	
})

$(function(){

	//图片
	$('#hold_pic').live('click',function(){
		//$id = $(this).attr('name');
		$img = $(this).attr('src');
		//alert($img);
		//$('#save').attr('name',$id);
		$('.modal-title').html('图片:');
		$('.modal-body').html('<img width="300"src="'+$img+'">');
	})

	//验证
	$('.Choice').live('click',function(){
		$id = $(this).attr('name');
		$power = $(this).val();
		// alert($power);
		$.post('powerUp',{id:$id,power:$power},function(data){
			// alert(data)
			if(data==3){
			$('tr[name='+$id+']').remove();	
			}else if(data == 2){
				$('.power[name='+$id+']').next().html('图片不合格')
			}else if(data == 1){
				$('.power[name='+$id+']').next().html('信息不合格')
			}
		})
	})
	//状态

	//验证
/*	$('#power').live('click',function(){
		$('#myModal').css({'width':'200px'})
		$id = $(this).attr('name');
		//alert($img);
		$('#save').attr('name',$id);
		$('.modal-title').html('图片:');
		$('.modal-body').html('<select name="power"><option value="3">通过验证</option><option value="3">图片不合格</option><option value="3">信息不合格</option></select>');
	})*/
})