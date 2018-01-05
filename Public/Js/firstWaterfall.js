$( window ).on( "load", function(){
    waterfall('main','pin');
   // var dataInt={'data':[{'src':'1.jpg'},{'src':'2.jpg'},{'src':'3.jpg'},{'src':'4.jpg'}]};
   var $i = 0;
    window.onscroll=function(){
        if(checkscrollside()){
			var $id = $('#main').attr('pata-id');
			$i++;
            //ajax 获取数据
			$.get('/project/index.php/Home/Guang/firstWaterPage',{id:$id,page:$i},function(dataInt){
				//console.log(dataInt)
				if(dataInt){
					data(dataInt);
				}
			})
            waterfall();
        };
    }
});


function data(dataInt){
            $.each( dataInt, function( index, value ){
                var img = '<div class="pin poster_grid retsop poster_wall">'
                        +'<div class="new_poster">'
                             +'<div class="np_pic hover_pic">'
                                +' <div class="price">'
                                +'     ￥' + value.gprice
                                +' </div> '
                                +' <a class="pic_load" href="/Project/index.php/home/Share/index/id/'+value.gid+'" target="_blank" title="{商品名字}"><img class="goods_pic" src="/Project/Public'+value.gpic+'" alt="'+value.gname+'" width="226" /></a> '
                                +' <div style="display: none;" class="like_merge"> '
                                +'    <a class="right_f poster_likes " href="javascript:void(0)"> <i class="like_status lm_like">&nbsp;</i> </a> '
                                +'    <a class="right_f poster_forward" href="javascript:void(0)"><em class="lm_shouji">&nbsp;</em>收进杂志</a> '
                                 +'</div> '
                            +' </div> '
                             +'<div class="title"> '
                                 +'<p><a href="/Project/index.php/home/Share/index/id/'+value.gid+'" target="_blank">'+value.gname+'</a></p> '
                             +'</div> '
                            +' <div class="clear_f"></div>  '
                             +'<div class="comm_num twiiter_box">  '
                                 +'<span class="pl" target="_blank">销量（'+value.gbuy+'）</a>  '
                                +'<a isshowlike="1" s_uid="85591250" class="left_f poster_likes likes " href="javascript:void(0)"> <b class="likes_status"> <i class="lm_love2">&nbsp;</i>喜欢 </b> <span class="red_f f14_f poster_like_num">120</span> </a>  '
                            +' </div>  '
                             +'<div class="np_share comment_panel">  '
                                 
                                +' <p class="commentHover t_idt">'+value.gsa+'</p>  '
                                 +'<div class="clear_f"></div>  '
                             +'</div>  '
                        +' </div> '
                    +' </div> ';
                    $( "#main" ).append( img );
            });
    
}

/*
    parend 父级id
    pin 元素id
*/
function waterfall(parent,pin){
    var $aPin = $( "#main .pin" );
    var iPinW = $aPin.eq( 0 ).width();// 一个块框pin的宽
    var num = Math.floor( $( window ).width() / iPinW );//每行中能容纳的pin个数【窗口宽度除以一个块框宽度】
    //oParent.style.cssText='width:'+iPinW*num+'px;ma rgin:0 auto;';//设置父级居中样式：定宽+自动水平外边距
    $( "#main" ).css({
        'width:' : iPinW * num,
        'margin': '0 auto'
    });

    var pinHArr=[];//用于存储 每列中的所有块框相加的高度。

    $aPin.each( function( index, value ){
        var pinH = $aPin.eq( index ).height();
        //console.log(pinH)
        if( index < num ){
            if( index == 0 ){
                 pinHArr[ index ] = $( '.sidebar_rec' ).height();  //加上顶部一点
                 //console.log(pinHArr[0]);
            } else {
                pinHArr[ index ] = pinH + $('.cata_types' ).outerHeight(); //第一行中的num个块框pin 先添加进数组pinHArr
            }
        }else{
            var minH = Math.min.apply( null, pinHArr );//数组pinHArr中的最小值minH
            var minHIndex = $.inArray( minH, pinHArr );
            $( value ).css({
                'position': 'absolute',
                'top': minH + 16,
                'left': $aPin.eq( minHIndex ).position().left
            });
            //数组 最小高元素的高 + 添加上的aPin[i]块框高
            pinHArr[ minHIndex ] += $aPin.eq( index ).height();//更新添加了块框后的列高
        }
    });
    //console.log(pinHArr)
}

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

