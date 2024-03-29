<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form表单模拟美化插件 - 站长素材</title>

<link rel="stylesheet" href="__PUBLIC__/css/form.css" type="text/css" />
<style type="text/css">

form{float:left;padding:20px;border:2px dashed #ccc;margin:20px 0 0 40px;width:380px;}
form .item{float:left;clear:both;width:100%;margin-bottom:10px;}
.WellForm label{float:left;width:4em;height:21px;text-align:right;}
</style>

<script type="text/javascript" src="__PUBLIC__/js/form.js">
window.onload = function ()
{
    var aForm = document.getElementsByTagName("form");
    //多个表单
    for (var i = 0; i < aForm.length; i++) WellForm(aForm[i]);
};
</script>
</head>
<body>
<h2 style="padding-left:40px">Form表单模拟表单美化控件</h2>
<form>
    <div class="item"><label>姓名：</label><input type="text" name="name" /></div>
    <div class="item"><label>电话：</label><input type="text" name="tel" /></div>
    <div class="item">
        <label>性别：</label>
        <select name="sex">
            <option value="男孩">男孩</option>
            <option value="女孩" selected="selected">女孩</option>
            <option value="人妖">人妖</option>
        </select>
    </div>
    <div class="item">
        <label>生日：</label>
        <select name="month">
            <option value="1">1月</option>
            <option value="2">2月</option>
            <option value="3">3月</option>
            <option value="4">4月</option>
            <option value="5">5月</option>
            <option value="6">6月</option>
            <option value="7" selected="selected">7月</option>
            <option value="8">8月</option>
            <option value="9">9月</option>
            <option value="10">10月</option>
        </select>
        <select name="day">
            <option value="1">1号</option>
            <option value="2">2号</option>
            <option value="3">3号</option>
            <option value="4">4号</option>
            <option value="5">5号</option>
            <option value="6" selected="selected">6号</option>
            <option value="7">7号</option>
            <option value="8">8号</option>
            <option value="9">9号</option>
            <option value="10">10号</option>
            <option value="11">11号</option>
            <option value="12">12号</option>
            <option value="13">13号</option>
            <option value="14">14号</option>
            <option value="15">15号</option>
            <option value="16">16号</option>
        </select>
        <select name="year">
            <option value="2000">2000年</option>
            <option value="2001">2001年</option>
            <option value="2002">2002年</option>
            <option value="2003">2003年</option>
            <option value="2004">2004年</option>
            <option value="2005">2005年</option>
            <option value="2006">2006年</option>
            <option value="2007">2007年</option>
            <option value="2008">2008年</option>
            <option value="2009">2009年</option>
            <option value="2010" selected="selected">2010年</option>
            <option value="2011">2011年</option>
            <option value="2012">2012年</option>
            <option value="2013">2013年</option>
        </select>
    </div>
    <div class="item">
        <label>婚姻：</label>
        <input type="radio" name="marry" value="已婚" /><pre>已婚</pre>
        <input type="radio" name="marry" value="未婚" checked="checked" /><pre>未婚</pre>
    </div>
    <div class="item">
        <label>爱好：</label>
        <input type="checkbox" name="like" value="吃饭" /><pre>吃饭</pre>
        <input type="checkbox" name="like" value="睡觉" /><pre>睡觉</pre>
        <input type="checkbox" name="like" value="上网" checked="checked" /><pre>上网</pre>
        <input type="checkbox" name="like" value="打游戏" checked="checked" /><pre>打游戏</pre>
    </div>
    <div class="item"><label>地址：</label><input type="text" style="width:300px;" name="address" /></div>
    <div class="item"><label>备注：</label><textarea cols="50" rows="5" style="width:300px;" name="remark"></textarea></div>
    <div class="item"><label>说明：</label><textarea cols="50" rows="5" style="width:300px;" name="desc"></textarea></div>
    <div class="item"><label></label><input type="submit" value="提交" /></div>
</form>
<form>
	<div class="item"><label>用户名：</label><input type="text" name="username" /></div>
    <div class="item"><label>密码：</label><input type="password" name="pwd" /></div>
    <div class="item"><label>验证码：</label><input type="text" name="code" style="width:60px;" /></div>
    <div class="item"><label></label><input type="submit" value="提交" /></div>
</form>
<div style="text-align:center;clear:both">
<p>适用浏览器：IE8、360、FireFox、Chrome、Safari、Opera、傲游、搜狗、世界之窗.</p>
<p>来源：<a href="http://sc.chinaz.com/" target="_blank">站长素材</a></p>
</div>
</body>
</html>