<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html dir="ltr" lang="en-US">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Login success</title>
	<link rel="stylesheet" href="__PUBLIC__/css/style_wel.css" type="text/css" />

	</head>

	<body>
		<div id="container">
			<div class="welcome">
				<div class="welcome-user" style="font-size: 25px;">欢迎管理员!</div>
				<<div class="welcome-text">
				<a href="<?php echo U('enroll');?>" style="color:red;font-size: 20px;">图书入库</a></br></br>
				<a href="<?php echo U('search');?>" style="color:red;font-size: 20px;">图书查询</a></br></br>
				<a href="<?php echo U('borrow');?>" style="color:red;font-size: 20px;">借书</a></br></br>
				<a href="<?php echo U('return');?>" style="color:red;font-size: 20px;">还书</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="<?php echo U('manage');?>" style="color:red;font-size: 20px;">图书证管理</a></br></br>
				</div> 
				<div class="home"><a href="index.html">返回</a></div>
			</div>
		</div>
	</body>
</html>