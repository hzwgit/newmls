<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title> 
  <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/mls.css" media="all">
  <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/wallet.css" media="all">
  <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/dialog.css" media="all">
  <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/base.css" media="all">

  <script type="text/javascript" src="/Project/Public/js/jquery-2.1.4.min.js"></script>
  <!--加载顶部文件-->
  
    <meta charset="utf-8" />
      
<script type="text/javascript" src="/Project/Mls/Home/Public/Js/jquery-1.7.2.js"></script>
<script>
  $(function(){
    $('#setting').mouseenter(function(){
       // alert(1);
     $('#add_menu_leo').show()
   }).mouseleave(function(){
      $('#add_menu_leo').hide()
  })

    $('#message').mouseenter(function(){
      $('#moreMessageBox').css('display','block');
      }).mouseleave(function(){
         $('#moreMessageBox').css('display','');
      })

  })
   
 
</script>

	<title>美丽说，开启全新时尚发现之旅</title>
	<link rel="icon" href="/Project/Public/1.png"/>
</head>
<body>
    <div class="uinfo_bar">
      <div class="header_top">
        <ul class="menu_leo">
        
<?php if($_SESSION['ishlogin']== 1): ?><!-- <li>
<a id="shareMeiliDialog" class="h_share first" href="javascript:void(0)">
<b class="f14_f">+</b>
分享我喜欢的
</a>
</li> -->
<li id="setting">
<a title="<?php echo (session('homename')); ?>" href="<?php echo U('Person/index');?>">
<span class="s_face">
<img src="http://d05.res.meilishuo.net/ap/d/56/de/19e804632c91d96c684320171e31_256_256.cc.jpg">
</span>
<?php echo (session('homename')); ?>
<em class="redarrow"></em>
</a>
<ul  id="add_menu_leo"class="add_menu_leo hw76 none_f">
<!-- <li>

<a target="_blank" href="/person/u/394874183?type=editor">我的杂志</a>
</li> -->
<!-- <li>
 <a target="_blank" href="/person/u/394874183?type=share">我的分享</a> 
</li> -->
<!-- <li>
<a class="msg" target="_blank" href="/member/member"> 积分兑换 </a>
</li> -->
<li class="b_line">
<a target="_blank" href="<?php echo U('Person/upPass');?>">账号与安全</a>
</li>
<li>
<a id="headLogoutBtn" href="<?php echo U('Login/logout');?>">退出</a>
</li>
</ul>
</li>
<!--
<li id="message">
<a id="msg"class="msg">
消息
<span class="num_bgc none_f" style="display: none;"></span>
<em class="redarrow"></em>
</a>
<ul id="moreMessageBox" class="add_menu_leo hw120 none_f">
<li>
<a class="openIM" target="_msg" href="/im/">查看客服消息</a>
</li>
<li>
 <a target="_msg" href="/ur/fans/394874183">查看关注</a>
</li>
<li>
<a target="_msg" href="/atme/">查看@我的</a>
</li>
<li>
<a target="_msg" href="/msg/main/user">查看私信</a>
</li>
<li>
<a target="_msg" href="/msg/main/syser">查看系统消息</a>
</li>
<li>
<a target="_msg" href="/ur/like/394874183">查看喜欢我的</a>
</li>
<li>
<a target="_msg" href="/club/recommend/394874183">查看回复我的</a>
</li>
</ul>
</li>
<li>
<a class="i_like" target="_blank" href="/person/u/394874183?type=like">
<i><img src="/Project/Mls/Home/Public/Images/heart.png" alt=""></i>
我的喜欢
</a>
</li> -->

  <?php else: ?>   
     <!-- 
               <li>
          <a class="first" href="/connect/auth/weixin"> <em style="background:url(&quot;/Project/Mls/Home/Public/Images/header/i_wx_single.png&quot;) no-repeat; padding:1px 8px;">&nbsp;</em>
            微信登录
          </a>
        </li> -->
       
        
        <li>
          <a href="<?php echo U('Login/index');?>">登录</a>
        </li>
        <li>
          <a href="<?php echo U('Register/index');?>">注册</a>
        </li><?php endif; ?>
        <li>
          <a href="/Project/index.php/Store/Login/index"> <!-- <em class="i_QQ">&nbsp;</em> -->
            商家登录
          </a>
        </li>
          <li>
            <a href="<?php echo U('cart/index');?>" target="_blank" class="mycart">
              <em class="i_cart">&nbsp;</em>
              我的购物车

              <?php if(empty($_SESSION['cart'])): ?><span class="num_bgc num_bgc_none">0</span>
              <?php else: ?>
                 <span class="num_bgc"><?php echo (count(session('cart'))); ?></span><?php endif; ?>
            </a>
          </li>
          <li>
            <a href="<?php echo U('order/index');?>" target="_blank">
              <em class="i_order">&nbsp;</em>
              我的订单
            </a>
          </li>
          <li>
            <a href="/client/?frm=daeh" target="_blank">
              <em class="i_mob">&nbsp;</em>
              下载App
            </a>
          </li>
          <li>
            <a class="last" href="/helpcenter/?frm=top_to_help" target="_blank">帮助中心</a>
          </li>
        </ul>
      </div>
      <div class="clear_f"></div>
    </div>
    
    
<body>

<script>
		$(function(){
			$('#inet').click(function(){
				$id=($(this).attr('id'));
				$('div[ii='+$id+']').css('display','block');
				// $(this).parent().parent().next().css('display',block);
				// $('div[ii=inet]').css('display','none');
				$('div[pp=platform]').css('display','none');
				$('div[qq=quick]').css('display','none');
				
			})
			$('#platform').click(function(){
				$id=($(this).attr('id'));
				$('div[pp='+$id+']').css('display','block');
					$('div[qq=quick]').css('display','none');
				$('div[ii=inet]').css('display','none');
			})
			$('#quick').click(function(){
				$id=($(this).attr('id'));

				$('div[qq='+$id+']').css('display','block');
				$('div[ii=inet]').css('display','none');
				$('div[pp=platform]').css('display','none');

			})
			$(document).ready(function(){
				$('#quick').attr('checked',true);
				$('div[qq=quick]').css('display','block');

			})
		

		})



</script>
	

<div class="container">
	<div class="content pay-content">
		<div class="content-head">
			<div class="logo">
				<a href="http://www.meilishuo.com">
					<img src="/Project/Mls/Home/Public/Images/wallet/logo.png?v=7017030f56" height="36px" width="106px"></a>
				<span class="label">收银台</span>
			</div>
		</div>
		<div class="content-body">
			<div class="content-item order-info">
				<div class="qrcode-wrapper">
					<img src="/Project/Mls/Home/Public/Images/nopersistence/imgservice.png" height="120px" width="120px">
					<div style="display: none;" class="qrcode-hover">
						<img src="/Project/Mls/Home/Public/Images/wallet/qrcode_hover.png?v=edbf55849b" height="133px" width="192px"></div>
				</div>
				<div class="form form-horizonal">
					<!-- <div class="form-group">
						<div class="group-label">业务单号：</div>
						<div class="group-content">
							2015070968288028
							<input id="orderId" data-merged="1" value="2015070968288028" type="hidden"></div>
					</div> -->
					<div class="form-group">
						<div class="group-label">业务类型：</div>
						<div class="group-content clearfix category">
							<div class="left">
								<span>美丽说订单</span>
								<!-- <span class="theme-color details-btn">
									订单详情
									<em class="icon icon-close-arow"></em>
								</span> -->
							</div>
							<div class="right">
								应支付总金额：
								<span class="strong"><?php echo ($arr); ?></span>
								元
								<span class="btn-link" style="display: none">刷新金额</span>
							</div>
						</div>
					</div>
					<div class="form-group order-detail" style="display: none">
						<div class="group-label">商品数量：</div>
						<div class="group-content">0件</div>
					</div>
					<div class="form-group order-detail" style="display: none">
						<div class="group-label">商品信息：</div>
						<div class="group-content"></div>
					</div>
				</div>
			</div>
			<div class="content-item quick-pay">
				<div class="quick-money">
					<div class="radio">
						<input id="quick" name="payway" value="quick" type="radio">
						<label for="quick"></label>
					</div>
					<label class="pay-label" for="quick">银行卡</label>
					<span class="quick-pay-label">快捷</span>
					<span class="pay-tip">无需跳转网银，银行预留手机短信验证进行支付</span>
					<span class="attach-tip">首次快捷支付立返5元</span>
				</div>
				<div style="display: none;" qq="quick" class="action quick-action">
					<div class="tip-imgs" style="display:none">
						<img src="/Project/Mls/Home/Public/Images/wallet/expire.png?v=53e3a66b64" class="tip-img-expire" style="display:none">
						<img src="/Project/Mls/Home/Public/Images/wallet/sec_code.png?v=b754c59908" class="tip-img-seccode" style="display:none;"></div>
					<div class="has-card" style="display:none">
						<div class="card-list close">
							<div class="card-item card-item-selected" style="display:none">
								<span class="pay-money">
									支付
									<span class="strong">98.90</span>
									元
								</span>
								<span class="card-item-wrap">
									<img class="bank-img" src="/Project/Mls/Home/Public/Images/bank/add_big.png" height="40px" width="158px">
									<span class="card-info-label debit-label">undefined</span>
									<span class="card-info-item selected-shortno">尾号</span>
									<span class="card-info-item selected-singlelimit" style="display:none">单笔限额</span>
									<span class="card-info-item selected-dailylimit last" style="display:none">单日限额</span>
								</span>
								<span class="use-other-card">
									使用其他银行卡
									<em class="icon icon-close-arow"></em>
								</span>
							</div>
							<div class="list-wrapper" style="display:none;">
								<div class="card-item add-btn-wrapper">
									<span class="add-btn">
										<em>+</em>
										使用新卡
									</span>
								</div>
							</div>
						</div>
						<div class="pay-action" style="display:none">
							<div class="form form-horizonal">
								<div class="form-group credit-type">
									<div class="group-label">安全码：</div>
									<div class="group-content">
										<input class="mls-txt mls-txt-primary mls-txt-middle" name="cardSecCode" id="oldCardSecCode_Id" type="text">
										<span class="error-msg" id="oldCardSecCodeErrMsg_Id"></span>
									</div>
								</div>
								<div class="form-group">
									<div class="group-label">验证码：</div>
									<div class="group-content">
										<div>
											<input class="mls-txt mls-txt-primary mls-txt-middle" name="msgVRCode" id="defaultMsgVRCode_Id" type="text">
											<button type="button" class="mls-btn mls-btn-primary js-get-vcode">获取验证码</button>
											<span class="error-msg" id="defaultMsgVRCodeErrMsg_Id"></span>
										</div>
										<div class="leave-no">银联预留手机号null</div>
									</div>
								</div>
								<div style="display: none;" class="form-group pay-pwd-row">
									<div class="group-label">支付密码：</div>
									<div class="group-content">
										<input class="mls-txt mls-txt-primary pay-key" name="payKey" id="payKeyDefault_Id" type="password">
										<span class="error-msg" id="payKeyDefaultErrMsg_Id"></span>
									</div>
								</div>
								<div class="form-group">
									<div class="group-content">
										<button disabled="" type="button" class="mls-btn mls-btn-primary js-quick-gocharge">确认支付</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="no-card">
						<div class="first-step">
							<div class="form form-horizonal">
								<div class="form-group">
									<div class="group-label">银行卡卡号：</div>
									<div class="group-content">
										<input class="mls-txt mls-txt-primary card-no" name="cardNo" id="cardNo_Id" type="text">
										<button class="mls-btn mls-btn-primary js-check-card">确认</button>
										<a class="reset-selected" href="javascript:void(0)" style="display:none">
											<em class="sprite sprite-jump"></em>
											重新选择
										</a>
										<span class="error-msg" id="cardNoErrMsg_Id"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="second-step" style="display:none">
							<div class="card-list">
								<div class="card-item">
									<span class="pay-money">
										支付
										<span class="strong">98.90</span>
										元
									</span>
									<img class="bank-img" src="" height="40px" width="158px">
									<span class="card-info-label"></span>
									<span class="card-info-item selected-shortno" style="border-right: none;"></span>
									<span class="card-info-item selected-singlelimit" style="display:none"></span>
									<span class="card-info-item selected-dailylimit last" style="display:none"></span>
								</div>
							</div>
							<div class="form form-horizonal">
								<div class="form-group">
									<div class="group-label">银行卡卡号：</div>
									<div class="group-content">
										<input class="mls-txt mls-txt-primary" name="cardNo" type="hidden">
										<span class="card-static"></span>
										<a class="reset-selected" href="javascript:void(0)">
											<em class="sprite sprite-jump"></em>
											重新选择
										</a>
									</div>
								</div>
								<div class="form-group">
									<div class="group-label">持卡人姓名：</div>
									<div class="group-content">
										<span class="card-static cardUserNameStatic"></span>
										<input class="mls-txt mls-txt-primary" name="cardUser" id="cardUserName_Id" type="text">
										<span class="error-msg" id="cardUserNameErrMsg_Id"></span>
									</div>
								</div>
								<div class="form-group">
									<div class="group-label">身份证号：</div>
									<div class="group-content">
										<span class="card-static cardUserIdStatic"></span>
										<input class="mls-txt mls-txt-primary" name="cardUserID" id="cardUserID_Id" type="text">
										<span class="error-msg" id="cardUserIDErrMsg_Id"></span>
									</div>
								</div>
								<div class="form-group credit-type">
									<div class="group-label">安全码：</div>
									<div class="group-content">
										<input class="mls-txt mls-txt-primary mls-txt-middle" name="cardSecCode" id="cardSecCode_Id" type="text">
										<span class="error-msg" id="cardSecCodeErrMsg_Id"></span>
									</div>
								</div>
								<div class="form-group credit-type">
									<div class="group-label">有效期：</div>
									<div class="group-content">
										<input class="mls-txt mls-txt-primary mls-txt-small" name="cardExpireTimeMonth" id="cardExpireTimeMonth_Id" type="text">
										月
										<input class="mls-txt mls-txt-primary mls-txt-small" name="cardExpireTimeYear" id="cardExpireTimeYear_Id" type="text">
										年
										<span class="error-msg" id="cardExpireTimeErrMsg_Id"></span>
									</div>
								</div>
								<div class="form-group">
									<div class="group-label">银行预留手机号：</div>
									<div class="group-content">
										<input class="mls-txt mls-txt-primary" name="bankLeavePhone" id="bankLeavePhone_Id" type="text">
										<span class="error-msg" id="bankLeavePhoneErrMsg_Id"></span>
									</div>
								</div>
								<div class="form-group">
									<div class="group-label">短信验证码：</div>
									<div class="group-content">
										<input class="mls-txt mls-txt-primary" name="msgVRCode" id="msgVRCode_Id" type="text">
										<button type="button" class="mls-btn mls-btn-primary js-get-vcode">获取验证码</button>
										<span class="error-msg" id="msgVRCodeErrMsg_Id"></span>
									</div>
								</div>
								<div style="display: none;" class="form-group pay-pwd-row">
									<div class="group-label">支付密码：</div>
									<div class="group-content">
										<input class="mls-txt mls-txt-primary pay-key" name="payKey" id="payKey_Id" type="password">
										<span class="error-msg" id="payKeyErrMsg_Id"></span>
									</div>
								</div>
								<div class="form-group">
									<div class="group-content">
										<button disabled="" class="mls-btn mls-btn-primary js-quick-gocharge">开通并支付</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content-item platform-pay">
				<div class="platform-money">
					<div class="radio">
						<input id="platform" name="payway" value="platform" type="radio">
						<label for="platform"></label>
					</div>
					<label class="pay-label" for="platform">平台支付</label>
					<span style="display: none;" class="other-btn">&lt;&lt;选择其他平台</span>
					<span class="pay-tip">支持微信、支付宝、银联在线、财付通等第三方支付平台</span>
				</div>
				<div style="display: none;" pp="platform" class="action platform-action">
					<div class="platform-list  selecting">
						<div class="selected-platform">
							<span class="pay-money">
								支付
								<span class="strong">98.90</span>
								元
							</span>
							<img class="platform-img" src="/wallet/imgservice?url=" height="40px" width="158px"></div>
						<div class="list-wrapper">
							<div class="platform-item">
								<span class="radio">
									<input id="platform-WECHAT" name="platform" value="0" type="radio">
									<label for="platform-WECHAT"></label>
								</span>
								<label class="platform-img" for="platform-WECHAT">
									<img src="/Project/Mls/Home/Public/Images/bankpc/wechat.jpg" height="40px" width="158px"></label>
							</div>
							<div class="platform-item">
								<span class="radio">
									<input id="platform-TENPAY" name="platform" value="1" type="radio">
									<label for="platform-TENPAY"></label>
								</span>
								<label class="platform-img" for="platform-TENPAY">
									<img src="/Project/Mls/Home/Public/Images/bankpc/tenpay.jpg" height="40px" width="158px"></label>
							</div>
							<div class="platform-item">
								<span class="radio">
									<input id="platform-ALIPAY" name="platform" value="2" type="radio">
									<label for="platform-ALIPAY"></label>
								</span>
								<label class="platform-img" for="platform-ALIPAY">
									<img src="/Project/Mls/Home/Public/Images/bankpc/alipay.jpg" height="40px" width="158px"></label>
							</div>
							<div class="platform-item">
								<span class="radio">
									<input id="platform-UNIONPAY" name="platform" value="3" type="radio">
									<label for="platform-UNIONPAY"></label>
								</span>
								<label class="platform-img" for="platform-UNIONPAY">
									<img src="/Project/Mls/Home/Public/Images/bankpc/chinapay.jpg" height="40px" width="158px"></label>
							</div>
							<div class="platform-item">
								<span class="radio">
									<input id="platform-QUFENQIPAY" name="platform" value="4" type="radio">
									<label for="platform-QUFENQIPAY"></label>
								</span>
								<label class="platform-img" for="platform-QUFENQIPAY">
									<img src="/Project/Mls/Home/Public/Images/bankpc/qufenqipay.jpg" height="40px" width="158px"></label>
							</div>
						</div>
					</div>
					<div class="pay-action" style="display:none">
						<div class="weixin-pay" style="display: none">
							<div class="qrcode-wrapper">
								<img src="" class="qrcode-img" height="150px" width="150px"></div>
							<div class="qrcode-tip">
								<span class="qrcode-tip-arrow"></span>
								<div class="tip-strong">请使用手机微信</div>
								<div class="tip-normal">扫描二维码进行支付</div>
							</div>
						</div>
						<button class="mls-btn mls-btn-primary js-gocharge">去支付</button>
					</div>
				</div>
			</div>
			<div class="content-item inet-pay">
				<div class="inet-money">
					<div class="radio">
						<input id="inet" name="payway" value="inet" type="radio">
						<label for="inet"></label>
					</div>
					<label class="pay-label" for="inet">网银支付</label>
					<span style="display: none;" class="other-btn">&lt;&lt;选择其他银行</span>
					<span class="pay-tip">需跳转网银页面支付</span>
				</div>
				<div style="display: none;" ii="inet" class="action inet-action">
					<div class="inet-list selecting">
						<div class="selected-inet">
							<div class="selected-inet-info">
								<span class="pay-money">
									支付
									<span class="strong">98.90</span>
									元
								</span>
								<img class="inet-img" src="/wallet/imgservice?url=" height="40px" width="158px">
								<span class="inet-info-item selected-singlelimit">单笔限额</span>
								<span class="inet-info-item no-border selected-dailylimit">单日限额</span>
							</div>
							<div class="divider"></div>
							<div class="select-card"></div>
						</div>
						<div class="list-wrapper">
							<div class="inet-item">
								<span class="radio">
									<input id="inet-ICBC" name="inet" value="0" type="radio">
									<label for="inet-ICBC"></label>
								</span>
								<label class="inet-img" for="inet-ICBC">
									<img src="/Project/Mls/Home/Public/Images/bankpc/icbc.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡 | 信用卡</div>
								</label>
							</div>
							<div class="inet-item">
								<span class="radio">
									<input id="inet-CCB" name="inet" value="1" type="radio">
									<label for="inet-CCB"></label>
								</span>
								<label class="inet-img" for="inet-CCB">
									<img src="/Project/Mls/Home/Public/Images/bankpc/ccb.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡 | 信用卡</div>
								</label>
							</div>
							<div class="inet-item">
								<span class="radio">
									<input id="inet-CMB" name="inet" value="2" type="radio">
									<label for="inet-CMB"></label>
								</span>
								<label class="inet-img" for="inet-CMB">
									<img src="/Project/Mls/Home/Public/Images/bankpc/cmb.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡 | 信用卡</div>
								</label>
							</div>
							<div class="inet-item">
								<span class="radio">
									<input id="inet-ABC" name="inet" value="3" type="radio">
									<label for="inet-ABC"></label>
								</span>
								<label class="inet-img" for="inet-ABC">
									<img src="/Project/Mls/Home/Public/Images/bankpc/abc.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡 | 信用卡</div>
								</label>
							</div>
							<div class="inet-item">
								<span class="radio">
									<input id="inet-BOC" name="inet" value="4" type="radio">
									<label for="inet-BOC"></label>
								</span>
								<label class="inet-img" for="inet-BOC">
									<img src="/Project/Mls/Home/Public/Images/bankpc/boc.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡 | 信用卡</div>
								</label>
							</div>
							<div class="inet-item">
								<span class="radio">
									<input id="inet-BANKCOMM" name="inet" value="5" type="radio">
									<label for="inet-BANKCOMM"></label>
								</span>
								<label class="inet-img" for="inet-BANKCOMM">
									<img src="/Project/Mls/Home/Public/Images/bankpc/bankcomm.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡 | 信用卡</div>
								</label>
							</div>
							<div class="inet-item">
								<span class="radio">
									<input id="inet-CIB" name="inet" value="6" type="radio">
									<label for="inet-CIB"></label>
								</span>
								<label class="inet-img" for="inet-CIB">
									<img src="/Project/Mls/Home/Public/Images/bankpc/cib.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡 | 信用卡</div>
								</label>
							</div>
							<div class="inet-item">
								<span class="radio">
									<input id="inet-CMBC" name="inet" value="7" type="radio">
									<label for="inet-CMBC"></label>
								</span>
								<label class="inet-img" for="inet-CMBC">
									<img src="/Project/Mls/Home/Public/Images/bankpc/cmbc.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡 | 信用卡</div>
								</label>
							</div>
							<div class="inet-item">
								<span class="radio">
									<input id="inet-CEB" name="inet" value="8" type="radio">
									<label for="inet-CEB"></label>
								</span>
								<label class="inet-img" for="inet-CEB">
									<img src="/Project/Mls/Home/Public/Images/bankpc/ceb.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡 | 信用卡</div>
								</label>
							</div>
							<div class="inet-item">
								<span class="radio">
									<input id="inet-CITIC" name="inet" value="9" type="radio">
									<label for="inet-CITIC"></label>
								</span>
								<label class="inet-img" for="inet-CITIC">
									<img src="/Project/Mls/Home/Public/Images/bankpc/citic.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡 | 信用卡</div>
								</label>
							</div>
							<div class="inet-item">
								<span class="radio">
									<input id="inet-GDB" name="inet" value="10" type="radio">
									<label for="inet-GDB"></label>
								</span>
								<label class="inet-img" for="inet-GDB">
									<img src="/Project/Mls/Home/Public/Images/bankpc/gdb.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡 | 信用卡</div>
								</label>
							</div>
							<div class="inet-item">
								<span class="radio">
									<input id="inet-PSBC" name="inet" value="11" type="radio">
									<label for="inet-PSBC"></label>
								</span>
								<label class="inet-img" for="inet-PSBC">
									<img src="/Project/Mls/Home/Public/Images/bankpc/psbc.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡</div>
								</label>
							</div>
							<div class="inet-item">
								<span class="radio">
									<input id="inet-SPDB" name="inet" value="12" type="radio">
									<label for="inet-SPDB"></label>
								</span>
								<label class="inet-img" for="inet-SPDB">
									<img src="/Project/Mls/Home/Public/Images/bankpc/spdb.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡 | 信用卡</div>
								</label>
							</div>
							<div class="inet-item">
								<span class="radio">
									<input id="inet-PINGANBANK" name="inet" value="13" type="radio">
									<label for="inet-PINGANBANK"></label>
								</span>
								<label class="inet-img" for="inet-PINGANBANK">
									<img src="/Project/Mls/Home/Public/Images/bankpc/pinganbank.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡 | 信用卡</div>
								</label>
							</div>
							<div class="inet-item">
								<span class="radio">
									<input id="inet-BJBANK" name="inet" value="14" type="radio">
									<label for="inet-BJBANK"></label>
								</span>
								<label class="inet-img" for="inet-BJBANK">
									<img src="/Project/Mls/Home/Public/Images/bankpc/bjbank.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡</div>
								</label>
							</div>
							<div class="inet-item">
								<span class="radio">
									<input id="inet-SHBANK" name="inet" value="15" type="radio">
									<label for="inet-SHBANK"></label>
								</span>
								<label class="inet-img" for="inet-SHBANK">
									<img src="/Project/Mls/Home/Public/Images/bankpc/shbank.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡 | 信用卡</div>
								</label>
							</div>
							<div class="inet-item">
								<span class="radio">
									<input id="inet-HXB" name="inet" value="16" type="radio">
									<label for="inet-HXB"></label>
								</span>
								<label class="inet-img" for="inet-HXB">
									<img src="/Project/Mls/Home/Public/Images/bankpc/hxb.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡</div>
								</label>
							</div>
							<div class="inet-item">
								<span class="radio">
									<input id="inet-SRCB" name="inet" value="17" type="radio">
									<label for="inet-SRCB"></label>
								</span>
								<label class="inet-img" for="inet-SRCB">
									<img src="/Project/Mls/Home/Public/Images/bankpc/srcb.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡 | 信用卡</div>
								</label>
							</div>
							<div class="inet-item">
								<span class="radio">
									<input id="inet-BJRCB" name="inet" value="18" type="radio">
									<label for="inet-BJRCB"></label>
								</span>
								<label class="inet-img" for="inet-BJRCB">
									<img src="/Project/Mls/Home/Public/Images/bankpc/bjrcb.jpg" height="40px" width="158px">
									<div class="hover-tip">支持：储蓄卡</div>
								</label>
							</div>
						</div>
					</div>
					<div class="pay-action" style="display:none">
						<div class="form form-horizonal">
							<div style="display: none;" class="form-group pay-pwd-row">
								<div class="group-label">支付密码：</div>
								<div class="group-content">
									<input class="mls-txt mls-txt-primary pay-key" name="payKey" id="inetPayKey_Id" type="password">
									<span class="error-msg" id="inetPayKeyErrMsg_Id"></span>
								</div>
							</div>
							<div class="form-group">
								<div style="margin-left: 0px;" class="group-content action-btns">
									<button class="mls-btn mls-btn-primary js-gocharge">去支付</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pay-form" style="display:none"></div>
</div>

<div style="max-height: 430px; margin-top: 15px;" class="dlg-holder">
	<div class="dlg-container"></div>
</div>
<iframe allowtransparency="true" scrolling="no" style="display: none; height: 430px;" class="dialogMaskFrame" name="dialogMaskFrame" id="dialogMaskFrame" frameborder="0"></iframe>
</body>