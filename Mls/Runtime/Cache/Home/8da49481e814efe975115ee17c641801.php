<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/base.css" media="all">
  <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/welcome_new.css" media="all">
  <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/toTop.css" media="all">
  
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
  <script type="text/javascript" src="/Project/Public/Js/jquery.FainPic.js"></script>
  <script type="text/javascript" src="/Project/Mls/Home/Public/Js/jquery.scrollToTop.min.js"></script>
  
  <script>
	$(function(){
		$("#toTop").scrollToTop(1000);
		$.ScrollPic({
			ele: '.top_bnr',   //插件应用div
			Time:'3000',          //自动切换时间
			autoscrooll:true,       //设置是否自动渐变
		});
		
		$(".listP").each(function(){
			var tid = $(this).attr('flag');
			$.post('/Project/index.php/Home/Index/showGoods',{id:tid},function(data){
				var aa = eval(data);
				for(var i in aa){
					$("p[flag="+tid+"]").append('<a class="red_f" href="/Project/index.php/Home/Guang/catalog/id/'+aa[i].id+'/pid/'+aa[i].p_id+'" target="_blank">'+aa[i].name+'</a>');
				}
			});
		});
		
		$('.list').each(function(){
			var mid = $(this).attr('flag');
			$.post('/Project/index.php/Home/Index/showType',{id:mid},function(data){
				$("ul[flag="+mid+"]").append(data);
			});
		})	

		$('.list').mouseenter(function(){
			$(this).children('.nav_list').css('display','block');
			$(this).addClass('active');	
		})
		
		$('.list').mouseleave(function(){
			$(this).children('.nav_list').css('display','none');
			$(this).removeClass('active');
		})
		
	})
  </script>
</head>
	<a href="#top" id="toTop"></a>
  <div class="top_bnr">
    <ul style="position: relative; overflow: hidden; cursor: pointer;" class="banner slides">
      
	  <?php if(is_array($playpic)): $i = 0; $__LIST__ = $playpic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pp): $mod = ($i % 2 );++$i;?><!--$pp.s_id-->
		
		<li style="position: absolute; top: 0px; left: 0px; z-index: 2; ">
			<a class="pic" href="#/<?php echo ($pp["s_id"]); ?>" target="_blank" style="background: transparent url(/Project/Public/<?php echo ($pp["pic"]); ?>) repeat scroll center top;"></a>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
  </div>
  <div class="top_wrap">
    <div class="top_box">
      <div class="bnr_btn_wrap">
        <span style="display: none;" class="bnr_btn bnr_btn_left"></span>
        <span style="display: none;" class="bnr_btn bnr_btn_right"></span>
      </div>
	  
	  
	  
	  
	<div class="attr_box">
		<ul class="sec_attr">
			
			<?php if(is_array($result)): foreach($result as $key=>$vo): ?><li flag="<?php echo ($vo["id"]); ?>" class="list">
				<div  class="list_cont">
					<h3 class="nav_tle">
						<a href="/Project/index.php/Home/Guang/firstCatalog/id/<?php echo ($vo["id"]); ?>" target="_blank">
				
							<span class="nav_ico" style="background: url('/Project/Mls/Home/Public/Images/29de71e358db368966393442b350_18_18.c8.png') no-repeat;"></span>
							<?php echo ($vo["name"]); ?>
						</a>
					</h3>
					<p class="listP"  flag="<?php echo ($vo["id"]); ?>">
						
					</p>				
					<samp class="corner">&gt;</samp>
				</div>
				<!-- 二级-->
				<ul flag="<?php echo ($vo["id"]); ?>" class="nav_list" style="display: none;">
				</ul>			
			</li><?php endforeach; endif; ?>
			
		</ul>
	</div>



	





















	  <div class="banner">
		<a href="#" target="_blank">
          <img src="/Project/Public/Uploads/1f8a4f413c3fbbee721fe63cddd6_200_139.ch.jpg" width="200" height="139"/>
        </a>
		<a href="#" target="_blank">
          <img src="/Project/Public/Uploads/360a055c5eff36a3e5d880079f98_200_139.cf.jpg" width="200" height="139"/>
        </a>
		<a href="#" target="_blank">
          <img src="/Project/Public/Uploads/d8486ee4efc30866998430757982_200_139.cg.jpg" width="200" height="139"/>
        </a>
	  </div>
      <!-- <div class="banner">
        <a href="#" target="_blank">
          <img src="/Project/Public/1.jpg" width="200" height="139"/>
        </a>
        <a href="#" target="_blank">
          <img src="/Project/Public/1.jpg" width="200" height="139"/>
        </a>
        <a href="#" target="_blank">
          <img src="/Project/Public/1.jpg" width="200" height="139"/>
        </a>
      </div> -->
     <!--  <div class="round">
        <div class="adType">
          <a class=""></a>
          <a class=""></a>
          <a class=""></a>
          <a class=""></a>
          <a class=""></a>
          <a class="current"></a>
        </div>
      </div> -->
      <div class="bnr_box">
        <ul class="pic_attr">
          <li><!--热销popular-->
            <a href="/Project/index.php/Home/Guang/index/act/popular" target="_blank">
              <img src="/Project/Mls/Home/Public/Images/ba97738b4fb32591deef9c22f157_175_142.ch.jpg" />
            </a>
          </li>
          <li><!--流行hot-->
            <a href="/Project/index.php/Home/Guang/index/act/hot" target="_blank">
              <img src="/Project/Mls/Home/Public/Images/87c977a797ed1e5997ba2442f7dc_175_142.cf.jpg" />
            </a>
          </li>
          <li><!--新榜newGood-->
            <a href="/Project/index.php/Home/Guang/index/act/newGood" target="_blank">
              <img src="/Project/Mls/Home/Public/Images/293024cf884d110d2059cc652106_175_142.ch.jpg" />
            </a>
          </li>
          <li><!--专题topic-->
            <a href="/Project/index.php/Home/Guang/index/act/topic" target="_blank">
              <img src="/Project/Mls/Home/Public/Images/65d104f6c5a4592f0db882683768_175_142.cf.jpg" />
            </a>
          </li>
        </ul><!--推广-->
        <div class="ads_one">
          <a href="" target="_blank">
            <img src="/Project/Mls/Home/Public/Images/2198c9f8ccb32869d963f614f664_198_142.ch.jpg" />
          </a>
        </div>
      </div>
    </div>
  </div>
  <div style="height: 154px;"></div>
  <div class="auto_wrap">
    <div class="wel_tle">
      <h2 class="tle">
		
        <span class="ico1"></span>
        <span id="hotPer">人气推荐单品</span>
      </h2>
    </div>
	<div style="margin:0 auto;width:1300px;">
    <ul class="rec_sku recommend">
	 <?php if(is_array($hotGood)): $i = 0; $__LIST__ = $hotGood;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hg): $mod = ($i % 2 );++$i;?><li>
        <div class="s_picBox">
          <a class="s_pic imgBox" href="/Project/index.php/Home/Share/index/id/<?php echo ($hg["id"]); ?>" target="_blank" title="<?php echo ($hg["name"]); ?>">
            <img style="width:180px;height:255px;" class="" src="/Project/Public/<?php echo ($hg["g_pic"]); ?>" />
          </a>
        </div>
        <p class="txt">
          <a href="/Project/index.php/Home/Share/index/id/<?php echo ($hg["id"]); ?>" target="_blank"><?php echo ($hg["name"]); ?></a>
        </p>
        <p class="price_box">
          <span class="price_red"><?php echo ($hg['price']*$hg['discount']/100); ?></span>
          <span class="price"><?php echo ($hg["price"]); ?></span>
        </p>
        <p><?php echo ($hg["buy_num"]); ?>人已购买</p>
      </li><?php endforeach; endif; else: echo "" ;endif; ?>
	 </ul>
	 </div>
	 
     <div class="auto_wrap line">
			<div class="wel_tle">
			<a class="more" href="/Project/index.php/Home/Guang/firstCatalog/id/1" target="_blank">
			  查看所有衣服
			  <samp>&gt;</samp>
			</a>
			<h2 style="float:left;display:inline-block">
			  <span class="ico2"></span>
			  <span style="color:red"></span>
			</h2>
			<span class="today">
			  今日上新 <strong><?php echo ($upGood); ?></strong>
			  件
			</span>
		</div>
		<div class="attr_box">
			<ul class="pic_box">
				<?php if(is_array($colRes)): $i = 0; $__LIST__ = $colRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$col): $mod = ($i % 2 );++$i;?><li>
        <a class="bar" href="" target="_blank"><?php echo ($col["summary"]); ?></a>
        <a class="pic imgBox" href="/Project/index.php/Home/Share/index/id/<?php echo ($col["id"]); ?>" title="<?php echo ($col["summary"]); ?>">
          <img style="width:180px;height:254px;" class="" src="/Project/Public<?php echo ($col["g_pic"]); ?>" />
        </a>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			</div>
			<div class="shop"> 
   <div class="cmn_title"> 
   <!--  <p class="f14_f"><a target="_blank" href="">更多好店<samp> &gt;</samp></a></p>  -->
    <h3 class="f16_f">最热衣服好店</h3> 
   </div> 
   <ul class="list"> 
	<?php if(is_array($shops)): $i = 0; $__LIST__ = $shops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ss): $mod = ($i % 2 );++$i;?><li> <a target="_blank" href="" class="avatar32_f"><img src="/Project/Public/1.jpg" /></a> <p class="name"><a target="_blank" href="/Project/index.php/Home/Shopinfo/index/id/<?php echo ($ss["gid"]); ?>"><?php echo ($ss["sname"]); ?></a></p> <p class="txt"><?php echo ($ss["total"]); ?>件商品/总销量<?php echo ($ss["sum"]); ?></p> </li><?php endforeach; endif; else: echo "" ;endif; ?>
   </ul> 
  </div>
		</div>
		<div class="auto_wrap line">
			<div class="wel_tle">
			<a class="more" href="/Project/index.php/Home/Guang/firstCatalog/id/10" target="_blank">
			  查看所有鞋子
			  <samp>&gt;</samp>
			</a>
			<h2 style="float:left;display:inline-block">
			  <span class="ico3"></span>
			  <span style="color:red"></span>
			</h2>
			<span class="today">
			  今日上新 <strong><?php echo ($upShoes); ?></strong>
			  件
			</span>
		</div>
		<div class="attr_box">
			<ul class="pic_box">
				<?php if(is_array($shoRes)): $i = 0; $__LIST__ = $shoRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sr): $mod = ($i % 2 );++$i;?><li>
					<a class="bar" href="" target="_blank"><?php echo ($sr["summary"]); ?></a>
					<a class="pic imgBox" href="/Project/index.php/Home/Share/index/id/<?php echo ($sr["id"]); ?>" target="_blank" title="<?php echo ($sr["summary"]); ?>">
					  <img  width="180px" height="254px" class="" src="/Project/Public<?php echo ($sr["g_pic"]); ?>" />
					</a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>	
			</ul>
			</div>
			<div class="shop"> 
		   <div class="cmn_title"> 
		   <!--  <p class="f14_f"><a target="_blank" href="">更多好店<samp> &gt;</samp></a></p>  -->
			<h3 class="f16_f">最热鞋子好店</h3> 
		   </div> 
		   <ul class="list"> 
			<?php if(is_array($shops)): $i = 0; $__LIST__ = $shops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ss): $mod = ($i % 2 );++$i;?><li> <a target="_blank" href="" class="avatar32_f"><img src="/Project/Public/1.jpg" /></a> <p class="name"><a target="_blank" href="/Project/index.php/Home/Shopinfo/index/id/<?php echo ($ss["gid"]); ?>"><?php echo ($ss["sname"]); ?></a></p> <p class="txt"><?php echo ($ss["total"]); ?>件商品/总销量<?php echo ($ss["sum"]); ?></p> </li><?php endforeach; endif; else: echo "" ;endif; ?>
		   </ul> 
		  </div>
		</div>
		<div class="auto_wrap line">
			<div class="wel_tle">
			<a class="more" href="/Project/index.php/Home/Guang/firstCatalog/id/39" target="_blank">
			  查看所有包包
			  <samp>&gt;</samp>
			</a>
			<h2 style="float:left;display:inline-block">
			  <span class="ico4"></span>
			  <span style="color:red"></span>
			</h2>
			<span class="today">
			  今日上新 <strong><?php echo ($upBag); ?></strong>
			  件
			</span>
		</div>
		<div class="attr_box">
			<ul class="pic_box">
				<?php if(is_array($bagRes)): $i = 0; $__LIST__ = $bagRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$br): $mod = ($i % 2 );++$i;?><li>
        <a class="bar" href="" target="_blank"><?php echo ($br["summary"]); ?></a>
        <a class="pic imgBox" href="/Project/index.php/Home/Share/index/id/<?php echo ($br["id"]); ?>" target="_blank" title="<?php echo ($br["summary"]); ?>">
          <img width="180px" height="254px" class="" src="/Project/Public<?php echo ($br["g_pic"]); ?>" />
        </a>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			</div>
			<div class="shop"> 
		   <div class="cmn_title"> 
		   <!--  <p class="f14_f"><a target="_blank" href="">更多好店<samp> &gt;</samp></a></p>  -->
			<h3 class="f16_f">最热包包好店</h3> 
		   </div> 
		   <ul class="list"> 
			<?php if(is_array($shops)): $i = 0; $__LIST__ = $shops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ss): $mod = ($i % 2 );++$i;?><li> <a target="_blank" href="" class="avatar32_f"><img src="/Project/Public/1.jpg" /></a> <p class="name"><a target="_blank" href="/Project/index.php/Home/Shopinfo/index/id/<?php echo ($ss["gid"]); ?>"><?php echo ($ss["sname"]); ?></a></p> <p class="txt"><?php echo ($ss["total"]); ?>件商品/总销量<?php echo ($ss["sum"]); ?></p> </li><?php endforeach; endif; else: echo "" ;endif; ?>
		   </ul> 
		  </div>
		</div>
		<div class="auto_wrap line">
			<div class="wel_tle">
			<a class="more" href="/Project/index.php/Home/Guang/firstCatalog/id/40" target="_blank">
			  查看所有配饰
			  <samp>&gt;</samp>
			</a>
			<h2 style="float:left;display:inline-block">
			  <span class="ico5"></span>
			  <span style="color:red"></span>
			</h2>
			<span class="today">
			  今日上新 <strong><?php echo ($upOrn); ?></strong>
			  件
			</span>
		</div>
		<div class="attr_box">
			<ul class="pic_box">
				<?php if(is_array($ornRes)): $i = 0; $__LIST__ = $ornRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$uo): $mod = ($i % 2 );++$i;?><li>
        <a class="bar" href="" target="_blank"><?php echo ($uo["summary"]); ?></a>
        <a class="pic imgBox" href="/Project/index.php/Home/Share/index/id/<?php echo ($uo["id"]); ?>" target="_blank" title="<?php echo ($uo["summary"]); ?>">
          <img  width="180px" height="254px" class="" src="/Project/Public<?php echo ($uo["g_pic"]); ?>" />
        </a>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			</div>
			<div class="shop"> 
		   <div class="cmn_title"> 
		   <!--  <p class="f14_f"><a target="_blank" href="">更多好店<samp> &gt;</samp></a></p>  -->
			<h3 class="f16_f">最热配饰好店</h3> 
		   </div> 
		   <ul class="list"> 
			<?php if(is_array($shops)): $i = 0; $__LIST__ = $shops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ss): $mod = ($i % 2 );++$i;?><li> <a target="_blank" href="" class="avatar32_f"><img src="/Project/Public/1.jpg" /></a> <p class="name"><a target="_blank" href="/Project/index.php/Home/Shopinfo/index/id/<?php echo ($ss["gid"]); ?>"><?php echo ($ss["sname"]); ?></a></p> <p class="txt"><?php echo ($ss["total"]); ?>件商品/总销量<?php echo ($ss["sum"]); ?></p> </li><?php endforeach; endif; else: echo "" ;endif; ?>
		   </ul> 
		  </div>
		</div>

		
	</div>
<!--包含底部文件-->

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