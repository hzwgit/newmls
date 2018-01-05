<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" href="/Project/Mls/Home/Public/Css/login.css" media="all">

<!--加载文件-->

    <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/base.css" media="all">
  <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/login.css" media="all">
  <meta charset="utf-8" />
<div class="wrap">
	<div class="reg_wrap">
		<div class="head">
			<a href="<?php echo U('Index/index');?>" class="reg_logo"></a>
			<a href="<?php echo U('Index/index');?>" class="welcome_txt"></a>
		</div>
		<div class="main">
			<div class="ad_wrap">
				<img src="/Project/Mls/Home/Public/Images/register/ad_img.jpg" height="353" width="370"></div>
			
<script type="text/javascript" src="/Project/Mls/Home/Public/Js/jquery-1.7.2.js"></script>
<script>
	$(document).ready(function(){
		$hidden = $('#hidden').val();
		//alert(1);
		if($hidden == 1){
			
			$('#span').html('');

			$('#span').css('color','red').html('用户名或密码错误');
		}
	})
</script>
<script type="text/javascript" src="/Project/Mls/Home/Public/Js/logins.js"></script>
<div class="login_form">
<input type="hidden" id="hidden" value="<?php echo ($Login["flag"]); ?>">
				<form id="loginForm" method="post"  action="<?php echo U('Login/dologins');?>">
					<h3>
						<a href="<?php echo U('Register/index');?>">注册</a>
						登录美丽说
					</h3>
					<div class="login_list">
						<p class="login_box">
							<input class="login_txt" id="mlsUser" name="mlsUser" placeholder="昵称" type="text">
							<span></span>
							<span class="user_icon"></span>
						</p>
					</div>
					<div class="login_list">
						<p class="login_box">
							<input class="login_txt" id="password" name="password" placeholder="密码" type="password">
							<span></span>
							<span class="pwd_icon"></span>
						</p>
					</div>
					<div id="veri"class="login_list authcode none_f">
						<div class="login_box">
							<input class="login_txt" id="checkcode" name="code" placeholder="请输入验证码" maxlength="4" type="text">
							<span></span>
							<span class="code_icon"></span>
							<div class="checkImage" onselectstart="return false;">
								<img src="/Project/index.php/Home/Login/showVerify" style="margin-left: 55px; height: 32px;"onclick="if(this.src!=this.src+'?'+Math.random()) this.src=this.src+'?'+Math.random();"/>
								<span class="refresh"></span>
							</div>
						</div>
					</div>
					<span id="span"></span>
					<div class="loginErrorMessage none_f"></div>

					<div class="login_btn_wrap">
						<input class="login_btn" value="立即登录" type="submit"></div>
					<!-- <div class="remember">
						<input name="savestate" id="savestate" checked="checked" type="checkbox">
					<label for="savestate">记住我</label>
					</div> -->
					<!-- <div class="forget_pwd">
						<a href="/user/findPwd" target="_blank">忘记密码？</a>
					</div> -->
				</form>
<!-- 				<div class="fast_login">
					<h3>无需注册，即可登录</h3>
					<div class="fast_way">
						<a href="/connect/auth/qzone" class="qq_way"></a>
						<a href="/connect/auth/weibo" class="sina_way"></a>
						<a href="/connect/auth/weixin" class="weixin_way"></a>
					</div>
				</div>
				<div class="more_way_wrap">
					<h4 onselectstart="return false">更多登录方式&gt;&gt;</h4>
					<div class="more_way none_f">
						<a href="/connect/auth/txweibo" class="txweibo"></a>
						<a href="/connect/auth/douban" class="douban"></a>
						<a href="/connect/auth/renren" class="renren"></a>
						<a href="/connect/auth/baidu" class="baidu"></a>
					</div>
				</div>
				<div class="notice">
					公告：淘宝互联已失效，点此进行
					<a href="/user/appeal_tb/">账号申诉</a>
				</div> -->
			</div>
		</div>
	</div>
</div>

<div class="atDiv" style="word-wrap: break-word; outline: medium none; position: absolute;overflow:auto;filter:alpha(opacity=0);moz-opacity:0;opacity:0;">
	<span class="before">
		<!--?= before?-->
	</span>
	<span class="flag">
		<!--?= flag?-->
	</span>
	<span class="after">
		<!--?= after?-->
	</span>
</div>