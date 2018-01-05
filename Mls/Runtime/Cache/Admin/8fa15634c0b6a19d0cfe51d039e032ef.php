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
            <?php if(is_array($goods)): foreach($goods as $key=>$vo): ?><div data-name="image" style="float:left;position:relative" data-id="<?php echo ($vo["pic"]); ?>
                    ">
                    <!--删除-->
                    <div data-name="del" style="position:absolute;top:10px;right:10px;border:1px solid #eee;background:#fff;cursor:pointer;display:none" data-id="<?php echo ($vo["pic"]); ?>">删除</div>
                        
                            <img width='930px' height='300px' style='padding:10px;'  src='/Project/Public<?php echo ($vo["pic"]); ?>
                            ' data-id="
                            <?php echo ($vo["pic"]); ?>
                                "/>
                                
                            </div><?php endforeach; endif; ?>

                    </div>

                </div>

                <script type="text/javascript">
    $(function() {

      //删除按钮显示与隐藏
      $('div[data-name=image]').each(function(){
        $(this).mouseout(function(){
            $(this).children("div[data-name=del]").css('display','none');
        })
        $(this).mouseover(function(){
         $(this).children("div[data-name=del]").css('display','block');
       })
      })
      //图片删除
      $('div[data-name="del"]').on('click',function(){
        var obj = $(this).parent();
        var $pid = $(this).attr('data-id');
		
        $.get('/Project/index.php/Admin/PlayManage/del',{pic:$pid},function(data){
          //console.log(data);
          if(data == 1){
			obj.remove();
		  }
        })
      })
 
      $('#file_upload').uploadify({
        'formData'     : {
          'timestamp' : '<?php echo ($timestamp); ?>',
          'token'     : '<?php echo ($md5timestamp); ?>'
        },
		
        'buttonText' : '图片上传',
        'swf'      : '/Project/Public/uploadify/uploadify.swf',

        'uploader' : '<?php echo U("PlayManage/upload");?>',
        'onUploadSuccess' : function(file, data, response) {
		
          console.log(response);

             //把所有上传的图片都放入DIV中
             img = "<img width='930px' height='300px' style='padding:10px;' src='/Project/Public"+data+"' />";
             //console.log(img);
             $('#imgs').append(img);
			 location.reload(); 
          }
      });
    });



  </script>
</body>
            </html>