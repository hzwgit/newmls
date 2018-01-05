<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <style type="text/css" media="screen">
  html, body { height:100%; background-color: #ffffff;}
  #flashContent { width:100%; height:100%; }
  </style>
  
  <script type="text/javascript">
   function uploadevent(status,picUrl,callbackdata){
  //alert(picUrl); //后端存储图片
	//alert(callbackdata); //后端返回数据
        status += '';
     switch(status){
     case '1':
		var time = new Date().getTime();
		var filename162 = picUrl+'_162.jpg';
		var filename48 = picUrl+'_48.jpg';
		var filename20 = picUrl+"_20.jpg";

		document.getElementById('avatar_priview').innerHTML = "头像2: <img src='"+filename48+"?" + time + "'/>" ;
		
	break;
     case '-1':
	  window.location.reload();
     break;
     default:
     window.location.reload();
    } 
   }
  </script>
  <meta charset="UTF-8">
  <title></title> 
  <link href="/Project/Mls/Home/Public/Css/bootstrap.min.css" rel="stylesheet" media="screen">
 <link href="/Project/Mls/Home/Public/Css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="/Project/Mls/Home/Public/Css/base.css" media="all">
  <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/personal.css" media="all">
  <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/setPersonal.css" media="all">
    
  <!--加载顶部文件-->
  
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
    
  <div style="margin-bottom: 0px;" class="header_bg ">
      <div class="clear_f"></div>
      <div class="header_top logo_wrap">
        <a class="logo_new" href="/Project/index.php/Home/index/index"></a>
        <div class="ser_n">
          <form class="searchBox" action="/Project/index.php/Home/index/search" method="get">
            <div class="search-table">
              <span class="cur" data-type="1">宝贝</span>
              <!-- <div style="display: none;" class="list">
                <ul>
                  <li>
                    <a data-type="1">宝贝</a>
                  </li>
                  <li>
                    <a data-type="4">商家</a>
                  </li>
                  <li>
                    <a data-type="3">杂志</a>
                  </li>
                  <li>
                    <a data-type="2">用户</a>
                  </li>
                </ul>
              </div> -->
            <!--   <em class="arrow"></em> -->
            </div>
            <span class="ipt1">
              <em class="i_search"></em>
              <input class="searchKey" name="searchKey" autocomplete="off" value="" placeholder="搜流行商品" data-placeholder="搜流行商品" type="text" />
            </span>
<!--             <input class="search_type" value="1" name="searchType" type="hidden" />
            <input class="filter" value="goods" name="filter" type="hidden" />
            <input class="search_frm" value="searchsuggestion" name="frm" type="hidden" />
            <input class="suggest_frm" value="" name="suggest_frm" type="hidden" /> -->
            <span class="ipt2">
              <input class="fm_hd_btm_shbx_bttn" value="搜 索" type="submit" />
            </span>
          </form>
          <div class="clear_f"></div>
          <ul class="searchType none_f"></ul>
          <script>    
				$(function(){
					var $flag = false;
					$(".fm_hd_btm_shbx_bttn").click(function(){
						if($(".searchKey").val()){
							$flag = true;
						};
						return $flag;
					})
				})
             //$.each(prompt , function(index , data){   
             // <li class="searchKeyItem" stype="goods">echo data</li>      
              // });
             </script>
        </div>
        <!-- <ul class="cart_info">
        <li>
          <a href="/cart" target="_blank">
            <span class="carts_num none_f">
              <span>undefined</span>
            </span>
            <em class="i_cart">&nbsp;</em>
            查看购物车
          </a>
        </li>
        <li>
          <a href="/order" target="_blank">
            <em class="i_order">&nbsp;</em>
            我的订单
          </a>
        </li>
      </ul>
      -->
    </div>
  </div>

  <!--导航栏js-->
<script type="text/javascript" src="/Project/Mls/Home/Public/Js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="/Project/Mls/Home/Public/Js/navbar.js"></script>
<script>
	$(function(){
		$(".dress").mouseover(function(){
			$('#close').css('display','block');
		}).mouseout(function(){
			$('#close').css('display','none');
		});
	})
</script>
<div style="position: relative; top: 0px; height: auto;" id="navbar">
    <div class="wheader">
      <div class="header_b">
        <ul class="nav_new">
          <li class="home">
            <a class="r_d" href="/Project/index.php/Home/index">
              首页
              <span class="shining none_f"></span>
            </a>
          </li>
          <li class="guang">
            <a class="" href="/Project/index.php/Home/Guang/hot">今日最热</a>
          </li>
          <li class="dress">
            <a href="/Project/index.php/Home/Guang/firstCatalog/id/1">
              衣服
            </a>
            <div id="close" style="display: none;" class="header_list">
              <div id="first" class="header_lcon">
                <!-- <a class="" href="/guang/catalog/dress?nid=210113&amp;cata_id=2001000000000&amp;frm=daeh">上衣</a>
                <a class="" href="/guang/catalog/dress?nid=210115&amp;cata_id=2004000000000&amp;frm=daeh">裙子</a>
                <a class="" href="/guang/catalog/dress?nid=210117&amp;cata_id=2006000000000&amp;frm=daeh">裤子</a>
                <a class="" href="/guang/catalog/dress?nid=210119&amp;cata_id=2009000000000&amp;frm=daeh">内衣</a> -->
              </div>
            </div>
          </li>
          <li>
            <a class="" href="/Project/index.php/Home/Guang/firstCatalog/id/10">鞋子</a>
          </li>
          <li>
            <a class="" href="/Project/index.php/Home/Guang/firstCatalog/id/39">包包</a>
          </li>
          <li>
            <a class="" href="/Project/index.php/Home/Guang/firstCatalog/id/40">配饰</a>
          </li>
          <li>
            <a class="" href="/guang/catalog/jiaju?nid=210107&amp;cata_id=9000000000000&amp;frm=daeh">家居</a>
          </li>
          <li>
            <a class="r_r " href="/beauty?frm=daeh">美妆</a>
          </li>
          <li class="sale">
            <a class="" href="/biz/shareact/list/?frm=daeh">特卖</a>
          </li>
          <li>
            <a class="" href="/tuan/?frm=daeh">团购</a>
          </li>
          <li>
            <a class="" href="/shop/?frm=daeh">好店</a>
          </li>
          <li class="group">
            <a class="" href="/magazine?frm=daeh">杂志</a>
          </li>
          <li class="report">
            <a class=" fclub" href="/welfare?frm=daeh">
              福利社
              <em class="white_arrow"></em>
            </a>
            <div class="header_list">
              <div class="header_lcon">
                <a href="/daren?frm=daeh">达人</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>


<div class="settings">
    <div class="hp_tab">
        <div class="use-info">
            <img src="<?php echo ($pic); ?>" alt="" class="use-pic">
            <p href="" class="use-name">
                <a class="use" href="" title="<?php echo (session('homename')); ?>"><?php echo (session('homename')); ?></a>
            </p>
            <p class="use-id">用户ID：<?php echo (session('hid')); ?></p>
        </div>
		<div class="sub_tab">
			<ul class="account-manage"> <strong>账号管理</strong>
				<li>
					<a href="<?php echo U('Person/index');?>" >我的信息</a>
				</li>
				<li>
					<a href="<?php echo U('Person/filePic');?>" class="red_f">设置头像</a>
				</li>
				<li>
					<a href="<?php echo U('Person/upPass');?>">修改密码</a>
				</li>
				
			</ul>
			<ul class="account-safe"> <strong>账号安全</strong>
				<li>
					<a href="/settings/safeCon" style="border:none;">安全中心</a>
				</li>
				<li>
					<a href="/settings/bindMobile" style="border:none;">手机绑定</a>
				</li>
				<li>
					<a href="/settings/loginEqm" style="border:none;">登录设备</a>
				</li>
				<li>
					<a href="/settings/safeHelp" style="border:none;">安全贴士</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="settings_box">
		<strong class="title">设置头像</strong>
		<fieldset>
			<form id="setAvatar" action="<?php echo U('Person/update');?>" method="post"  target="upload_file" enctype="multipart/form-data">
				<div class="setAvatar">
				 <div id="altContent">

<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"
WIDTH="650" HEIGHT="450" id="myMovieName">
<PARAM NAME=movie VALUE="/Project/Mls/Home/Public/Js/avatar.swf">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#FFFFFF>
<param name="flashvars" value="imgUrl=<?php echo ($pic); ?>&uploadUrl=<?php echo U('Person/fileup');?>&uploadSrc=false" />
<EMBED src="/Project/Mls/Home/Public/Js/avatar.swf" quality=high bgcolor=#FFFFFF WIDTH="650" HEIGHT="450" wmode="transparent" flashVars="imgUrl=<?php echo ($pic); ?>&uploadUrl=<?php echo U('Person/fileup');?>&uploadSrc=false"
NAME="myMovieName" ALIGN="" TYPE="application/x-shockwave-flash" allowScriptAccess="always"
PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
</EMBED>
</OBJECT>
 <!-- <div id="avatar_priview"></div> -->

  <!-- </div>
  
  					<div>
  						<div class="img_submit">
  							<span>选择上传的图片</span>
  							<input name="attach" class="img_submit_in" value="img_submit" type="file"></div>
  						<input name="mode" value="3" type="hidden">
  						<input name="x1" id="x1" value="" type="hidden">
  						<input name="y1" id="y1" value="" type="hidden">
  						<input name="w" id="w" value="" type="hidden">
  						<input name="h" id="h" value="" type="hidden">
  						<iframe id="get_upload_file" name="upload_file" class="none_f" frameborder="0"></iframe>
  					</div>
  					<p>选一张您喜欢的照片做头像吧(建议图片尺寸不小于200*200)。支持Jpeg和静态Gif格式，大小不超过2M。</p>
  					<img src="<?php echo ($pic); ?>">
  					
  						<br>
  					<input name="save_thumbnail" value="确 认" id="set_submit" class="ext_submit" type="submit"></div>
  				</div> -->
			</form>
		</fieldset>
	</div>
</div>