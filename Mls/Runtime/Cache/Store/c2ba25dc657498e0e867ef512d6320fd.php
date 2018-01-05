<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>UploadiFive Test</title>
    <script type="text/javascript" src="/Project/Public/Js/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Project/Public/Css/bootstrap.min.css" />
    <script type="text/javascript" src="/Project/Public/Js/bootstrap.min.js"></script>

    <script src="/Project/Public/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="/Project/Public/uploadify/uploadify.css">
    <style type="text/css">
  body {
    font: 13px Arial, Helvetica, Sans-serif;
  }
  </style>
</head>
<body>
    <div style="width:1000px;margin:0px auto">

        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#img">图片上传</button>
        <!-- Modal -->
        <div class="modal fade bs-example-modal-lg" id="img" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">添加图片</h4>
                    </div>
                    <div class="modal-body">
                        <!--内容区-->
                        <form>
                            <div id="queue"></div>
                            <input id="file_upload" name="file" type="file" multiple="true"></form>
                        <!--内容区--> </div>
                </div>
            </div>
        </div>

        <div id="imgs" style="width:965px;min-height:600px;border:1px solid #eee">
            <!--图片遍历-->
            <?php if(is_array($goods)): foreach($goods as $key=>$vo): ?><div data-name="image" style="float:left;position:relative" data-id="<?php echo ($vo['g_pic']); ?>
                    ">
                    <!--删除-->
                    <div data-name="del" style="position:absolute;top:10px;right:10px;border:1px solid #eee;background:#fff;cursor:pointer;display:none" data-gid="<?php echo ($vo['s_id']); ?>" data-id="<?php echo ($vo['pic']); ?>">删除</div>
                        <!--封面-->
                        <div data-name="state" style="position:absolute;top:10px;left:10px;border:1px solid #eee;background:#fff;cursor:pointer;display:none" data-gid="<?php echo ($vo['g_id']); ?>
                            " data-id="<?php echo ($vo['g_pic']); ?>">设为封面</div>
                            <img width='930px' height='300px' style='padding:10px;'  src='/Project/Public<?php echo ($vo["pic"]); ?>
                            ' data-id="<?php echo ($vo['g_pic']); ?>"/>
                                <!--判断是否是选中状态-->
                                <?php if($vo[state] == '1'): ?><span class="glyphicon glyphicon-ok text-success" aria-hidden="true" style="position:absolute;top:185px;right:15px;bgcolor:green;font-size:40px;"></span><?php endif; ?>
                            </div><?php endforeach; endif; ?>

                    </div>

                </div>

                <script type="text/javascript">
    $(function() {

      //删除、封面按钮显示与隐藏
      $(document).on('mouseout','div[data-name=image]',function(){
          //  $(this).children("div[data-name=state]").css('display','none');
            $(this).children("div[data-name=del]").css('display','none');
        })
		$(document).on('mouseover','div[data-name=image]',function(){
      //   $(this).children("div[data-name=state]").css('display','block');
         $(this).children("div[data-name=del]").css('display','block');
       })
      //图片删除
      $(document).on('click','div[data-name="del"]',function(){
        var obj = $(this).parent();
        var $pid = $(this).attr('data-id');
        var $g_id = $(this).attr('data-gid');
        $.get('/Project/index.php/Store/Carousel/del',{g_pic:$pid,g_id:$g_id},function(data){
          console.log(data);
          if(data != '00'){
            obj.remove();
          } else {
            alert('封面不能删除');
          }
        })
      })

      //设为封面
      /*
      $('div[data-name="state"]').click(function(){
        var obj = $(this).parent();
        var $pid = $(this).attr('data-id');
        var $g_id = $(this).attr('data-gid');
        console.log($g_id)
        $.get('/Project/index.php/Store/Carousel/state',{g_pic:$pid,g_id:$g_id},function(data){
          if(data){
            $('div[data-name="state"]').parent().children('span').remove();
            obj.append('<span class="glyphicon glyphicon-ok text-success" aria-hidden="true" style="position:absolute;top:185px;right:15px;bgcolor:green;font-size:40px;"></span>');
          }
        })
      })
*/
      $('#file_upload').uploadify({
        'formData'     : {
          'timestamp' : '<?php echo ($timestamp); ?>',
          'token'     : '<?php echo ($md5timestamp); ?>'
        },
          // 'auto' : false,
        'buttonText' : '图片上传',
        'swf'      : '/Project/Public/uploadify/uploadify.swf',

        'uploader' : '<?php echo U("Carousel/upload");?>',
        'onUploadSuccess' : function(file, data, response) {
          //console.log(file);
		  var $data = $.parseJSON(data);
          //console.log(response);
          console.log(data);
             //把所有上传的图片都放入DIV中
             img = '<div data-name="image" style="float:left;position:relative"' 
			 +'data-id="' + $data.pic + '">'
                    +'<div data-name="del" style="position:absolute;top:10px;right:10px;border:1px solid #eee;background:#fff;cursor:pointer;display:none" '
					+'data-gid="' + $data.s_id + '" '
                    +'data-id="' + $data.pic + '">删除</div>'
                    +'    <div data-name="state" style="position:absolute;top:10px;left:10px;border:1px solid #eee;background:#fff;cursor:pointer;display:none" data-gid="' + $data.s_id + '"'
                    +'    data-id="' + $data.pic + '">设为封面</div>'
                    +'        <img width="930px" height="300px" style="padding:10px;"'
                    +'        src=" /Project/Public' + $data.pic + ' " data-id="' + $data.s_id + '"/>'
                    +'        </div>'
                    +'</div>';
             $('#imgs').append(img);
			
          }
      });
	  
    });





  </script>
</body>
            </html>