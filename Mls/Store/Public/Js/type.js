$(function(){
	/*创建顶级类*/
	var flag = false;
	var del = [];	//用于记录删除的id
	$("#J_AddSupCatHD").click(function(){
		var now = new Date();
        var month=now.getMonth()+1;     
        var date=now.getDate(); 
        var id = month+''+date+(parseInt(1000000*Math.random()));
		$('#J_CatsList>tbody').removeClass('look-me');
		$('#J_CatsList').append('<tbody class="look-me expand" pid="'+id+'" ><tr class="cat-sup"><td class="td-00"><span class="checkbox-box"><span class="pseudo-checkbox"></span><input class="J_CatOpt checkbox" id="opt-no-745" type="checkbox"></span></td><td class="td-0"><i class="J_FoldTrigger arrow arrow-left"></i></td><td class="td-1"><div class="input-box"><input id="" class="input-text J_CatName " value="" maxlength="20" data-condition="" type="text"></div></td> <td class="td-2"> </td><td class="td-move"><div class="move-box"><a class="move-top J_CatMoveTop" href="javascript:;" title="移动到顶部">上移</a><a class="move-up J_CatMoveUp" href="javascript:;" title="上移">上移</a><a class="move-down J_CatMoveDown no-move-down" href="javascript:;" title="下移">下移</a><a class="move-btm J_CatMoveBtm no-move-btm" href="javascript:;" title="移动到底部">下移</a></div></td><td class="td-3"><span class="switch-box checked"><span class="pseudo-switch"></span><input checked="checked" class="J_CatShow checkbox" id="show-no-745" type="checkbox"></span></td><td class="td-time">今天</td><td class="td-8">手动分类</td><td class="td-9"><a class="J_CatDelete" href="javascript:;" title="删除">删除</a></td></tr><tr class="cat-sub add-sub"><td class="td-00"></td><td class="td-0"></td><td class="td-1"><a  class="add-cat J_AddCat"><span><em>添加子分类</em></span></a></td><td class="td-2"></td><td class="td-move"></td><td class="td-3"></td><td class="td-time"></td><td class="td-8"></td><td class="td-7"></td></tr></tbody>'); 
	});

	/*鼠标悬浮高亮*/
	$('#J_CatsList>tbody>tr').live('mouseover',function(){
		$(this).addClass('high');
	});
	/*鼠标离开恢复*/
	$('#J_CatsList>tbody>tr').live('mouseout',function(){
		$(this).removeClass('high');
	});

	/*添加子分类*/
	$('.add-cat').live('click',function(){
		/*
		var pid = $(this).parents('tbody').attr('id');
		var now = new Date();
        var month=now.getMonth()+1;     
        var date=now.getDate(); 
        var id = month+''+date+(parseInt(1000000*Math.random()));
        */
		$('.cat-sup').parent().removeClass('look-me');
		$('.cat-sub').removeClass('look-me');
		$(this).parent().parent().before('<tr class="cat-sub look-me" data-type="0"> <td class="td-00"> <span class="checkbox-box"> <span class="pseudo-checkbox"></span> <input id="" class="J_CatOpt checkbox" type="checkbox"></span> </td> <td class="td-0"></td> <td class="td-1"> <div class="input-box"> <input id=""  class="input-text J_CatName" value="" autocomplete="off" data-condition="" maxlength="20" type="text"></div> </td> <td class="td-2"> </td> <td class="td-move"> <div class="move-box"> <a class="move-up  J_CatMoveUp no-move-up" href="javascript:;">上移</a> <a class="move-down J_CatMoveDown" href="javascript:;">下移</a> </div> </td> <td class="td-3">&nbsp;</td> <td class="td-time">2015-07-13</td> <td class="td-8">手动分类</td> <td class="td-9"> <a class="J_CatDelete" href="javascript:;">删除</a> <a href="" target="_blank">查看</a> </td></tr>'); 
	}); 

	/*单个收起、展开*/
	$('.J_FoldTrigger').live('click',function(){
		if($(this).parents('tbody').hasClass('folding')){
			$(this).parents('tbody').removeClass('folding');
			$(this).parents('tbody').addClass('expand');
		}else{
			$(this).parents('tbody').removeClass('expand');
			$(this).parents('tbody').addClass('folding');
		}
	});

	/*收起、展开*/
	$('.J_CollapseAll').click(function(){
		$('tbody').addClass('expand').removeClass('folding');
	})
	$('.J_FoldingAll').click(function(){
		$('tbody').removeClass('expand').addClass('folding');
	});

	/*滑块展开*/
	$('.switch-box').live('click',function(){
		if($(this).hasClass('checked')){
			$(this).removeClass('checked');
		} else {
			$(this).addClass('checked');
		}
		flag = true;
	});

	/* 取消错误提示信息 */
	$('.input-text').live('blur',function(){
		$(this).next().css('display','none');
		flag = true;
	})


	/*移动*/
	$('.cat-sup').eq('0').children('.td-move').children('.move-box').children().eq(0).addClass('no-move-top');
	$('.cat-sup').eq('0').children('.td-move').children('.move-box').children().eq(1).addClass('no-move-up');
	$('.cat-sup').eq($('.cat-sup').length-1).children('.td-move').children('.move-box').children().eq(2).addClass('no-move-down');
	$('.cat-sup').eq($('.cat-sup').length-1).children('.td-move').children('.move-box').children().eq(3).addClass('no-move-btm');
	/*位置移动*/
	$('.td-move').live('click',function(){
		for(var i=0;i<$('.cat-sup').length;i++){
			$('.cat-sup').eq(i).children('.td-move').children('.move-box').children().eq(0).removeClass('no-move-top');
			$('.cat-sup').eq(i).children('.td-move').children('.move-box').children().eq(1).removeClass('no-move-up');
			$('.cat-sup').eq(i).children('.td-move').children('.move-box').children().eq(2).removeClass('no-move-down');
			$('.cat-sup').eq(i).children('.td-move').children('.move-box').children().eq(3).removeClass('no-move-btm');
		}

		$('.cat-sup').eq('0').children('.td-move').children('.move-box').children().eq(0).addClass('no-move-top');
		$('.cat-sup').eq('0').children('.td-move').children('.move-box').children().eq(1).addClass('no-move-up');
		$('.cat-sup').eq($('.cat-sup').length-1).children('.td-move').children('.move-box').children().eq(2).addClass('no-move-down');
		$('.cat-sup').eq($('.cat-sup').length-1).children('.td-move').children('.move-box').children().eq(3).addClass('no-move-btm');
		flag = true;
	})
	/*手动移动*/
	$('.move-top').live('click',function(){
		if(!$(this).hasClass('no-move-top')){
			var $html = $(this).parents('tbody').prop('outerHTML');
			$(this).parents('tbody').remove();
			//var obj = $(this).parents('tbody').siblings().eq(0).css('background','red');
			$('.tbodypid').eq(0).before($html);
		}
	});
	$('.move-up').live('click',function(){
		if(!$(this).hasClass('no-move-up')){
			var $html = $(this).parents('tbody').prop('outerHTML');
			$(this).parents('tbody').prev().before($html);
			$(this).parents('tbody').remove();
		}
	});
	$('.move-down').live('click',function(){
		if(!$(this).hasClass('no-move-down')){
			var $html = $(this).parents('tbody').prop('outerHTML');
			$(this).parents('tbody').next().after($html);
			$(this).parents('tbody').remove();
		}
	});
	$('.move-btm').live('click',function(){
		if(!$(this).hasClass('no-move-btm')){
			var $html = $(this).parents('tbody').prop('outerHTML');
			$('.tbodypid:last').after($html);
			$(this).parents('tbody').remove();
		}
	});
	/*移动结束*/

	/*全选/单选*/
	$('.J_CatOpt').live('click',function(){
		if($(this).parent().hasClass('checked')){
			$(this).parent().removeClass(' checked');	
		}else{
			$(this).parent().addClass('checked');	
		}
		if(!$('.J_CatOpt').parent().hasClass('checked')){
			$('#J_TDelALl').addClass('disabled');
		} else {
			$('#J_TDelALl').removeClass('disabled');
		}
	});
	$('#J_TDelALl').click(function(){
		var checkboxBox = $('.checkbox-box');
		if($('.J_TDelALl').hasClass('disabled')){
			return;
		}
		for(var i=0;i<checkboxBox.length;i++){
			if($(checkboxBox).eq(i).hasClass('checked')){
				if($(checkboxBox).eq(i).parents('tbody').children('.cat-sub').length > 1 && $(checkboxBox).eq(i).parents('tr').hasClass('cat-sup')){
					var name = $(checkboxBox).eq(i).parents('tr').children().eq(2).children(0).children(0).attr('value');
					alert(name+' 存在子类,请先删除子类');
					return;
				}
				del[del.length] = $(checkboxBox).eq(i).parent().siblings().eq(1).children(0).children(0).attr('id');
				$(checkboxBox).eq(i).parents('tr').remove();
			}
		}
	});
	/*全选*/
	$('#J_TDealAll').click(function(){
		if($('.cat-checkbox').hasClass('selected')){
			$('.cat-checkbox').removeClass('selected');
			$('.checkbox-box').removeClass('checked');
			$('#J_TDelALl').addClass('disabled');
		}else{
			$('.cat-checkbox').addClass('selected');
			$('.checkbox-box').addClass('checked');
			$('#J_TDelALl').removeClass('disabled');
		}
	});

	/* ajax 提交*/
	$('#J_CatsSubmit_2').click(function(){
		var td_1 = $('.input-text');
		var data = Object();
		if(!flag){
			alert('未作任何修改');
			return;
		}

		/* 组装数据 */
		for(var i=0;i<td_1.length;i++){
			if(td_1.eq(i).attr('value') != ''){
				data[i] = new Object;
				data[i].id = td_1.eq(i).attr('id');
				data[i].name = td_1.eq(i).attr('value');
				data[i].p_id = td_1.eq(i).parents('tbody').attr('pid');
				if(i == 0){
					data[i].del = del;
				}
				if(td_1.eq(i).parents('tr').hasClass('cat-sup')){
					data[i].state = td_1.eq(i).parents('td').next().next().next().children(0).hasClass('checked');
				}
			}else{
				td_1.eq(i).after('<div class="alert-error name-alert">分类名称不能为空</div>');
				return;
			}
		}
		$.post('data',data,function(dd){
			if(dd == 'false'){
				alert('操作失败');
				return;
			}
			for(var i=0;i<td_1.length;i++){
				if(!td_1.eq(i).attr('id')){
					td_1.eq(i).attr('id',i+1);
				}
			}
			alert('操作成功');
			//console.log(dd);
		})
	});

	/*删除*/
	$('.J_CatDelete').live('click',function(){
		//设为同步
		$.ajaxSetup({
			async:false
		})
		var flaga = '';
		var $id = $(this).parent().siblings().eq('2').children(0).children(0).attr('id');
		
		$.get('select',{id:$id},function(data){
			flaga = data;
		});
		if(flaga == 1){
			alert('存在商品,请先删除商品');
			return;
		}

		if($(this).parents('tbody').children('.cat-sub').length > 1 && $(this).parents('tr').hasClass('cat-sup')){
			alert('存在子类,请先删除子类');
			return;
		}
		if($(this).parents('tbody').children('.cat-sub').length <= 1){
			$(this).parents('tr').next().remove();
		}
		
		flag = true;
		//console.log(111);
		//组合数据，用于保存按钮提交删除
		del[del.length] = $(this).parent().siblings().eq('2').children(0).children(0).attr('id');
		$(this).parents('tr').remove();
	});
}) 