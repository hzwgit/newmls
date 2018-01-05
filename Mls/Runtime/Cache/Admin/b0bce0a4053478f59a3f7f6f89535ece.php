<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/Project/Public/Css/bootstrap.min.css">
	<script type="text/javascript" src="/Project/Mls/Admin/Public/Js/jquery.js"></script>
	<script>
		$(function(){
			$(".ss").each(function(){
				$(this).attr('href',function(){
					return $(this).attr('href')+'/opt/'+$("select").val();
				});
			});
			//查商品图片
			$(".pic").each(function(){
				//alert($(this).attr('flag'));
				var gid =  $(this).attr('flag');
				$.post('/Project/index.php/Admin/ShowGoods/showPic',{id:gid},function(data){
					var json = eval('('+data+')');
					$('td[flag='+gid+']').append('<img src="/Project/Public/'+json.g_pic+'" width="50">');
				});
			});
			//alert($(".pic").attr('flag'));
			
		})
	</script>
</head>
<body >
	<div style="background:#F2F0F5 " class="panel-heading">

	<form action="/Project/index.php/Admin/ShowGoods/index" method="get">
		<input type="hidden" name="start" value="<?php echo ($start); ?>">
		<input type="hidden" name="act" value="first">
			分类:
		<select name='opt'>
				<option value=''>--请选择--</option>
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dt): $mod = ($i % 2 );++$i; if($sel == $dt['id']): ?><option value="<?php echo ($dt["id"]); ?>" selected><?php echo ($dt["name"]); ?></option>
				<?php else: ?>
					<option value="<?php echo ($dt["id"]); ?>"><?php echo ($dt["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<button type="submit" style="margin:0px 10px;" class="btn btn-info">查询</button>
	</form>	
	</div>
	<table style="vertical-align:middle" align="center" class="table table-hover table-striped">
		<tr >
			<th>商品名称</th>
			<th>所属分类</th>
			<th>商品图片</th>
			<th>上架时间</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			<td style="vertical-align:middle"><?php echo ($vo["gname"]); ?></td>
			<td style="vertical-align:middle">
			<?php echo ($vo["tname"]); ?>
			</td>
			<!-- <td style="vertical-align:middle"><?php echo ($vo["tname"]); ?></td> -->
			<td style="vertical-align:middle" class="pic" flag="<?php echo ($vo["gid"]); ?>"></td>
			<td style="vertical-align:middle"><?php echo (date("y-m-d",$vo["gtime"])); ?></td>
			<td>
			<a class="btn btn-info" href="/Project/index.php/Admin/ShowGoods/mod/id/<?php echo ($vo["gid"]); ?>/name/<?php echo ($vo["gname"]); ?>">修改类别</a> 
			</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		<tr>
			<td colspan="5">
				<a class="ss" href="/Project/index.php/Admin/ShowGoods/index/start/<?php echo ($start); ?>/act/first">首页</a>
				<span>当前<?php echo ($now); ?>页&nbsp;&nbsp;</span>
				<span>共<?php echo ($pageTotal); ?>页&nbsp;&nbsp;</span>
				<span>每页显示5条&nbsp;&nbsp;</span>
				<span>共<?php echo ($total); ?>条&nbsp;&nbsp;</span>
				<a class="ss" href="/Project/index.php/Admin/ShowGoods/index/start/<?php echo ($start); ?>/act/prev">上一页</a>
				<a class="ss" href="/Project/index.php/Admin/ShowGoods/index/start/<?php echo ($start); ?>/act/next">下一页</a>
				<a class="ss" href="/Project/index.php/Admin/ShowGoods/index/start/<?php echo ($start); ?>/act/last">尾页</a>
					<!-- <input type="text" style="width:5%"  name="page">
					<a href="/Project/index.php/Admin/ShowGoods/index/act/last"><button>跳转</button></a> -->
			</td>
		</tr>
   <!-- <tr>
			<td style="vertical-align:middle">都比</td>
			<td style="vertical-align:middle">都比</td>
			<td style="vertical-align:middle">都比</td>
			<td style="vertical-align:middle">都比</td>
			<td>
			<a class="btn btn-info" href="">修改类别</a> 
				<a class="btn btn-danger" href="">删除</a>
			</td>
		</tr>
		-->
	</table>
</body>
</html>