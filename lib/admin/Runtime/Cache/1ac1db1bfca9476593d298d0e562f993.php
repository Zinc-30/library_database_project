<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html dir="ltr" lang="en-US">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Library Admin Login</title>


	<link rel="stylesheet" href="__PUBLIC__/css/style_login.css" type="text/css" />
	<script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/selectivizr.js"></script>
	<noscript><link rel="stylesheet" href="__PUBLIC__/css/fallback.css" /></noscript>
	</head>

	<body>
		<div id="container">
			<form action="<?php echo U('welcome');?>" method="post">
				<div class="login">图书馆管理员登陆</div>
				<div class="username-text">管理员账号:</div>
				<div class="password-text">密码:</div>
				<div class="username-field">
					<input type="text" name="userid" value="root" />
				</div>
				<div class="password-field">
					<input type="password" name="password" value="" />
				</div>
				<input type="checkbox" name="remember-me" id="remember-me" /><label for="remember-me">Remember me</label>
				<div class="forgot-usr-pwd"><!-- Forgot <a href="#">username</a> or <a href="#">password</a>? --></div>
				<input type="submit" name="submit" value="GO" />
			</form>
		</div>
		<div id="footer">
			Copyright &copy; 2014.Company name All rights reserved.
		</div>

</body>
</html>