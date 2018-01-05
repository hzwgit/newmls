<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后台模板</title>
<script type="text/javascript" src="/Project/Public/Js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="/Project/Mls/Admin/Public/Js/jquery.js"></script>
<script type="text/javascript" src="/Project/Mls/Admin/Public/Js/adminadd.js"></script>

<link rel="stylesheet" href="/Project/Mls/Admin/Public/Css/add.css" type="text/css" media="screen">
<link rel="stylesheet" href="/Project/Public/Css/bootstrap.min.css" type="text/css" media="screen">
</head>
<body>
<div class="div_from_aoto" style="width: 500px;">
    <form method="post" action="<?php echo U('AddAdmin/admin');?>"id="form_1">
        <div class="control-group">
            <label class="laber_from">用户名</label>
            <div class="controls"><input class="input_from1" name="username"placeholder=" 请输入用户名" type="text"><p class="help-block"></p></div>
        </div>
        <div class="control-group">
            <label class="laber_from">密码</label>
            <div class="controls"><input class="input_from2"name="pass" placeholder=" 请输入密码" type="password"><p class="help-block"></p></div>
        </div>
        <div class="control-group">
            <label class="laber_from">确认密码</label>
            <div class="controls"><input class="input_from3"name="btn_pass" placeholder=" 请输入确认密码" type="password"><p class="help-block"></p></div>
        </div>
        <div class="control-group">
            <label class="laber_from">权限</label>
            <div class="controls">
                <select class="input_select" name="power">
                    <option selected="selected"value="1">管理员</option>
                    <option value="0">超级管理员</option>
                   <!--  <option>经理</option>
                    <option>主管</option> -->
                </select>
            </div>
        </div>
        <div class="control-group">
            <label class="laber_from"></label>
            <div class="controls"><button class="btn btn-success" style="width:120px;">确认</button></div>
        </div>
    </form>
</div>

</body></html>