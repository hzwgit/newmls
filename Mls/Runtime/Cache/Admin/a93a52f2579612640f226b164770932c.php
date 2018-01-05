<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/Project/Public/Css/bootstrap.min.css">
	<script type="text/javascript" src="/Project/Mls/Admin/Public/Js/jquery.js"></script>	
	<script>
		$(function(){
			var $tid = null;
			var url = "<?php echo U('ShowType/isGood');?>";
			//判断类别下是否存在商品
			$("a:first-child").mouseover(function(){
				$tid = $(this).attr('flag');
				$.ajax({
					url:url,
					type:"get",
					data:"id="+$tid,
					success:function(data){
						if(data == "1"){ 
							alert('存在商品不能添加！');
							return false;
						}else if(data == 2){ 
							$('a:first-child').attr('href',"/Project/index.php/Admin/ShowType/add/id/"+$tid);
						}
					} 		
				});
			});
		})
	</script>
</head>
<body >
	<div style="background:#F2F0F5 " class="panel-heading">
		<form action="/Project/index.php/Admin/ShowType/index" method="get">
			类别名:<input name="search" type="text" class="">
		<button style="margin:0px 10px;" class="btn btn-info" type="submit">查询</button>
		</form>	
	</div>
	<table style="vertical-align:middle" align="center" class="table table-hover table-striped">
		<tr >
			<th>类别ID</th>
			<th>类别名称</th>
			<th>父ID</th>
			<th>Path路径</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr>
				<td id="tid" style="vertical-align:middle"><?php echo ($d["id"]); ?></td>
				<td style="vertical-align:middle"><?php echo ($d["name"]); ?></td>
				<td style="vertical-align:middle"><?php echo ($d["p_id"]); ?></td>
				<td style="vertical-align:middle"><?php echo ($d["path"]); ?></td>
				<td>
				<a class="btn btn-info" href="#" flag="<?php echo ($d["id"]); ?>" >添加子类</a> &nbsp;&nbsp;
				<?php if(is_array($allow)): $i = 0; $__LIST__ = $allow;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$al): $mod = ($i % 2 );++$i; if($al['id'] == $d['id']): ?><a class="btn btn-danger" href="/Project/index.php/Admin/ShowType/delType/id/<?php echo ($d["id"]); ?>">删除</a>
					<?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
				
				</td>
			<tr><?php endforeach; endif; else: echo "" ;endif; ?>
		<tr>
			<td colspan="5">
				<?php echo ($pageNav); ?>
			</td>
		</tr>
		<!-- <tr>
			<td style="vertical-align:middle">都比</td>
			<td style="vertical-align:middle">傻比</td>
			<td style="vertical-align:middle">都比</td>
			<td style="vertical-align:middle">都比</td>
			<td>
			<a class="btn btn-info" href="">修改</a> &nbsp;&nbsp;
				<a class="btn btn-danger" href="">删除</a>
			</td>
		</tr> -->
	</table>
</body>
</html>