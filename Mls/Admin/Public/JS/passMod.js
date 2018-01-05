$(function(){
$('.input_from1').blur(function(){
        var $user = $(this).val();
            $err = getMan($user);
          $flag = [];
            if($err==4){
                $(this).next().css('color','red').html("你还没填哦");
            }else if($err==2){
                $(this).next().css('color','red').html("请输入5-12位的字母或数字");
            }else if($err==3){
                $(this).next().css('color','red').html("不能有空格");
            }else if($err==0){
                //ajax传参验证
             $('.input_from1').next().css('color','green').html("<img src='/Mls/Home/Public/Images/yes.jpg'>");
             // $flag[0]=1;
            }
    })
$('.input_from3').blur(function(){
        var $pass = $('input[name=pass]').val();
        var $btn_pass = $('input[name=btn_pass]').val();
        var $user = $(this).val();
            $err =  getMan($user);
            if($err==4){
                $(this).next().css('color','red').html("你还没填哦");
            }else if($err==2){
                $(this).next().css('color','red').html("请输入5-12位的字母或数字");
            }else if($err==3){
                $(this).next().css('color','red').html("不能有空格");
            }else if($err==0){
                if($pass ==$btn_pass){
                            
                 $('.input_from3').next().css('color','green').html("<img src='/Mls/Home/Public/Images/yes.jpg'>");
                            $flag[1]=1;                 
                 }else{
                 $('.input_from3').next().css('color','red').html("二次密码不一致");    
                }     
            }
    })
    
    // 验证用户输出内容是否合法
    function getMan($user){
        var $err = 0;
        var $reChinese=/^([a-zA-Z0-9! @ # $ % ?_]){5,12}$/;
        
        var $b_chinese=$reChinese.test($user);  
        //匹配正则不能包含空格
        var $reSpace=/\s/gi;
        var $b_space=$reSpace.test($user);
        
        // 验证是否是空
        if(!$user){
            $(this).next().css('color','red').html("你还没填哦");
            $err = 4;
        }else 
        //验证内容合法性
        if(!$b_chinese){
            $(this).next().css('color','red').html("请输入5-12位的字母或数字");
            $err = 2;
            
        }else if($b_space){
            $(this).next().css('color','red').html("不能有空格");
            $err = 3;
        }
        else{
            $(this).next().css('color','green').html("内容可用");
        }
        return $err;    
    }
    //按钮控制
     $fla = false;
    $('#form_1').submit(function(){
     //   alert($flag);

        if($flag[1] == 1){
            $fla = true;
        }else{
            $fla = false;
        }
        return $fla;
    })
    

})