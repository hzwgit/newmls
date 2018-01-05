<?php if (!defined('THINK_PATH')) exit();?>
<link rel="stylesheet" href="/Project/Mls/Store/Public/Css/inline.css" media="all">
<link rel="stylesheet" href="/Project/Mls/Store/Public/Css/createshop.css" media="all">
<link rel="stylesheet" href="/Project/Mls/Store/Public/Css/introjs.css" media="all">
<link rel="stylesheet" href="/Project/Mls/Store/Public/Css/indexshop.css" media="all">
			
<script type="text/javascript" src="/Project/Mls/Store/Public/Js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="/Project/Mls/Store/Public/Js/ajaxfileupload.js"></script>
<script type="text/javascript" src="/Project/Mls/Store/Public/Js/region_select.js"></script>
<script type="text/javascript" src="/Project/Mls/Store/Public/Js/Createshop.js"></script>
<body class="body sidenav-default"> 
<div class="head">
	<div class="logo" id="logo">
		<a class="logo-link" href="/" title="美丽说-商家中心">
			<img class="logo-img" src="/shop/static/img/common/logo_black.png?v=f5cae9a941" alt="美丽说-商家中心" id="logo_img"></a>
		<a href="/" title="美丽说-商家中心"> <i class="logo-icon iconfont icon-logo" title="美丽说-商家中心"></i>
		</a>
	</div>

	<div class="nav">
		<div class="nav-right">
			<div class="nav-item nav-link">
				<ul class="nav-link-ul">
					<li class="nav-link-list nav-link-msg">
						<a href="/message/list/" class="menu-shortcut " target="_blank">
							<span class="nav-link-list-item">
								站内信 <i style="display:none;" id="nav-msg-num" class="msg-num">0</i>
							</span>
						</a>
					</li>
					<li class="nav-link-list">
						<a href="/servicecenter/service_detail/?cateId=3" class="menu-shortcut " target="_blank">
							<span class="nav-link-list-item">服务应用</span>
						</a>
					</li>
					<li class="nav-link-list">
						<a href="http://zhaoshang.meilishuo.com/business/help" class="menu-shortcut" target="_blank">
							<span class="nav-link-list-item">帮助中心</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="nav-item nav-panel" id="nav_panel">
				<div class="panel-item panel-portrait">
					<a href="http://www.meilishuo.com/shop/0" title="我的店铺" target="_blank">
						<img class="panel-portrait-img" src="<?php echo ($use["pic"]); ?>" alt="商家" title="商家"></a>
				</div>
				<div class="panel-item panel-username" id="nav_panel_username">
					<span class="panel-username-wrapper">
						<a href="http://www.meilishuo.com/shop/0" target="_blank" class="color-black" title=""></a>
					</span>
					<span class="panel-username-shopid text-muted">
						（ID：
						<span class="color-pink"><?php echo (session('sid')); ?></span>
						）
					</span>
					<!--i class="panel-username-icon iconfont icon-down">
				</i-->
			</div>
			<div class="panel-item">
				<span class="right">
					<a class="defail-link" href="<?php echo U('Login/logout');?>">退出</a>
				</span>
			</div>
		</div>
	</div>
</div>
<!-- <div class="station-msg" id="head-station-msg">
	<p id="station-msg-num-wrapper">
		您有
		<span class="color-red red_f">0</span>
		条新消息
	</p>
	<p>
		<a class="red_f" href="/message/list/" target="_blank">立即查看</a>
	</p>
</div> -->
</div>

<div class="wrapper">
<div class="content" id="content">
	<div class="content-wrapper">
	<input type="hidden" id="hidden" name="power" value="<?php echo ($use["power"]); ?>">
	<span></span>
		<!-- uiView:  -->
		<div class="ng-scope" ui-view="">
			<div class="createshop-index-index ng-scope" id="indexBox">
				<!--进度条-->
				<div id="steps">
					<div class="steps steps-horizonal steps-horizonal-160">
						<!-- ngRepeat: item in Meilishuo.constant.shop_status.info.status -->
						<div class="milestone ng-scope passed first" ng-class="{passed : item.is_down, first: $first, last: $last}" ng-repeat="item in Meilishuo.constant.shop_status.info.status">
							<div class="milestone-icon"><h2 style="margin-top: 7px;">1</h2>
								<!-- <i class="iconfont icon-circle milestone-bg milestone-bg-bottom"></i>
								<i class="iconfont icon-circle milestone-bg milestone-bg-top"></i>
								<i class="milestone-text ng-binding">1</i> -->
							</div>
							<div class="milestone-line">
								<i class="milestone-bg milestone-bg-circle iconfont icon-circle"></i>
								<i class="milestone-bg milestone-bg-bottom"></i>
								<i class="milestone-bg milestone-bg-top"></i>
								<i class="milestone-bg milestone-bg-top-left"></i>
								<i class="milestone-bg milestone-bg-top-right"></i>
							</div>
							<div class="milestone-label">
								<div class="ng-binding">开店信息填写</div>
							</div>
						</div>
						<!-- end ngRepeat: item in Meilishuo.constant.shop_status.info.status -->
						<!-- <div class="milestone ng-scope" ng-class="{passed : item.is_down, first: $first, last: $last}" ng-repeat="item in Meilishuo.constant.shop_status.info.status">
							<div class="milestone-icon">
								<i class="iconfont icon-circle milestone-bg milestone-bg-bottom"></i>
								<i class="iconfont icon-circle milestone-bg milestone-bg-top"></i>
								<i class="milestone-text ng-binding">2</i>
							</div>
							<div class="milestone-line">
								<i class="milestone-bg milestone-bg-circle iconfont icon-circle"></i>
								<i class="milestone-bg milestone-bg-bottom"></i>
								<i class="milestone-bg milestone-bg-top"></i>
								<i class="milestone-bg milestone-bg-top-left"></i>
								<i class="milestone-bg milestone-bg-top-right"></i>
							</div>
							<div class="milestone-label">
								<div class="ng-binding">缴纳保证金</div>
							</div>
						</div> -->
						<!-- end ngRepeat: item in Meilishuo.constant.shop_status.info.status -->
					<!-- 	<div class="milestone ng-scope" ng-class="{passed : item.is_down, first: $first, last: $last}" ng-repeat="item in Meilishuo.constant.shop_status.info.status">
							<div class="milestone-icon">
								<i class="iconfont icon-circle milestone-bg milestone-bg-bottom"></i>
								<i class="iconfont icon-circle milestone-bg milestone-bg-top"></i>
								<i class="milestone-text ng-binding">3</i>
							</div>
							<div class="milestone-line">
								<i class="milestone-bg milestone-bg-circle iconfont icon-circle"></i>
								<i class="milestone-bg milestone-bg-bottom"></i>
								<i class="milestone-bg milestone-bg-top"></i>
								<i class="milestone-bg milestone-bg-top-left"></i>
								<i class="milestone-bg milestone-bg-top-right"></i>
							</div>
							<div class="milestone-label">
								<div class="ng-binding">风格审核</div>
							</div>
						</div> -->
						<!-- end ngRepeat: item in Meilishuo.constant.shop_status.info.status -->
						<div class="milestone ng-scope" ng-class="{passed : item.is_down, first: $first, last: $last}" ng-repeat="item in Meilishuo.constant.shop_status.info.status">

							<div class="milestone-icon"><h2 style="margin-top: 7px;">2</h2>
								<!-- <i class="iconfont icon-circle milestone-bg milestone-bg-bottom"></i>
								<i class="iconfont icon-circle milestone-bg milestone-bg-top"></i>
								<i class="milestone-text ng-binding">2</i> -->
							</div>
							<div class="milestone-line">
								<i class="milestone-bg milestone-bg-circle iconfont icon-circle"></i>
								<i class="milestone-bg milestone-bg-bottom"></i>
								<i class="milestone-bg milestone-bg-top"></i>
								<i class="milestone-bg milestone-bg-top-left"></i>
								<i class="milestone-bg milestone-bg-top-right"></i>
							</div>
							<div class="milestone-label">
								<div class="ng-binding">资质审核</div>
							</div>
						</div>
						<!-- end ngRepeat: item in Meilishuo.constant.shop_status.info.status -->
					<!-- 	<div class="milestone ng-scope" ng-class="{passed : item.is_down, first: $first, last: $last}" ng-repeat="item in Meilishuo.constant.shop_status.info.status">
							<div class="milestone-icon">
								<i class="iconfont icon-circle milestone-bg milestone-bg-bottom"></i>
								<i class="iconfont icon-circle milestone-bg milestone-bg-top"></i>
								<i class="milestone-text ng-binding">5</i>
							</div>
							<div class="milestone-line">
								<i class="milestone-bg milestone-bg-circle iconfont icon-circle"></i>
								<i class="milestone-bg milestone-bg-bottom"></i>
								<i class="milestone-bg milestone-bg-top"></i>
								<i class="milestone-bg milestone-bg-top-left"></i>
								<i class="milestone-bg milestone-bg-top-right"></i>
							</div>
							<div class="milestone-label">
								<div class="ng-binding">培训考试</div>
							</div>
						</div> -->
						<!-- end ngRepeat: item in Meilishuo.constant.shop_status.info.status -->
						<div class="milestone ng-scope last" ng-class="{passed : item.is_down, first: $first, last: $last}" ng-repeat="item in Meilishuo.constant.shop_status.info.status">
							<div class="milestone-icon"><h2 style="margin-top: 7px;">3</h2>
								<!-- <i class="iconfont icon-circle milestone-bg milestone-bg-bottom"></i>
								<i class="iconfont icon-circle milestone-bg milestone-bg-top"></i>
								<i class="milestone-text ng-binding">6</i> -->
							</div>
							<div class="milestone-line">
								<i class="milestone-bg milestone-bg-circle iconfont icon-circle"></i>
								<i class="milestone-bg milestone-bg-bottom"></i>
								<i class="milestone-bg milestone-bg-top"></i>
								<i class="milestone-bg milestone-bg-top-left"></i>
								<i class="milestone-bg milestone-bg-top-right"></i>
							</div>
							<div class="milestone-label">
								<div class="ng-binding">开店成功</div>
							</div>
						</div>
						<!-- end ngRepeat: item in Meilishuo.constant.shop_status.info.status -->
					</div>
				</div>
				<div class="title-tip margin-top-2">填写开店信息</div>
				<!-- ngIf: data.audit_reason -->
				<!--店主信息-->
				<form id="formInfo"method="post"action="<?php echo U('upload');?>"  enctype="multipart/form-data">
				<input type="hidden" id="flag"name="hidden"value="true">
				<div>
					<p class="title ng-binding">
						<!-- ngIf: data.type!=2 -->
						<span class="ng-scope" ng-if="data.type!=2">店主信息</span>
						<!-- end ngIf: data.type!=2 -->
						<!-- ngIf: data.type==2 -->
						（必须完善店主的基本资料）
						<span class="red">*</span>
					</p>
					<div class="form-group">
						<label>姓名</label>
						<input class="form-control ng-pristine ng-invalid ng-invalid-required" name="truename" ng-change="data.id_cards_name=data.partner_name" ng-model="data.partner_name" value="<?php echo ($use["truename"]); ?>">
						<!-- ngIf: data.type==1 -->
						<span class="ng-scope"id="scope" ng-if="data.type==1" ng-hide="formInfo.partner_name.$dirty &amp;&amp; formInfo.partner_name.$invalid">店主姓名须与后期结算的银行卡账户姓名一致</span>
						<!-- end ngIf: data.type==1 -->
						<!-- ngIf: data.type==2 -->
						<span id="hide"class="red ng-hide" ng-show="formInfo.partner_name.$dirty &amp;&amp; formInfo.partner_name.$invalid">请填写姓名</span>
					</div>
					<div class="form-group">
						<label>手机</label>
						<input id="phone"class="form-control ng-pristine ng-invalid ng-invalid-required ng-valid-pattern" name="phone" ng-model="data.partner_tel" value="<?php echo ($use["phone"]); ?>"ng-pattern="/^1[3,5,8]\d{9}$/" required="">
						<!-- <button disabled="disabled" class="btn btn-primary ng-binding" ng-disabled="formInfo.partner_tel.$invalid || temp.phoneButton!=0" ng-click="sendPhoneno()" ng-bind="temp.phoneButton==0?'发送验证码':'还有'+temp.phoneButton+'秒'">发送验证码</button> -->
						<span class="red ng-hide" id="hide1"ng-show="formInfo.partner_tel.$dirty &amp;&amp; formInfo.partner_tel.$error.required">请填写手机号码</span>
						<!-- <span class="red ng-hide" ng-show="formInfo.partner_tel.$dirty &amp;&amp; formInfo.partner_tel.$error.pattern">手机号码格式不正确</span> -->
					</div>
					<!-- <div class="form-group">
						<label>验证码</label>
						<input name="partner_vilino" ng-model="data.partner_vilino" ng-pattern="/^\d{6}$/" class="form-control ng-pristine ng-invalid ng-invalid-required ng-valid-pattern" required="">
						<span class="red ng-hide" ng-show="formInfo.partner_vilino.$dirty &amp;&amp; formInfo.partner_vilino.$error.required">请填写验证码</span>
						<span class="red ng-hide" ng-show="formInfo.partner_vilino.$dirty &amp;&amp; formInfo.partner_vilino.$error.pattern">验证码为6位数字</span>
					</div> -->
					<div class="form-group">
						<label>地区</label>
						
						<input  id="area"class="form-control ng-pristine ng-invalid ng-invalid-required" name="area"value="<?php echo ($use["area"]); ?>" ng-change="data.id_cards_name=data.partner_name" ng-model="data.partner_name" required="">
						<div class="control-group">
						<span></span>
			
				</div>
					  <div class="controls">
				    <select name="location_p" id="location_p">
				    </select>
				    <select name="location_c" id="location_c">
				    </select>
				    <!-- <select name="location_a" id="location_a">
				    </select> -->
				    <script type="text/javascript">
						new PCAS('location_p', 'location_c', 'location_a', '广东省', '', '');
					</script>
				  </div>
						<span class="red ng-hide" ng-show="formInfo.partner_tel.$dirty &amp;&amp; formInfo.partner_tel.$error.required"></span>
					</div>
					<div class="form-group">
						<label>联系邮箱</label>
						<input name="email" value="<?php echo ($use["email"]); ?>"id="email"ng-model="data.partner_email" class="form-control ng-pristine ng-invalid ng-invalid-required ng-valid-email" required="" type="email">
						<span class="red ng-hide" ng-show="formInfo.partner_email.$dirty &amp;&amp; formInfo.partner_email.$error.required"></span>
						<!-- <span class="red ng-hide" ng-show="formInfo.partner_email.$dirty &amp;&amp; formInfo.partner_email.$error.email">邮箱格式不正确</span> -->
					</div>
					<div class="form-group">
						<label>联系QQ</label>
						<input class="form-control ng-pristine ng-invalid ng-invalid-required ng-valid-pattern" name="qq"value="<?php echo ($use["qq"]); ?>" id="QQ"ng-model="data.partner_qq" ng-pattern="/[1-9][0-9]{4,}/" required="">
						<span class="red ng-hide" ng-show="formInfo.partner_qq.$dirty &amp;&amp; formInfo.partner_qq.$error.required">请填写联系QQ</span>
						<!-- <span class="red ng-hide" ng-show="formInfo.partner_qq.$dirty &amp;&amp; formInfo.partner_qq.$error.pattern">请填写正确的QQ号码</span> -->
					</div>
				
					<p class="title">
						<!-- ngIf: data.type!=2 -->
						<span class="ng-scope" ng-if="data.type!=2">身份信息</span>
						<!-- end ngIf: data.type!=2 -->
						<!-- ngIf: data.type==2 -->
						（1个身份证只能开一家店）
						<span class="red">*</span>
					</p>
					<div class="form-group">
						<label>身份证号码</label>
						<input class="form-control ng-pristine ng-invalid ng-invalid-required ng-valid-pattern" name="card"id="cards" value="<?php echo ($use["card"]); ?>"ng-model="data.id_cards" ng-pattern="/^\d{15}|\d{18}$/" required="">
						<span class="red ng-hide" ng-show="formIdcard.cards_number.$dirty &amp;&amp; formIdcard.cards_number.$error.required">请填写身份证号码</span>
					<!-- 	<span class="red ng-hide" ng-show="formIdcard.cards_number.$dirty &amp;&amp; formIdcard.cards_number.$error.pattern">身份证号码格式不正确</span> -->
					</div>
					<div class="form-group">
						<label>身份证姓名</label>
						<input class="form-control ng-pristine ng-invalid ng-invalid-required" name="cards_name" value="<?php echo ($use["truename"]); ?>"ng-model="data.id_cards_name" required="">
						<span class="red ng-hide" ng-show="formIdcard.cards_name.$dirty &amp;&amp; formIdcard.cards_name.$error.required">请填写身份证姓名</span>
					</div>
					
					<div class="form-group">
						<label class="v-align-top">持身份证正面照</label>
					<!-- 	<div class="imgBox">
						<img width="200"src="<?php echo ($use["hold_pic"]); ?>">
						<button style="overflow: hidden;" class="btn btn-primary ng-pristine ng-valid" ng-change="ngModel('data.id_cards_img.whole',files)" ng-file-select="" ng-model="files" allow-dir="true" accept="image/*">
						<div class="img_submit">
						<span>选择上传的图片</span>
						<input name="hold_pic" class="img_submit_in" id="hold_pic"value="img_submit" type="file"></div>上传照片
							<input ng-file-generated-elem="true" tabindex="-1" name="hold_pic"style="width: 1px; height: 1px; opacity: 0; position: absolute; padding: 0px; margin: 0px; overflow: hidden;" accept="image/*" type="file"></button>
					</div> -->
<input id="avatar_priview" type="hidden" name="hold_pic" value="<?php echo ($use["hold_pic"]); ?>">
<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"
WIDTH="650" HEIGHT="450" id="myMovieName">
<PARAM NAME=movie VALUE="/Project/Mls/Store/Public/Js/avatar.swf">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#FFFFFF>
<param name="flashvars" value="imgUrl=<?php echo ($use["hold_pic"]); ?>&uploadUrl=<?php echo U('Createsh/fileup');?>&uploadSrc=false" />
<EMBED src="/Project/Mls/Store/Public/Js/avatar.swf" quality=high bgcolor=#FFFFFF WIDTH="650" HEIGHT="450" wmode="transparent" flashVars="imgUrl=<?php echo ($use["hold_pic"]); ?>&uploadUrl=<?php echo U('Createsh/fileup');?>&uploadSrc=false"
NAME="myMovieName" ALIGN="" TYPE="application/x-shockwave-flash" allowScriptAccess="always"
PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
</EMBED>
</OBJECT>

 <script type="text/javascript">
   function uploadevent(status,picUrl,callbackdata){
  //alert(picUrl); //后端存储图片
	//alert(callbackdata); //后端返回数据
        status += '';
     switch(status){
     case '1':
		//var time = new Date().getTime();
		var filename162 = picUrl;
		/*var filename48 = picUrl+'_48.jpg';
		var filename20 = picUrl+"_20.jpg";*/

		document.getElementById('avatar_priview').value = filename162;
		
	break;
     case '-1':
	  window.location.reload();
     break;
     default:
     window.location.reload();
    } 
   }
  </script>
						<div class="example">
							<span>示例：</span>
							<img src="http://i.meilishuo.net/css/images/store/head_photo.jpg">
							<p>
								1. 请手持本人身份证。
								<br>
								2. 照片需免冠，建议素颜。
								<br>
								3. 必须看清证件号且证件号不能被遮挡。
								<br>4. 照片支持jpg、jpeg、bmp格式，最大不超过5M。</p>
						</div>
						<span class="red margin-left-2 v-align-top ng-hide" ng-show="temp.dirty.photoWhole &amp;&amp; !data.id_cards_img.whole">请上传持身份证正面照</span>
					</div>
					<p class="title">
						<span>店铺名称认证</span>
						（给你的美丽说小店取个好听的名字吧，店铺名一旦确认无法更改）
						<span class="red">*</span>
					</p>
					<label>店铺名称</label>
					<input class="form-control margin-left-1 margin-right-1 ng-pristine ng-invalid ng-invalid-required" name="shop_name" value="<?php echo ($use["shop_name"]); ?>"id="shop_name"ng-model="data.shop_name" required="">
					<span class="red ng-hide" ng-show="formIdcard.cards_name.$dirty &amp;&amp; formIdcard.cards_name.$error.required"></span>
					<!-- <label class="margin-left-2 red ng-hide" ng-show="formShop.shop_name.$dirty &amp;&amp; formShop.shop_name.$invalid">请填写店铺名称</label> -->
				</div>
			<button id="submit"class="btn btn-lg btn-primary submitBtn margin-top-8" ng-click="submit()">提交申请</button>
		</form>
				<!--消费者保障服务确认-->
			<!-- 	<div class="box box-services" id="serviceArea">
				<p class="title">
					<span>消费者保障服务确认</span>
					（所有入住美丽说平台商家必须提供以下服务）
					<span class="red">*</span>
				</p>
				<div class="one">
					<span></span>
					<br>七天无条件退货</div>
				<div class="one two">
					<span></span>
					<br>先行赔付</div>
				<div class="one three">
					<span></span>
					<br>退货返10元运费</div>
				<div class="margin-top-3">
					<label>
						<input class="ng-pristine ng-valid" ng-model="data.service1" type="checkbox">&nbsp;我已确认并同意提供《消费者保障服务》</label>
				</div>
				<div class="content margin-top-2">
					<p>发布须知：美丽说禁止发布侵犯他人知识产权的商品，请确认商品符合知识产权保护的规定</p>
					<div>
						美丽说好店服务协议
						<br>
						在接受美丽说好店服务协议（以下简称“本协议”）之前，请您仔细阅读本协议的全部内容。如果您对本协议的任何条款有疑问，请通过美丽说客服渠道进行询问，我们将向您解释条款内容。如果您不同意本协议的任何内容，或者无法准确理解美丽说对条款的解释，请不要进行后续操作。否则，表示您已接受了以下所述的全部条款和条件，同意受本协议约束。
						<br>
						在本协议中，“美丽说”指美丽说（北京）网络科技有限公司及其关联公司运营的美丽说
						<a target="_blank" href="http://www.meilishuo.com">（http://www.meilishuo.com）</a>
						及提供的服务，“商家”指向美丽说申请开设店铺的个人、个体工商户和中国大陆企业。
						<br>
						美丽说对本协议中的所有条款有解释权，美丽说有权以修改、更新等方式不时调整本协议及附件，以及相关规则的内容，相关内容将公布于美丽说上或以其他方式通知商家。除非商家通知美丽说不愿接受调整后的内容并停止使用美丽说好店服务，否则调整后的内容将于公布之日或通知另行指定的日期开始生效。
						<br>
						1.合作模式
						<br>
						1.1 美丽说根据其技术能力和资源提供美丽说平台服务。
						<br>
						1.2 商家通过美丽说向用户提供商品或服务，商家应依法经营，自负盈亏，独立承担责任和风险。
						<br></div>
					<a class="red margin-left-2" target="_blank" href="/create/service_agreement/">查看详情》</a>
				</div>
				<div class="margin-top-2">
					<label>
						<input class="ng-pristine ng-valid" ng-model="data.service2" type="checkbox">&nbsp;我已确认阅读并同意《美丽说好店服务协议》</label>
				</div>
			</div> -->
				
			</div>
		
	</div>
</div>
</div>
</body>