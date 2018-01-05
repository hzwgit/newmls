<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Bootstrap后台模板</title>

<link rel="stylesheet" href="/Project/Mls/Admin/Public/Css/index.css" type="text/css" media="screen">
 <link rel="stylesheet" type="text/css" href="/Project/Mls/Admin/Public/Js/themes/default/easyui.css" />
 <link rel="stylesheet" type="text/css" href="/Project/Mls/Admin/Public/Js/themes/icon.css" />

<script type="text/javascript" src="/Project/Mls/Admin/Public/Js/jquery.js"></script>
<script type="text/javascript" src="/Project/Mls/Admin/Public/Js/jquery.easyui.js"></script>
<script type="text/javascript" src="/Project/Mls/Admin/Public/Js/common.js"></script>

<script type="text/javascript" src="/Project/Mls/Admin/Public/Js/tendina.js"></script>


 
<script>
     //关闭登录窗口
        function close() {
            $('#w').window('close');
        }


        //修改密码
        function serverLogin() {
            var $newpass = $('#txtNewPass');
            var $rePass = $('#txtRePass');
            var $passHandle = '<?php echo U("ShowAdmin/passMod");?>';


            if ($newpass.val() == '') {
                msgShow('系统提示', '请输入密码！', 'warning');
                return false;
            }
            if ($rePass.val() == '') {
                msgShow('系统提示', '请在一次输入密码！', 'warning');
                return false;
            }

            if ($newpass.val() != $rePass.val()) {
                msgShow('系统提示', '两次密码不一致！请重新输入', 'warning');
                return false;
            }

            $.post(
                $passHandle,
                {newpass:$newpass.val()},
                function(msg){
                   //判断
                   if(msg != 2){ 
                        msgShow('系统提示', '恭喜，密码修改成功!<br />您的新密码为:' + msg, 'info');
                        $newpass.val('');
                        $rePass.val('');
                        close();
                   }else{ 
                        msgShow('系统提示', '密码修改失败!','info');
                        $newpass.val('');
                        $rePass.val('');
                        close();
                   }
                } 
                );
            
        }
	
$(function(){

			openPwd();
            //调用修改密码
            $('#editpass').click(function() {
                $('#w').window('open');
            });

            $('#btnEp').click(function() {
                serverLogin();
            })
			


    $("#ad_setting").click(function(){
        $("#ad_setting_ul").show();
    });
    $("#ad_setting_ul").mouseleave(function(){
        $(this).hide();
    });
    $("#ad_setting_ul li").mouseenter(function(){
        $(this).find("a").attr("class","ad_setting_ul_li_a");
    });
    $("#ad_setting_ul li").mouseleave(function(){
        $(this).find("a").attr("class","");
    });
	

	// //登陆注销
   $('#loginOut').click(function() {
             $.messager.confirm('系统提示', '您确定要退出本次登录吗?', function(r) {

               if (r) {
                    $.post("<?php echo U('Login/logout');?>",{flag:true},function(data){
                    if(data == '1'){ 
                    location.href="<?php echo U('login/index');?>";
               }else{ 
                     alert('退出失败!');
                 }
             });
         }
        });
    })

});
</script>
</head>
<body>
   <!--修改密码窗口-->
    <div id="w" class="easyui-window" title="修改密码" collapsible="false" minimizable="false"
        maximizable="false" icon="icon-save"  style="width: 300px; height: 150px; padding: 5px;
        background: #fafafa;">
        <div class="easyui-layout" fit="true">
            <div region="center" border="false" style="padding: 10px; background: #fff; border: 1px solid #ccc;">
                <table cellpadding=3>
                    <tr>
                        <td>新密码：</td>
                        <td><input id="txtNewPass" type="Password" class="txt01" /></td>
                    </tr>
                    <tr>
                        <td>确认密码：</td>
                        <td><input id="txtRePass" type="Password" class="txt01" /></td>
                    </tr>
                </table>
            </div>
            <div region="south" border="false" style="text-align: right; height: 30px; line-height: 30px;">
                <a id="btnEp" class="easyui-linkbutton" icon="icon-ok" href="javascript:void(0)" >
                    确定</a> <a class="easyui-linkbutton" icon="icon-cancel" href="javascript:close()"
                        onclick="close()">取消</a>
            </div>
        </div>
    </div>

    <!--顶部-->
    <div class="layout_top_header">
            <div style="float: left"><span style="font-size: 16px;line-height: 45px;padding-left: 20px;color: #8d8d8d"><?php echo (session('username')); ?>管理后台</span></div>
            <div id="ad_setting" class="ad_setting">
                <a class="ad_setting_a" href="javascript:;">
                    <i class="icon-user glyph-icon" style="font-size: 20px"></i>
                    <span>管理员</span>
                    <i class="icon-chevron-down glyph-icon"></i>
                </a>
                <ul class="dropdown-menu-uu" style="display: none" id="ad_setting_ul">
                    <!-- <li class="ad_setting_ul_li"> <a href="javascript:;"><i class="icon-user glyph-icon"></i> 个人中心 </a> </li> -->
                    <li id="editpass"class="ad_setting_ul_li"> <a href="#"><i class="icon-cog glyph-icon"></i> 修改密码 </a> </li>
                    <li id="logout"class="ad_setting_ul_li"><a href="#" id="loginOut"><i class="icon-signout glyph-icon"></i> <span class="font-bold">安全退出</span> </a> </li>
                </ul>
            </div>
    </div>
    <!--顶部结束-->
    <!--菜单-->
    <div class="layout_left_menu">
        <ul class="tendina" id="menu">
<!-- 
            <li class="childUlLi">
               <a href="#" target="menuFrame"><i class="glyph-icon icon-home"></i>首页</a>
                <ul style="display: none;">
                    <li><a href="/Project/index.php/Admin/List/index" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>用户添加</a></li>
                </ul>
            </li> -->
			<li class="childUlLi">
                <a href="#" target="menuFrame"> <i class="glyph-icon icon-reorder"></i>管理员管理</a>
                <ul style="display: none;">

                    <li><a href="/Project/index.php/Admin/ShowAdmin/index" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>查看管理员信息</a></li>
                    <li><a href="/Project/index.php/Admin/AddAdmin/index" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>添加管理员</a></li>
                   <!--  <li><a href="/Project/index.php/Admin/ShowAdmin/passMod" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>修改密码</a></li> -->
                </ul>
            </li>
			
			<li class="childUlLi">
                <a href="#" target="menuFrame"> <i class="glyph-icon icon-reorder"></i>会员管理</a>
                <ul style="display: none;">

                    <li><a href="/Project/index.php/Admin/ShowUser/index" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>查看会员信息</a></li>
                </ul>
            </li>
			<li class="childUlLi">
                <a href="#" target="menuFrame"> <i class="glyph-icon icon-reorder"></i>认证管理</a>
                <ul style="display: none;">

                    <li><a href="/Project/index.php/Admin/Createsh/index" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>查看认证信息</a></li>
                </ul>
            </li>
			
			<li class="childUlLi">
                <a href="#" target="menuFrame"> <i class="glyph-icon icon-reorder"></i>商品类别管理</a>
                <ul style="display: none;">
					 <li><a href="/Project/index.php/Admin/ShowType/index" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>查看类别</a></li>
                    <li><a href="/Project/index.php/Admin/TypeManage/index" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>添加类别</a></li>
                </ul>
            </li>
			<li class="childUlLi">
                <a href="#" target="menuFrame"> <i class="glyph-icon icon-reorder"></i>商品管理</a>
                <ul style="display: none;">

                    <li><a href="/Project/index.php/Admin/ShowGoods/index" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>查看商品</a></li>
                </ul>
            </li>
			<li class="childUlLi">
                <a href="#" target="menuFrame"> <i class="glyph-icon icon-reorder"></i>订单管理</a>
                <ul style="display: none;">

                    <li><a href="/Project/index.php/Admin/OrderManage/index" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>查看订单</a></li>
                </ul>
            </li>
			<li class="childUlLi">
                <a href="#" target="menuFrame"> <i class="glyph-icon icon-reorder"></i>轮播图管理</a>
                <ul style="display: none;">

                    <li><a href="/Project/index.php/Admin/PlayManage/index" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>查看图片</a></li>
                </ul>
            </li>
			<!--
            <li class="childUlLi">
                <a href="#" target="menuFrame"> <i class="glyph-icon icon-reorder"></i>类别管理</a>
                <ul style="display: none;">

                    <li><a href="/Project/index.php/Admin/Add/index" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>添加类别</a></li>
                    <li><a href="/Project/index.php/Admin/Type/index" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>展示商品管理</a></li>
                    <li><a href="/Project/index.php/Admin/Message/index" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>数据管理</a></li>

                </ul>
            </li>
            <li class="childUlLi">
                <a href="#" target="menuFrame"> <i class="glyph-icon icon-reorder"></i>角色管理</a>
                <ul style="display: none;">
                    <li><a href="#"><i class="glyph-icon icon-chevron-right"></i>修改密码</a></li>
                    <li><a href="#"><i class="glyph-icon icon-chevron-right"></i>帮助</a></li>
                </ul>
            </li>
            <li class="childUlLi">
                <a href=""> <i class="glyph-icon  icon-location-arrow"></i>菜单管理</a>
                <ul style="display: none;">
                    <li><a href="aa.html" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>平台菜单</a></li>
                </ul>
            </li>-->
        </ul>
    </div>
    <!--菜单-->
    <div id="layout_right_content" class="layout_right_content">
        <div class="route_bg">
            <a href="#">主页</a><i class="glyph-icon icon-chevron-right"></i>
            <a href="#">菜单管理</a>
        </div>
        <div class="mian_content">
            <div id="page_content">
                <iframe id="menuFrame" name="menuFrame" src="/Project/index.php/Admin/AddAdmin/index" style="overflow:visible;" scrolling="yes" frameborder="no" height="98%" width="100%"></iframe>
            </div>
        </div>
    </div>
    <div class="layout_footer">
        <p>Copyright © 2015 - 武松打虎</p>
    </div>
</body></html>