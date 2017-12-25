<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:50:"C:\wamp64\www\szdk/apps/home\view\index\index.html";i:1500781299;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>个人信息</title>
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/base.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/home.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/replaceBsc.css" />
	</head>

	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-6" style="text-align: center;">
						<p class="tip">欢迎来到宜信贷款张经理客户资料收集平台</a>
					</div>
					<div class="col-sm-6" style="text-align: center;">
						<p class="tip">网贷有风险，出借需谨慎！</p>
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
						<a class="navbar-brand" href="index.html">个人贷款</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="index.html">首页</a>
							</li>
							<li>
								<a href="<?php echo url('Customer/index'); ?>">客户资料提交</a>
							</li>
						</ul>
					</div>
					<!--/.nav-collapse -->
				</nav>
			</div>
		</header>

		<div class="main">
			<div class="container">
				<div class="main_top">
					<img src="__STATIC__/images/010.jpg" style="width: 100%;height: 400px;">
				</div>
				<div class="main_bottom">
					<div class="row">
						<div class="col-lg-4">
							<div class="bor-top">咨询请联系</div>
							<div class="consult">
								<img src="__STATIC__/images/010.jpg" width="120" height="140" />
								<h5>张经理</h5>
								<h6>手机:13888888888</h6>
								<h6>微信号:13888888888</h6>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="bor-top">网贷相关知识</div>
						</div>
					</div>
					

				</div>
			</div>
		</div>
		<footer>
			<div class="footer">底部文字</div>
		</footer>

		<script src="__STATIC__/js/jquery-2.0.3.min.js"></script>
		<script src="__STATIC__/js/bootstrap.min.js"></script>
	</body>

</html>