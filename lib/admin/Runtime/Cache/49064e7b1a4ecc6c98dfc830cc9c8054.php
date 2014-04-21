<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jquery聚焦表单高亮 - 站长素材</title>
<link rel="stylesheet" href="__PUBLIC__/css/form.css" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.2.6.js"></script>
</head>
<body>
	<form method="post">

	<h2>jquery聚焦表单高亮</h2>
	<p>建立一个更好的Web的形式：jQuery上下文背景突出使用</p>
	<div style="float:left; margin-right:20px; width:400px;">
	<h3>Row highlighting</h3>
	<div class="contentA">
		<div class="row">
			<div class="left">First name</div>

			<div class="right"><input name="Text1" type="text" class="text" /></div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">Last name</div>
			<div class="right"><input name="Text1" type="text" class="text" /></div>
			<div class="clear"></div>
		</div>

		<div class="row">
			<div class="left">Email</div>
			<div class="right"><input name="Text1" type="text" class="text" /></div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">Password</div>
			<div class="right"><input name="Text1" type="text" class="text" /></div>

			<div class="clear"></div>
		</div>
	</div>
	<hr />
		<div class="contentA">
		<div class="row">
			<div class="left">Address</div>
			<div class="right"><input name="Text1" type="text" class="text" /></div>

			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">Postal</div>
			<div class="right"><input name="Text1" type="text" class="text" /></div>
			<div class="clear"></div>
		</div>
		<div class="row">

			<div class="left">City</div>
			<div class="right"><input name="Text1" type="text" class="text" /></div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">Country</div>
			<div class="right"><select name="Select1" style="width: 195px">
				<option></option>

				</select></div>
			<div class="clear"></div>
		</div>
	</div>
	<hr />
		<div class="contentA">
		<div class="row">
			<div class="left">Account type</div>

			<div class="right">
				<input checked="checked" name="Radio1" type="radio" />Basic (Free registration) 
				<br />
				<input checked="checked" name="Radio1" type="radio" />Pro 9.99$
				<br />
				<input checked="checked" name="Radio1" type="radio" />Expert 19.99$
			</div>
			<div class="clear"></div>
		</div>
		<div class="row">

			<div class="left">Some description</div>
			<div class="right"><textarea name="TextArea1" cols="22" rows="3"></textarea></div>
			<div class="clear"></div>
		</div>
	</div>
	<input name="Button1" type="button" value="Do some action" />
	</div>
	<div style="float:left; margin-right:20px;">

	<!-- <h3>Group highlighting</h3>
	<div class="content">
		<div class="row">
			<div class="left">First name</div>
			<div class="right"><input name="Text1" type="text" class="text" /></div>
			<div class="clear"></div>
		</div>
		<div class="row">

			<div class="left">Last name</div>
			<div class="right"><input name="Text1" type="text" class="text" /></div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">Email</div>
			<div class="right"><input name="Text1" type="text" class="text" /></div>
			<div class="clear"></div>

		</div>
		<div class="row">
			<div class="left">Password</div>
			<div class="right"><input name="Text1" type="text" class="text" /></div>
			<div class="clear"></div>
		</div>
	</div>
	<hr />

		<div class="content">
		<div class="row">
			<div class="left">Address</div>
			<div class="right"><input name="Text1" type="text" class="text" /></div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">Postal</div>

			<div class="right"><input name="Text1" type="text" class="text" /></div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">City</div>
			<div class="right"><input name="Text1" type="text" class="text" /></div>
			<div class="clear"></div>
		</div>

		<div class="row">
			<div class="left">Country</div>
			<div class="right"><select name="Select1" style="width: 195px">
				<option></option>
				</select></div>
			<div class="clear"></div>
		</div>
	</div>

	<hr />
		<div class="content">
		<div class="row">
			<div class="left">Account type</div>
			<div class="right">
				<input checked="checked" name="Radio1" type="radio" />Basic (Free registration) 
				<br />
				<input checked="checked" name="Radio1" type="radio" />Pro 9.99$
				<br />

				<input checked="checked" name="Radio1" type="radio" />Expert 19.99$
			</div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">Some description</div>
			<div class="right"><textarea name="TextArea1" cols="22" rows="3"></textarea></div>
			<div class="clear"></div>

		</div>
	</div>
	<input name="Button1" type="button" value="Do some action" />
	</div> -->
</form>
<div style="text-align:center;clear:both"><br>
<p>适用浏览器：IE8、360、FireFox、Chrome、Opera、傲游、搜狗、世界之窗. 不支持Safari浏览器。</p>
<p>来源：<a href="http://sc.chinaz.com/" target="_blank">站长素材</a></p>
</div>
</body>
</html>