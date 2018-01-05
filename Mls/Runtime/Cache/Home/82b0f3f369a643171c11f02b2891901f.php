<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="/project/Mls/Home/Public/Css/base.css" media="all">
<link rel="stylesheet" href="/project/Mls/Home/Public/Css/page_guang.css" media="all">
<link rel="stylesheet" href="/project/Mls/Home/Public/Css/waterfall.css" media="all">
<link rel="stylesheet" href="/project/Mls/Home/Public/Css/toTop.css" media="all">

<script src="/project/Public/Js/jquery-2.1.4.min.js"></script>
<script src="/project/Public/Js/waterfall.js"></script>

<style>
.pin{
    float:left;
}
</style>
<!--加载顶部文件-->

<script type="text/javascript" src="/project/Mls/Home/Public/Js/jquery-1.7.2.js"></script>
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
	<link rel="icon" href="/project/Public/1.png"/>
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
<i><img src="/project/Mls/Home/Public/Images/heart.png" alt=""></i>
我的喜欢
</a>
</li> -->

  <?php else: ?>   
     <!-- 
               <li>
          <a class="first" href="/connect/auth/weixin"> <em style="background:url(&quot;/project/Mls/Home/Public/Images/header/i_wx_single.png&quot;) no-repeat; padding:1px 8px;">&nbsp;</em>
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
        <a class="logo_new" href="/project/index.php/Home/index/index"></a>
        <div class="ser_n">
          <form class="searchBox" action="/project/index.php/Home/index/search" method="get">
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
<script type="text/javascript" src="/project/Mls/Home/Public/Js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="/project/Mls/Home/Public/Js/navbar.js"></script>
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
            <a class="r_d" href="/project/index.php/Home/index">
              首页
              <span class="shining none_f"></span>
            </a>
          </li>
          <li class="guang">
            <a class="" href="/project/index.php/Home/Guang/hot">今日最热</a>
          </li>
          <li class="dress">
            <a href="/project/index.php/Home/Guang/firstCatalog/id/1">
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
            <a class="" href="/project/index.php/Home/Guang/firstCatalog/id/10">鞋子</a>
          </li>
          <li>
            <a class="" href="/project/index.php/Home/Guang/firstCatalog/id/39">包包</a>
          </li>
          <li>
            <a class="" href="/project/index.php/Home/Guang/firstCatalog/id/40">配饰</a>
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
<script type="text/javascript" src="/project/Mls/Home/Public/Js/jquery.scrollToTop.min.js"></script>

<script>
	$(function(){
		//置顶按钮
		$("#toTop").scrollToTop(1000);
	})
	
</script>

<a href="#top" id="toTop"></a>
<div class="content_fluid" style="width:1200px;"  >
    <div  id="main" class="goods_wall" style="width: 100%; position: relative;" pata-pid="<?php echo ($pid); ?>" pata-id="<?php echo ($id); ?>">	
        <div style="" class="corner_notic pin"> 
            <div class="sidebar_rec"> 
                <div class="list"> 
					 <h3> <span target="_blank">更多同类</span> </h3> 
					 <div class="cont"> 
					<?php if(is_array($cata)): $i = 0; $__LIST__ = $cata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ca): $mod = ($i % 2 );++$i;?><a class="red_f" href="/project/index.php/Home/Guang/catalog/id/<?php echo ($ca["id"]); ?>/pid/<?php echo ($ca["p_id"]); ?>"><?php echo ($ca["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					 </div> 
                   <!--  <div class="item"> 
                        <h3> <a href="" target="_blank"> <img src="http://d05.res.meilishuo.net/img/_o/f3/61/29de71e358db368966393442b350_18_18.c8.png" /> 最热 </a> </h3> 
                        <div class="cont"> 
                            <a class="red_f" target="_blank" href="http://www.meilishuo.com/activity/fashion/main/?cid=9529&amp;hdtrc=desire_pc_wlc&amp;pstrc=fe_pos%3Awlc_words_0_0"> 全球潮款 </a> 
                            <a class="" target="_blank" href="/guang/catalog/hot?nid=210945&amp;cata_id=1000000000000&amp;pstrc=fe_pos%3Awlc_words_0_18"> 魅惑恨天高 </a> 
                        </div> 
                        <samp class="corner">&gt;</samp> 
                    </div>  -->
                    <!--二级分类-->
                   <!--  <div class="more"> 
                        <div class="nav_item"> 
                            <h4><a href="" target="_blank">本季最in风尚</a></h4> 
                            <div class="cont"> 
                                <a href="javascript:;"  target="_blank"> 全球潮款 </a> 
                                <a href="javascript:;" target="_blank"> 夏季新品 </a> 
                            </div>
                        </div>
                    </div> -->
                    <!--顶级分类-->
                   <!--  <div class="list last"> 
                        配饰
                    </div> -->
                </div> 
            </div> 
        </div>

        <div coli="0" col="1" style="width: 960px;float:left;" class="corner_nav"> 
            <ul class="cata_types"> 
                <li><a href="/project/index.php/Home/Guang/catalog/id/<?php echo ($id); ?>/pid/<?php echo ($pid); ?>/where/popular" class="">100元以下</a></li>		
		<li><a href="/project/index.php/Home/Guang/catalog/id/<?php echo ($id); ?>/pid/<?php echo ($pid); ?>/where/hotSe" class="">100~300</a></li>		
		<li><a href="/project/index.php/Home/Guang/catalog/id/<?php echo ($id); ?>/pid/<?php echo ($pid); ?>/where/upNew" class=" last">300以上</a></li>
				
               <!--  <li class="last"><a target="_blank" href="">夏季新品</a></li>  -->
            </ul> 
        </div>


        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ls): $mod = ($i % 2 );++$i;?><div class="pin poster_grid retsop poster_wall"> 
            <div class="new_poster"> 
                <div class="np_pic hover_pic"> 
                    <div class="price">
                        <?php echo ($ls["gprice"]); ?>
                    </div> 
                    <a class="pic_load" href="/project/index.php/Home/Share/index/id/<?php echo ($ls["gid"]); ?>" target="_blank" title="<?php echo ($ls["gname"]); ?>"><img class="goods_pic" src="/project/Public/<?php echo ($ls["gpic"]); ?>" alt="<?php echo ($ls["gname"]); ?>" width="226" /></a> 
                    <div style="display: none;" class="like_merge"> 
                        <a class="right_f poster_likes " href="javascript:void(0)"> <i class="like_status lm_like">&nbsp;</i> </a> 
                        <a class="right_f poster_forward" href="javascript:void(0)"><em class="lm_shouji">&nbsp;</em>收进杂志</a> 
                    </div> 
                </div> 
                <div class="title"> 
                    <p><a href="/project/index.php/Home/Share/index/id/<?php echo ($ls["gid"]); ?>" target="_blank"><?php echo ($ls["gname"]); ?></a></p> 
                </div> 
                <div class="clear_f"></div> 
                <div class="comm_num twiiter_box"> 
                    <a class="pl" href="/project/index.php/Home/Share/index/id/<?php echo ($ls["gid"]); ?>" target="_blank">销量（<?php echo ($ls["gbuy"]); ?>）</a> 
                    <a isshowlike="1" s_uid="85591250" class="left_f poster_likes likes " href="javascript:void(0)"> <b class="likes_status"> <i class="lm_love2">&nbsp;</i>喜欢 </b> <span class="red_f f14_f poster_like_num">23215</span> </a> 
                </div> 
                <div class="np_share comment_panel"> 
                    <!-- <a class="avatar32_f trans07 shopTips" href="/shop/193784" user_id="193784" target="_blank"><img src="http://d05.res.meilishuo.net/pic/H/8e/0b/e8884dffc49c0882d8cd41b38e2d_200_200.ch.jpg" /></a>  -->
                    <!-- <p class="ml42_f"><a href="/shop/193784" target="_blank">静夜思女装坊</a></p> --> 
                    <p class="commentHover t_idt"><?php echo ($ls["gsa"]); ?></p> 
                    <div class="clear_f"></div> 
                </div> 
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>