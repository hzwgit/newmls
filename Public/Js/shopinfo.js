$( window ).on( "load", function(){
    //var dataInt={'data':[{'src':'1.jpg'},{'src':'2.jpg'},{'src':'3.jpg'},{'src':'4.jpg'}]};
    var $i = 0;
    var $flag = 'buy_num';
    var $sub = '';
    var $pid = '';
    var $top = $('.shop-nav').offset().top;
    //var $url = "<{:U('Shopinfo/action',array('id'=>21))}>";
    //shop-nav
    window.onscroll=function(){
        //滚动触发
        if(checkscrollside()){
            //ajax 获取数据
            $i++;
            $.get($url,{page:$i,order:$flag,pid:$pid,sub:$sub},function(dataInt){
                console.log(dataInt);
                console.log($i);
                if(dataInt){
                    data(dataInt);
                }
            });
        };
        var scrollTop = $( window ).scrollTop()//注意解决兼容性
        if($top <= scrollTop){
            $('.shop-nav').css('position','fixed');
        } else {
            $('.shop-nav').css('position','relative');
        }
    }
    //最新
    $('.o_item').click(function(){
        $i = 0;
        $flag = 'addtime';
        $.get($url,{order:$flag},function(dataInt){
            if(dataInt){
                $('#main').html('');
                data(dataInt);
            }
        });
    });
    // 售量
    $('.red_f').click(function(){
        $i = 0;
        $flag = 'buy_num';
        $.get($url,{order:$flag},function(dataInt){
            if(dataInt){
                $('#main').html('');
                data(dataInt);
            }
        });
    });


    //大类别
    $('.js-new-all').click(function(){
        $i = 0;
        $pid = $(this).attr('path-id');
        //获取当前连接
        var $str = $(this).attr('path-url');
        /*
        if(!$pid){
             //跳转到404
        }
        */
        //判断是否是店铺页面/不是就跳转到店铺页面
        if($str.substr($str.lastIndexOf('/')+1) != 'Shopinfo'){
            window.location.href= $idUrl;
        }
        $.get($url,{order:$flag,pid:$pid},function(dataInt){
            //console.log(dataInt);
            if(dataInt){
                $('#main').html('');
                data(dataInt);
            } else {
                //alert(3)
            }
        });
    });
    
    //二级类别
    $('.js-newest-goods').click(function(){
        $i = 0;
        $sub = $(this).attr('path-id');
        //设为同步
        $.ajaxSetup({
            async:false
        })
        //获取当前连接
        var $str = $(this).attr('path-url');
        //判断是否是店铺页面/不是就跳转到店铺页面
        if($str.substr($str.lastIndexOf('/')+1) != 'Shopinfo'){
            window.location.href= $idUrl;
        }
        
        //获取数据
        $.get($url,{order:$flag,sub:$sub},function(dataInt){
            //console.log(dataInt);
            if(dataInt){
                $('#main').html('');
                data(dataInt);
            } else {
                //alert(3)
            }
        });
    });
});


//组合数据//输出
function data(dataInt){
            $.each( dataInt, function( index, value ){
                var img = '<div  coli="0" col="0" class="poster_grid retsop poster_wall pin" >'
                +'    <div class="new_poster">'
                +'        <div class="np_pic hover_pic">'
                +'            <div class="price">' + value.price + '</div>'
                +'            <a class="pic_load" href="/Project/index.php/Home/Share/index/id/' + value.id + '" target="_blank" title="' + value.name + '">'
                +'                <img class="goods_pic" src="/Project/Public' + value.g_pic + '" alt="' + value.name + '" height="328" width="226"></a>'
                +'            <div class="like_merge">'
                +'                <a class="right_f poster_likes " href="javascript:void(0)">'
                +'                    <i class="like_status lm_like">&nbsp;</i>'
                +'                </a>'
                +'                <a class="right_f poster_forward" href="javascript:void(0)">'
                +'                    <em class="lm_shouji">&nbsp;</em>'
                +'                    收进杂志'
                +'                </a>'
                +'            </div>'
                +'        </div>'
                +'        <div class="title">'
                +'            <p>'
                +'                <a href="/Project/index.php/Home/Share/index/id/' + value.id + '" target="_blank">' + value.name
                +'            </p>'
                +'        </div>'
                +'        <div class="clear_f"></div>'
                +'        <div class="comm_num twiiter_box">'
                +'            <a class="pl" href="/Project/index.php/Home/Share/index/id/' + value.id + '" target="_blank">销量（' + value.buy_num + '）</a>'
                +'            <a isshowlike="1" s_uid="47172902" class="left_f poster_likes likes " href="javascript:void(0)">'
                +'                <b class="likes_status">'
                +'                    <i class="lm_love2">&nbsp;</i>'
                +'                    喜欢'
                +'                </b>'
                +'                <span class="red_f f14_f poster_like_num">0</span>'
                +'            </a>'
                +'        </div>'
                +'    </div>'
                +'</div>';
                $( "#main" ).append( img );
            });
    
}

/*
    parend 父级id
    pin 元素id
*/
//判断高度刷新
function checkscrollside(){
    var $aPin = $( "#main .pin" );
    var lastPinH = $aPin.last().get(0).offsetTop + Math.floor($aPin.last().height()/2);//创建【触发添加块框函数waterfall()】的高度：最后一个块框的距离网页顶部+自身高的一半(实现未滚到底就开始加载)
    //console.log(lastPinH)
    var scrollTop = $( window ).scrollTop()//注意解决兼容性
    //console.log(scrollTop)
    var documentH = $( document ).width();//页面高度
    //console.log(documentH)
    return (lastPinH < scrollTop + documentH ) ? true : false;//到达指定高度后 返回true，触发waterfall()函数
}

