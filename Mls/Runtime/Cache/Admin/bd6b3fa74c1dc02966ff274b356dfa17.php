<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后台模板</title>

<script type="text/javascript" src="/Project/Mls/Admin/Public/Js/jquery.js"></script>

<link rel="stylesheet" href="/Project/Mls/Admin/Public/Css/add.css" type="text/css" media="screen">
<link rel="stylesheet" href="/Project/Public/Css/bootstrap.min.css" type="text/css" media="screen">
</head>
<body>
<div class="div_from_aoto" style="width: 500px;">
    <form>
	
		<div class="control-group">
            <label class="laber_from">ID号</label>
            <div class="controls"><input class="input_from" value="<?php echo ($user_info["id"]); ?>" name="id"type="text"><p class="help-block"></p></div>
        </div>
        <div class="control-group">
            <label class="laber_from">用户名</label>
            <div class="controls"><input class="input_from" value="<?php echo ($user_info["nickname"]); ?>" name="nickname" type="text"><p class="help-block"></p></div>
        </div>
        <div class="control-group">
            <label class="laber_from">手机号</label>
            <div class="controls"><input class="input_from" value="<?php echo ($user_info["phone"]); ?>" name="phone" type="text"><p class="help-block"></p></div>
        </div>
        <div class="control-group">
            <label class="laber_from">真实姓名</label>
            <div class="controls"><input class="input_from" value="<?php echo ($user_info["truename"]); ?>" name="truename" type="text"><p class="help-block"></p></div>
        </div>
		<div class="control-group">
            <label class="laber_from">生日</label>
            <div class="controls"><input class="input_from"  value="<?php echo (date('Y-m-d',$user_info["birth"])); ?>" name="birth"type="text"><p class="help-block"></p></div>
        </div>
		<div class="control-group">
            <label class="laber_from">住址</label>
            <div class="controls"><input class="input_from" value="<?php echo ($user_info["address"]); ?>"  name="address"type="text"><p class="help-block"></p></div>
        </div>
		<div class="control-group">
            <label class="laber_from">学校</label>
            <div class="controls"><input class="input_from" value="<?php echo ($user_info["school"]); ?>"  name="school" type="text"><p class="help-block"></p></div>
        </div>
		<div class="control-group">
            <label class="laber_from">爱好</label>
            <div class="controls"><input class="input_from" value="<?php echo ($user_info["hobbies"]); ?>"  name="hobbies" type="text"><p class="help-block"></p></div>
        </div>
		<div class="control-group">
            <label class="laber_from">工作单位</label>
            <div class="controls"><input class="input_from"value="<?php echo ($user_info["workunit"]); ?>"  name="workunit" type="text"><p class="help-block"></p></div>
        </div>
		<div class="control-group">
            <label class="laber_from">微博</label>
            <div class="controls"><input class="input_from"value="<?php echo ($user_info["micro"]); ?>"  name="micro" type="text"><p class="help-block"></p></div>
        </div>
		<div class="control-group">
            <label class="laber_from">美丽宣言</label>
            <div class="controls"><textarea class="form-control" value=""  name="declaration" rows="3"><?php echo ($user_info["declaration"]); ?></textarea><p class="help-block"></p></div>
        </div>
	
      <!--   <div class="control-group">
            <label class="laber_from"></label>
            <div class="controls"><button class="btn btn-success" style="width:120px;">确认</button></div>
        </div> -->
		
    </form>
</div>

</body></html>