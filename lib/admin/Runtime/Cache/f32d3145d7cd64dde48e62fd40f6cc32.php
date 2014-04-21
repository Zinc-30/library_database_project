<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图书馆 - 借书证管理</title>
<link rel="stylesheet" href="__PUBLIC__/css/form.css" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.2.6.js"></script>
</head>
<body>
	</br></br>
	<h1>图书馆 - 借书证管理</h1></br></br>
	<hr>
	<form action="<?php echo U('card_manage');?>" method="post">
	<div align="center">
	<h3>借书证信息</h3>
	<div class="contentA">
		<div class="row">
			<div class="left">借书证卡号(7)</div>
			<div class="right">
				<input name="cno" type="text" class="text" />
			</div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">姓名</div>
			<div class="right">
				<input name="name" type="text" class="text" />
			</div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">部门</div>
			<div class="right">
				<input name="department" type="text" class="text" />
			</div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">类别</div>
			<div class="right"><select name="type" style="width: 195px">
				<option value="U">本科生</option>
				<option value="T">教师</option>
				<option value="G">研究生</option>
				</select></div>
			<div class="clear"></div>
		</div>
	</div>	

	</div>
	<br>
	<input name="button" type="submit" value="添加" />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input name="button" type="submit" value="查询" />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input name="button" type="submit" value="删除" />
	</div>
</form>

<form action="<?php echo U('welcome');?>" method="post">
	</br></br><hr>
	<input type="hidden" name="username" value=<?php echo ($name); ?> />
	<input type="hidden" name="password" value=<?php echo ($pwd); ?> />
	<input type="submit" name="submit" value="返回主菜单" />
</form>
<div style="text-align:right;clear:both"><br>
xinhao
</div>
</body>
</html>