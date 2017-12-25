<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"E:\wwwroot\host707202214\wwwroot/apps/home\view\shixubing\index.html";i:1508053945;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>极速借款</title>
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/bootstrapValidator.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/base.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/home.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/form.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/replaceBsc.css" />
		<script src="__STATIC__/js/jquery-2.0.3.min.js"></script>
		<script src="__STATIC__/js/bootstrap.min.js"></script>
		<script src="__STATIC__/js/bootstrapValidator.js"></script>
	</head>

	<body>
		<img src="http://easydai.site/static/images/icon.jpg" style="width:0; height:0; position:absolute;"/>
		<header>
			
			<div class="container">
				<div class="row">
					<div class="col-sm-6" style="text-align: center;">
						<p class="tip">欢迎来到easy贷款平台</a>
					</div>
				</div>
				<nav class="navbar navbar-default navbar-static-top">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            				<span class="sr-only">Toggle navigation</span>
            				<span class="icon-bar"></span>
            				<span class="icon-bar"></span>
            				<span class="icon-bar"></span>
          			</button>
						<a class="navbar-brand" href="../Index/index.html">个人贷款</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="index.html">客户资料提交</a>
							</li>
						</ul>
					</div>
					<!--/.nav-collapse -->
				</nav>
			</div>
		</header>
		
		
		<div class="main">
			<div class="container">
				<div>
					<img src="__STATIC__/images/title1.jpg" style="width: 100%;">
					<div class="container">
					</div>
				</div>
				<div class="main_bottom mar-top">
					<p>请认真填写您的个人资料</p>
					<p style="margin-top: 20px;color: red;">（注：该表单中均为必填项，本人承诺不会向其他人透漏任何客户资料）</p>
					<div class="row post">
						<div class="col-lg-8 col-lg-offset-2">
							<form action="<?php echo url('Shixubing/add'); ?>" method="post" id="personal_form">
								<div class="form_first">
									<div class="col-lg-5 form_margin">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">姓名</span>
												<input type="text" class="form-control" placeholder="" name="name" id="name">
											</div>
										</div>
									</div>
									<div class="col-lg-7 form_margin">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">手机号</span>
												<input type="text" class="form-control" name="phone" id="phone">
											</div>
										</div>
									</div>
								</div>
								<!--<div class="col-lg-12 from_second form_margin">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">身份证</span>
											<input type="text" class="form-control" name="idcard" id="idcard">
										</div>
									</div>
								</div>
								<div class="form_three">
									<div class="col-lg-6 form_margin">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">社保缴纳年限(单位:年)</span>
												<input type="text" class="form-control" name="payyear" id="payyear">
											</div>
										</div>
									</div>
									<div class="col-lg-6 form_margin">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">社保基数(单位:元)</span>
												<input type="text" class="form-control" name="paynumber" id="paynumber">
											</div>
										</div>
									</div>
								</div>
								<div class="form_fourth">
									<div class="col-lg-6 form_margin clean">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">最近一次工作上班打卡年限(单位:年)</span>
												<input type="text" class="form-control" name="workyear" id="workyear">
											</div>
										</div>
									</div>
									<div class="col-lg-6 form_margin">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">打卡工资(单位:k即千元)</span>
												<input type="text" class="form-control" name="wages" id="wages">
											</div>
										</div>
									</div>
								</div>
								<div class="form_five clearfix">
									<div class="col-lg-6 form_margin clean">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">微信号(可不填)</span>
												<input type="text" class="form-control" name="wechat" id="wechat">
											</div>
										</div>
									</div>
									<div class="col-lg-6 form_margin" style="padding-bottom: 20px;">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">籍贯(可不填)</span>
												<input type="text" class="form-control" name="place" id="place">
											</div>
										</div>
									</div>
								</div>-->
								<div style="margin-bottom: 20px;color: red;">*信息提交后将有客户经理致电联系您，请稍候，谢谢！</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary" style="width: 100px;">提交</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<script>
			$(document).ready(function() {
				// validate form
				$('#personal_form').each(function() {
					var $form = $(this);
					/**
					 * 下面是进行插件初始化
					 * 你只需传入相应的键值对
					 * */
					$form.bootstrapValidator({
						message: 'This value is not valid',
						feedbackIcons: { /*输入框不同状态，显示图片的样式*/
							valid: 'glyphicon glyphicon-ok',
							invalid: 'glyphicon glyphicon-remove',
							validating: 'glyphicon glyphicon-refresh'
						},
						fields: { /*验证*/
							name: { /*键名name和input name值对应*/
								validators: {
									notEmpty: { /*非空提示*/
										message: '姓名不能为空'
									},
									regexp: { /* 只需加此键值对，包含正则表达式，和提示 */
										regexp: /^([A-Za-z]|[\u4E00-\u9FA5])+$/,
										message: '请输入正确姓名'
									},
									stringLength: { /*长度提示*/
										min: 2,
										max: 100,
										message: '姓名长度必须位于2到100字符之间'
									} /*最后一个没有逗号*/
								}
							},
							phone: {
								validators: {
									notEmpty: {
										message: '手机号不能为空'
									},
									regexp: { /* 只需加此键值对，包含正则表达式，和提示 */
										regexp: /^[0-9]*$/,
										message: '请输入正确手机号'
									},
									stringLength: {
										min: 11,
										max: 11,
										message: '手机号长度为11字符'
									}
								}
							},
							idcard: {
								validators: {
									notEmpty: {
										message: '身份证号不能为空'
									},
									regexp: { /* 只需加此键值对，包含正则表达式，和提示 */
										regexp: /^([0-9]){7,18}(x|X)?$/,
										message: '请输入正确身份证号'
									},
									stringLength: {
										min: 15,
										max: 18,
										message: '身份证长度必须位于15-18字符之间'
									}
								}
							},
							payyear: {
								validators: {
									notEmpty: {
										message: '社保缴纳年限不能为空'
									},
									regexp: { /* 只需加此键值对，包含正则表达式，和提示 */
										regexp: /^[+-]?\d+(\.\d+)?$/,
										message: '请输入正确社保缴纳年限'
									},
									stringLength: {
										min: 1,
										max: 20,
										message: '社保缴纳年限长度必须在1-20字符之间'
									}
								}
							},
							paynumber: {
								validators: {
									notEmpty: {
										message: '社保基数不能为空'
									},
									regexp: { /* 只需加此键值对，包含正则表达式，和提示 */
										regexp: /^[+-]?\d+(\.\d+)?$/,
										message: '请输入正确社保基数'
									},
									stringLength: {
										min: 1,
										max: 20,
										message: '社保基数长度必须在1-20字符之间'
									}
								}
							},
							workyear: {
								validators: {
									notEmpty: {
										message: '最近一次上班打卡年限不能为空'
									},
									regexp: { /* 只需加此键值对，包含正则表达式，和提示 */
										regexp: /^[+-]?\d+(\.\d+)?$/,
										message: '请输入正确最近一次上班打卡年限'
									},
									stringLength: {
										min: 1,
										max: 20,
										message: '最近一次上班打卡年限长度必须在1-20字符之间'
									}
								}
							},
							wages: {
								validators: {
									notEmpty: {
										message: '打卡工资不能为空'
									},
									regexp: { /* 只需加此键值对，包含正则表达式，和提示 */
										regexp: /^[+-]?\d+(\.\d+)?$/,
										message: '请输入正确打卡工资'
									},
									stringLength: {
										min: 1,
										max: 20,
										message: '打卡工资长度必须在1-20字符之间'
									}
								}
							}
						}
					});
				});

				// 修复bootstrap validator重复向服务端提交bug
				$form.on('success.form.bv', function(e) {
					// Prevent form submission
					e.preventDefault();
				});
			});
		</script>
	</body>

</html>