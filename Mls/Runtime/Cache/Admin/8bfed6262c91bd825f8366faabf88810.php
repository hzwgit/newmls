<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="/Project/Public/Js/jquery-1.7.2.js"></script>
	<link rel="stylesheet" href="/Project/Public/Css/bootstrap.min.css">
	<script type="text/javascript" src="/Project/Mls/Admin/Public/Js/bootstrap.js"></script>
	<script type="text/javascript" src="/Project/Mls/Admin/Public/Js/createsh.js"></script>
	
</head>
<body >
	<div style="background:#F2F0F5 " class="panel-heading">
		<?php echo ($tName); ?>
		<form action="/Project/index.php/Admin/Createsh/index" method="get">
			管理员:<input name="search" type="text" class="">
		<button style="margin:0px 10px;" class="btn btn-info" type="submit">查询</button>
		</form>	
	</div>
	<table style="vertical-align:middle" align="center" class="table table-hover table-striped">
		<tr >
			<th>ID</th>
			<th>真实姓名</th>
			<th>身份证号码</th>
			<th>身份证照片</th>
			<th>店铺名称</th>
			<th>手机号码</th>
			<th>QQ</th>
			<th>地区</th>
			<th>邮箱</th>
			<th>状态</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($shop)): $i = 0; $__LIST__ = $shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr name="<?php echo ($d["id"]); ?>">
				<td id="tid" style="vertical-align:middle"><?php echo ($d["id"]); ?></td>
				<td  style="vertical-align:middle"><?php echo ($d["truename"]); ?></td>
				<td  style="vertical-align:middle"><?php echo ($d["card"]); ?></td>
				<td  style="vertical-align:middle"><img id="hold_pic"name="<?php echo ($d["id"]); ?>"data-toggle="modal" data-target="#myModal"width="40"src="<?php echo ($d["hold_pic"]); ?>" alt=""></td>
				<td  style="vertical-align:middle"><?php echo ($d["shop_name"]); ?></td>
				<td  style="vertical-align:middle"><?php echo ($d["phone"]); ?></td>
				<td  style="vertical-align:middle"><?php echo ($d["qq"]); ?></td>
				<td  style="vertical-align:middle"><?php echo ($d["area"]); ?></td>
				<td  style="vertical-align:middle"><?php echo ($d["email"]); ?></td>
				<td  style="vertical-align:middle"><input type="hidden" class="power"name="<?php echo ($d["id"]); ?>"value="<?php echo ($d["power"]); ?>">
				<span></span>
				</td>
				
			
				<td
			<ul class="nav navbar-nav navbar-right">
            <li id="fat-menu" class="dropdown">
              <a id="drop3" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                点击选择
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="drop3">
                <li name="<?php echo ($d["id"]); ?>"value="3"class="Choice"><a href="#">通过验证</a></li>
                <li name="<?php echo ($d["id"]); ?>"value="2"class="Choice"><a href="#">图片信息不合格</a></li>
                <li name="<?php echo ($d["id"]); ?>"class="Choice"value="1"><a href="#">个人信息不合格</a></li>
               <!--  <li role="separator" class="divider"></li>
               <li><a href="#">Separated link</a></li> -->
              </ul>
            </li>
          </ul>
				<!-- <a class="btn btn-info" href="/Project/index.php/Admin/ShowUser/Mod/id/<?php echo ($d["id"]); ?>">查看详情</a> &nbsp;&nbsp; -->
				<!-- <a id="power"class="btn btn-info"name="<?php echo ($d["id"]); ?>"data-toggle="modal" data-target="#myModal">是/否通过</a> -->
				<!-- <a id="del"class="btn btn-danger"name="<?php echo ($d["id"]); ?>"data-toggle="modal" data-target="#myModal">删除</a> -->
					<!-- <a class="btn btn-danger" href="/Project/index.php/Admin/Createsh/delType/id/<?php echo ($d["id"]); ?>">删除</a> -->
				</td>
			<tr><?php endforeach; endif; else: echo "" ;endif; ?>
		<tr>
			<td colspan="11">
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
	<!-- 模态框 -->
<div class="modal fade" id="myModal" style="margin-top: -30px;"tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <!-- <h4 class="modal-title" id="myModalLabel"></h4> -->
     </div>
      <div class="modal-body">
       
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <!--  <button type="button"id="save"class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
</body>
</html>