<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Bootstrap后台模板</title>
    <link rel="stylesheet" href="/Project/Mls/Store/Public/Css/a_002.css">
    <link rel="stylesheet" href="/Project/Mls/Store/Public/Css/base-min.css">
    <link rel="stylesheet" href="/Project/Mls/Store/Public/Css/a_004.css" type="text/css">
    <link rel="stylesheet" href="/Project/Mls/Store/Public/Css/shop-cybertron.css" type="text/css">

    <link rel="stylesheet" href="/Project/Mls/Store/Public/Css/index.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/Project/Mls/Store/Public/Css/cats-manage-min.css">

    <script type="text/javascript" src="/Project/Mls/Store/Public/Js/jquery.js"></script>
    <script type="text/javascript" src="/Project/Mls/Store/Public/Js/tendina.js"></script>
    <script type="text/javascript" src="/Project/Mls/Store/Public/Js/common.js"></script>

    <script type="text/javascript" src="/Project/Public/Js/jquery-1.7.2.js"></script>
    <script type="text/javascript" src="/Project/Mls/Store/Public/Js/type.js"></script>
</head>
<body>
    
    <!--顶部-->
    <div class="layout_top_header">
        <div style="float: left">
            <span style="font-size: 16px;line-height: 45px;padding-left: 20px;color: #8d8d8d"><?php echo (session('homename')); ?> 店铺后台</span>
        </div>
        <div id="ad_setting" class="ad_setting">
            <a class="ad_setting_a" href="<?php echo U('Login/logout');?>"> <i class="icon-user glyph-icon" style="font-size: 20px"></i>
                <span>退出</span> 
            </a>
            <ul class="dropdown-menu-uu" style="display: none" id="ad_setting_ul">
               <!--  <li class="ad_setting_ul_li">
                    <a href="javascript:;">
                        <i class="icon-user glyph-icon"></i>
                        个人中心
                    </a>
                </li>
                <li class="ad_setting_ul_li">
                    <a href="/Project/index.php/Store/Carousel/index" target="menuFrame">
                        <i class="icon-cog glyph-icon"></i>
                        设置
                    </a>
                </li> 
                <li class="ad_setting_ul_li">
                    <a href="<?php echo U('Login/logout');?>">
                        <i class="icon-signout glyph-icon"></i>
                        <span class="font-bold">退出</span>
                    </a>
                </li>-->
            </ul>
        </div>
    </div>
    <!--顶部结束-->
    <!--菜单-->

    <!--菜单-->

    <!DOCTYPE html>
    <html class="ks-gecko41 ks-gecko ks-firefox41 ks-firefox">
<head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="data-spm" content="a21ar">
        <title>宝贝分类管理</title>
        <!-- global-min.css包含reset.css 和 布局相关 -->
</head>
<body data-spm="c-ca-1">
<!--
        <div style="width: 100%;" id="vl-main">
        -->
            <div style="height: 100%;" id="wrapper">
                <div id="vl-mul-menu-sidebar">
                    <ul class="menu-wrapper">
                        <!--分类管理-->
                        <li class="level-1">
                            <a class="J_TCatSrch menu-item bold  " href="/Project/index.php/Store/Type/index" target="menuFrame">
                                <span class="line"></span>
                                <span>分类管理</span>
                            </a>
                            <ul></ul> </li>
                        <!--订单管理-->
                        <li class="level-1">
                            <a class="J_TCatSrch menu-item bold  " href="/Project/index.php/Store/StoreOrder/index" target="menuFrame">
                                <span class="line"></span>
                                <span>订单管理</span>
                            </a>
                            <ul></ul> </li>
                        <!--订单管理结束-->


                        <li class="level-1">
                            <a class="J_TCatSrch menu-item bold  " href="/Project/index.php/Store/Good/index" target="menuFrame" >
                                <span class="line"></span>
                                <span>商品管理</span>
                            </a> </li>
                        
                        <li class="level-1">
                            <a class="J_TCatSrch menu-item bold  " href="/Project/index.php/Store/Carousel/index" target="menuFrame" >
                                <span class="line"></span>
                                <span>轮播图</span>
                            </a> </li>
                        <li class="level-1">
                            <a class="J_TCatSrch menu-item bold  " href="/Project/index.php/Store/Banner/index" target="menuFrame" >
                                <span class="line"></span>
                                <span>店铺横图</span>
                            </a> </li>
                        <li class="level-1">
                            <a class="J_TCatSrch menu-item bold  " href="/Project/index.php/Store/Store/knilmi" target="menuFrame" >
                                <span class="line"></span>
                                <span>客服</span>
                            </a> </li>
                        <!--
                        <li class="level-1">
                            <a class="J_TCatSrch menu-item bold  " href="/Project/index.php/Store/Carousel/index" target="menuFrame" >
                                <span class="line"></span>
                                <span>店铺轮播图</span>
                            </a> </li>
                            -->
                            <!--
                            <ul class="item-category" style="display: none">
                                <li class="level-2">
                                    <a class="J_TCatSrch menu-item " data-cat-id="-1" href="/Project/index.php/Store/Good/index" target="menuFrame" >
                                        <span class="line"></span>
                                        <span>填加商品</span>
                                    </a>
                                </li>
                                <li class="level-2">
                                    <a class="J_TCatSrch menu-item" data-cat-id="0" href="/Project/index.php/Store/Addgood/index" target="menuFrame" >
                                        <span class="line"></span>
                                        <span>查看商品</span>
                                    </a>
                                </li>
                                <li class="level-2">
                                    <a class="J_TCatSrch menu-item" data-cat-id="0" href="/Project/index.php/Store/GoodShow/index" target="menuFrame" >
                                        <span class="line"></span>
                                        <span>查看商品</span>
                                    </a>
                                </li>
                                <li class="level-2">
                                    <a class="J_TCatSrch menu-item" data-cat-id="0" href="javascript:void(0)">
                                        <span class="line"></span>
                                        <span>下架商品</span>
                                    </a>
                                </li> </ul>
                                -->
                        <!--
                        <li class="level-1">
                            <a class="menu-head bold " href="javascript:;">
                                <span class="line"></span>
                                <span>宝贝管理</span>
                            </a>
                            <ul class="item-category" style="display: none">
                                <li class="level-2">
                                    <a class="J_TCatSrch menu-item " data-cat-id="-1" href="javascript:void(0)">
                                        <span class="line"></span>
                                        <span>全部宝贝</span>
                                    </a>
                                </li>
                                <li class="level-2">
                                    <a class="J_TCatSrch menu-item" data-cat-id="0" href="javascript:void(0)">
                                        <span class="line"></span>
                                        <span>未分类宝贝</span>
                                    </a>
                                </li> </ul> </li>
                        -->


                    </ul>
                </div>

                <!--右边栏-->
                <div id="vl-main">
                <iframe id="menuFrame" name="menuFrame" src="/Project/index.php/Store/Type/index" style="overflow:visible;" scrolling="yes" frameborder="no" height="98%" width="100%"></iframe>
                    
                    
        </div>
    </div>
    <script type="text/javascript">
    $('.menu-head').click(function(){
        if($(this).next().css('display') == 'block') {
            $(this).next().css('display','none');
        } else {
            $(this).next().css('display','block');
        }
    })
/*
    $('.J_TCatSrch').mouseover(function(){
        $(this).addClass('selected');
    })
    $('.J_TCatSrch').mouseout(function(){
        $(this).removeClass('selected');
    }
    */
    $('.J_TCatSrch').click(function(){
        $('.J_TCatSrch').removeClass('selected');
        $(this).addClass('selected');
    })
    </script>
</body>
</html>