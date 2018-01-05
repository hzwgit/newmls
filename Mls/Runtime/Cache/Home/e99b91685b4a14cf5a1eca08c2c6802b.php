<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="/Project/Mls/Home/Public/Css/base.css" media="all">
	<link rel="stylesheet" href="/Project/Mls/Home/Public/Css/index.css" media="all">
	<link rel="stylesheet" type="text/css" href="/Project/Mls/Home/Public/Css/orderinfo.css" />
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
	
</head>
<body>
	<div class="order_header">
		<span class="icon"></span>
	</div>
	<div class="route">
		<div class="route_bread">
			<a href="http://www.meilishuo.com/">美丽说</a>
			<samp>&gt;</samp>
			<a href="http://order.meilishuo.com/order/list/">我的美丽说订单</a>
			<samp>&gt;</samp>
			<span class="red_f">订单详情</span>
		</div>
	</div>
	<div class="order_area">
		<div class="order_status_bar">
		<!-- <?php echo ($a=$infos[0]["o_state"]); ?> -->
			<p>当前状态：<?php echo ($arr["$a"]); ?></p>
			<div class="flowStep" style="width:576px;">
				<div class="chart" style="margin-left:54px">
					<div class="line" style="width:456px;left:6px"></div>
					<div style="margin-left:0px;" class="ball "></div>
					
					<?php if($a != 4): if($a == 0): ?><div style="margin-left:140px;" class="ball empty"></div>
						<?php else: ?>
							<div style="margin-left:140px;" class="ball"></div><?php endif; ?>
							
						<?php if($a > 1): ?><div style="margin-left:140px;" class="ball"></div>
						<?php else: ?>
							<div style="margin-left:140px;" class="ball empty"></div><?php endif; ?>
						<?php if($a == 3): ?><div style="margin-left:140px;" class="ball "></div>
						<?php else: ?>
							<div style="margin-left:140px;" class="ball empty"></div><?php endif; ?>
					<?php else: ?>
						<div style="margin-left:140px;" class="ball empty"></div>
						<div style="margin-left:140px;" class="ball empty"></div>
						<div style="margin-left:140px;" class="ball empty"></div><?php endif; ?>

				</div>
				<div class="text">
					<div class="active" style="width:120px;">拍下宝贝</div>
					<div style="width:120px;margin-left:32px;">支付订单</div>
					<div style="width:120px;margin-left:32px;">卖家发货</div>
					<div style="width:120px;margin-left:32px;">确认收货</div>
					<div class="active" style="width:120px;"><?php echo (date("Y-m-d H:i:s",$infos[0]["time"])); ?></div>
					<div style="width:120px;margin-left:32px;display:none;"></div>
					<div style="width:120px;margin-left:32px;display:none;"></div>
					<div style="width:120px;margin-left:32px;display:none;"></div>
				</div>
			</div>
			<div class="status_text">
				<?php if($a == 0): ?><div class="status_text">
					您的订单已经提交，请在
					<span class="red_f"><!-- 2015-07-25 14:02 -->24小时内</span>
					完成支付，超时订单将自动关闭。
				</div>
				<div class="status_text">交易高峰时段，可能会存在订单状态更新不及时，如果您已经完成支付，请耐心等待，不要取消订单。</div>
				<a target="_blank" oid="<?php echo ($infos[0]["o_id"]); ?>" id="pay_now" href="" class="btn">立即支付</a>
				<a id="cancel_order" oid="<?php echo ($infos[0]["o_id"]); ?>" href="javascript:;" class="btn gray">取消订单</a>
				<?php elseif($a == 1): ?>
					<div class="status_text">等待卖家发货ing</div>
				<?php elseif($a == 2): ?>
				<!-- <a target="_blank" id="pay_now" href="https://zhifu.meilishuo.com/wallet/?orderId=15072444163196" class="btn">确定收货</a> -->
				<?php elseif($a == 4): ?>
				<div class="status_text button">交易关闭</div>
				<!-- <a id="cancel_order" href="javascript:;" class="btn gray">退货</a> --><?php endif; ?>
			</div>
		</div>
		<div class="order_address">
			<div id="express">
				<h4>收货信息</h4>
				<p>收货人：<?php echo ($infos[0]["name"]); ?></p>
				<p>收货地址：<?php echo ($infos[0]["address"]); ?></p>
				<p>详细地址： <?php echo ($infos[0]["street"]); ?></p>
				<p>联系电话：<?php echo ($infos[0]["phone"]); ?></p>
			</div>
		</div>
		<div class="order_goods">
			<table class="order_list">
				<colgroup>
				<col width="360">
				<col width="120">
				<col width="80">
				<col width="100">
				<col width="130">
				<col width="120"></colgroup>
			<thead>
				<tr>
					<th>商品信息</th>
					<th>单价（元）</th>
					<th>数量</th>
					<th>售后</th>
					<th>合计（元）</th>
					<th>订单状态</th>
				</tr>
			</thead>
			<script>
			$(function(){

				var to=0;
				$('.bl').each(function(){
					to+=parseFloat($(this).html());
				})	
				
				$('#total').html(to.toFixed(2));
				
				$('#pay_now').click(function(){
					$id=$(this).attr('oid');
					$.post("<?php echo U('gets');?>",{order:$id},function(msg){
						if(msg){
							alert('付款成功');
						}

					})

				})

				$('#cancel_order').click(function(){
					$id=$(this).attr('oid');
					$.post("<?php echo U('delorder');?>",{order:$id},function(msg){
						if(msg){
						
							alert('Thank');
							location.reload();
						}

					})

				})




			})

			</script>

				

			<tbody class="order_list">
				<?php if(is_array($infos)): $i = 0; $__LIST__ = $infos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["id"] != $oop): ?><!-- <?php echo ($oop=$vo["id"]); ?> -->
				<tr class="order_info">
					<td colspan="6">
						<span>
							商家：
							<a class="red_f" href="" target="_blank">商家名<?php echo ($infos["shopname"]); ?></a>
						</span>
						<a class="getserviceqq knilmi" href="###-164623905-115211-3-" target="_blank">&nbsp;</a>
					</td>
				</tr><?php endif; ?>
				
				<tr class="order_goods_list">
					<td class="order_goods_goods">
						<a target="_blank" href="http://www.meilishuo.com/share/item/3681485473">
							<img class="pic" src="/Project/Public<?php echo ($vo["g_pic"]); ?>"></a>
						<p class="title">
							<?php echo ($vo["gname"]); ?>
							<br></p>
						
					</td>
					<td class=""><?php echo ($vo["price"]); ?></td>
					<td class=""><?php echo ($vo["num"]); ?></td>
					<td class=""></td>
					<td class="bl" rowspan="1"><?php echo ($vo['price']*$vo['num']*$vo['discount']/100); ?></td>
					<!-- <?php echo ($a=$vo["o_state"]); ?> -->
					<td class="bll" rowspan="1"><?php echo ($arr["$a"]); ?></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			
			</tbody>

		


		</table>
		<!-- 	 -->
		<ul>
			<li class="order_timer">
				<p>
					<span class="first">订单号：<?php echo ($infos[0]["o_id"]); ?></span>
					<span>成交时间：<?php echo (date("Y-m-d H:i:s",$infos[0]["time"])); ?></span>
					
				</p>
			</li>
			<!-- 		<li class="order_discount">
			<span>优惠券：未使用</span>
		</li>
		-->
	<!-- 	<li class="order_comment_discount">
			<table>
				<tbody>
					<tr>
						<td class="comment"></td>
						<td class="discount">
							<table>
								<tbody>
									<tr class="discount_info">
										<td> <strong>已选择优惠</strong>
										</td>
									</tr>
									<tr class="discount_info">
										<td>
											<img src="http://i.meilishuo.net/css/images/cartOrder/mail.png?asdf">
											<span>已使用满1包邮</span>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</li> -->
		<li>
			<p class="right_f">
				<span class="last">
					<!-- <span>
						运费： <em class="red_f f15_f">0.00&nbsp;</em>
						元
					</span>
					<span>
						共计优惠： <strong class="red_f f15_f">- 0</strong>
						&nbsp;元
					</span> -->
					<?php if($a != 4): ?><span>
						实付金额：
						<strong id="total" class="red_f f18_f"></strong>
						&nbsp;&nbsp;元 
					</span>
					<?php else: endif; ?>
					<span class="order_list">
					<?php if($a != 4): if($a == 0): ?><a href="" target="_blank" class="button">付款</a>
					<?php elseif($a == 2): ?>
						<a href="" target="_blank" class="button">确认收货</a>
					<?php elseif($a == 3): endif; ?>
					<?php else: endif; ?>

					</span>
				</span>
			</p>
			<div class="clear_f"></div>
		</li>
	</ul>
</div>
</div>

</body>


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