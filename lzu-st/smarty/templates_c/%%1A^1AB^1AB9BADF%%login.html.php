<?php /* Smarty version 2.6.26, created on 2013-03-10 08:28:39
         compiled from login.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台登录</title>
</head>

<body align="center" style="background:#000099;">
<div id="login" style="text-align:center;">
	<form action="admin.php" method="post" >
		<p>账号：<input name="adminname" type="text"/></p>
		<p>密码：<input name="adminpwd" type="password" /></p>
		<p>验证码：<input name="checkno" type="text"  class="checkno"/><img src="checkno.php" alt="验证码" onclick="this.src=this.src"/></p>
		<p class="bt"><input name="" type="submit"  value="登录"/></p>
		<input name="act" type="hidden"  value="checkadmin"/>
	</form>
</div>
</body>
</html>