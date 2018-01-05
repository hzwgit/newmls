<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="/Project/Public/Js/jquery-1.7.2.js"></script>
	<link rel="stylesheet" href="/Project/Public/Css/bootstrap.min.css">
	<script type="text/javascript" src="/Project/Mls/Admin/Public/Js/bootstrap.js"></script>
	<script type="text/javascript" src="/Project/Mls/Admin/Public/Js/userShow.min.js"></script>
	
</head>
<body >
	<div style="background:#F2F0F5 " class="panel-heading">
		<?php echo ($tName); ?>
		<form action="/Project/index.php/Admin/ShowUser/index" method="get">
			管理员:<input name="search" type="text" class="">
		<button style="margin:0px 10px;" class="btn btn-info" type="submit">查询</button>
		</form>	
	</div>
	<table style="vertical-align:middle" align="center" class="table table-hover table-striped">
		<tr >
			<th>ID</th>
			<th>会员昵称</th>
			<th>性别</th>
			<th>头像</th>
			<th>身份</th>
			<th>状态</th>
			<th>上次登录的时间</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr name="<?php echo ($d["id"]); ?>">
				<td id="tid" style="vertical-align:middle"><?php echo ($d["id"]); ?></td>
				<td style="vertical-align:middle"><?php echo ($d["nickname"]); ?></td>
				<td class="sex" flag="<?php echo ($d["id"]); ?>"name="<?php echo ($d["sex"]); ?>"style="vertical-align:middle">
				<div id="<?php echo ($d["id"]); ?>sex"style="color:green;vertical-align:middle">允许登陆</div></td>

				<td style="vertical-align:middle"><img style="width:40px;"src="<?php echo ($d["pic"]); ?>" alt=""></td>

				<td class="power" flag="<?php echo ($d["id"]); ?>"name="<?php echo ($d["power"]); ?>"style="vertical-align:middle">
				<div id="<?php echo ($d["id"]); ?>power"style="color:green;vertical-align:middle">允许登陆</div></td>

				<td class="state" flag="<?php echo ($d["id"]); ?>"name="<?php echo ($d["state"]); ?>"style="vertical-align:middle" >
				<div id="<?php echo ($d["id"]); ?>dis"style="color:green;vertical-align:middle">允许登陆</div>
				<!-- <?php if($d["state"] == 0): ?>-->
				
				<!-- <?php else: ?>
				<div style="color:red;vertical-align:middle">禁止登陆</div><?php endif; ?> -->
				<a id="sele"name="<?php echo ($d["id"]); ?>"class="btn btn-info">修改</a>
				<select id="<?php echo ($d["id"]); ?>"style="display: none; padding-top: 0px; border-left-width: 0px; border-bottom-width: 1px; border-top-width: 0px; margin-top: -28px; margin-left: 57px;" name="state"data-toggle="" data-target="#myModal">
					<option name="state" value="">--请选择--</option>
					<option name="state1" value="1">禁止登陆</option>
					<option name="state0" value="0">允许登录</option>
<				</select>
				<span></span>
				</td>
				<td style="vertical-align:middle" ><?php echo (date("Y-m-d h:i:s",$d["last_time"])); ?>			
					
					<!-- <a class="btn btn-info" name="<?php echo ($d["id"]); ?>"id="sele">修改</a>
					<span></span> -->
				</td>
				<td>
				<a class="btn btn-info" href="/Project/index.php/Admin/ShowUser/Mod/id/<?php echo ($d["id"]); ?>">查看详情</a> &nbsp;&nbsp;
				<!-- <a id="del"class="btn btn-danger"name="<?php echo ($d["id"]); ?>"data-toggle="modal" data-target="#myModal">删除</a> -->
					<!-- <a class="btn btn-danger" href="/Project/index.php/Admin/ShowUser/delType/id/<?php echo ($d["id"]); ?>">删除</a> -->
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
	<!-- 删除 -->
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