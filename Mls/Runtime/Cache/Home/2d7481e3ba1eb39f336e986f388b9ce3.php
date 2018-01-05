<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title> 
  <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/base.css" media="all">
  <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/szle.wide.css" media="all">
  <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/followButton.css" media="all">
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

  <script type="text/javascript" src="/Project/Mls/Home/Public/Js/jquery-1.7.2.js"></script>

  <style>
	#zoom{ position:absolute; left:460px; top:0; z-index:10; width:400px; height:400px; display:none; overflow:hidden; border:1px solid #eee; }
	#zoom img{ position:absolute; left:0; top:0; }
  </style>
  
  <script>

	$(function(){
		
		//倒计时
		var intDiff = parseInt(3600);//倒计时总秒数量

		function timer(intDiff){
			window.setInterval(function(){
			var day=0,
				hour=0,
				minute=0,
				second=0;//时间默认值		
			if(intDiff > 0){
				day = Math.floor(intDiff / (60 * 60 * 24));
				hour = Math.floor(intDiff / (60 * 60)) - (day * 24);
				minute = Math.floor(intDiff / 60) - (day * 24 * 60) - (hour * 60);
				second = Math.floor(intDiff) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
			}
			if (minute <= 9) minute = '0' + minute;
			if (second <= 9) second = '0' + second;
			$('.day').html(day+"天");
			$('.hour').html('<s id="h"></s>'+hour+'时');
			$('.minute').html('<s></s>'+minute+'分');
			$('.second').html('<s></s>'+second+'秒');
			intDiff--;
			}, 1000);
		}
		timer(intDiff);
		
		//给图片添加点击事件
		$('.one').click(function(){
			$('.two').attr('src',$(this).attr('src'));
		});
		$('.three').click(function(){
			$('.two').attr('src',$(this).attr('src'));
		});
		//给尺码标签加点击事件
		$(".size").click(function(){
			var a = $('.size');
			for(var i=0;i<a.length;i++){
				$('.size').eq(i).removeClass('active');
				$('.size').eq(i).attr('flag','0');
			}
			$(this).attr('flag','1')
			$(this).addClass('active');
		});
		//给颜色添加事件
		$('.img_list').click(function(){
			var a = $('.img_list');
			for(var i=0;i<a.length;i++){
				$('.img_list').eq(i).removeClass('active');
				$('.img_list').eq(i).attr('flag','0');
			}
			$(this).addClass('active');
			$(this).attr('flag','1');
		})
		
			var t = $(".item-stock-num");
			var stock = parseInt($('#stock').html());
		//添加商品数量
			$(".item-stock-plus").click(function(){ 
				t.val(parseInt(t.val())+1);
				if(t.val()>=stock){
					t.val(stock);
				}	
			})
		//减少商品数量
			$(".item-stock-minus").click(function(){
				t.val(parseInt(t.val())-1);
				if(t.val()<=0){
					t.val(1);
				}	
			});
			t.blur(function(){
				var inpVal = t.val();
				if(isNaN(inpVal) || inpVal<0){
					t.val(1);
				}
				if(t.val() >= stock){
					$('.msg_over').css('display','block');
					t.val(stock);
				}
				setTimeout(function(){
					$('.msg_over').css('display','none');
				},2000)
			})
			//点击购物车和立即购买时检验是否选择完整
			$('.add_cart,.buy_btn').click(function(){
				var list = 0;
				var size = 0;
				var a = $('.img_list');
				var s = $('.size');
				for(var i=0;i<a.length;i++){
					if(a.eq(i).hasClass('active')){
						list = a.eq(i).attr('flag');
					}	
				}
				
				for(var i=0;i<s.length;i++){
					if(s.eq(i).hasClass('active')){
						size = s.eq(i).attr('flag');
					}
				}
				// aa = parseInt(list) + parseInt(size);
				// //alert(aa);
				// if(aa != 2){
				// 	alert('请选择尺寸和颜色!');

				// 	return false;
				// }
			})
			
			<!-- $('.img_list') -->
			<!-- $(".size") -->

			//商品数量input 输入小于等于0时 变回1
			$('.item-stock-num').keyup(function(){
				$num=parseInt($('.item-stock-num').val());
				if($num<="0"){
					$('.item-stock-num').val('1');
				}
			})



			//购物车
			$('.add_cart').click(function(){
				$goodsid=$('#goodsid').val();
				$discount=$('#discount').val();
				$goodsname=$('.item-title').html();
				$goodsprice=$('#price-now').html();
				$num=$('.item-stock-num').val();
				$goodspic=$('#goodspic').find('img').attr('src');
				$size=$('span[flag=1]').html();
				$color=$('li[flag=1]').find('img').attr('title');
				$shopname=$('.shop-name').html();
				$shopid=$('#shopid').val();
				if($size==null){
					alert('请选择颜色和尺码');
				}else{
					if($color==null){
						alert('请选择颜色');
					}else{

						$.get("<?php echo U('Share/cart');?>",{shopid:$shopid,discount:$discount,shopname:$shopname,size:$size,color:$color,num:$num,goodsname:$goodsname,goodsid:$goodsid,goodspic:$goodspic,goodsprice:$goodsprice},function(msg){
							if(msg==1){
								$('.num_bgc').html(<?php echo (count(session('cart'))); ?>);
								location="/Project/index.php/Home/AddToCart/index/shopid/"+$shopid+"/id/"+$goodsid+"/num/"+$num;

							}
							if(msg==0){
								alert('加入购物车失败');
								// $('.add_cart').attr('title','加入购物车失败');
							}
							if(msg=='error'){
								return false;
							}
						});

					}
				}

			})
			//关闭模态框
			$('#closeDialog').click(function(){
				// $('#dialogLayer').css('display','none');
				// $('#overlay').css('display','none');
					$('#dialogLayer').hide(500);
				$('#overlay').hide(500);
				// alert(111);

			})
			//判断是否登陆 和购买信息是否完成
			$('.buy_btn').click(function(){
				$goodsid=$('#goodsid').val();
				$discount=$('#discount').val();
				$goodsname=$('.item-title').html();
				$goodsprice=$('#price-now').html();
				$num=$('.item-stock-num').val();
				//$goodspic=$('#goodspic').find('img').attr('src');
				$goodspic=$('span[img=img]').html();
				$size=$('span[flag=1]').html();
				$color=$('li[flag=1]').find('img').attr('title');
				$shopname=$('.shop-name').html();
				$shopid=$('#shopid').val();
				if($size==null){
					alert('请选择颜色和尺码');
					//alert($goodspic);
				}else{
					if($color==null){
						alert('请选择颜色');
					}else{

				if(!$('#isset').html()){
									// $('#dialogLayer').css('display','block');
									// $('#overlay').css('display','block');
									$('#dialogLayer').show(1000);
									$('#overlay').fadeIn(1000);
								}else{
									
									
			location="/Project/index.php/Home/Share/shopping/shopid/"+$shopid+"/id/"+$goodsid+"/num/"+$num+"/pic/"+$goodspic+"/color/"+$color+"/size/"+$size+"/shopname/"+$shopname+"/goodsprice/"+$goodsprice+"/goodsname/"+$goodsname+"/discount/"+$discount;
						}
							

					}
				}

			})
				//登陆信息处理
				$('.login_btn').click(function(){
				$pass=$('#password').val();
				$user=$('#mlsUser').val();
				$.post("<?php echo U('login');?>",{pass:$pass,user:$user},function(arg){
					if(arg){
						// $('#dialogLayer').css('display','none');
						// $('#overlay').css('display','none');
						$('#dialogLayer').slideUp(2000);
						$('#overlay').slideUp(2000);
						location.reload();
					}else{
						// $('.loginErrorMessage').css('display','block');
						$('.loginErrorMessage').show(1000);
						
					}

				})
			})

			
	})
  </script>

			<div style="position: relative; top: 0px; height: auto;" id="navbar">
				<div class="sec_nav"></div>
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
								<a href="javascript:;" class="js-new-all" path-id="<?php echo ($vo['id']); ?>" path-url="/Project/index.php/Home/Share">
									<?php echo ($vo['name']); ?>
										<span class="js-new-goods-num label-item-new" >21</span> <i class="icon-tr">▾</i>
									</a>
									<ul class="shop-nav-nest shop-nav-new">
										<?php else: ?>		
										<li>
											<a class="js-newest-goods" href="javascript:;" path-id="<?php echo ($vo['id']); ?>" path-url="/Project/index.php/Home/Share">
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
  <div class="maskLayer" id="overlay" style="width: 100%; height: 975px; display: none;"></div>
<div style="width: 620px; height: auto; display: none; top: 102.75px; left: 50%; margin-left: -310px;" class="dialogLayer" id="dialogLayer">
	<div class="dialogTitle" id="dialogTitle">
		<span class="close_z" id="closeDialog"></span>
		<span id="dialogTitleText">登录</span>
	</div>
	<div class="dialogContent" id="dialogContent">
		<div class="login_wrap">
			<div class="login_normal">
				<h3>
					<a href="http://www.meilishuo.com/user/register?frm=tk_reg" target="_BLANK">注册</a>
					登录美丽说
				</h3>
				<fieldset>
					<form method="post" onsubmit="return false" action="" id="loginForm">
						<div class="l_list">
							<p class="l_box">
								<input class="l_txt" id="mlsUser" name="mlsUser" placeholder="手机号/邮箱/用户名" type="text">
								<span></span>
								<span class="user_icon"></span>
							</p>
						</div>
						<div class="l_list">
							<p class="l_box">
								<input class="l_txt" id="password" name="password" placeholder="密码" type="password">
								<span></span>
								<span class="pwd_icon"></span>
							</p>
						</div>
					
						<div class="loginErrorMessage none_f" style="display: none;">账号或密码错误，请重新输入</div>
						<div class="login_btn_wrap">
							<input class="login_btn" value="立即登录" type="submit"></div>
						
					</form>
				</fieldset>
			</div>
		
			<!-- <div class="clear_f"></div> -->
		</div>
		<!-- <div class="clear_f"></div> -->
	</div>
</div>
<span id='isset' style="display:none"><?php echo (session('hid')); ?></span>

						<input id="shopid" type="hidden" value="<?php echo ($shopid); ?>">
						
						<input id="goodsid" type="hidden" value="<?php echo ($sid); ?>">
			<input id="discount" type="hidden" value="<?php echo ($gdeta["discount"]); ?>">
			<div class="main ">
				<div class="item-box" data-tid="3473702123">
					<div class="content twitter" twitter_id="3473702123">
						<div class="item-sale">
							<h3 class="item-title"><?php echo ($gdeta["name"]); ?></h3>
							<!--<a href="#" id="js-shopping-show" class="label-show">[晒单]</a>-->
							 <h4 class="item-sub-title"><?php echo ($gdeta["summary"]); ?></h4>
							<div class="item-price-info">
								<span class="price-now">
									￥
									<i id="price-now" class="num" data-price-min="79.00" data-price-max="79.00"><?php echo ($gdeta['price']*$gdeta['discount']/100); ?></i>
								</span>
								<span class="price-original">
									￥
									<i id="price-original" class="num" data-price-min="299.00" data-price-max="299.00"><?php echo ($gdeta["price"]); ?></i>
								</span>
								<span class="label-text js-label" style="background-color:#ff9933" data-text="免运费">免运费</span>
							</div>
							<!-- big promote -->			
							<div class="big-promote-notice">
								<p>
									<i class="logo"></i>
									<span class="preheat-text">领券后购买本商品最优惠，请提前加入购物车！</span>
									<span class="now-text">领券后购买本商品最优惠，错过再等一年！</span>
								</p>
								<a href="http://promotion.meilishuo.com/promotion/sale_1506/act616/#coupon_rg" target="_blank">立即领取250元美丽说全场通用券&nbsp;&gt;&gt;</a>
							</div>
							<!-- big promote end -->			
							<ul class="item-promote-infos js-shop-promote">
								<li class="js-promote-item">
									<i class="label-mark-limit">限</i>
									距离恢复原价仅剩
									<span class="countdown" data-remain="190352.8940000534">
										<i class="day countdown-time"></i>
										
										<i class="hour countdown-time"></i>
										
										<i class="minute countdown-time"></i>
										
										<i class="second countdown-time"></i>
										
									</span>
								</li>
								<!-- <li>
									<i class="label-mark-coupon">券</i>
									<ol class="item-promotion">
										<li class="item-promotion-single">
											满15减2元优惠券可领取
											<div class="dropdown-wrap js-coupon coupon-wrap">
												<a class="red_f dropdown-wrap-btn js-coupon-btn" href="javascript:%20void%200;">立即领取&nbsp;▾</a>
												<div class="js-coupon-panel dropdown-panel label-arrow-top">
													<div class="hd">领券下单，更多优惠等你拿</div>
													<ul class="bd"></ul>
													<span class="info js-info red_f"></span>
												</div>
											</div>
										</li>
									</ol>
								</li> -->
							</ul>
							<div class="item-freight">
							<!--
								<label>运 费</label>
								<?php if($sArea == null): ?>火星<?php else: echo ($sArea); endif; ?>
								<span class="gray_f pl6_f">至</span>
								<a id="js-dest-city" class="pl6_f pr6_f city-name" href="#">
									<span class="js-city-name">北京</span>
									<i class="arrow-down"></i>
								</a>
								<span id="js-freight-text">免运费</span>
								-->
							</div>
							<ul class="item-data">
								<li>
									销量
									<span class="item-data-wrap"><?php echo ($gdeta["buy_num"]); ?>件</span>
								</li>
								<li class="item-data-middle">
									好评率
									<span class="item-data-wrap">
										100%
										(0人)
									</span>
								</li>
								<li>
									喜欢
									<span class="item-data-wrap">20479人</span>
								</li>
							</ul>
							<ul class="sku_meta"></ul>
							<div class="sku_info">
								<div class="skin">
									<p class="text none_f">
										<span class="close_z"></span>
										<span class="msg_ico"></span>
										请选择您要的商品信息
									</p>
									<dl class="prop">
										<dt>
											颜 色
											<span></span>
										</dt>
										<dd>
										
											<ul id="colorList" class="item-colorlist has-image-color">
												<?php if(is_array($gPic)): $i = 0; $__LIST__ = $gPic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gp): $mod = ($i % 2 );++$i;?><li flag='0' style="height:48px;" class="img_list">
													<span img="img" style="display:none"><?php echo ($gp["g_pic"]); ?></span>
														<span class="js-item item-color-img" data-type="color" data-id="33655" data-index="1" id="goodspic">
															<img class="one" src="/Project/Public/<?php echo ($gp["g_pic"]); ?>" bsrc="http://d06.res.meilishuo.net/pic/_o/c5/22/26717437b467ed2de897d6d23281_640_900.ch.jpg_4acaca0e_s7_450_680.jpg" title="黑色" alt="黑色">			
															<i class="icon-outofstock-mask"></i>
														</span>
													</li><?php endforeach; endif; else: echo "" ;endif; ?>	
											</ul>
										</dd>
									</dl>
									<dl class="prop">
										<dt>
											尺 码
											<span></span>
										</dt>
										<dd>
											<ul id="sizeList" class="item-size-types">
												<?php if(is_array($goodSize)): $k = 0; $__LIST__ = $goodSize;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gz): $mod = ($k % 2 );++$k;?><li>
													<!--class active-->
													<span flag='0' class="size js-item item-size-type" data-type="size" data-id="42331" data-index="1" id="<?php echo ($k); ?>"><?php echo ($gz["size"]); ?></span>
												</li><?php endforeach; endif; else: echo "" ;endif; ?>
												<!-- <li>
													<a href="#" class="js-item item-size-type active" data-type="size" data-id="42331" data-index="1">小</a>
												</li> -->
											</ul>
										</dd>
									</dl>
									<dl class="amount">
										<dt>数 量</dt>
										<dd>
											<div class="item-stock js-stock">
												<input class="item-stock-num js-stock-num" title="请输入购买数量" value="1" type="text" ">			
												<span class="item-stock-btns">
													<span class="item-stock-plus js-stock-plus ">
														<i class="icon-up"></i>
													</span>
													<span class="item-stock-minus js-stock-minus ">
														<i class="icon-down"></i>
													</span>
												</span>
												<span class="item-stock-reserve js-stock-reserve">
													(库存
													<span id="stock"><?php echo ($gdeta["stock"]); ?></span>
													件)
												</span>
											</div>
										</dd>
									</dl>
									<dl class="mt10_f">
										<dt>客 服</dt>
										<dd>
											<a class="goqq knilmi" href="javascript:;" path-id="<?php echo ($uid['u_id']); ?>-<?php echo (session('hid')); ?>"  <em class="qqico">&nbsp;</em>
												联系客服
											</a>
										</dd>
									</dl>
									<div class="msg_box">
										<p style="display: none;" class="msg_limit">
											<span class="msg_ico"></span>
											对不起！每人最多限购100件！
										</p>
										<p style="display: none;" class="msg_zero">
											<span class="msg_ico"></span>
											对不起，这件宝贝已经卖光啦！
										</p>
										<p style="display: none;" class="msg_over">
											<span class="msg_ico"></span>
											您所填写的宝贝数量超过库存！
										</p>
									</div>
									<div class="btn_box">
										<a class="define" title="确定">确定</a>
										<div class="same_btn">
											<a class="add_cart" title="加入购物车"> <em class="cartico">&nbsp;</em>
												加入购物车
											</a>
											<a class="buy_btn" title="立即购买">
												<em class="rmbico">&nbsp;</em>
												立即购买
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- <div class="item-spread">
								<div class="item-like-wrap">
									<a class="item-like-btn js-like-btn" data-liked="0" isshowlike="1" like_twitter_id="3473702123">
										<i class="icon-like"></i>
										喜欢
										<i class="item-like-num">(20479)</i>
									</a>
									<span class="addOneLike">+1</span>
								</div>
								<a class="item-share-btn js-item-share-btn">
									<i class="icon-share"></i>
									分享
								</a>
								<a id="twitter_magazi" class="add-in-magazine-btn">
									<i class="icon-magazine" title="收进杂志"></i>
								</a>
							</div> -->
						</div>
						<div id="zoom"> <img src="/Project/Public/<?php echo ($gp["g_pic"]); ?>" /> </div>
						<div id="picture" class="item-pic magnify">
							<div class="item-pic-origin " style="max-height:632px;">
								<img id="show" class="j-big-pic twitter_pic two" alt="新款韩版单/双肩包斜挎包" src="/Project/Public/<?php echo ($gp["g_pic"]); ?>">
								<div style="bottom: 13px; opacity: 0;" class="js-pop-tip item-pop-tip" data-num="155">
									<i class="icon-people"></i>
									<i class="num">155</i>
									人最近已购买
								</div>
							</div>
							<div class="item-pic-thumb js-pic-thumb">
								<?php if(is_array($gPic)): $i = 0; $__LIST__ = $gPic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gp): $mod = ($i % 2 );++$i;?><!-- <span class="active"> -->
									<span>
									<img class="three" src="/Project/Public/<?php echo ($gp["g_pic"]); ?>" width="68" height="88"></span><?php endforeach; endif; else: echo "" ;endif; ?>
								<!-- <span>
									<img src="/Project/Mls/Home/Public/Images/doota/service/e1fe60180ae7ad7b2c09accafd28_800_1047.jpg" bsrc="http://d02.res.meilishuo.net/pic/_o/f9/15/e1fe60180ae7ad7b2c09accafd28_800_1047.ch.jpg_84bf5180_s7_450_680.jpg" width="68"></span>
								<span>
									<img src="/Project/Mls/Home/Public/Images/doota/service/d0ee5338c0fffd9fa06465ded0e6_640_900.jpg" bsrc="http://d06.res.meilishuo.net/pic/_o/dc/10/d0ee5338c0fffd9fa06465ded0e6_640_900.cg.jpg_cb3ec551_s7_450_680.jpg" width="68"></span>
								<span>
									<img src="/Project/Mls/Home/Public/Images/doota/service/943b69dcffad988122fa48f282d6_640_900.jpg" bsrc="http://d05.res.meilishuo.net/pic/_o/8e/21/943b69dcffad988122fa48f282d6_640_900.cg.jpg_75fe79a0_s7_450_680.jpg" width="68"></span>
								<span>
									<img src="/Project/Mls/Home/Public/Images/doota/service/d728dffe149298d51f4a77187639_640_900.jpg" bsrc="http://d05.res.meilishuo.net/pic/_o/2e/80/d728dffe149298d51f4a77187639_640_900.cg.jpg_7fdcd2e4_s7_450_680.jpg" width="68"></span> -->
							</div>
						</div>
					</div>
					<div class="sidebar">
						<div class="shop ">
							<a class="shop-avatar" href="http://www.meilishuo.com/shop/rating/?shop_id=179168&amp;frm=rate_to_rateall" target="_blank">
								<img src="/Project/Public/1.jpg" width="48"></a>
							<i class="icon-shop"></i>
							<div class="shop-wrap" path-id="<?php echo ($uid['u_id']); ?>" id="parent">
								<a href="/Project/index.php/Home/Shopinfo/index/id/<?php echo ($gdeta["id"]); ?>" target="_blank" class="shop-name"><?php echo ($shopDeta["name"]); ?></a>
								<div class="shop-follow-state js-follow-shop">
									<span class="shop-follow-btn is-not-followed">
										<i class="icon-plus">+</i>
										关注
									</span>
									<span class="shop-fans-wrap">
										<i class="shop-fans js-fans">604</i>
										粉丝
									</span>
								</div>
							</div>
							<ul class="shop-assess">
								<li class="shop-assess-first">
									描述
									<a href="http://www.meilishuo.com/shop/rating/?shop_id=179168&amp;frm=rate_to_rateall" class="shop-point down" target="_blank">
										<i class="arrow-ico">--</i>
										<?php if($showScore['des_score'] == null): ?>0.0<?php else: echo ($showScore["des_score"]); endif; ?>
									</a>
								</li>
								<li class="shop-assess-middle">
									质量
									<a href="http://www.meilishuo.com/shop/rating/?shop_id=179168&amp;frm=rate_to_rateall" class="shop-point down" target="_blank">
										<i class="arrow-ico">--</i>
										<?php if($showScore['qua_score'] == null): ?>0.0<?php else: echo ($showScore["qua_score"]); endif; ?>
									</a>
								</li>
								<li class="shop-assess-middle">
									服务
									<a href="http://www.meilishuo.com/shop/rating/?shop_id=179168&amp;frm=rate_to_rateall" class="shop-point down" target="_blank">
										<i class="arrow-ico">--</i>
										<?php if($showScore['ser_score'] == null): ?>0.0<?php else: echo ($showScore["ser_score"]); endif; ?>
									</a>
								</li>
								<li class="shop-assess-last">
									发货
									<a href="http://www.meilishuo.com/shop/rating/?shop_id=179168&amp;frm=rate_to_rateall" class="shop-point down" target="_blank">
										<i class="arrow-ico">--</i>
										<?php if($showScore['hai_score'] == null): ?>0.0<?php else: echo ($showScore["hai_score"]); endif; ?>
									</a>
								</li>
							</ul>
							<ul class="shop-info">
								<li>所在地区：<?php if($sArea == null): ?>火星<?php else: echo ($sArea['area']); endif; ?></li>
								<li>商品数量：<?php echo ($goodNum); ?></li>
								<li>销售数量：<?php echo ($sellNum); ?></li>
								<li>
									店铺资质：
									<i class="icon-approve" title="美丽说认证 2014.11.05"></i>
								</li>
								<li>
									联系客服：
									<a class="knilmi" href="javascript:;" path-id="<?php echo ($uid['u_id']); ?>-<?php echo (session('hid')); ?>">
										<i class="icon-contact"></i>
									</a>
								</li>
							</ul>
							<a href="/Project/index.php/Home/Shopinfo/index/id/<?php echo ($gdeta["id"]); ?>" class="into-shop-btn" target="_blank">
								<i class="into-shop-ico"></i>
								进入店铺
							</a>
						</div>
						<div class="maybe-like">
							<h3 class="hd">你可能还喜欢</h3>
							<ul>
								<?php if(is_array($aLike)): $i = 0; $__LIST__ = $aLike;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$al): $mod = ($i % 2 );++$i;?><li class="even" style="margin:0 0 10px 10px">
									<a href="/Project/index.php/Home/Share/index/id/<?php echo ($al["id"]); ?>" target="_blank" title="<?php echo ($al["name"]); ?>">
										<img width="80" height="112" src="/Project/Public/<?php echo ($al["g_pic"]); ?>"></a>
									<p class="price">￥<?php echo ($al["price"]); ?></p>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
								
								
							</ul>
						</div> 
					</div>
				</div>
				<!-- 搭配人气展示 开始-->			
				<div class="tab_match">
					<h2 class="tab_top">
						<a href="javascript:void(0)" class="tabArea1 cur">人气单品</a>
					</h2>
				</div>
				<div class="contentArea1">
					<div class="may_like">
						<ul class="like_list">
							<?php if(is_array($hotGood)): $i = 0; $__LIST__ = $hotGood;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hg): $mod = ($i % 2 );++$i;?><li>
									<div class="s_picBox">
										<a class="s_pic" href="/Project/index.php/Home/Share/index/id/<?php echo ($hg["id"]); ?>" target="_blank" title="<?php echo ($hg["name"]); ?>">
											<img width="180px" height="253px" src="/Project/Public<?php echo ($hg["pic"]); ?>" /></a>
									</div>
									<a class="txt" target="_blank" href="/Project/index.php/Home/Share/index/id/<?php echo ($hg["id"]); ?>"><?php echo ($hg["name"]); ?></a>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
							
						</ul>
					</div>
				</div>
<script>

$(function(){
	//添加回话框
	$id = '<?php echo (session('hid')); ?>';
	$('.knilmi').click(function(){
	if($id){
		$str = '<div id="closeImframeBtn" style="position: fixed; width: 32px; height: 32px; z-index: 1002; right: 60px; bottom: 394px; cursor: pointer; opacity: 0; background-color: rgb(255, 102, 153);"></div>'
		+'<iframe id="im_iframe" src="/Project/index.php/Home/Share/knilmi" frameborder="no" allowtransparency="true" style="width: 570px; height: 410px; position: fixed; z-index: 1000; opacity: 1; right: 60px; bottom: 40px; border: none;"></iframe>'
		+'<div id="im_iframe_div" style="width: 410px; height: 32px; position: fixed; z-index: 1001; right: 60px; bottom: 394px; cursor: move; opacity: 0.3;"></div>'
		$('body').append($str);
	} else {
		window.location = "<?php echo U('Login/index');?>";
	}

		/*
		$('#im_iframe_div').mousedown(function(e){
			var offset = $(this).offset();//DIV在页面的位置 
			var x = e.pageX - offset.left;//获得鼠标指针离DIV元素左边界的距离 
			var y = e.pageY - offset.top;//获得鼠标指针离DIV元素上边界的距离
			console.log(y);
			console.log(x)
			//$('#closeImframeBtn').css('display','block');
			//$(this).css('background-color','255,102,153');
			//$(this).css('height','410px');

			$(document).bind("mousemove",function(ev)//绑定鼠标的移动事件，因为光标在DIV元素外面也要有效果，所以要用doucment的事件，而不用DIV元素的事件 
			{ 
				$("#im_iframe_div").stop();//加上这个之后 
				var _x = ev.pageX - x;//获得X轴方向移动的值 
				var _y = ev.pageY - y;//获得Y轴方向移动的值 
				$('im_iframe').css('bottom','none');
				$('im_iframe').css('right','none');
				//$("#im_iframe_div").css('position','absolute');
				$("#im_iframe").animate({left:_x+"px",top:_y+"px"},10); 
			}); 
		})
		$(document).mouseup(function(){ 
			$(".im_iframe_div").css("cursor","default"); 
			$(this).unbind("mousemove"); 
			$('#closeImframeBtn').css('display','none');
				$("#im_iframe_div").css('position','fixed');
		}) 
*/
		/*
		var $u_id = $("#parent").attr('path-id');
		var $id = '<?php echo (session('hid')); ?>';
		var $str = $id+'-'+$u_id;
		$.ajax({
				type: "get",
				url: "<?php echo U('Share/actionK');?>",
				data: {action:'insertK',id:$str,flag:'1'},
				success: function(data){
				}
			});
	*/
	});
	//移除会话框
	$('#closeImframeBtn').live('click',function(){
		$('#im_iframe_div').remove();
		$('#im_iframe').remove();
		$(this).remove();
	})
/*
	$('.sentBtn').click(function(){
		alert(3)
		/*
		var $inputboxTest = $('im_inputbox_input');
		$.get('<?php echo U("Share/selectK");?>',{data:$inputboxTest.val()},function(data){
			console.log(data);
		})
	})
*/
})
</script>

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