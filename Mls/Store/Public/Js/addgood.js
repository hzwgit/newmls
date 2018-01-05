$(function(){


	/*动态遍历类别*/
	$('#h_type').change(function(){
		hchan($(this),'#e_type','action');
	})
	$('#e_type').change(function(){
		chan($(this),'#s_type','action');
	});
	$('#p_type').change(function(){
		chan($(this),'#ep_type','ptype');
	})
	function hchan(obj,type,url){
		var $id = obj.val();
		$.get(url,{id:$id},function(data){
			var $parent = $.parseJSON(data);
			if(data != 0){
				list($parent,type);
				chan($('#e_type').eq(0),'#s_type',url);
			} else {
				$('#e_type').html("");
				$('#s_type').html("");
			}
		});

	}
	function chan(obj,type,url){
		var $id = obj.val();
		$.get(url,{id:$id},function(data){
			var $parent = $.parseJSON(data);
			if(data != 0){
				list($parent,type);
			}else {
				$('#s_type').html("");
			} 
		});
	}

	function list(array_list,obj){
		$(obj).html("");
		for(var i=0;i<array_list.length;i++){
			if(array_list[i]['state'] == null)
				$(obj).append("<option value='"+array_list[i]['id']+"'>"+array_list[i]['name']+"</option>");
		}
	}
	/*动态遍历类别结束*/



	$('input[name=name]').blur(function(){
		//alert($(this).siblings().length);
		span($(this),'用户名');
	});
	$('input[name=price]').blur(function(){
		span($(this),'价格');
	})
	function span(obj,str){
		if(obj.val() == ''){
			if(obj.siblings().length < 1)
			obj.after(' <span><font color="red">* '+str+'不能为空</font></span>');
		} else {
			obj.next().remove();
		}
	}
	//提交添加数据
	$('#sub').click(function(){
		/*
		var data = Object();
		data.name = $('input[name=name]').val();
		data.price = parseFloat($('input[name=price]').val()).toFixed(2);
		data.stock = $('input[name=stock]').val();
		data.discount = parseFloat($('input[name=discount]').val()).toFixed(1);
		if(isNaN(data.discount)){//判断是否有折扣没有默认10
			data.discount = 10;
		}
		if($('#ep_type').val() == null){//判断是否是一级分类、还是二级分类
			data.p_id = $('#p_type option:selected').val();
		} else {
			data.p_id = $('#ep_type').val();
		}
		data.t_id = $('#s_type').val();
		data.state = $('#state').val();
		data.summary = $('#summary').val();

		if(!data.name || !data.price || isNaN(data.price)){
			alert('输入格式有误');
			return;
		}
		*/
		var data = infoData();
		$.get('insert',data,function(data){
			console.log(data)
			if(data){
				location.reload();
				alert('添加成功');
			} else {
				alert('添加失败');
			}
		});

	})
	//组装数据
	function infoData(){
		var data = Object();
		data.name = $('input[name=name]').val();
		data.price = parseFloat($('input[name=price]').val()).toFixed(2);
		data.stock = $('input[name=stock]').val();
		data.discount = parseFloat($('input[name=discount]').val()).toFixed(1);
		if(isNaN(data.discount)){//判断是否有折扣没有默认10
			data.discount = 10;
		}
		if($('#ep_type').val() == null){//判断是否是一级分类、还是二级分类
			data.p_id = $('#p_type option:selected').val();
		} else {
			data.p_id = $('#ep_type').val();
		}
		data.t_id = $('#s_type').val();
		data.state = $('#state').val();
		data.summary = $('#summary').val();

		if(!data.name || !data.price || isNaN(data.price)){
			alert('输入格式有误');
			return;
		}
		return data;	
	}

	function upinfoData(){
		var data = Object();
		data.id = $('input[name=upname]').attr('dataid');
		data.name = $('input[name=upname]').val();
		data.price = parseFloat($('input[name=upprice]').val()).toFixed(2);
		data.stock = $('input[name=upstock]').val();
		data.discount = parseFloat($('input[name=updiscount]').val()).toFixed(1);
		if(isNaN(data.discount)){//判断是否有折扣没有默认10
			data.discount = 10;
		}
		data.p_id = $('#type option:selected').val();
		data.state = $('#states').val();
		data.summary = $('#upsummary').val();
		if(!data.name || !data.price || isNaN(data.price)){
			alert('输入格式有误');
			return;
		}
		return data;	
	}
	//修改
	$('#upda').click(function(){
		var $data = upinfoData();
		$.get('update',$data,function(data){
			console.log(data)
			if(data){
				alert('修改成功');
			} else {
				alert('修改失败');
			}
		});
	})


	//修改 获取值遍历
	$('button[path-id="update"]').click(function(){
		var $id =$(this).attr('data-id');
		$.get('select',{id:$id},function(data){
			//格式化
			var $parent = $.parseJSON(data);
			$('input[name=upname]').val($parent['name']);
			$('input[name=upname]').attr('dataid',$parent['id']);
			$('input[name=upprice]').val($parent['price']);
			$('input[name=upstock]').val($parent['stock']);
			$('input[name=updiscount]').val($parent['discount'] / 10);
			$('textarea[name="upsummary"]').val($parent['summary']);
			//下拉框默认值
			$('option[value='+$parent.state+']').attr('selected',true);
			$('#type option[class='+$parent.p_id+']').attr('selected',true);
		})
	});



	//下架
	$('button[data-type="state"]').click(function(){
		var $id = $(this).attr('data-id');
		var obj = $(this);
		$.get('state',{id:$id},function(data){
			if(data){
				//obj.parents('tr').css('background','red')
				obj.parents('tr').remove();
			}
		})
	})

	//删除
	//$('button[data-type="del"]').click(function(){


});