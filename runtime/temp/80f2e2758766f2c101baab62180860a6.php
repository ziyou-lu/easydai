<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:56:"C:\wamp64\www\szdk/apps/content\view\category\index.html";i:1500180864;s:53:"C:\wamp64\www\szdk/apps/Admin\view\Public\layout.html";i:1500180864;}*/ ?>
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
        <h3>栏目分类管理</h3>
        <h5>所有前台栏目索引及管理</h5>
      </div>
    </div>
  </div>
  <div class="explanation" id="explanation">
    <div class="title" id="checkZoom"><i class="icon iconfont icon-dengpao"></i>
      <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
      <span id="explanationZoom" title="收起提示"></span>
    </div>
    <ul>
      <li>请在添加、修改栏目全部完成后，更新栏目缓存，否则可能出现未知错误</li>
    </ul>
  </div>
  <form method='post'>
    <table class="flex-table">
      <thead>
        <tr>
          <th width="24" align="center" class="sign"><i class="ico-check"></i></th>
          <th width="60"  align="center">排序</th>
          <th width="150" class="handle" align="center">操作</th>
          <th width="60" align="center">栏目ID</th>
          <th width="250" align="left">栏目名称</th>
          <th width="70" align="center">栏目类型</th>
          <th width="70" align="center">所属模型</th>
          <th width="100" align="center">访问</th>
          <th width="100" align="center">域名绑定须知</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php echo $categorys; ?>
      </tbody>
    </table>
  </form>
</div>
<script type="text/javascript" src="__STATIC__/admin/js/jquery.edit.js"></script>
<script type="text/javascript">
$(function(){
    $('.flex-table').flexigrid({
        height:'auto',// 高度自动
        usepager: false,// 不翻页
        striped:false,// 不使用斑马线
        resizable: false,// 不调节大小
        title: '栏目列表',// 表格标题
        reload: false,// 不使用刷新
        columnControl: false,// 不使用列控制
        buttons : [
                   {display: '<i class="icon iconfont icon-lanmuguanli"></i>添加栏目', name : 'add', bclass : 'add', onpress : fg_operation },
                   {display: '<i class="icon iconfont icon-danye"></i>添加单网页', name : 'wadd', bclass : 'add', onpress : fg_operation },
                   {display: '<i class="icon iconfont icon-lianjie"></i>添加外部链接', name : 'singlepage', bclass : 'add', onpress : fg_operation }
               ]
    });
    $('span[nc_type="inline_edit"]').inline_edit({act: '<?php echo url("content/category/listorder"); ?>'});
});

function fg_operation(name, bDiv) {
    if (name == 'add') {
        window.location.href = '<?php echo url("content/category/add"); ?>';
    }
    if (name == 'wadd') {
        window.location.href = '<?php echo url("content/category/wadd"); ?>';
    }
    if (name == 'singlepage') {
        window.location.href = '<?php echo url("content/category/singlepage"); ?>';
    }
}
</script>

<div id="goTop"> <a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a><a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a></div>
</body>
</html>