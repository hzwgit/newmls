<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="/Project/Public/Css/bootstrap.min.css" media="all">
	<link rel="stylesheet" href="/Project/Mls/Home/Public/Css/base.css" media="all">
	<link rel="stylesheet" href="/Project/Mls/Home/Public/Css/confirm.css" media="all">

	<link rel="stylesheet" href="/Project/Mls/Home/Public/Css/shop_con.css" media="all">
	<script type="text/javascript" src="/Project/Public/Js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="/Project/Public/Js/bootstrap.min.js"></script>

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
    

	<div class="main">
			<div class="shop_contit">
			<div class="shop_title clearfix_f">
				<div class="shop_info_rate js-shop-rate">
					<h2 class="shop_name">
						<a> <?php echo ($shopinfo['name']); ?> </a>
					</h2>
					<p class="rate_info">
						<span class="f16_f mr6_f gray_f">[</span>
						<span class="mr4_f">
							描述 <b class="fGreen">4.6</b>
						</span>
						<span class="mr4_f">
							质量 <b class="fGreen">4.6</b>
						</span>
						<span class="mr4_f">
							服务
							<b class="fGreen">4.7</b>
						</span>
						<span class="mr4_f">
							发货
							<b class="fGreen">4.7</b>
						</span>
						<span class="f16_f ml2_f gray_f">]</span>
					</p>
					<div class="shop_arrows"></div>
				</div>
				<div style="width: 380px;" class="shop_con clearfix_f js-shop-rate-panel">
					<div class="clearfix_f">
						<ul class="shop_con_l left_f">
							<li>店铺评分</li>
							<li>
								描述一致：
								<span>4.6</span>
							</li>
							<li>
								质量满意：
								<span>4.6</span>
							</li>
							<li>
								服务态度：
								<span>4.7</span>
							</li>
							<li>
								发货速度：
								<span>4.7</span>
							</li>
						</ul>
						<ul class="shop_con_m left_f">
							<li>比同行平均</li>
							<li>
								<span class="grenlevbtn">低</span>
								2.13%
							</li>
							<li>
								<span class="grenlevbtn">低</span>
								2.13%
							</li>
							<li>
								<span class="grenlevbtn">低</span>
								2.08%
							</li>
							<li>
								<span class="grenlevbtn">低</span>
								2.08%
							</li>
						</ul>
						<ul class="shop_con_r left_f">
							<li>商家信息</li>
							<li>
								所在地区：
								<span>浙江杭州</span>
							</li>
							<li>
								商品数量：
								<span>261</span>
							</li>
							<li>
								销售数量：
								<span>194376</span>
							</li>
							<li>
								创建时间：
								<span>2013.11.29</span>
							</li>
						</ul>
					</div>
					<div class="clearfix_f">
						<a href="/shop/rating/?shop_id=106093&amp;frm=rate_to_rateall" class="btnforDetail red_f ml40_f left_f" target="_blank">评分详情</a>
						<a href="/shop/106093?frm=rate_to_shop" class="btnforShop white_f left_f" target="_blank">进入本店</a>
					</div>
				</div>
				<div class="top_fans mt12 shop_follow">
					<div class="j_fans">9353粉丝</div>
					<font class="attention no_att" style="cursor:default">
						<span>+</span>
						关注本店
					</font>
					<font class="goqq knilmi" style="cursor:default" > <em class="qqico">&nbsp;</em>
						联系客服
					</font>
					<div class="clear_f"></div>
				</div>
			</div>
		</div>
	
	<script>
	var $url = "<?php echo U('Shopinfo/action',array('id'=> I('get.id') ));?>";
	var $idUrl = "<?php echo U('Shopinfo/index',array('id'=> I('get.id') ));?>";
	</script>

	<script type="text/javascript" src="/Project/Public/Js/shopinfo.js"></script>
		<div style="height: 152px;" id="shop-hd" class="shop-hd">
		<?php if($banner['pic'] == null): ?><a class="top-banner"  style="background-image:url(http://imgtest-dl.meiliworks.com/pic/_o/1e/f4/b9ffef1d744fb01e18689db7d3f9_1200_120.cf.jpg);"></a>
			<?php else: ?>
			<a class="top-banner"  style="background-image:url(/Project/Public<?php echo ($banner['pic']); ?>);"></a><?php endif; ?>
			<div class="shop-nav" id="shop-nav">
				<ul class="shop-nav-top">
					<li>
						<a href="<?php echo U('Shopinfo/index');?>/id/<?php echo ($_GET['id']); ?>" target="_blank">店铺首页</a>
					</li>

					<?php if(is_array($pType)): foreach($pType as $key=>$vo): if($vo['state'] != null): ?><li class="js-nav-item">
								<a href="javascript:;" class="js-new-all" path-id="<?php echo ($vo['id']); ?>" path-url="/Project/index.php/Home/Shopinfo">
									<?php echo ($vo['name']); ?>
										<span class="js-new-goods-num label-item-new" >21</span> <i class="icon-tr">▾</i>
									</a>
									<ul class="shop-nav-nest shop-nav-new">
										<?php else: ?>		
										<li>
											<a class="js-newest-goods" href="javascript:;" path-id="<?php echo ($vo['id']); ?>" path-url="/Project/index.php/Home/Shopinfo">
												<?php echo ($vo['name']); ?> <i class="label-item-num">21</i>
												</a>
											</li>

											<?php if($pType[($key+1)]['state'] != null or $pType[$key+1]['name'] == null): ?></ul>
										</li><?php endif; endif; endforeach; endif; ?>

							<li>
								<a href="/help/feedback#wx" target="_blank">支付指引</a>
							</li>
						</ul>
					</div>
				</div>



		<div class="clear_f"></div>




	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<?php if(is_array($image)): foreach($image as $k=>$val): if($k == 0): ?><li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<?php else: ?>	
					<li data-target="#carousel-example-generic" data-slide-to="1"></li><?php endif; endforeach; endif; ?>
		</ol>

		<div class="carousel-inner" role="listbox">
			<?php if(is_array($image)): foreach($image as $key=>$vo): if($key == 0): ?><div class="item active">
						<img src="/Project/Public<?php echo ($vo['pic']); ?>" alt=""></div>
					<?php else: ?>	
					<div class="item">
						<img src="/Project/Public<?php echo ($vo['pic']); ?>" alt=""></div><?php endif; endforeach; endif; ?>
		</div>

		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	</div>



		<div class="user_module" style="background:none;">
			<div class="pics">
				<div class="pic">
					<a>
						<img src="http://d05.res.meilishuo.net/pic/_o/83/f8/d62eaf7e982b37a7253e7a56d591_950_208.cf.jpg"></a>
				</div>
			</div>
		</div>







		<div class="clear_f"></div>
		<div class="goods_list" >
			<div class="order_by">
				<div class="g_title">全部商品（261）</div>
				<ul class="orderby_list">
					<li class="red_f">
						<a href="javascript:;">销量</a>
					</li>
					<li class="o_item ">
						<a href="javascript:;">最新</a>
					</li>
				</ul>
				<div class="clear_f"></div>
			</div>

			<div class="goods_wall" style="width:960px;" id="main">
			<!--遍历-->
			<?php if(is_array($goods)): foreach($goods as $key=>$vo): ?><div  coli="0" col="0" class="poster_grid retsop poster_wall pin" >
					<div class="new_poster">
						<div class="np_pic hover_pic">
							<div class="price"><?php echo ($vo['price']); ?></div>
							<a class="pic_load" href="/Project/index.php/Home/Share/index/id/<?php echo ($vo['id']); ?>" target="_blank" title="<?php echo ($vo['name']); ?>">
								<img class="goods_pic" src="/Project/Public<?php echo ($vo['g_pic']); ?>" alt="<?php echo ($vo['name']); ?>" height="328" width="226"></a>
							<div class="like_merge">
								<a class="right_f poster_likes " href="javascript:void(0)">
									<i class="like_status lm_like">&nbsp;</i>
								</a>
								<a class="right_f poster_forward" href="javascript:void(0)">
									<em class="lm_shouji">&nbsp;</em>
									收进杂志
								</a>
							</div>
						</div>
						<div class="title">
							<p>
								<a href="/Project/index.php/Home/Share/index/id/<?php echo ($vo['id']); ?>" target="_blank"><?php echo ($vo['name']); ?></a>
							</p>
						</div>
						<div class="clear_f"></div>
						<div class="comm_num twiiter_box">
							<a class="pl" href="/Project/index.php/Home/Share/index/id/<?php echo ($vo['id']); ?>" target="_blank">销量（<?php echo ($vo['buy_num']); ?>）</a>
							<a isshowlike="1" s_uid="47172902" class="left_f poster_likes likes " href="javascript:void(0)">
								<b class="likes_status">
									<i class="lm_love2">&nbsp;</i>
									喜欢
								</b>
								<span class="red_f f14_f poster_like_num">0</span>
							</a>
						</div>
					</div>
				</div><?php endforeach; endif; ?>
			<!--结束-->	
			</div>
		</div>














		<div class="promise ">
			<ul>
				<li>
					<a href="/help/return/" target="_blank" class="pro_ico">
						<img src="http://i.meilishuo.net/css/images/doota/service/pc_seven_new.png"></a>
					<p class="pro_tle">
						<a href="/help/return/" target="_blank">7天无理由退货</a>
					</p>
					<p>
						<a href="/help/return/" target="_blank">轻松购物有保障</a>
					</p>
				</li>
				<li>
					<a href="/help/return/" target="_blank" class="pro_ico">
						<img src="http://i.meilishuo.net/css/images/doota/service/pc_pei_new.png"></a>
					<p class="pro_tle">
						<a href="/help/return/" target="_blank">先行赔付</a>
					</p>
					<p>
						<a href="/help/return/" target="_blank">轻松购物有保障</a>
					</p>
				</li>
				<li class="last">
					<a href="/help/return/" target="_blank" class="pro_ico">
						<img src="http://i.meilishuo.net/css/images/doota/service/pc_fan_new.png"></a>
					<p class="pro_tle">
						<a href="/help/return/" target="_blank">退货补贴运费</a>
					</p>
					<p>
						<a href="/help/return/" target="_blank">轻松购物有保障</a>
					</p>
				</li>
			</ul>
		</div>
	</div>


<div class="footer">
  <div class="foot_con">
    <div class="f_list service_info">
      <div class="kefu">
        <span class="tel_ico"></span>
        <p class="f20_f">4000-800-577</p>
        <p class="f14_f mt4_f">美丽说客服热线</p>
      </div>
      <ol class="business">
        <li>周一至周日：08:00-24:00</li>
      </ol>
    </div>
    <div class="f_list">
      <h4>买家帮助</h4>
      <ul>
        <li>
          <a target="_blank" href="/sddsafsd">新手指南</a>
        </li>
        <li>
          <a target="_blank" href="/sddsafsd">服务保障</a>
        </li>
        <li>
          <a target="_blank" href="/sddsafsd">帮助中心</a>
        </li>
      </ul>
    </div>
    <div class="f_list">
      <h4>商家帮助</h4>
      <ul>
        <li>
          <a target="_blank" href="/Project/index.php/Store/Login/index">商家入驻</a>
        </li>
        <li>
          <a target="_blank" href="/sddsafsd">商家推广</a>
        </li>
        <li>
          <a target="_blank" href="/sddsafsd">帮助中心</a>
        </li>
      </ul>
    </div>
    <div class="f_list">
      <h4>关于我们</h4>
      <ul>
        <li>
          <a target="_blank" href="/sddsafsd">关于美丽说</a>
        </li>
        <li>
          <a target="_blank" href="/sddsafsd">联系我们</a>
        </li>
        <li>
          <a target="_blank" href="/sddsafsd">加入美丽说</a>
        </li>
      </ul>
    </div>
    <div class="f_list">
      <h4>关注我们</h4>
      <ul>
        <li class="sina_attention">
          <a target="_blank" href="/sddsafsd">
            <span class="i_sina">&nbsp;</span>
            新浪微博
          </a>
          <div class="sina_attention_area">
            一键关注新浪微博
            <wb:follow-button height="24" width="67" type="red_1" uid="1718455577">
              <iframe width="67" height="24" frameborder="0" src="http://widget.weibo.com/relationship/followbutton.php?btn=red&amp;style=1&amp;uid=1718455577&amp;width=67&amp;height=24&amp;language=zh_cn" scrolling="no" marginheight="0"></iframe>
            </wb:follow-button>
          </div>
        </li>
        <li>
          <a target="_blank" href="/sddsafsd">
            <span class="i_qzone">&nbsp;</span>
            QQ空间
          </a>
        </li>
        <li>
          <a target="_blank" href="/sddsafsd">
            <span class="i_tx">&nbsp;</span>
            腾讯微博
          </a>
        </li>
      </ul>
    </div>
    <div class="f_list qr-code">
      <h4>美丽说微信服务号</h4>
      <img alt="美丽说服务号二维码" src="/Project/Mls/Home/Public/Images/header/qrcode-new.jpg"></div>
    <div class="f_list weixin_code">
      <h4>美丽说客户端下载</h4>
      <a target="_blank" href="/sddsafsd" class="client_pic"></a>
    </div>
    <div class="clear_f"></div>
    <div class="rolling">
      <h4 class="f_links">友情链接：</h4>
      <ul id="link_slide">
        <li>
          <a target="_blank" href="/sddsafsd">腾讯女性</a>
          <a target="_blank" href="/sddsafsd">列表网</a>
          <a target="_blank" href="/sddsafsd">太平洋女性网</a>
          <a target="_blank" href="/sddsafsd">多宝汇</a>
          <a target="_blank" href="/sddsafsd">七丽女性网</a>
          <a target="_blank" href="/sddsafsd">酷我音乐</a>
          <a target="_blank" href="/sddsafsd">LADYMAX时尚网</a>
          <a target="_blank" href="/sddsafsd">保葫芦</a>
          <a target="_blank" href="/sddsafsd">中国品牌服装网</a>
          <a target="_blank" href="/sddsafsd">优美网</a>
          <a target="_blank" href="/sddsafsd">男士时尚</a>
          <a target="_blank" href="/sddsafsd">哈秀时尚网</a>
        </li>
        <li>
          <a target="_blank" href="/sddsafsd">365音乐网</a>
          <a target="_blank" href="/sddsafsd">婚纱摄影</a>
          <a target="_blank" href="/sddsafsd">珂兰钻石</a>
          <a target="_blank" href="/sddsafsd">商业资讯</a>
          <a target="_blank" href="/sddsafsd">阿里巴巴生意经</a>
          <a target="_blank" href="/sddsafsd">家居就</a>
          <a target="_blank" href="/sddsafsd">家具网</a>
          <a target="_blank" href="/sddsafsd">亿邦动力</a>
          <a target="_blank" href="/sddsafsd">爱帮网</a>
          <a target="_blank" href="/sddsafsd">商人论坛</a>
          <a target="_blank" href="/sddsafsd">和家网</a>
          <a target="_blank" href="/sddsafsd">猪八戒网</a>
        </li>
        <li>
          <a target="_blank" href="/sddsafsd">乐淘网</a>
          <a target="_blank" href="/sddsafsd">优惠券</a>
          <a target="_blank" href="/sddsafsd">应用汇</a>
          <a target="_blank" href="/sddsafsd">名鞋库</a>
          <a target="_blank" href="/sddsafsd">爱美赏</a>
          <a target="_blank" href="/sddsafsd">马可波罗</a>
          <a target="_blank" href="/sddsafsd">悠哉旅游网</a>
          <a target="_blank" href="/sddsafsd">POCO女性</a>
          <a target="_blank" href="/sddsafsd">天气预报</a>
          <a target="_blank" href="/sddsafsd">爱乐活</a>
          <a target="_blank" href="/sddsafsd">蜜芽宝贝</a>
          <a target="_blank" href="/sddsafsd">趣分期大学生分期购物</a>
        </li>
        <li>
          <a target="_blank" href="/sddsafsd">腾讯女性</a>
          <a target="_blank" href="/sddsafsd">列表网</a>
          <a target="_blank" href="/sddsafsd">太平洋女性网</a>
          <a target="_blank" href="/sddsafsd">多宝汇</a>
          <a target="_blank" href="/sddsafsd">七丽女性网</a>
          <a target="_blank" href="/sddsafsd">酷我音乐</a>
          <a target="_blank" href="/sddsafsd">LADYMAX时尚网</a>
          <a target="_blank" href="/sddsafsd">保葫芦</a>
          <a target="_blank" href="/sddsafsd">中国品牌服装网</a>
          <a target="_blank" href="/sddsafsd">优美网</a>
          <a target="_blank" href="/sddsafsd">男士时尚</a>
          <a target="_blank" href="/sddsafsd">哈秀时尚网</a>
        </li>
        <li>
          <a target="_blank" href="/sddsafsd">365音乐网</a>
          <a target="_blank" href="/sddsafsd">婚纱摄影</a>
          <a target="_blank" href="/sddsafsd">珂兰钻石</a>
          <a target="_blank" href="/sddsafsd">商业资讯</a>
          <a target="_blank" href="/sddsafsd">阿里巴巴生意经</a>
          <a target="_blank" href="/sddsafsd">家居就</a>
          <a target="_blank" href="/sddsafsd">家具网</a>
          <a target="_blank" href="/sddsafsd">亿邦动力</a>
          <a target="_blank" href="/sddsafsd">爱帮网</a>
          <a target="_blank" href="/sddsafsd">商人论坛</a>
          <a target="_blank" href="/sddsafsd">和家网</a>
          <a target="_blank" href="/sddsafsd">猪八戒网</a>
        </li>
        <li>
          <a target="_blank" href="/sddsafsd">乐淘网</a>
          <a target="_blank" href="/sddsafsd">优惠券</a>
          <a target="_blank" href="/sddsafsd">应用汇</a>
          <a target="_blank" href="/sddsafsd">名鞋库</a>
          <a target="_blank" href="/sddsafsd">爱美赏</a>
          <a target="_blank" href="/sddsafsd">马可波罗</a>
          <a target="_blank" href="/sddsafsd">悠哉旅游网</a>
          <a target="_blank" href="/sddsafsd">POCO女性</a>
          <a target="_blank" href="/sddsafsd">天气预报</a>
          <a target="_blank" href="/sddsafsd">爱乐活</a>
          <a target="_blank" href="/sddsafsd">蜜芽宝贝</a>
          <a target="_blank" href="/sddsafsd">趣分期大学生分期购物</a>
        </li>
      </ul>
      <p class="link_more">
        <a target="_blank" href="/sddsafsd">更多&gt;&gt;</a>
      </p>
    </div>
    <div class="record">
      Copyright &copy;2015 Meilishuo.com &nbsp;
      <a target="_blank" href="/sddsafsd">电信与信息服务业务经营许可证100798号</a>
      &nbsp;
      <a target="_blank" href="/sddsafsd">企业法人营业执照</a>
      &nbsp; 京ICP备11031139号&nbsp; 京公网安备110108006045&nbsp;
      <br>
      客服邮箱：kf@meilishuo.com&nbsp;&nbsp;客服电话：4000-800-577&nbsp; 文明办网文明上网举报电话：010-82615762 &nbsp;
      <a target="_blank" href="/sddsafsd">违法不良信息举报中心</a>
      &nbsp;
      <a target="_blank" href="/sddsafsd">我最喜爱的人民警察评选&gt;&gt;</a>
    </div>
  </div>
</div>
</body>
</html>


	<script>
	$(function(){
		var $winWidth =  $(window).width();
		var $num = 	$('#slider').children().length;
		var $table = $winWidth * ($num-1) * -1;
		setInterval(function(){
			var mar = parseInt($('#slider').css('margin-left'));
			if(mar == $table){
				$('#slider').css('margin-left','0px');
			} else {
				$('#slider').css('margin-left',mar-$winWidth+'px');

			}
			//mar = mar-$winWidth;
		},3000)
	})
</script>