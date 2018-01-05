<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="/Project/Public/Js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="/Project/Public/Js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/Project/Public/Css/bootstrap.min.css" />
</head>
<body>

	<!--搜索-->
	<form method="get" class="form-inline" style="background:#ededed">
		<div class="form-group">
			<input type="search" name="search" value="<?php echo ($name); ?>" class="form-control input-sm" id="" placeholder="请输入宝贝名称"></div>
			<div class="form-group">
				<label for="exampleInputEmail2">价格:</label>
				<input type="text" name="gt" value="<?php echo ($gt); ?>" class="form-control input-sm" style="width:70px;" id="" placeholder=""> -
				<input type="text" name="lt" value="<?php echo ($lt); ?>" class="form-control input-sm" style="width:70px" id="" placeholder=""></div>
				<div class="form-group" style="padding:0 20px;border-right:1px solid #eee">
					<label for="exampleInputEmail2">状态:</label>
					<select class="selectpicker" name="state" data-style="btn-info">
						<?php if($state == 1): ?><option value="1" selected>--上架--</option>
							<option value="0">--下架--</option>
							<?php else: ?>
							<option value="1">--上架--</option>
							<option value="0" selected>--下架--</option><?php endif; ?>
					</select></div>
					<button data-submit="submit" type="submit" class="btn btn-primary">搜索</button> </form>

					
					<!--添加商品-->
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">添加商品</button>
					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title" id="myModalLabel"><b >添加商品</b></h4>
								</div>
								<div class="modal-body" style="padding-bottom:0px;padding-left: 0px;padding-right: 0px;">
									<!--主题内容-->
									<!-- col-sm-4 -->
				<!--
				<form class="form-horizontal">
				<div style="padding:0 30px;">
					<div class="form-group">
						<label for="">商品名称</label>
						<input type="email" class="form-control" id=""></div>
					<div class="form-group">
						<label for="">商品价格</label>
						<input type="email" class="form-control" id=""></div>
					<div class="form-group">
						<label for="">库存</label>
						<input type="email" class="form-control" id=""></div>
					<div class="form-group">
						<label for="">折扣</label>
						<input type="email" class="form-control" id=""></div>
					<div class="form-group">
						<label for="">状态</label>
						<input type="email" class="form-control" id=""></div>
					<div class="form-group">
						<label for="">店铺类别</label>
						<input type="email" class="form-control" id=""></div>
					<div class="form-group">
						<label for="">商品</label>
						<input type="email" class="form-control" id=""></div>
					<div class="form-group">
						<label for="">简介</label>
						<input type="email" class="form-control" id=""></div>
				</form>
				</div>
			-->

			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<title>Document</title>
				<link rel="stylesheet" href="/Project/Public/Css/bootstrap.min.css">
				<style>
					input.text-word {
						width: 310px;
						height: 36px;
						line-height: 36px;
						border: 1px solid #EBEBEB;
						background: #FFF none repeat scroll 0% 0%;
						font-family: "Microsoft YaHei","Tahoma","Arial","宋体";
						padding: 0px 10px;
					}
					#addgood select,#up select {
						width: 310px;
						height: 36px;
						line-height: 36px;
						border: 1px solid #EBEBEB;
						background: #FFF none repeat scroll 0% 0%;
						font-family: "Microsoft YaHei","Tahoma","Arial","宋体";
						color: #666;
					}
					input.text-but {
						width: 100px;
						height: 40px;
						line-height: 30px;
						border: 1px solid #CDCDCD;
						background: #E6E6E6 none repeat scroll 0% 0%;
						font-family: "Microsoft YaHei","Tahoma","Arial","宋体";
						color: #969696;
						float: left;
						margin: 0px 10px 0px 0px;
						display: inline;
						cursor: pointer;
						font-size: 14px;
						font-weight: bold;
					}
					#addgood td.text{
						padding:15px 10px;
						background:#f9f9f9;
						width:130px;
						text-align:right;
						font-weight:bold;
						vertical-align: middle;
					}
					#vl-toolbar {
						height: 30px;
						width: auto;
						background: #DFDFDF none repeat scroll 0% 0%;
						border-bottom: 1px solid #CCC;
						z-index: 10000371;
						position: relative;
					}

					#maintable tr>th, .maincenter { 
						text-align: center; 
					}
				</style>

				<link rel="stylesheet" href="/Project/Mls/Store/Public/Css/shop-cybertron.css" type="text/css">
				<link rel="stylesheet" href="/Project/Mls/Store/Public/Css/index.css" type="text/css" media="screen">


				<script type="text/javascript" src="/Project/Mls/Store/Public/Js/addgood.js"></script>
			</head>
			<body>
				<div style="" id="vl-main">
					<form id="addgood" >
						<table class="table table-bordered">
							<tr style="padding:10px 0;">
								<td style="vertical-align: middle;padding:15px 10px;background:#f9f9f9;width:130px;text-align:right;font-weight:bold">商品名称:</td>
								<td style="padding:15px 10px;">
									<input class="text-word" name="name" type="text" value="">
								</td>
							</tr>
							<tr style="padding:10px 0;">
								<td style="vertical-align: middle;padding:15px 10px;background:#f9f9f9;width:130px;text-align:right;font-weight:bold">商品价格:</td>
								<td style="padding:15px 10px;">
									<input class="text-word" name="price" type="text" value="">
								</td>
							</tr>
							<tr style="padding:10px 0;">
								<td style="vertical-align: middle;padding:15px 10px;background:#f9f9f9;width:130px;text-align:right;font-weight:bold">库存:</td>
								<td style="padding:15px 10px;">
									<input class="text-word" name="stock" type="text" value="">
								</td>
							</tr>
							<tr style="padding:10px 0;">
								<td style="vertical-align: middle;padding:15px 10px;background:#f9f9f9;width:130px;text-align:right;font-weight:bold">折扣:</td>
								<td style="padding:15px 10px;">
									<input class="text-word" name="discount" type="text" value="">
								</td>
							</tr>
							<tr style="padding:10px 0;">
								<td style="vertical-align: middle;padding:15px 10px;background:#f9f9f9;width:130px;text-align:right;font-weight:bold">状态:</td>
								<td style="padding:15px 10px;">
									<select name="level" id="state">
										<option value="1">上架</option>
										<option value="0">下架</option>
									</select>
								</td>
							</tr>

							<!--店铺类别-->
							<tr>
								<td style="vertical-align: middle;padding:15px 10px;background:#f9f9f9;width:130px;text-align:right;font-weight:bold">店铺类别:</td>
								<td style="padding:15px 10px;">
									<select name="level" id="p_type">
										<option value="">&nbsp;&nbsp;--请选择--</option>
										<?php if(is_array($pType)): foreach($pType as $key=>$val): if($val['state'] != null): ?><option  value="<?php echo ($val['p_id']); ?>">&nbsp;&nbsp;<?php echo ($val['name']); ?></option><?php endif; endforeach; endif; ?>
									</select>
									<select name="level" id="ep_type">
									</select>
								</td>
							</tr>
							<!--商品类别-->
							<tr>
								<td style="vertical-align: middle;padding:15px 10px;background:#f9f9f9;width:130px;text-align:right;font-weight:bold">商品分类:</td>
								<td style="padding:15px 10px;">
									<select name="level" id="h_type">
										<option value="">&nbsp;&nbsp;--请选择--</option>
										<?php if(is_array($hType)): foreach($hType as $key=>$val): if($val['p_id'] == 0): ?><option value="<?php echo ($val['id']); ?>">&nbsp;&nbsp;<?php echo ($val['name']); ?></option><?php endif; endforeach; endif; ?>
									</select>
									<select name="level" id="e_type">
									</select>
									<select name="level" id="s_type">
									</select>
								</td>
							</tr>
							<tr>
								<td style="vertical-align: middle;padding:15px 10px;background:#f9f9f9;width:130px;text-align:right;font-weight:bold">简介:</td>
								<td style="padding:15px 10px;">
									<textarea id="summary" cols="42" rows="4"></textarea>
								</td>
							</tr>

						</table>
					</form>
				</div>
			</body>
			</html>
			<!--主题内容结束-->
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" id="sub" class="btn btn-primary">Save changes</button>
		</div>
	</div>
</div>
</div>
<!--表格遍历-->
<table id="maintable" data-for="foreach" class="table table-hover table-bordered table-condensed">
	<thead>
		<tr class="active">
			<th width="7%">缩略图</th>
			<th width="25%">宝贝名称</th>
			<th width="6%">价格</th>
			<th width="6%">折扣</th>
			<th width="7%">分类</th>
			<th width="8%">创建时间</th>
			<th width="18%">简介</th>
			<th width="6%">状态</th>
			<th width="17%">操作</th>
		</tr>
	</thead>
	<tbody>
		<?php if(is_array($goods)): foreach($goods as $key=>$val): ?><tr id="" data-for="">
				<td class="maincenter">
					<img src="/Project/Public<?php echo ($val['g_pic']); ?>" style="height:30px;max-width:80px;" alt="">

				</td>
				<td class="maincenter"><?php echo ($val['name']); ?></td>
				<td class="maincenter"><?php echo ($val['price']); ?></td>
				<td class="maincenter"><?php echo ($val['discount'] / 10); ?></td>
				<td class="maincenter"><?php echo ($val['pname']); ?></td>

				<td class="maincenter"><?php echo (date('Y-m-d',$val['addtime'])); ?></td>
				<td class="maincenter ">
					<p class="zxx_text_overflow_8" data-container="body" data-toggle="popover" data-placement="bottom" data-content="<?php echo ($val['summary']); ?>">
						<?php echo ($val['summary']); ?>	
					</p>
				</td>
				<td>
					<?php if($val['state'] == 1): ?>出售中
						<?php else: ?>下架<?php endif; ?></td>
					<td >

						<!-- Button trigger modal -->		
						<a class="btn btn-info btn-sm" href="<?php echo U('Store/Images/index',array('id'=>$val['id']));?>">图片管理</a>
						<!-- Button trigger modal -->		
						
						<!-- Modal -->		
						<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-id="<?php echo ($val['id']); ?>" path-id="update" data-target="#update">编辑</button>
						<!-- Modal -->
						<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<h4 class="modal-title" id=""><b class="btn btn-info btn-lg">编辑</b></h4>
									</div>


									<!--内容start-->
									<div class="modal-body" style="padding-bottom:0px;padding-left: 0px;padding-right: 0px;">
										<table id="up" class="table table-bordered">
											<tr style="padding:10px 0;">
												<td style="vertical-align: middle;padding:15px 10px;background:#f9f9f9;width:130px;text-align:right;font-weight:bold">商品名称:</td>
												<td style="padding:15px 10px;">
													<input class="text-word" name="upname" type="text" value="<?php echo ($good['name']); ?>">
												</td>
											</tr>
											<tr style="padding:10px 0;">
												<td style="vertical-align: middle;padding:15px 10px;background:#f9f9f9;width:130px;text-align:right;font-weight:bold">商品价格:</td>
												<td style="padding:15px 10px;">
													<input class="text-word" name="upprice" type="text" value="">
												</td>
											</tr>
											<tr style="padding:10px 0;">
												<td style="vertical-align: middle;padding:15px 10px;background:#f9f9f9;width:130px;text-align:right;font-weight:bold">库存:</td>
												<td style="padding:15px 10px;">
													<input class="text-word" name="upstock" type="text" value="">
												</td>
											</tr>
											<tr style="padding:10px 0;">
												<td style="vertical-align: middle;padding:15px 10px;background:#f9f9f9;width:130px;text-align:right;font-weight:bold">折扣:</td>
												<td style="padding:15px 10px;">
													<input class="text-word" name="updiscount" type="text" value="">
												</td>
											</tr>
											<tr style="padding:10px 0;">
												<td style="vertical-align: middle;padding:15px 10px;background:#f9f9f9;width:130px;text-align:right;font-weight:bold">状态:</td>
												<td style="padding:15px 10px;">
													<select name="level" id="states">
														<option class="1" value="1">上架</option>
														<option class="0" value="0">下架</option>
													</select>
												</td>
											</tr>

											<!--店铺类别-->
											<tr>
												<td style="vertical-align: middle;padding:15px 10px;background:#f9f9f9;width:130px;text-align:right;font-weight:bold">店铺类别:</td>
												<td style="padding:15px 10px;">
													<select name="" id="type">
														<?php if(is_array($pType)): foreach($pType as $key=>$vo): if($vo['state'] != null): if($vo['states'] != 1): ?><option class="<?php echo ($vo['id']); ?>" value="<?php echo ($vo['id']); ?>" disabled ><?php echo ($vo['name']); ?></option>
																	<?php else: ?>
																	<option class="<?php echo ($vo['id']); ?>" value="<?php echo ($vo['id']); ?>" ><?php echo ($vo['name']); ?></option><?php endif; ?>
																<?php else: ?>
																<option class="<?php echo ($vo['id']); ?>" value="<?php echo ($vo['id']); ?>" >&nbsp;&nbsp;<?php echo ($vo['name']); ?></option><?php endif; endforeach; endif; ?>
													</select>
													
												</td>
											</tr>
											
											<tr>
												<td style="vertical-align: middle;padding:15px 10px;background:#f9f9f9;width:130px;text-align:right;font-weight:bold">简介:</td>
												<td style="padding:15px 10px;">
													<textarea name="upsummary" cols="42" rows="4"><?php echo ($vo['summary']); ?></textarea>
												</td>
											</tr>

										</table>




										<!--主题内容结束-->
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" id="upda" class="btn btn-primary">Save changes</button>
									</div>
								</div>
							</div>
						</div>


						<?php if($state == 1): ?><!-- Button trigger modal -->		
							<button type="button" class="btn btn-danger btn-sm" data-type="state" data-id="<?php echo ($val['id']); ?>">下架</button>
							<!-- Modal -->		
							<!-- Button trigger modal -->
							<?php else: ?>
							<button type="button" class="btn btn-danger btn-sm" id="del" data-type="del" data-id="<?php echo ($val['id']); ?>">删除</button><?php endif; ?>

					</td></tr><?php endforeach; endif; ?>
			</tbody>
			<tfoot>
				
				<tr>
					<td colspan="9"><?php echo ($pageNav); ?></td>
				</tr>
			</tfoot>
		</table>
		<script>
			$(function(){
				$('button[data-type="del"]').click(function(){
					var $id = $(this).attr('data-id');
					var obj = $(this);
					$.get('del',{id:$id},function(data){
						if(data){
					//obj.parents('tr').css('background','red')
					obj.parents('tr').remove();
				}
			})
				})
		//限制字符个数
		$(".zxx_text_overflow_8").each(function(){
			var maxwidth=10; 
			if($(this).text().length>maxwidth){
				$(this).text($(this).text().substring(0,maxwidth));
				$(this).html($(this).html()+'...');
			}
		});
		$(".zxx_text_overflow_8").mouseover(function(){
			$(this).popover('show');
		})
		$(".zxx_text_overflow_8").mouseout(function(){
			$(this).popover('hide');
		})
	})
		</script>
	</body>
	</html>