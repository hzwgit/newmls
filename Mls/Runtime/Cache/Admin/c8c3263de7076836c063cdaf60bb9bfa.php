<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后台模板</title>

<script type="text/javascript" src="/Project/Mls/Admin/Public/Js/jquery.js"></script>

<link rel="stylesheet" href="/Project/Mls/Admin/Public/Css/add.css" type="text/css" media="screen">
<link rel="stylesheet" href="/Project/Public/Css/bootstrap.min.css" type="text/css" media="screen">
<script type="text/javascript" src="/Project/Mls/Admin/Public/Js/jquery.js"></script>
<script>
$(function(){
	var $flag = false;
	$('input[name=category]').blur(function(){
		var type = $(this).val();
		$.post("<?php echo U('TypeManage/checkType');?>",{name:type},function(data){
			if(data != 1){
				if(type != ''){
					$flag = true;
				$('.help-block').html('可以添加该类别').css('color','green');
				}else{
					$flag = false;
				$('.help-block').html('类型不能为空!').css('color','red');
				}
			}else{
				$flag = false;
				$('.help-block').html('类型已存在!').css('color','red');
			}
			return $flag;
		});
	});
	$('form').submit(function(){
		return $flag;
	});
})
</script>
</head>
<body>
<div class="div_from_aoto" style="width: 500px;">
    <form action="/Project/index.php/Admin/TypeManage /add" method="post">
        <div class="control-group">
            <label class="laber_from">增加类别</label>
            <div class="controls"><input class="input_from" name="category" placeholder=" 请输入类别名" type="text"><p class="help-block"></p></div>
        </div>
       <!--  <div class="control-group">
            <label class="laber_from">密码</label>
            <div class="controls"><input class="input_from" placeholder=" 请输入密码" type="text"><p class="help-block"></p></div>
        </div>
        <div class="control-group">
            <label class="laber_from">确认密码</label>
            <div class="controls"><input class="input_from" placeholder=" 请输入确认密码" type="text"><p class="help-block"></p></div>
        </div> -->
        <!-- <div class="control-group">
            <label class="laber_from">类别</label>
            <div class="controls">
                <select class="input_select">
                    <option selected="selected">董事长</option>
                    <option>总经理</option>
                    <option>经理</option>
                    <option>主管</option>
                </select>
            </div>
        </div> -->
        <div class="control-group">
            <label class="laber_from"></label>
            <div class="controls"><button id="btn" class="btn btn-success" style="width:120px;">确认</button></div>
        </div>
    </form>
</div>

</body></html>