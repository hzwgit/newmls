<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title> 
  <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/base.css" media="all">
  <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/addToCart.css" media="all">
  <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/cartnull.css" media="all">
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


	<?php if(empty($_SESSION['cart'])): ?><div class="cart" style="border-top-width: 0px;">		<div class="no_logged">		<div class="clear">			<div class="icon"></div>			<div class="description">				您的购物车还空着呢，<br><a class="login_in" href="javascript:void(0)"><span>[</span>登录<span>]</span></a>查看以前放入的商品，或者<a href="http://www.meilishuo.com/guang/hot?frm=trac">去逛逛</a>吧！			</div>		</div>	</div>	</div>
	<?php else: ?>
<div class="clear_f"></div>
<div class="status_cart">
	<p class="suc_cart">已成功将<?php echo ($num); ?>件商品加入购物车</p>
</div>
<div class="content_cart"  >



		<div class="goods_info">
			<a href="<?php echo U('home/share/index');?>/id/<?php echo ($car["id"]); ?>">
				<img src="<?php echo ($car["img"]); ?>"></a>
			<p class="goods_tle">
				<a href="<?php echo U('home/share/index');?>/id/<?php echo ($car["id"]); ?>" > <?php echo ($car["name"]); ?></a>
			</p>
			<p class="goods_attr">
				<span class="mr20_f">颜色：<?php echo ($car["color"]); ?></span>
				<span class="mr20_f">尺码：<?php echo ($car["size"]); ?></span>
				<span class="mr20_f">价格：￥<?php echo ($car["price"]); ?></span>
			</p>
		</div>

		
		<p class="cs_btn">
			<a href="<?php echo U('Cart/index');?>" class="cart_btn cur_btn">去购物车结算</a>
			<!--go back chinese-->
			<!--a href="http://order.meilishuo.com/cart/?frm=cart_to_buy" class="cart_btn cur_btn">去购物车结算</a-->
		<a href="<?php echo U('shopinfo/index');?>/id/<?php echo ($shopid); ?>" class="shopping_btn">去店铺逛逛</a>
		<!--go back chinese-->
		</p><?php endif; ?>
<div class="clear_f"></div>
<!-- <ul class="coupon">
	<li>
		<span class="btn_red">满79减10</span>
		本店商品满79减10优惠券可领取
		<a class="ml10_f red_f" href="http://www.meilishuo.com/shop/179168?frm=mcart_to_shop" target="_blank">立即领取</a>
	</li>
	<li>
		<span class="btn_red">满59减5</span>
		本店商品满59减5优惠券可领取
		<a class="ml10_f red_f" href="http://www.meilishuo.com/shop/179168?frm=mcart_to_shop" target="_blank">立即领取</a>
	</li>
</ul> -->
</div>
<!-- <div class="may_like">
<div class="cmn_title">
	<h3 class="f16_f ml10_f">你可能对以下商品感兴趣</h3>
	<p class="attr_words" id="attr_words">
		<a class="words" href="http://www.meilishuo.com/guang/catalog/dress?nid=211037&amp;cata_id=2000000000000&amp;frm=mshop_catalog" target="_blank">防晒衣</a>
		<a class="words" href="http://www.meilishuo.com/guang/catalog/bag?nid=210453&amp;cata_id=5000000000000&amp;frm=mshop_catalog" target="_blank">链条包</a>
		<a class="words" href="http://www.meilishuo.com/guang/catalog/dress?nid=210115&amp;cata_id=2004000000000&amp;frm=mshop_catalog" target="_blank">裙子</a>
		<a class="words" href="http://www.meilishuo.com/guang/catalog/dress?nid=210359&amp;cata_id=2000000000000&amp;frm=mshop_catalog" target="_blank">雪纺衫</a>
		<a class="words" href="http://www.meilishuo.com/guang/catalog/dress?nid=210473&amp;cata_id=2000000000000&amp;frm=mshop_catalog" target="_blank">睡衣</a>
		<a class="words" href="http://www.meilishuo.com/guang/catalog/dress?nid=211095&amp;cata_id=2000000000000&amp;frm=mshop_catalog" target="_blank">短裤</a>
	</p>
</div>
<ul class="like_list" id="like_list">
	<li class="">
		<div class="s_picBox">
			<a class="s_pic" href="http://www.meilishuo.com/share/item/3441106897?d_r=6__1-1-1-1-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank" title="韩版长款磨砂钱包零钱包">
				<img src="http://d05.res.meilishuo.net/pic/_o/7e/43/2e8722386e03c1909b037ef6f410_640_832.cg.jpg_819efe02_s6_q0_150_5_0_230_328.jpg"></a>
		</div>
		<a class="txt" href="http://www.meilishuo.com/share/item/3441106897?d_r=6__1-1-1-1-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank">韩版长款磨砂钱包零钱包</a>
		<p class="price_box">
			<span class="price_red">¥18.50</span>
			<span class="price">¥45.00</span>
		</p>
		<p class="buy-numbers">2619人已购买</p>
	</li>
	<li class="">
		<div class="s_picBox">
			<a class="s_pic" href="http://www.meilishuo.com/share/item/3313608549?d_r=6__1-1-1-2-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank" title="单肩包手提包斜挎包铆钉包">
				<img src="http://d06.res.meilishuo.net/pic/_o/5a/e1/820c7961c86bb59986f479a99529_640_900.cg.jpg_181e62b2_s6_q0_150_5_0_230_328.jpg"></a>
		</div>
		<a class="txt" href="http://www.meilishuo.com/share/item/3313608549?d_r=6__1-1-1-2-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank">单肩包手提包斜挎包铆钉包</a>
		<p class="price_box">
			<span class="price_red">¥189.00</span>
		</p>
		<p class="buy-numbers">385人已购买</p>
	</li>
	<li class="">
		<div class="s_picBox">
			<a class="s_pic" href="http://www.meilishuo.com/share/item/3313342471?d_r=6__1-1-1-3-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank" title="新款女包手提单肩斜跨包包">
				<img src="http://d06.res.meilishuo.net/pic/_o/c7/a8/3410def9e140266ed373c7007c6e_800_1057.cc.jpg_a75b6d49_s6_q0_150_5_0_230_328.jpg"></a>
		</div>
		<a class="txt" href="http://www.meilishuo.com/share/item/3313342471?d_r=6__1-1-1-3-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank">新款女包手提单肩斜跨包包</a>
		<p class="price_box">
			<span class="price_red">¥299.00</span>
		</p>
		<p class="buy-numbers">338人已购买</p>
	</li>
	<li class="">
		<div class="s_picBox">
			<a class="s_pic" href="http://www.meilishuo.com/share/item/3525263545?d_r=6__1-1-1-4-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank" title="新款春夏季单肩包斜挎包">
				<img src="http://d06.res.meilishuo.net/pic/_o/5c/11/0c83b708c02283f3c938689a91a1_640_900.cf.jpg_1a2531d5_s6_q0_150_5_0_230_328.jpg"></a>
		</div>
		<a class="txt" href="http://www.meilishuo.com/share/item/3525263545?d_r=6__1-1-1-4-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank">新款春夏季单肩包斜挎包</a>
		<p class="price_box">
			<span class="price_red">¥299.00</span>
		</p>
		<p class="buy-numbers">181人已购买</p>
	</li>
	<li class="">
		<div class="s_picBox">
			<a class="s_pic" href="http://www.meilishuo.com/share/item/3489888483?d_r=6__0-1-1-5-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank" title="韩版新款钱包短款皮夹">
				<img src="http://d03.res.meilishuo.net/pic/_o/e7/35/f9f56c1511896480b88d6b755efe_2448_3264.cf.jpg_fccc7731_s6_q0_150_5_0_230_328.jpg"></a>
		</div>
		<a class="txt" href="http://www.meilishuo.com/share/item/3489888483?d_r=6__0-1-1-5-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank">韩版新款钱包短款皮夹</a>
		<p class="price_box">
			<span class="price_red">¥24.50</span>
			<span class="price">¥55.00</span>
		</p>
		<p class="buy-numbers">143人已购买</p>
	</li>
	<li class="">
		<div class="s_picBox">
			<a class="s_pic" href="http://www.meilishuo.com/share/item/3473731377?d_r=6__1-1-1-6-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank" title="韩版潮流铆钉双肩包背包">
				<img src="http://d06.res.meilishuo.net/pic/_o/b2/80/6c4b1553277314af9e39f6a09d37_640_900.ch.jpg_6b78b273_s6_q0_150_5_0_230_328.jpg"></a>
		</div>
		<a class="txt" href="http://www.meilishuo.com/share/item/3473731377?d_r=6__1-1-1-6-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank">韩版潮流铆钉双肩包背包</a>
		<p class="price_box">
			<span class="price_red">¥169.00</span>
		</p>
		<p class="buy-numbers">35人已购买</p>
	</li>
	<li class="">
		<div class="s_picBox">
			<a class="s_pic" href="http://www.meilishuo.com/share/item/3313626451?d_r=6__1-1-1-7-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank" title="欧美子母包单肩包手提包">
				<img src="http://d04.res.meilishuo.net/pic/_o/77/3f/37f4e2980146abfb3a5e39b1c6ab_640_900.cg.jpg_a6661913_s6_q0_150_5_0_230_328.jpg"></a>
		</div>
		<a class="txt" href="http://www.meilishuo.com/share/item/3313626451?d_r=6__1-1-1-7-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank">欧美子母包单肩包手提包</a>
		<p class="price_box">
			<span class="price_red">¥149.00</span>
			<span class="price">¥299.00</span>
		</p>
		<p class="buy-numbers">21人已购买</p>
	</li>
	<li class="">
		<div class="s_picBox">
			<a class="s_pic" href="http://www.meilishuo.com/share/item/3497680571?d_r=6__1-1-1-8-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank" title="小包斜挎包单肩包手提包">
				<img src="http://d02.res.meilishuo.net/pic/_o/7e/3c/c922cf22799ee7779940f822b567_800_1098.cf.jpg_53649c6c_s6_q0_150_5_0_230_328.jpg"></a>
		</div>
		<a class="txt" href="http://www.meilishuo.com/share/item/3497680571?d_r=6__1-1-1-8-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank">小包斜挎包单肩包手提包</a>
		<p class="price_box">
			<span class="price_red">¥159.00</span>
		</p>
		<p class="buy-numbers">20人已购买</p>
	</li>
	<li class="">
		<div class="s_picBox">
			<a class="s_pic" href="http://www.meilishuo.com/share/item/3541877179?d_r=6__0-1-1-9-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank" title="姚晨同款手提包斜挎单肩包">
				<img src="http://d05.res.meilishuo.net/pic/_o/a1/fd/d2ccadc27957731db5db21d2a65a_640_900.cg.jpg_27d1e351_s6_q0_150_5_0_230_328.jpg"></a>
		</div>
		<a class="txt" href="http://www.meilishuo.com/share/item/3541877179?d_r=6__0-1-1-9-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank">姚晨同款手提包斜挎单肩包</a>
		<p class="price_box">
			<span class="price_red">¥299.00</span>
		</p>
		<p class="buy-numbers">20人已购买</p>
	</li>
	<li class="last">
		<div class="s_picBox">
			<a class="s_pic" href="http://www.meilishuo.com/share/item/3466387387?d_r=6__1-1-1-10-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank" title="新款韩版单肩包斜挎包">
				<img src="http://d01.res.meilishuo.net/pic/_o/7d/9a/023aa5b18ff1fc15f3cc49f751c6_800_1071.cf.jpg_e62c661a_s6_q0_150_5_0_230_328.jpg"></a>
		</div>
		<a class="txt" href="http://www.meilishuo.com/share/item/3466387387?d_r=6__1-1-1-10-r_cart-t_shop-abtest_1-ot_3473702123" target="_blank">新款韩版单肩包斜挎包</a>
		<p class="price_box">
			<span class="price_red">¥199.00</span>
		</p>
		<p class="buy-numbers">18人已购买</p>
	</li>
</ul>
</div> -->
<div class="pro_line" id="promise_proline"></div>


<!--包含底部文件-->
<div class="promise ">
				<ul>
					<li>
						<a href="http://www.meilishuo.com/help/return/" target="_blank" class="pro_ico">
							<img src="/Project/Mls/Home/Public/Images/doota/service/pc_seven_new.png"></a>
						<p class="pro_tle">
							<a href="http://www.meilishuo.com/help/return/" target="_blank">7天无理由退货</a>
						</p>
						<p>
							<a href="http://www.meilishuo.com/help/return/" target="_blank">轻松购物有保障</a>
						</p>
					</li>
					<li>
						<a href="http://www.meilishuo.com/help/return/" target="_blank" class="pro_ico">
							<img src="/Project/Mls/Home/Public/Images/doota/service/pc_pei_new.png"></a>
						<p class="pro_tle">
							<a href="http://www.meilishuo.com/help/return/" target="_blank">先行赔付</a>
						</p>
						<p>
							<a href="http://www.meilishuo.com/help/return/" target="_blank">轻松购物有保障</a>
						</p>
					</li>
					<li class="last">
						<a href="http://www.meilishuo.com/help/return/" target="_blank" class="pro_ico">
							<img src="/Project/Mls/Home/Public/Images/doota/service/pc_fan_new.png"></a>
						<p class="pro_tle">
							<a href="http://www.meilishuo.com/help/return/" target="_blank">退货补贴运费</a>
						</p>
						<p>
							<a href="http://www.meilishuo.com/help/return/" target="_blank">轻松购物有保障</a>
						</p>
					</li>
				</ul>
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