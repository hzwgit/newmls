<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title> 
  <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/base.css" media="all">
  <link rel="stylesheet" href="/Project/Mls/Home/Public/Css/confirm.css" media="all">
  <script type="text/javascript" src="/Project/Public/js/region_select.js"></script>
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
    


<div class="cart_header">
<div class="logo_wrap">
	<a class="logo_new" href="http://www.meilishuo.com/?frm=logoa"></a>
</div>
<div class="status">
	<div class="chart"></div>
	<div class="text">
		<span class="first current">我的购物车</span>
		<span class="middle current">填写核对订单信息</span>
		<span>付款，完成购买</span>
	</div>
	<div class="chart"></div>
	<div class="text">
		<span class="first current">立即购买</span>
		<span class="middle current">填写核对订单信息</span>
		<span>付款，完成购买</span>
	</div>
</div>
</div>

	<script type="text/javascript">
		$(function(){
		//点击使用新地址 显示form表单
		$('#addr_new').click(function(){
			new PCAS('location_p', 'location_c', 'location_a', '北京市', '', '');

			// $('#addr_form').css('display','block');
			$('#addr_form').slideDown(500);
			

		})



		//点击修改地址显示form表单
		$('.change').click(function(){
			$(this).each(function(){
				$id=$(this).attr('recid');
				$('input[addrid='+$id+']').attr('checked',true);
				$.post("<?php echo U(change);?>",{id:$id},function(msg){
					// alert(msg);
					//接收json数组 然后eval转格式
					msg = eval(msg);
					$p=msg[0];
					$c=msg[1];
					$a=msg[2];
					//获取数据 分配到修改地址处
					$st=$('span[name=s'+$id+']').html();
					$('#addressStreet').val($st);

					$ni=($('span[name=n'+$id+']').html());
					$('#addressUser').val($ni);

					$ph=$('span[name=p'+$id+']').html();
					$('#addressPhone').val($ph);

					$i=$('span[name=i'+$id+']').html();
					$('#changeid').val($i);

					//地址联动
					new PCAS('location_p', 'location_c', 'location_a', $p, $c, $a);

					//显示修改地址
					// $('#addr_form').css('display','block');
					$('#addr_form').slideDown(500);


				})


			})

			
			

		})
		//点击删除
		$('.del').click(function(){
			$(this).each(function(){
				$id=$(this).attr('delid');
				$.post("<?php echo U(del);?>",{id:$id},function(msg){
					if(msg){
						$('div[delid='+$id+']').hide(2000);

					}
				})

			})
		})





		//点击取消，form表单隐藏
		$('.cancel').click(function(){
			// $('#addr_form').css('display','none');
			$('#addr_form').slideUp(400);


		})

		//点击地址 ，form表单隐藏
		$('.oop').change(function(){
			// $('#addr_form').css('display','none');
			// $('#addr_form').css('display','none');
			$('#addr_form').slideUp(500);
			$('#addr_form').slideUp(400);


		})
		//默认


		//点击保存并使用
		$('#keep').click(function(){
			$address=[];
			$address.push($('#location_p option:selected').val());
			$address.push($('#location_c option:selected').val());
			$address.push($('#location_a option:selected').val());
			$street=$('#addressStreet').val();
			$nickname=$('#addressUser').val();
			$phone=$('#addressPhone').val();
			$id=$('#changeid').val();
			$de=$('#is_default:checked').val();


					//添加数据 给hidden
					
				

			$.post("<?php echo U(add);?>",{id:$id,address:$address,street:$street,nickname:$nickname,phone:$phone,de:$de},function(msg){

				if(msg=='save'){
					

				
					$('#changeid').val('');
					$('#addr_form').css('display','none');
					location.reload();

				}else{

					$('#changeid').val('');
					$('#addr_form').css('display','none');
					$("span[dis-add=addresss]").html($address[0]+','+$address[1]+','+$address[2]);
					$('span[dis-str=streets]').html($street);
					$("span[dis-nic=nicknames]").html($nickname);
					$("span[dis-pho=phoness]").html($phone);
					$('input[ch=dochecked]').attr('checked',true);
					$('input[ch=dochecked]').attr('addrid',msg);
					$('#displays').show(2000);
					
				}


			})


		})

		//点击提交按钮
		$('#charge').click(function(){
			$tp=$('#total_price').html();
			$vals=[];
			$('textarea[name=comment]').each(function(){
				$order=Object();
				$val=$(this).val();
				$shopid=$(this).attr('shid');

				$order[$shopid]=$val;
				// $order.message=$val;
				$order.r_id=$('input:checked').attr('addrid');
				$vals.push($order);

			})
			//$.post("<?php echo U(order);?>",{vals:$vals});
			$.post("<?php echo U(order);?>",{vals:$vals},function(arg){
				//alert(arg);
			if(arg){
					location="/Project/index.php/Home/Wallet/index/tp/"+$tp;
				}
			})
			
			// console.log($vals);
		})






		})
	</script>
<div class="container">
<p class="label">确认收货地址</p>
<div class="addr">

		<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div delid="<?php echo ($vo["id"]); ?>" class="unit adrl_list adrl_update_list active">
				<!-- <div class="hidden">
					<span class="adrl_nickname">sdf</span>
					<span class="adrl_address">内蒙古自治区赤峰市巴林左旗天河区</span>
					<span class="adrl_postcode"></span>
					<span class="adrl_phone">138****8200</span>
				</div> -->
				<!-- <label> -->
				<?php if($vo["defaults"] == 1): ?><input name="addr" class="oop" checked  addrid="<?php echo ($vo["id"]); ?>" type="radio">
				<?php else: ?>
					<input name="addr" class="oop"  addrid="<?php echo ($vo["id"]); ?>" type="radio"><?php endif; ?>
					<span  name="i<?php echo ($vo["id"]); ?>"  class="hidden" ><?php echo ($vo["id"]); ?></span>	
					<span name="a<?php echo ($vo["id"]); ?>" class="adrl_addr"><?php echo ($vo["address"]); ?></span>
					<span  name="s<?php echo ($vo["id"]); ?>"  class="street"><?php echo ($vo["street"]); ?></span>
					<span  name="n<?php echo ($vo["id"]); ?>"  class="nickname"><?php echo ($vo["name"]); ?></span>
					
					联系方式：<span  name="p<?php echo ($vo["id"]); ?>"  class="phones"><?php echo ($vo["phone"]); ?></span>
				<!-- </label> -->
				<span class="del orign_edit adrl_edit edit" style="margin-right: -3px; margin-left: 40px;" delid="<?php echo ($vo["id"]); ?>" >删除</span>

				<span class="change orign_edit adrl_edit edit" recid="<?php echo ($vo["id"]); ?>" >修改此地址</span>
				<!-- <span class="update_edit edit" style="display:">
					<span class="adrl_label">为享受更好的配送服务，请</span>
					<span class="adrl_edit btn-update">升级此地址</span>
			</span> -->
		</div><?php endforeach; endif; else: echo "" ;endif; ?>

	<div id="displays" class="unit adrl_list adrl_update_list active" style="display:none">
				
				
				<input  ch="dochecked" name="addr" class="oop"  addrid=""  type="radio">
						
					<span dis-add="addresss"></span>
					<span dis-str="streets"></span>
					<span dis-nic="nicknames"></span>
					
					联系方式：<span dis-pho="phoness"></span>
				
				<span class="del orign_edit adrl_edit edit" style="margin-right: -3px; margin-left: 40px;">删除</span>

				<span class="change orign_edit adrl_edit edit"  >修改此地址</span>
		</div>

	<div class="new_addr" id="new_adder_wrapper">
		<div class="unit ">
			<input value="-1" name="addr" id="addr_new" class="mls-input-radio" type="radio">
			<label style="width:200px" for="addr_new" class="mls-input-label mls-input-radio-label">使用新地址</label>
			<!-- <span id="addr_tip" class="new_addr_tentext">收货地址最多支持保存10条，超过10条将会自动替换最早创建的地址</span> -->
		</div>
		<div class="form" id="addr_form" style="display:none">
			<form id="addressForm" method="post" onsubmit="return false">
				<div class="infos">
					<p>
						<span class="left"> <b class="red_f mr4_f">*</b>
							<label for="addressPid">所在地：</label>

							<select name="location_p" id="location_p">
   							 </select>


							<select name="location_c" id="location_c">
  							  </select>


							<select name="location_a" id="location_a">
   							 </select>


							 

							<strong>&nbsp;</strong>
						</span>
					</p>
					<p>
						<b class="red_f mr4_f">*</b>
						<label for="addressStreet">街道地址：</label>
						<input class="mls-input-text l_ipt_s street" id="addressStreet" name="street" value="" type="text"> <strong>&nbsp;</strong>
					</p>
					<p>
						<span class="left">
							<span>
							<input id="changeid" type="hidden" name="" value="">
								<b class="red_f mr4_f">*</b>
								<label for="addressUser">收件人：</label>
								<input class="mls-input-text l_ipt reciever" id="addressUser" name="nickname" value="" type="text">
								<strong>&nbsp;</strong>
							</span>
						</span>
					</p>
					<p>
						<span class="phone">
							<b class="red_f mr4_f">*</b>
							<label for="addressPhone">联系电话：</label>
							<input class="mls-input-text l_ipt contact" id="addressPhone" name="phone" value="" type="text">
							<strong>&nbsp;</strong>
						</span>
					</p>
				</div>
				<div class="buttons">
					<div class="left_f">
						<input class="addressBtn button" id="keep" value="保存并使用" type="submit">
						<input class="addressBtn cancel" value="取消" type="button"></div>
					<span class="set_default_con">
						<input class="mls-input-checkbox" name="is_default"  checked id="is_default" value="1" type="checkbox">
						<label class="mls-input-label mls-input-checkbox-label" for="is_default">设为默认</label>
					</span>
				</div>
			</form>
		</div>
	</div>
</div>



<p class="label">商品清单</p>
<div class="order">
	<table cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th class="first" width="20px"></th>
				<th width="390">商品信息</th>
				<th width="100px">单价（元）</th>
				<th width="284px">数量</th>
				<th width="137px">小计</th>
				<th class="last" width="20px"></th>
			</tr>
		</thead>


	<?php if(is_array($goods)): foreach($goods as $k=>$go): if(is_array($go)): $i = 0; $__LIST__ = $go;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$do): $mod = ($i % 2 );++$i; if($k != $shop): ?><!-- <?php echo ($shop=$k); ?> -->
	
		<tbody class="shop">
			<tr class="blank_tr">
				<td></td>
			</tr>
			<tr>
				<td class="shop_title" colspan="6">
					<span>
						商家：
						<a class="red_f" href="" target="_blank"><?php echo ($do["shopname"]); ?></a>
					</span>
					<a class="getserviceqq knilmi" href="###-2919760455-107511-2-" target="_blank">&nbsp;</a>
				</td>
			</tr>
		</tbody><?php endif; ?>
<tbody class="goods">
<?php if($key['flag'] != true): ?><tr class="first last" id="">
				<td class="first"></td>
				<td class="content">
					<a class="content-link" target="_blank" href="<?php echo U('home/Share/index');?>/id/<?php echo ($do["id"]); ?>">
						<img src="<?php echo ($do["img"]); ?>">
						<span class="title"><?php echo ($do["name"]); ?></span>
						<span class="props">
							<span>颜色：<?php echo ($do["color"]); ?></span>
							<span>尺码：<?php echo ($do["size"]); ?></span>
						</span>
						
					</a>
				</td>
				<td>
					<div class="u_price"><?php echo ($do["price"]); ?></div>
				</td>
				<td><?php echo ($do["num"]); ?></td>
				<td><?php echo ($do['num']*$do['price']); ?></td>
				<td class="last"></td>
			</tr>
			

<?php else: ?>
			
			<tr class="total">
				<td class="first"></td>
				<td colspan="2" class="buyer_msg">
					<label>购买留言：</label>
					<textarea name="comment" shid="<?php echo ($k); ?>" class="mls-input-text comment"  placeholder="选填：建议填写已经与卖家达成一致的说明"></textarea>
				</td>
				<td colspan="2" style="vertical-align:top;">
					<ul class="coupon_freight">
					
						<li>
							<div id="freight_show" class="info freight_show_107511">
								<label class="lb">运费：</label>
								<span class="freight_info">免运费</span>
							</div>
							<!-- <div class="price">
								<span>0.00</span>
							</div> -->
						</li>
					</ul>
				</td>
				<td class="last"></td>
			</tr>
			
			<tr class="total">
			<!-- <?php echo ($a=$k); ?> -->
				<td class="first"></td>
				<td colspan="2"  style="height: 48px;"></td>
				<td   colspan="2"class="content" class="shop_total">
					<span style="margin-left: 200px;margin-top: 2px;">共
					<?php echo ($mm[$a]); ?>件商品，</span>
					<span >
						店铺合计：
						
						<span id="" class="price"></span><strong style="font-size:16px;color:#FF6699"><?php echo ($data[$a]); ?></strong>
						元
					</span>
				</td>
				<td class="last"></td>
			</tr><?php endif; ?>
		</tbody><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; ?>


	
	

		<tbody class="empty">
			<tr>
				<td colspan="3" class="first" style="height:10px;"></td>
				<td colspan="3" class="last" style="height:10px;"></td>
			</tr>
		</tbody>


		<tfoot>
			<tr>
				<td class="first">&nbsp;</td>
				<td colspan="5" class="last">
					<span class="right">
						<a class="cart" href="http://localhost/Project/index.php/Home/cart">&lt;&lt;返回购物车</a>
						<span>商品总价：</span>
						<span class="price">
							￥
							<span id="total_price"><?php echo ($ta); ?></span>
						</span>
						<a href="javascript:;" class="go_charge" id="charge"></a>
					</span>
				</td>
			</tr>
		</tfoot>
	</table>
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