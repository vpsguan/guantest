<?php /* Smarty version 2.6.26, created on 2012-11-20 02:16:49
         compiled from login.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台登录</title>
</head>

<body align="center">
<div id="login">
	<form action="admin.php" method="post">
		<p><label>管理员账号：</label><input name="adminname" type="text" /></p>
		<p><label>密码：</label><input name="adminpwd" type="password" /></p>
		<p><label>验证码：</label><img src="checkno.php" alt="验证码" onclick="this.src=this.src"/><input name="checkno" type="text"  class="checkno"/></p>
		<p class="bt"><input name="" type="submit"  value="登录"/></p>
		<input name="act" type="hidden"  value="checkadmin"/>
	</form>
</div>
</body>
</html>