<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图书馆--图书添加</title>
<link rel="stylesheet" href="__PUBLIC__/css/form.css" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.2.6.js"></script>
</head>
<body>
	<form action="<?php echo U('book_enroll');?>" method="post" enctype="multipart/form-data">
	<h1>图书馆--图书添加</h1>
	<div align="center">
	<div class="contentA">
		<div class="row">
			<div class="left">图书编号(8)</div>
			<div class="right"><input name="bno" type="text" class="text" /></div>

			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">书名</div>
			<div class="right"><input name="title" type="text" class="text" /></div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">类别</div>
			<div class="right"><select name="class" style="width: 195px">
				<option value=></option>
				<option value="科学">科学</option>
				<option value="社会科学">社会</option>
				<option value="教科书">教育</option>
				<option value="当代小说">小说</option>
				<option value="数学">数学</option>
				<option value="美术">美术</option>
				<option value="历史">历史</option>
				<option value="漫画">漫画</option>
				<option value="地理">地理</option>
				<option value="computer">计算机</option>
				</select></div>
			<div class="clear"></div>
		</div>

		<div class="row">
			<div class="left">出版商</div>
			<div class="right"><input name="press" type="text" class="text" /></div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">作者</div>
			<div class="right"><input name="author" type="text" class="text" /></div>

			<div class="clear"></div>
		</div>
	</div>
		<div class="contentA">
		<div class="row">
			<div class="left">年份</div>
			<div class="right"><input name="year" type="text" class="text" />
			</div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">价格</div>
			<div class="right"><input name="price" type="text" class="text" /></div>
			<div class="clear"></div>
		</div>
	</div>
	</div>
	<input name="button" type="submit" value="添加" />
	</div>
	<hr />
		<div class="contentA">
		<div class="row">
			<div class="left">批量添加图书</div>
			<div class="right">
				<input type="file" name="file" id="file" /> 
				<br />


				<!-- <textarea name="arr" cols="24" rows="3"></textarea></div> -->
			<div class="clear"></div>
		</div>
		</div>
	<br>
	<input name="button" type="submit" value="上传" />
	</div>
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