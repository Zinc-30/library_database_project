<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图书馆 - 借书</title>
<link rel="stylesheet" href="__PUBLIC__/css/form.css" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.2.6.js"></script>
</head>
<body>
	</br></br>
	<h1>图书馆 - 借书</h1></br></br>
	<hr>
	<form action="<?php echo U('book_borrow');?>" method="post">
	<div align="center">
	<h3>借书信息</h3>
	<div class="contentA">
		<div class="row">
			<div class="left">借书证卡号</div>
			<div class="right">
				<input name="uid" type="text" class="text" />
			</div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">书籍编号</div>
			<div class="right">
				<input name="bid" type="text" class="text" />
			</div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">书籍名称</div>
			<div class="right">
				<input name="bname" type="text" class="text" />
			</div>
			<div class="clear"></div>
		</div>
	</div>	

	</div>
	<input name="Button1" type="submit" value="借书" />
	</div>
</form>

<form action="<?php echo U('welcome');?>" method="post">
	</br></br><hr>
	<input type="hidden" name="userid" value="root" />
	<input type="hidden" name="password" value="" />
	<input type="submit" name="submit" value="返回主菜单" />
</form>
<div style="text-align:right;clear:both"><br>
xinhao
</div>
</body>
</html>