<?php if (!defined('THINK_PATH')) exit();?>
  
    <link rel="stylesheet" href="/project/Mls/Home/Public/Css/base.css" media="all">
  <link rel="stylesheet" href="/project/Mls/Home/Public/Css/login.css" media="all">
  <meta charset="utf-8" />
<div class="wrap">
	<div class="reg_wrap">
		<div class="head">
			<a href="<?php echo U('Index/index');?>" class="reg_logo"></a>
			<a href="<?php echo U('Index/index');?>" class="welcome_txt"></a>
		</div>
		<div class="main">
			<div class="ad_wrap">
				<img src="/project/Mls/Home/Public/Images/register/ad_img.jpg" height="353" width="370"></div>
			
    <link rel="stylesheet" href="/project/Mls/Home/Public/Css/register_new.css" media="all">
    <script type="text/javascript" src="/project/Mls/Home/Public/Js/jquery-1.7.2.js"></script>
    <script type="text/javascript" src="/project/Mls/Home/Public/Js/register.js"></script>
			<div class="reg_form" id="mob_reg">
				<form id="registerForm" method="post"  action="<?php echo U('Register/doregister');?>">
					<h3>
						<a href="<?php echo U('Login/index');?>">登录</a>
						注册美丽说
					</h3>
					<div class="reg_list">
						<p class="reg_box">
							<input class="reg_txt" id="mobile" name="mobile" placeholder="手机号" autocomplete="off" type="text">
							<span></span>
							<span class="tel_icon"></span>
						</p>
						<!-- <p class="mlsUserEor red_f"></p>
					-->
				</div>
				<div class="reg_list">
					<p class="reg_box">
						<input class="reg_txt" id="nickname" name="nickname" placeholder="昵称" autocomplete="off" type="text">
						<span></span>
						<span class="user_icon"></span>
					</p>
					<!-- <p class="mlsUserEor red_f"></p>
				-->
			</div>
			<div class="reg_list">
				<p class="reg_box">
					<input class="reg_txt" id="password" name="password" placeholder="密码" autocomplete="off" type="password">
					<span></span>
					<span class="pwd_icon"></span>
				</p>
				<div class="pw_safe none_f" id="pw_safe">
					<span class="txt">安全程度</span>
					<div class="pw_strength pw_weak pw_medium pw_strong">
						<div class="pw_bar"></div>
						<div class="pw_letter">
							<span class="strength_l">弱</span>
							<span class="strength_m">中</span>
							<span class="strength_h">强</span>
						</div>
					</div>
				</div>
			</div>
			<div class="reg_list confpass"id="confpass">
				<p class="reg_box">
					<input class="reg_txt" id="conf_password" name="conf_password" placeholder="确认密码" autocomplete="off" type="password">
					<span></span>
					<span class="pwd_icon"></span>
				</p>
				<!-- <p class="mlsUserEor red_f"></p>
			-->
		</div>
		 <div class="reg_list">
		<p class="reg_box" id="checkBox">
			<input type="text" class="reg_txt" id="checkcode" name="code" value="" placeholder="请输入验证码" maxlength="4"/>
			<span class="checkImage code_img">
				<span class="codeImage" id="checkcodeImage">
					<img width="92" height="36" isblank="true" src="/project/index.php/Home/Register/showVerify" onclick="if(this.src!=this.src+'?'+Math.random()) this.src=this.src+'?'+Math.random();"style="margin-left: 55px;"></span>
				<!-- <span class="reload_icon"></span> -->
			</span>
			<span class="code_icon"></span>
			<span class="success"></span>
		</p>
		<p class="checkCodeEor red_f"></p>
	</div>
	
	<!-- <div class="reg_list verifcode">
		<p class="reg_box">
			<input id="code" name="code" class="enter_code reg_txt" placeholder="短信验证码" maxlength="6" type="text">
			<input id="get_code" class="get_code" value="获取短信验证码">
			<span></span>
		</p>
		<p class="sms_code_msg red_f"></p>
	</div> -->
<div class="regErrorMessage none_f"></div>
<div class="reg_btn_wrap">
	<input class="reg_btn"  value="立即注册" type="submit"></div>
<div class="agree_reg">
	<input checked id="agreement" name="agreement" type="checkbox">
	同意
	<a href="<?php echo U('Register/agreement');?>" target="_blank">美丽说注册条款</a>
</div>
</form>
<div class="fast_login">
<h3>无需注册，即可登录</h3>
<div class="fast_way">
	<a href="/connect/auth/qzone" class="qq_way"></a>
	<a href="/connect/auth/weibo" class="sina_way"></a>
	<a href="/connect/auth/weixin" class="weixin_way"></a>
</div>
</div>
<div class="more_way_wrap">
<h4 onselectstart="return false;">更多登录方式&gt;&gt;</h4>
<div class="more_way none_f">
	<a href="/connect/auth/txweibo" class="txweibo"></a>
	<a href="/connect/auth/douban" class="douban"></a>
	<a href="/connect/auth/renren" class="renren"></a>
	<a href="/connect/auth/baidu" class="baidu"></a>
</div>
</div>
</div>
</div>
</div>
</div>