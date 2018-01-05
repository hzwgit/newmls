<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="/Project/Mls/Home/Public/Css/base.css" media="all">
	<link rel="stylesheet" href="/Project/Mls/Home/Public/Css/index.css" media="all">
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
<script type="text/javascript" src="/Project/Public/Js/jquery-2.1.4.min.js"></script>
	
	<div class="clear_f"></div>
	
	<div class="route">
		<div class="route_bread">
			<a href="">美丽说</a>
			<samp>&gt;</samp>
			<a href="<?php echo U('order/index');?>">我的美丽说订单</a>
			<samp>&gt;</samp>
			<span class="red_f">订单列表</span>
		</div>
	</div>
	<div class="order_area">
		<div class="doota_nav">
			<ul>
				<li class="selected">
					<a href="/Project/index.php/Home/Order/">已买到的商品</a>
				</li>
				<li>
					<a href="<?php echo U('cart/index');?>">我的购物车</a>
				</li>
				<li>
					<a href="<?php echo U('address/index');?>">我的收货地址</a>
				</li>
				<li>
					<a href="">我的优惠券</a>
				</li>
				<li>
					<a href="">退款/退货</a>
				</li>
				<li>
					<a href="">售后</a>
				</li>
				<!-- <li>
					<a href="">我的投诉</a>
				</li> -->
			</ul>
		</div>

		<script>
		$(function(){
			$("#orderStatus").change(function(){
				$('form').submit();
			})

			
					


			
			//取消订单
			$('a[name=delorder]').click(function(){

				$order=$(this).attr('order_id');
				// alert($order);
				if(confirm('确定取消订单吗')){
					$.ajax({
						type:'post',
						data:'order='+$order,
						url:"<?php echo U('Order/delorder');?>",
						success:function(msg){
							if(msg){
								$('td[data-oid='+$order+']').fadeOut(1000);
								$('p[data-oid='+$order+']').html('<strong>交易关闭</strong>');
							}
						}

					});
					

				}
			})

					// $va=<?php echo ($_GET['status']); ?>;
					// // alert($va);
					// $('option[value='+$va+']').attr('selected',true);
		$('#closeDialog').click(function(){
				// $('#dialogLayer').css('display','none');
				// $('#overlay').css('display','none');
					$('#dialogLayer').slideUp(500);
				$('#overlay').slideUp(500);
				// alert(111);

			})

			//点击立即登陆 ，ajax传数据到后台判断
			$('.login_btn').click(function(){
				$pass=$('#password').val();
				$user=$('#mlsUser').val();
				$.post("<?php echo U('Cart/login');?>",{pass:$pass,user:$user},function(arg){
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
			$(document).ready(function(){
				// $va=<?php echo ($_GET['status']); ?>;
					$va=$('#statu').val();

					$('option[value='+$va+']').attr('selected',true);
			})

			$('[name=get]').each(function(){
				$(this).click(function(){
					$id=$(this).attr('getid');
					$.post("<?php echo U('gets');?>",{order:$id},function(msg){
						if(msg){
							location.reload();
						}

					})
				})
			})
			
			$('[enter=enter]').each(function(){
				$(this).click(function(){
					$id=$(this).attr('order_id');
					$.post("<?php echo U('enter');?>",{order:$id},function(msg){
						if(msg){
							alert('')
						}

					})
				})
			})

		})

		</script>

		<?php if(empty($_SESSION['hid'])): ?><div class="maskLayer" id="overlay" style="width: 100%; height: 975px; display: block;"></div>
<div style="width: 620px; height: auto; display: block; top: 102.75px; left: 50%; margin-left: -310px;" class="dialogLayer" id="dialogLayer">
	<div class="dialogTitle" id="dialogTitle">
		<span class="close_z" id="closeDialog"  style="margin-top: -2px;">x</span>
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
		
		<?php else: ?>
		<div class="order_content">
			<div class="order_content_box">
				<fieldset>
					<form  method="get" action="/Project/index.php/Home/Order/index">
						<legend>订单列表表单</legend>
						<table class="order_list">
							<colgroup>
							<col width="240">
							<col width="100">
							<col width="70">
							<col width="80">
							<col width="90">
							<col width="120">
							<col width="130"></colgroup>
						<thead>
							<tr>
								<th>商品信息</th>
								<th>单价（元）</th>
								<th>数量</th>
								<th></th>
								<th>售后</th>
								<input type="hidden" value="<?php echo ($_GET['status']); ?>" id="statu">
								<th>合计（元）</th>
								<th>
									<select class="mls-select" id="orderStatus" name="status">
							

										<option value="0">交易状态</option>
										<option value="1">等待付款</option>
										<option value="2">等待发货</option>
										<option value="3">等待确认收货</option>
										<option value="4">交易成功</option>
										<option value="5">交易关闭</option>
									</select>
								</th>
								<th width="80">操作</th>
							</tr>
						</thead>


						<?php if(is_array($orderinfos)): $i = 0; $__LIST__ = $orderinfos;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?><tbody class="order_list">

							<tr  class="empty">
								<td colspan="8">&nbsp;</td>
							</tr>

							<!-- 判断是否同一个订单号 -->
							<?php if($order["o_id"] != $argument): ?><!-- <?php echo ($argument=$order["o_id"]); ?> -->
							<tr class="order_info header">
								<td colspan="8">
									<span>订单号：<?php echo ($order["o_id"]); ?></span>
									<span>
										商家：
										<a class="red_f" href="" target="_blank"><?php echo ($order["shopname"]); ?></a>
									</span>
									<a class="getserviceqq knilmi" href="###-844410438-1006519-3-" target="_blank">&nbsp;</a>
									<span style="margin-left: -30px;">成交时间：<?php echo (date("Y-m-d H-i-s",$order["time"])); ?></span>
								</td>
							</tr><?php endif; ?>
						<!-- 判断结束 -->

						
							<tr class="order_goods_list first last" data-oid="<?php echo ($order["o_id"]); ?>">
								<td class="order_goods_goods">
									<a class="goods_detail " target="_blank" href="<?php echo U('share/index');?>/id/<?php echo ($order["id"]); ?>">
										<img class="pic" src="/Project/Public<?php echo ($order["goodspic"]); ?>"></a>
									<p class="title">
										<a class="goods_detail " target="_blank" href="<?php echo U('share/index');?>/id/<?php echo ($order["id"]); ?>"><?php echo ($order["name"]); ?></a>
										<span class="snap-wrapper">
											【
											<a class="snap-link" href="" target="_blank">交易快照</a>
											】
										</span>
									</p>
									<!-- <p class="prop">需要注释
										<span>颜色：罩衫+背心+裤子</span>
										<span>尺码：均码</span>
									</p> -->
								</td>
								<td class=""><?php echo ($order["price"]); ?></td>
								<td class=""><?php echo ($order["num"]); ?></td>
								<td class=""></td>
								<td class=""></td>
								<td class="br" rowspan="1">
								<?php echo ($order['discount']/100*$order['num']*$order['price']); ?>
									<br><!-- 免运费 --></td>
								<td class="br" rowspan="1">
									<!-- <?php echo ($a=$order["o_state"]); ?> -->
									<p  data-oid="<?php echo ($order["o_id"]); ?>" ><?php echo ($arr["$a"]); ?></p>

									<p>
										<a class="red_f" target="_blank" href="/Project/index.php/Home/Order/orderinfo/hid/1/orderid/<?php echo ($order["o_id"]); ?>">订单详情</a>
									</p>
								</td>
								<?php if($order["o_state"] != 4): ?><td  data-oid="<?php echo ($order["o_id"]); ?>" class="br" rowspan="1" width="80">

							
								<!-- 判断是否付款 -->
								<?php if($order["o_state"] == 0): ?><a href=""  name="get" getid="<?php echo ($order["o_id"]); ?>" class="button">付款</a>
									<br>
									<!-- <a class="red_f" name="delorder" order_id="<?php echo ($order["o_id"]); ?>" href="javascript:;">取消订单</a> -->
									<br><?php endif; ?>
								<!-- 判断结束 -->
								<?php if($order["o_state"] == 2): ?><p><a href="" enter="enter" order_id="<?php echo ($order["o_id"]); ?>" target="_blank" class="button">确认收货</a>
									<br>
										<a order_id="<?php echo ($order["o_id"]); ?>" class="red_f" name="delorder" href="javascript:;">取消订单</a>
									</p>
								<?php elseif($order["o_state"] == 3): ?>
										<span>交易成功</span>
								<?php else: ?>
										<a order_id="<?php echo ($order["o_id"]); ?>" class="red_f" name="delorder" href="javascript:;">取消订单</a><?php endif; ?>

								</td><?php endif; ?>
							</tr>


						</tbody><?php endforeach; endif; else: echo "$empty" ;endif; ?>
						
						<tbody class="order_list">
							
						        <tr style="text-align:center"class="empty">
						            <td colspan="8">      
						                 <?php echo ($pageNav); ?>
						            </td>

						        </tr>
						</tbody>


						
						
						
					</table>
				</form>
			</fieldset>
		</div>
	
	</div><?php endif; ?>
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