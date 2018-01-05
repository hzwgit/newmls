<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="/Project/Public/Js/jquery-1.7.2.js"></script>
	<link rel="stylesheet" href="/Project/Public/Css/bootstrap.min.css">
	<script type="text/javascript" src="/Project/Mls/Admin/Public/Js/bootstrap.js"></script>
	<script type="text/javascript" src="/Project/Mls/Admin/Public/Js/Adminshow.min.js"></script>
	
	
</head>
<body >
	<div style="background:#F2F0F5 " class="panel-heading">
		<?php echo ($tName); ?>
		<form action="/Project/index.php/Admin/ShowAdmin/index" method="get">
			管理员:<input name="search" type="text" class="">
		<button style="margin:0px 10px;" class="btn btn-info" type="submit">查询</button>
		</form>	
	</div>
	<table style="vertical-align:middle" align="center" class="table table-hover table-striped">
		<tr id="one">
			<th>ID</th>
			<th>管理员账号</th>
			<th>权限</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($admin)): $i = 0; $__LIST__ = $admin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr name="<?php echo ($d["id"]); ?>">
				<td id="tid" style="vertical-align:middle"><?php echo ($d["id"]); ?></td>
				<td style="vertical-align:middle"><?php echo ($d["username"]); ?></td>
				<td style="vertical-align:middle" ><?php echo ($d["powe"]); ?>			
					<select name="power<?php echo ($d["id"]); ?>">
					<?php if($d["power"] == 1): ?><option name="power1"selected value="1">管理员</option>
					<option name="power0"value="0">超级管理员</option>
				<?php else: ?>
					<option name="power1" value="1">管理员</option>
					<option name="power0"selected value="0">超级管理员</option><?php endif; ?>
					
					</select>
					<a class="btn btn-info" name="<?php echo ($d["id"]); ?>"id="sele">修改</a>
					<span></span>
				</td>
				<td>
				<!-- <a class="btn btn-info" href="/Project/index.php/Admin/ShowAdmin/passMod/id/<?php echo ($d["id"]); ?>">修改密码</a> --> &nbsp;&nbsp;
				<a id="del"class="btn btn-danger"name="<?php echo ($d["id"]); ?>"data-toggle="modal" data-target="#myModal">删除</a>
				
				</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
     <!--  <div class="modal-body">
       
     </div> -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button"id="save"class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>