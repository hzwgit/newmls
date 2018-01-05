<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title> 
  <link rel="stylesheet" href="/project/Mls/Home/Public/Css/base.css" media="all">
  <link rel="stylesheet" href="/project/Mls/Home/Public/Css/cart.css" media="all">
  <link rel="stylesheet" href="/project/Mls/Home/Public/Css/cartnull.css" media="all">

  <script type="text/javascript" src="/project/Public/js/jquery-2.1.4.min.js"></script>
</head>
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
    
	<script>
		$(function(){

			//减少商品
			$('.minus').click(function(){
				$(this).each(function(){

					$sid=($(this).attr('data-sid'));
					$num=parseInt($('input[gid='+$sid+']').val());

					if($num>1){
						$num-=1;
						if($num<=1){
							$num=1;
						}
						$('input[gid='+$sid+']').val($num);
						$price=$('span[priceid='+$sid+']').html();
						$val=$num*$price;
						$('[name=gid'+$sid+']').html($val.toFixed(1));
							if($('[ck='+$sid+']:checked').attr('class')=='shop-id'){
						$o=parseFloat($('.total_price').html())-parseFloat($price);
				$('.total_price').html($o.toFixed(1));
						
						}

					}
					
				})
				

			})
			//增加商品
			$('.add').click(function(){
				$o=0;
				$(this).each(function(){
					$sid=($(this).attr('data-sid'));
					$num=parseInt($('input[gid='+$sid+']').val());
					$num+=1;
					if($num>100){
						$num=100;
					}
					$('input[gid='+$sid+']').val($num);
					$price=$('span[priceid='+$sid+']').html();
					$val=$num*$price;
					$('[name=gid'+$sid+']').html($val.toFixed(1));
					if($('[ck='+$sid+']:checked').attr('class')=='shop-id'){
					$o=parseFloat($('.total_price').html())+parseFloat($price);
					$('.total_price').html($o.toFixed(1));

					}
					


				})
				
			})





			//购物车全选
			$('input[name=all-goods-id]').click(function(){
				$val=this.checked;


				$('input[type=checkbox]').each(function(){
					this.checked=$val;

				})

			})





			//商铺全选
			$('.del').each(function(){
				$check=$(this).parent().parent().prev().attr('one');
				
				$('#'+$check).click(function(){
					$val=this.checked;
					
					$('input[name='+$check+']').each(function(){
						this.checked=$val;

					})
				})
			})

			//商品选中 商店也中
			$('.shop-id').each(function(){

				$shopid=$(this).attr('name');
				$(this).click(function(){
					$vv=this.checked;
					$('#'+$shopid).each(function(){
						this.checked=$vv;
					});

				})

			})


						
			//全选时候显示的价格
			$('input[name=all-goods-id]').click(function(){
				$gtotal=0;
				$('input[class=shop-id]:checked').each(function(){
					$gtotal+=parseFloat($(this).parent().siblings('[name=gtotal]').children('span').html());


				})
			 $('.total_price').html($gtotal.toFixed(1));
			})


			//商品点击时候
			$('input[class=shop-id]').click(function(){
				$goodstotal=0;
				$('input[class=shop-id]:checked').each(function(){
					$goodstotal+=parseFloat($(this).parent().siblings('[name=gtotal]').children('span').html());


				})
				$('.total_price').html($goodstotal.toFixed(1));

			})


			//商店全选时候价格显示
			$('input[name=shopall]').click(function(){

				$goodstotal=0;
				$('input[class=shop-id]:checked').each(function(){
					$goodstotal+=parseFloat($(this).parent().siblings('[name=gtotal]').children('span').html());


				})
				$('.total_price').html($goodstotal.toFixed(1)); 


			})
			//进来时候默认全选
			$(document).ready(function(){
  				$('input[type=checkbox]').attr('checked',true);
  				$total=0;
  				$('.goods_total').each(function(){

  					$total+=parseFloat($(this).html());


  				})
  				$('.total_price').html($total.toFixed(1));
			});

			//移动到 去结算 时候 判断价格
			$('#into').hover(function(){
				if(	$('.total_price').html()=="0.0"){	
					$('#into').css('cursor','not-allowed');
				}else{
					$('#into').css('cursor','pointer');
				}
			})
			


		//获取选中商品的数量存到session
			$('.charge-btn').click(function(){
				$order=[];
				$('.shop-id:checked').each(function(){
					$ids = Object();
					$gid=$(this).attr('ck');
					$sid=$(this).attr('spid');
					$num=$('input[gid='+$gid+']').val();
					$ids.sid = $sid;
					$ids.gid = $gid;
					$ids.nums = $num;
					$order.push($ids); 
					//$nums.push($sid);
					//$ids.push($gid);
					//$shopid.push($sid);
				})
				$.post("<?php echo U(donum);?>",{order:$order},function(arg){
						if(arg){
							if(	$('.total_price').html()!=="0.0"){
								//判断是否登陆
								if(!$('#isset').html()){
									// $('#dialogLayer').css('display','block');
									// $('#overlay').css('display','block');
									$('#dialogLayer').show(1000);
									$('#overlay').fadeIn(1000);
								}else{
									location="<?php echo U('Init/index');?>";
									// alert(1);
								}
							}
						}
				})
				// console.log($order);
				//alert($nums[0].nums);
				//alert($ids);	
				//alert($shopid);

			
			})

			//关闭模态框
			$('#closeDialog').click(function(){
				// $('#dialogLayer').css('display','none');
				// $('#overlay').css('display','none');
					$('#dialogLayer').hide(500);
				$('#overlay').hide(500);
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

			//删除对应的商品
			$('.del').click(function(){
				$(this).each(function(){

					$delid=$(this).attr('del');
					$shopid=$(this).attr('name');
					$soid=$(this).attr('sho');
					$.post("<?php echo U(delgoods);?>",{shopid:$shopid,id:$delid},function(msg){

						// alert(msg);
						if(msg=="2"){
							$('#del'+$delid).fadeOut(800);
						}
						if(msg=="1"){
							// alert(1);
							// $('table').css('display','none');
				 		// 	$('#kong').css('display','block');
				 		$('table').fadeOut(400);
				 			$('#kong').show(800);
						}
						if(msg=='3'){
							// alert(3);
							$('#del'+$delid).fadeOut(800);
							$('tr[one='+$soid+']').fadeOut(800);

						}
					})
					
				})
				// alert($('.goods').attr('id'));
				// if($('.goods').attr('id')=="undifind"){
				// 				$('table').css('display','none');
				// 				$('#kong').css('display','block');
				// 			}

			})



		})
		</script>


<div class="cart_header">
	<div class="logo_wrap">
		<a class="logo_new" href="/project/index.php/"></a>
	</div>
	<div class="status">
		<div class="chart"></div>
		<div class="text">
			<span class="first current">我的购物车</span>
			<span class="middle">填写核对订单信息</span>
			<span class="">付款，完成购买</span>
		</div>
		
	</div>
</div>
<div class="status-top">
	

	<span class="tag-item tag-show">
		<a>
			国内商品
			<span id="China_count"><?php echo (count(session('cart'))); ?></span>
		</a>
	</span>

	

	<span class="right">
		商品总价：（不含运费和优惠扣减）：
		<span class="total_price">0.00</span>
		元
		<!-- <a style="display: inline;" href="" class="go_charge">去结算&gt;&gt;</a> -->
	</span>
</div>
<div class="container">
	<div class="cart">
<div id="kong" class="cart" style="border-top-width: 0px;display:none">		<div class="no_logged">		<div class="clear">			<div class="icon"></div>			<div class="description">				您的购物车还空着呢，<br><a href="<?php echo U('index/index');?>">去逛逛</a>吧！			</div>		</div>	</div>	</div>

<?php if(empty($_SESSION['cart'])): ?><div  class="cart" style="border-top-width: 0px;">		<div class="no_logged">		<div class="clear">			<div class="icon"></div>			<div class="description">				您的购物车还空着呢，<br><a href="/project">去逛逛</a>吧！			</div>		</div>	</div>	</div>
	<?php else: ?>
		<span id='isset' style="display:none"><?php echo ($session); ?></span>
		<table style="display:" cellpadding="0" cellspacing="0">
			<thead>
				<tr>
					<th class="tl first" width="55px">
						<label><input id="" name="all-goods-id"  value="" class=""  type="checkbox">
						全选</label>
					</th>
					<th style="text-align:center" width="254px">商品信息</th>
					<th width="100px">&nbsp;&nbsp;&nbsp;</th>
					<th width="150px">单价（元）</th>
					<th width="130px">数量</th>
					<th width="135px">小计（元）</th>
					<th class="last">操作</th>
				</tr>
			</thead>

				<!--2商家名字栏-->
		<tbody class="shop">
	
		

		<?php if(is_array($sion)): $i = 0; $__LIST__ = $sion;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(is_array($vo)): foreach($vo as $oo=>$voo): if($key != $val): ?><!-- <?php echo ($val=$key); ?> -->
			<tr one="<?php echo ($voo["shopname"]); ?>" class="shop_title" id=">">
				<!--店铺全选按钮-->
				<td fater=<?php echo ($voo["shopname"]); ?> class="first">
					<!-- <input class="" name="shopall" value="" id="<?php echo ($voo["shopname"]); ?>" type="checkbox"> -->
					
				</td>


				<td class="tl last" colspan="6">
					<div class="clearfix left_f" style="height:22px;line-height:22px;">
						<span class="shop_info">
							商家：
							<a class="red_f" href="<?php echo U('HOME/shopinfo/index');?>/id/<?php echo ($voo["id"]); ?>"  target="_blank" title=""><?php echo ($voo["shopname"]); ?></a>
						</span>
						<a class="getserviceqq knilmi shop_im" href="###--179168-2-" target="_blank">&nbsp;</a>
					</div>
					<!-- <div class="shop_discount clearfix"></div> -->
					<!--优惠卷信息-->
					<!-- <span class="right_f red_f coupon mr6_f" id="coupon_179168" data-shopid="179168">
						<span>优惠券:59减5</span>
						<em class="coupon_arrow">√</em>
					</span> -->
			
				</td>
			</tr><?php endif; ?>
	

	<!--2商品信息栏-->
		

		<tr id="del<?php echo ($voo["id"]); ?>" class="goods last first ">
			
			<!--商品选项checkbox-->
			<td class="ch">
				<input class="shop-id" name="<?php echo ($voo["shopname"]); ?>" value="gid<?php echo ($voo["id"]); ?>" spid="<?php echo ($key); ?>" ck="<?php echo ($voo["id"]); ?>" type="checkbox">
				<!-- <label for="select_634203464" class="mls-input-label mls-input-checkbox-label red-check"></label> -->
			</td>


			<!--商品名称和图片-->
			<td class="g-content" id="g_content_634203464">
				<a href="<?php echo U('home/Share/index');?>/id/<?php echo ($voo["id"]); ?>" target="_blank">
					<img asrc="<?php echo ($voo["img"]); ?>" src="<?php echo ($voo["img"]); ?>">

				</a>
				<div class="name">
					<div>
						<a href="<?php echo U('home/Share/index');?>/id/<?php echo ($voo["id"]); ?>" target="_blank"><?php echo ($voo["name"]); ?></a>
					</div>
				</div>
			</td>


			<td class="order_detail">
				<div class="order_detail_wrapper">
					<span class="order_info " id="order_info_634203464" data-sid="634203464" data-shopid="179168" data-twitterid="3473702123">
						<span class="order_info_item order_info_item_0 first">颜色：<?php echo ($voo["color"]); ?></span>
						<span class="order_info_item order_info_item_1 ">尺码：<?php echo ($voo["size"]); ?></span>
						<!-- <span class="order_info_text">编辑</span> -->
					</span>
					<div class="order_edit" id="order_edit_634203464">
						<span class="arrow_left"></span>
					</div>
				</div>
			</td>

			<!--单价-->
			<td class="price_discount">
				<!-- 如果有打折则也显示原价 -->
				<span class="price_origial">
					<s><?php echo ($voo['price']/$voo['discount']*100); ?></s>
				</span>
				<!-- 显示实际价格 -->
				<span priceid="<?php echo ($voo["id"]); ?>" class="price"><?php echo ($voo["price"]); ?></span>
				<!-- 如果有促销则显示促销相关信息 -->
				<span class="promote_wrapper">
				<?php if($voo["discount"] != 100): ?><div class="promo_num">
						<em class="discount-txt">限时<?php echo ($voo['discount']/10); ?>折</em>
						<br>
						<!-- <em class="" time="186324.4049999714"><b>2</b>
							天 <b>03</b>
							小时
							<b>43</b>
							分
							<b>56</b>
							秒</em>  -->
					</div><?php endif; ?>	
				</span>
			</td>

			<!--数量按钮-->
			<td name="goodsname">
				<span class="minus"  data-sid="<?php echo ($voo["id"]); ?>"></span>
				<input class="amount" num="<?php echo ($voo["num"]); ?>" gid="<?php echo ($voo["id"]); ?>" value="<?php echo ($voo["num"]); ?>" type="text">
				<span class="add"   data-sid="<?php echo ($voo["id"]); ?>"></span>
			</td>

			<!--总格-->
			<td name="gtotal">
				<span name="gid<?php echo ($voo["id"]); ?>" class="goods_total"><?php echo ($voo['num']*$voo['price']); ?></span>
			</td>

			<!--操作-->
			<td class="last">
				<a href="javascript:;" name="<?php echo ($key); ?>" sho="<?php echo ($voo["shopname"]); ?>" class="del" del="<?php echo ($voo["id"]); ?>">删除</a>
			</td>
		</tr><?php endforeach; endif; endforeach; endif; else: echo "" ;endif; ?>

	</tbody>

			
	

	<!--空行-->
	<tbody class="empty">
		<tr>
			<td colspan="7"></td>
		</tr>
	</tbody>


	<tfoot id="float_ctrl">
		<tr>
			<!--全选按钮-->
			<td class="tl first" width="65px">
				<label><input id="" name="all-goods-id" value="" class="" type="checkbox">
				全选</label>
			</td>
			<!-- 大促期间这个显示 -->
			<!-- 大促期间这个不显示 -->
			<td colspan="6" id="noTips" class="last tl clearfix_f">
				<a href="javascript:;" id="removeSelected" class="link red_f">删除选中的商品</a>
				<span class="link red_f remove_blank"></span>
				<span class="txt">商品总价（不含运费和优惠扣减）：</span>
				<span class="red">
					￥
					<span class="total_price">0.0</span>
				</span>
				<a id="into"  class="charge-btn"></a>
			</td>
		</tr>
	</tfoot>


</table><?php endif; ?>
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
      <img alt="美丽说服务号二维码" src="/project/Mls/Home/Public/Images/header/qrcode-new.jpg"></div>
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