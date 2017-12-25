<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"/data/home/xyu3066030001/htdocs/apps/admin/view/customer/index.html";i:1500882035;s:66:"/data/home/xyu3066030001/htdocs/apps/admin/view/public/layout.html";i:1500882038;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="__STATIC__/admin/css/index.css" rel="stylesheet" type="text/css">
<link href="__STATIC__/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="__STATIC__/admin/font/css/iconfont.css" rel="stylesheet" />
<style type="text/css">html, body { overflow: visible;}</style>
<script type="text/javascript">
var SITEURL = '';
</script>
<script type="text/javascript" src="__STATIC__/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="__STATIC__/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/admin.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
<script type="text/javascript" src="__STATIC__/admin/js/flexigrid.js"></script>
    <script src="__STATIC__/js/bootstrap.min.js"></script>

<script type="text/javascript" src="__STATIC__/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/jquery.mousewheel.js"></script>
</head>
<body style="background-color: #FFF; overflow: auto;">
<script type="text/javascript" src="__STATIC__/admin/js/jquery.picTip.js"></script>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>

<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <div class="subject">
                <h3>客户详细资料</h3>
            </div>
        </div>
    </div>
    <div class="explanation" id="explanation">
        <div class="title" id="checkZoom"><i class="icon iconfont icon-dengpao"></i>
            <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
            <span id="explanationZoom" title="收起提示"></span>
        </div>
        <ul>
        </ul>
    </div>
    <form method='post'>
        <table class="flex-table">
            <thead>
            <tr height="30px">
                <th width="10%" class="center" align="center">身份证</th>
                <th width="5%"  class="center" align="center">姓名</th>
                <th width="8%" class="center" align="center">手机号</th>
                <th width="5%" class="center" align="center">社保年限(年)</th>
                <th width="5%" class="center" align="center">社保基数(元)</th>
                <th width="10%" class="center" align="center">最近一次工作打卡年限(年)</th>
                <th width="5%" class="center" align="center">工资(k即千元)</th>
                <th width="10%" class="center" align="center">录入时间</th>
                <th width="8%" class="center" align="center">微信号</th>
                <th width="10%" class="center" align="center">籍贯</th>
                <th width="5%" class="center" align="center">操作</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <div>
                <?php $index = 0;foreach ($list as $custom):$index++;?>
                <tr <?php if($index % 2 != 0) echo "bgcolor=\"#B0E2FF\"";?> height="30px" >
                    <td width="10%" align="center"><?php echo $custom["uid"];?></td>
                    <td width="5%"  align="center"><?php echo $custom["name"];?></td>
                    <td width="8%" align="center"><?php echo $custom["phone"];?></td>
                    <td width="5%" align="center"><?php echo $custom["shebao_years"];?></td>
                    <td width="5%" align="center"><?php echo $custom["shebao_num"];?></td>
                    <td width="10%" align="center"><?php echo $custom["work_years"];?></td>
                    <td width="5%" align="center"><?php echo $custom["work_wages"];?></td>
                    <td width="10%" align="center"><?php echo $custom["update_time"];?></td>
                    <td width="8%" align="center"><?php echo $custom["wechat"];?></td>
                    <td width="10%" align="center"><?php echo $custom["hometown"];?></td>
                    <td width="5%" align="center"><a class="btn red" <?php echo 'href="javascript:if(confirm(\'您确定要删除吗?\')){location.href=\'';?><?php echo url("Customer/delete",array("id" => $custom["id"])).'\''.'}"';?>><i class="icon iconfont icon-shanchu"></i>删除</a></td>
                </tr>
                <?php endforeach;?>
            </div>

            <div>
                <tr height="30px">
                    <td colspan="11" align="center">
                        <?php if($p != 1):?>
                            <a <?php echo 'href="'.url("Customer/index").'?p=1'.'"'?>>首页</a>
                            &nbsp;&nbsp;
                            <a <?php echo 'href="'.url("Customer/index").'?p='.($p-1).'"'?>>上一页</a>
                            &nbsp;&nbsp;
                        <?php endif;for($i = 0 ; $i < $maxPage ; $i++):if($i + 1 == $p):?>
                                <?php echo ($i + 1).'&nbsp;';elseif($i == 0):?>
                                <a <?php echo 'href="'.url("Customer/index").'?p='.($i+1).'"'?>><?php echo $i+1; ?></a>
                                &nbsp;
                                <?php if($p - 1 > 5 || $p - 1 < -5):?>
                                    ...&nbsp;
                                <?php endif;elseif($i + 1== $maxPage):if($p - $maxPage > 5 || $p - $maxPage < -5):?>
                                    ...&nbsp;
                                <?php endif;?>
                                <a <?php echo 'href="'.url("Customer/index").'?p='.($i+1).'"'?>><?php echo $i+1?></a>
                                &nbsp;
                            <?php elseif($p - $i > 4 || $p - $i < -4):else:?>
                                <a <?php echo 'href="'.url("Customer/index").'?p='.($i+1).'"'?>><?php echo $i+1?></a>
                                &nbsp;
                            <?php endif;endfor;if($p != $maxPage):?>
                        &nbsp;
                        <a <?php echo 'href="'.url("Customer/index").'?p='.($p+1).'"'?>>下一页</a>
                        &nbsp;&nbsp;
                        <a <?php echo 'href="'.url("Customer/index").'?p='.$maxPage.'"'?>>尾页</a>
                        <?php endif;?>
                        &nbsp;
                        第<?php echo $p; ?>页/共<?php echo $maxPage;?>页/共<?php echo $allCount;?>条资料
                    </td>
                </tr>
            </div>
            </tbody>
        </table>
    </form>
</div>

<div id="goTop"> <a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a><a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a></div>
</body>
</html>