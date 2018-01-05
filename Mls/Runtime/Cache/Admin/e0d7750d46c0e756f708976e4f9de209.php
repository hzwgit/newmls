<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script type="text/javascript" src="/Project/Public/Js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="/Project/Public/Js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/Project/Public/Css/bootstrap.min.css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后台模板</title>
<style>
    th,td{
        text-align:center !important;
        vertical-align:middle !important;

    }
   ul{
        min-width: 92px !important;
    }
</style>
</head>
<body>  

 <div class="panel panel-default">
          <div>
          <!-- <button id="shanchu">删除</button> -->
                <form action="/Project/index.php/Admin/OrderManage/index"  method="get"class="navbar-form navbar-left" role="search" style="margin-left: 140px;">

                    <div class="form-group">
                        <div class="btn-group">
                              <button type="button" id="button1" class="btn btn-danger">商品名</button>
                              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 34px;">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdo</span>
                              </button>
                              <ul class="dropdown-menu">
                                <li><span  class="btn btn-default" style="width: 90px;">商品名</span></li>
                               
                                <li role="separator" class="divider"></li>
                                <li><span class="btn btn-default" style="width: 90px;">订单号</span></li>
                              </ul>
                        </div>
                        <input type="hidden" name="searchs" value="1">
                        <input type="text" id="search" class="form-control" placeholder="宝贝名" style="margin-top: 2px;" name="goodsname">
                    </div>
                    <button type="submit" class="btn btn-default btn-info" style="margin-top: 2px;" >搜索</button>
                 </form>
            <script>
            $(function(){
                //全选
                //  $("input[name=all]").bind('click',function(){
                //    var $check=this.checked;

                //    $('input[name=orderid]').each(function(){
                //         this.checked=$check;
                       
                //    })
                // });
                // var $CheckAll=[];
                //批量发货
               // $('#allsend').click(function(){
                
               //      $('input[name=orderid]:checked').each(function(){
               //          $CheckAll.push($(this).attr('id'));

               //      })
               //    $.post("<?php echo U('OrderManage/update');?>",{orderid:$CheckAll},function(msg){
               //          if(msg){
               //               $.each($CheckAll,function(name,value){
               //             $('.'+value).children('td:contains(未付款)').html('已付款');
               //               })
               //          }else{
               //              alert('未知错误');
               //          }
                       
               //         // if(msg){
               //         //  alert($CheckAll);
               //         //  $('.'+$CheckAll).children('td:contains(未付款)').html('已付款');
               //         // }else{
               //         //  
               //         // }
               //    });
               // });
              


              //选择店铺或者订单
               $('span:contains(商品名)').bind('click',function(){
                $('button[id=button1]').html('商品名');
                 
                   $('input[name=searchs]').val(1);
                
               })

               $('span:contains(订单号)').click(function(){
                $('button[id=button1]').html('订单号');
                  $('input[name=searchs]').val(2);
               });

           
                //查看订单详细
               $('button[name=show]').click(function(){
                $showid=$(this).val();
                
                $.ajax({
                  type:'get',
                  url:"<?php echo U('OrderManage/info');?>",
                  data:'showid='+$showid,
                  success:function(data){
                    
                  // alert(data);
                   

                  
                //ajax接收返回值 遍历返回值动态生成表格
                  $('span[name=ordernum]').html(data[0].o_id);
                  var numalls=0;
                  $a=data[0].o_state;
                $arr=['<strong>等待付款</strong>','<strong>等待发货</strong>','<strong>等待确认收货</strong>','<strong>交易成功</strong>','<strong>交易关闭</strong>'];
                   for($i=0;$i<data.length;$i++){
                    $('#showid').after('<tr name='+$i+'>');
                        for($j=0;$j<1;$j++){
                            $('tr[name='+$i+']').append('<td>'+data[$i].goodsnames+'</td><td>'+data[$i].price+'</td><td>'+data[$i].num+'</td><td>'+data[$i].nickname+'</td><td>'+$arr[$a]+'</td><td>'+(data[$i].discount/100*data[$i].num*data[$i].price).toFixed(2)+'</td><td></td>');
                            numalls+=parseInt(data[$i].discount/100*data[$i].num*data[$i].price)

                        }
                      $('#showid').after('</tr>');
                      $('input[name=rename]').val(data[$i].name);
                      $('textarea:first').val(data[$i].street);
                      $('input[name=address]').val(data[$i].address);
                      $('input[name=phone]').val(data[$i].phone);
                      $('textarea:last').val(data[$i].message);

                   }
                   $('tr[name=0]').after('<td colspan="6"></td><td>总价：'+numalls+'</td>');
                    
                

                  }
                })
                
               });


               //清除查看叠加
               $('button[name=show]').bind('click',function(){
                    $('#showid').nextAll().remove();
                    // alert(1);
               })

               //删除订单
               $('button[name=delete]').click(function(){
                 $delnum=$(this).val();
                // alert($delnum);

                 $.ajax({
                    type:'get',
                    data:'num='+$delnum,
                    url:"<?php echo U('OrderManage/delete');?>",
                    success:function(arg){
                       if(arg==1){
                            
                            $('.'+$delnum).hide(1400);
                            $('button[value='+$delnum+']').parent().parent().hide(1400);
                            

                         }

                         if(arg==0){
                          alert('删除失败');
                         }
                    }
                 }); 



               })


            })
            </script>

            </div> 
        <div class="panel-heading" >
            <strong class="btn btn-primary" style="margin-left: -484px;">订单列表 </strong>

            </div>

            
            

            <table style=""class="table table-condensed table-bordered">
               
                <tr >
                    <th  colspan="2" style="padding-right: 21px; width: 198px;">宝贝</th>
                    
                    <th style="width: 80px;">单价</th>
                    <th style="width: 80px;">数量</th>
                    <th style="width: 125px">买家</th>
                    <th style="width: 80px;">交易状态</th>
                    <th style="width: 76px;">实收款</th>
                    <th style="width: 100px;">评价</th>
                    <th style="width: 322px;">操作</th>
                 </tr>


            </table>
            
            <table class="table table-hover table-condensed table-bordered">
            
        <div class="panel-default"  style="height: 38px;">
            <div class="panel-heading" style="height: 10px; padding-top: 20px;">
          <!--  <span style="position:absolute;top:90px;"><input type="checkbox" name="all" > &nbsp;&nbsp;<span name="spanall">全选</span>&nbsp;&nbsp;&nbsp; 
           <button id="allsend" type="button" class="btn btn-info btn-xs" >批量发货</button>
           
           </span> -->
                
            </div>

            <br>
    
              <!-- 循环遍历查到并且分配过来的信息 -->
                <?php if(is_array($orderinfos)): $k = 0; $__LIST__ = $orderinfos;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($vo["o_id"] != $flag): ?><!-- <?php echo ($flag = $vo["o_id"]); ?> -->
                    <tr  class="panel panel-heading" >
                       <td bgcolor="#F5F5F5" colspan="8" >
                       <!-- <input type="checkbox"  name="orderid"  id="<?php echo ($vo["o_id"]); ?>" style="margin-left: -280px;">  -->
                       <span style="margin-left: -314px;">&nbsp;&nbsp;订单号：<?php echo ($vo["o_id"]); ?> &nbsp;&nbsp;&nbsp;&nbsp;成交时间：<?php echo (date('Y-m-d H:i:s',$vo["time"])); ?></span></td>
                       <td bgcolor="#F5F5F5"  colspan="5">
                   
                        <button name="show"  type="button" value="<?php echo ($vo["o_id"]); ?>"  class="btn btn-info" data-toggle="modal" data-target="#myModal">查看订单</button>
                      <?php if($vo["o_state"] == 3): ?><button disabled="disabled" name="delete" type="button" class="btn btn-warning" value="<?php echo ($vo["o_id"]); ?>">删除订单</button>
                        <?php else: ?>
                        <button  name="delete" type="button" class="btn btn-warning" value="<?php echo ($vo["o_id"]); ?>">删除订单</button><?php endif; ?>
                    </td>
                        
                    </tr><?php endif; ?>
               
                <tr class="<?php echo ($vo["o_id"]); ?>" style="height: 80px; width: 40px;margin-bottom:20px" >
                   
                    <!-- $arr=array('未付款','已付款'') -->
                    <td style="width: 90px;"><a class="goods_detail "  target="_blank" href="<?php echo U('home/Share/index');?>/id/<?php echo ($vo["id"]); ?>">
                    <img class="pic" width="80px" src="/Project/Public<?php echo ($vo["g_pic"]); ?>"></a></td>
                    <td style="width:224px"><?php echo ($vo["name"]); ?></td>
                    <td style="width:80px"><?php echo ($vo["price"]); ?></td>
                    <td style="width:80px"><?php echo ($vo["num"]); ?></td>
                    <td style="width:125px"><?php echo ($vo["nickname"]); ?></td>
                    <!-- <?php echo ($a=$vo["o_state"]); ?> -->
                    <td style="width:80px"><?php echo ($arr["$a"]); ?></td>
                    <td style="width:75px"><?php echo ($vo['discount']/100*$vo['num']*$vo['price']); ?></td>
                    <td style="width:100px"></td>            
                   <!--  <td style="width:360px">
                   
                        <button name="show"  type="button" value="<?php echo ($vo["o_id"]); ?>"  class="btn btn-info" data-toggle="modal" data-target="#myModal">查看订单</button>

                        <button name="delete" type="button" class="btn btn-warning" value="<?php echo ($vo["o_id"]); ?>">删除订单</button>
                    </td> -->  
                    <td >  <span class="btn  glyphicon glyphicon-play btn-success" style="color:#FFC0CB;font-size:20px"aria-hidden="true"><a style="text-decoration:none"class="goods_detail " target="_blank" href="<?php echo U('home/Share/index');?>/id/<?php echo ($vo["g_id"]); ?>">
                    查看宝贝</a></span> </td>

                </tr><?php endforeach; endif; else: echo "$empty" ;endif; ?>
                
    <!-- //分页 -->
        <tr>
            <td colspan="9">      
                 <?php echo ($pageNav); ?>
            </td>

        </tr>
        </div>
    </table>
 

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> <span class="btn btn-primary" >订单号:<span name="ordernum"></span></span></h4>
      </div>
      <div class="modal-body">
        <table  class="table table-hover table-condensed table-bordered">
                    
                    <tr id="showid">
                        <th>宝贝</th>
                        <th>单价</th>
                        <th>数量</th>
                        <th>买家</th>
                        <th>交易状态</th>
                        <th>实收款</th>
                        
                        <th>评价</th>
                    </tr>


                    

                </table>   
        <table id="showre" class="table table-hover table-condensed table-bordered">    
            <tr>
                <td>
                    收货人：
                </td>
                <td>
                    <input type="text" name="rename" value=""  class="form-control" type="text"  readonly>
                </td>
            </tr>
            <tr>
                <td>
                    所在地址：
                </td>
                <td>
                   <input type="text" name="address" value=""  class="form-control" type="text"  readonly>
                </td>
            </tr>
            <tr>    
                <td>
                    街道地址：
                </td>
                <td>
                   <textarea  class="form-control" readonly rows="3"></textarea>
                </td>
            </tr>
            <tr>    
                <td>
                    联系电话：
                </td>
                <td>
                  <input type="text" name="phone" value=""  class="form-control" type="text"  readonly>
                </td>
                
            </tr>

            <tr>    
                <td>
                   订单留言：
                </td>
                <td>
                   <textarea  readonly class="form-control" rows="3"></textarea>
                </td>
            </tr>
        </table>    
      </div>
      
    </div>
  </div>
</div>


</body>
</html>