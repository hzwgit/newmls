<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="/Project/Mls/Store/Public/Css/a_002.css">
    <link rel="stylesheet" href="/Project/Mls/Store/Public/Css/a_004.css" type="text/css">
    <link rel="stylesheet" href="/Project/Mls/Store/Public/Css/index.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/Project/Mls/Store/Public/Css/cats-manage-min.css">

    <script type="text/javascript" src="/Project/Public/Js/jquery-1.7.2.js"></script>
    <script type="text/javascript" src="/Project/Mls/Store/Public/Js/type.js"></script>
</head>
<body>

    <div id="vl-toolbar" class="toolbar">
        <div class="operater">
            <div class="manage-title">
                <a id="J_AddSupCatHD" class="button btn-add J_TGoldData" href="javascript:;">添加手工分类</a>
            </div>
        </div>

        <div class="toolbar-opts">
            <a href="javascript:;" class="release J_TGoldData" id="J_CatsSubmit_2">
                <span>保存更改</span>
            </a>
        </div>
    </div>
    <div style="height: 100%;" id="vl-container">
        <div id="content" class="tb-shop">

            <div class="panel manage-cats" id="J_content">
                <div class="select-opt" id="J_TDealAll"> <b class="cat-checkbox"></b>
                    <a href="javascript:;" class="J_TGoldData selectall " data-gold-type="click/type" data-gold-url="/tbwmdd.10.13.5" data-gold-data="">全选</a>
                </div>
                <div class="title-nav toolbar-opts">
                    <a id="J_TDelALl" class="disabled release J_TGoldData" href="javascript:;" data-gold-type="click/type" data-gold-url="" data-gold-data="">
                        <span>批量删除</span>
                    </a>

                    <div class="p-right">
                        <a href="javascript:;" class="J_CollapseAll ">展开</a>
                        <span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
                        <a href="javascript:;" style="cursor:pointer;" class="J_FoldingAll noable ">收起</a>
                    </div>
                </div>
                <div class="table-title">
                    <table class="cats-table" cellpadding="0" cellspacing="0">
                        <colgroup>
                        <col width="3%">
                        <col width="2.5%">
                        <col width="19%">
                        <col width="15%">
                        <col width="14.6%">
                        <col width="10%">
                        <col width="12.5%">
                        <col width="auto"></colgroup>
                    <tbody>
                        <tr class="table-title">
                            <td class="td-00">&nbsp;</td>
                            <td class="td-0">&nbsp;</td>
                            <td class="td-1">分类名称</td>
                            <td class="td-2">
                                <!--    <div class="td-2-node">分类图片</div>
                            -->
                        </td>
                        <td class="td-4">移动</td>
                        <td class="td-3">默认展开</td>
                        <td class="td-timeh">创建时间</td>
                        <td class="td-8">分类类型</td>
                        <td class="td-9">操作</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-outer">
            <div tabindex="95" style="position: relative; outline: medium none;" class="ks-container">
                <div style="position: absolute; top: 0px; left: 0px; width: 100%; overflow: visible;" class="cats-list ks-body" id="J_table_box">
                    <form action="" method="post" id="J_CatsForm">

                        <table id="J_CatsList" class="cats-table" cellpadding="0" cellspacing="0">
                            <colgroup>
                            <col width="3%">
                            <col width="2.5%">
                            <col width="19%">
                            <col width="15%">
                            <col width="14.6%">
                            <col width="10%">
                            <col width="12.5%">
                            <col width="auto"></colgroup>

                        <!--遍历类别-->
                        <!--folding expand-->
                        <?php if(is_array($types)): foreach($types as $key=>$val): if(($val['state'] != null)): ?><tbody class="folding tbodypid" pid="<?php echo ($val['p_id']); ?>
                                    " >
                                    <tr class="cat-sup">
                                        <td class="td-00">
                                            <span class="checkbox-box" delsong="1">
                                                <span class="pseudo-checkbox"></span>
                                                <input class="J_CatOpt checkbox" id="opt-no-745" type="checkbox"></span>
                                        </td>
                                        <td class="td-0"> <i class="J_FoldTrigger arrow arrow-left"></i>
                                        </td>
                                        <td class="td-1">
                                            <div class="input-box">
                                                <input id="<?php echo ($val['id']); ?>
                                                " class="input-text J_CatName " value="<?php echo ($val['name']); ?>" maxlength="20" data-condition="" type="text"></div>
                                            </td>
                                            <td class="td-2"></td>
                                            <td class="td-move">
                                                <div class="move-box">
                                                    <a class="move-top J_CatMoveTop" href="javascript:;" title="移动到顶部">上移</a>
                                                    <a class="move-up J_CatMoveUp" href="javascript:;" title="上移">上移</a>
                                                    <a class="move-down J_CatMoveDown " href="javascript:;" title="下移">下移</a>
                                                    <a class="move-btm J_CatMoveBtm " href="javascript:;" title="移动到底部">下移</a>
                                                </div>
                                            </td>
                                            <td class="td-3">
                                                <span class="switch-box <?php if($val['state'] == 'true'): ?>checked<?php endif; ?>
                                                ">
                                                <span class="pseudo-switch"></span>
                                                <input checked="checked" class="J_CatShow checkbox" id="show-no-745" type="checkbox"></span>
                                        </td>
                                        <td class="td-time">
                                            <?php echo (date('Y-m-d',$val['ct_time'])); ?></td>
                                            <td class="td-8">手动分类</td>
                                            <td class="td-9">
                                                <a class="J_CatDelete" href="javascript:;" title="删除">删除</a>
                                            </td>
                                        </tr>

                                        <!--子类别-->
                                        <?php else: ?>
                                        <tr class="cat-sub " data-type="0">
                                            <td class="td-00">
                                                <span class="checkbox-box">
                                                    <span class="pseudo-checkbox"></span>
                                                    <input id="" class="J_CatOpt checkbox" type="checkbox"></span>
                                            </td>
                                            <td class="td-0"></td>
                                            <td class="td-1">
                                                <div class="input-box">
                                                    <input id="<?php echo ($val['id']); ?>"  class="input-text J_CatName" value="<?php echo ($val['name']); ?>" autocomplete="off" data-condition="" maxlength="20" type="text">
                                                    </div>
                                                </td>
                                                <td class="td-2"></td>
                                                <td class="td-move">
                                                    <div class="move-box">
                                                        <a class="move-up  J_CatMoveUp no-move-up" href="javascript:;">上移</a>
                                                        <a class="move-down J_CatMoveDown" href="javascript:;">下移</a>
                                                    </div>
                                                </td>
                                                <td class="td-3">&nbsp;</td>
                                                <td class="td-time">2015-07-13</td>
                                                <td class="td-8">手动分类</td>
                                                <td class="td-9">
                                                    <a class="J_CatDelete" href="javascript:;">删除</a>
                                                    <a href="" target="_blank">查看</a>
                                                </td>
                                            </tr><?php endif; ?>
                                        <!--添加类别-->
                                        <?php if($types[$key+1]['p_id'] != $val['p_id']): ?><tr class="cat-sub add-sub">
                                                <td class="td-00"></td>
                                                <td class="td-0"></td>
                                                <td class="td-1">
                                                    <a  class="add-cat J_AddCat">
                                                        <span> <em>添加子分类</em>
                                                        </span>
                                                    </a>
                                                </td>
                                                <td class="td-2"></td>
                                                <td class="td-move"></td>
                                                <td class="td-3"></td>
                                                <td class="td-time"></td>
                                                <td class="td-8"></td>
                                                <td class="td-7"></td>
                                            </tr><?php endif; endforeach; endif; ?>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
           
        </div>
    </div>
</body>
</html>