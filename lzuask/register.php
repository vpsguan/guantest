<?php
/*
 * 袁俊虎
 * 2012/7/24
 * 添加邮件发送
 * 2012/7/2/8修改
 */ 
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
/*
 * 处理数据
 */
if($_GET['action']==register){
	require 'includes/registe.inc.php';
	_check_code($_POST['code'], $_SESSION['code']);
	$_data['username']=_checkusername($_POST['username'],2,20);
	$_data['userpwd']=_checkpassword($_POST['pwd'],$_POST['pwd1']);
	$_data['email']=_checkemail($_POST['email']);
	$_data['lastlogin']=time();
	$_data['credits']=80;
	$_data['active']=sha1(uniqid(rand(),true));
	//判断用户名是否被注册
	$pass=DB_PRE.'ask_user';
	$query="SELECT username FROM $pass WHERE username='{$_data['username']}'";
	_is_repeat($query,'对不起用户名已经被注册了');
	$query="SELECT email FROM $pass WHERE email='{$_data['email']}'";
	_is_repeat($query,'对不起该邮箱已经被注册了');
	//
	$query=	"INSERT INTO $pass(
	active,
	username,
	password,
	email,
	groupid,
	credits,
	regip,
	lastlogin,
	bday
	)
	VALUES(
	'{$_data['active']}',
	'{$_data['username']}',
	'{$_data['userpwd']}',
	'{$_data['email']}',
	7,
	'{$_data['credits']}',
	'{$_SERVER["REMOTE_ADDR"]}',
	'{$_data['lastlogin']}',
	NOW()
	)";
	_query($query);
	/*
	 * 判断是否注册成功  
	 */
	if(mysql_affected_rows()==1){
	//	$login=array('lzuname'=>$_data['username'],'lzupwd'=>$_data['userpwd']);
	//	session_register(login);
	//	_location('欢迎注册成功','index.php');
	$useremail=$_data['email'];
	$body=$_data['active'];
	//_location('注册成功',"location:includes/stmp.func.php?email='{$_data['email']}'&emailbody=$body");
	header("location:includes/stmp.func.php?email=$useremail&emailbody=$body&num=1");
	}
	else{
		_close();
		_location('注册失败','register.php');
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LzuAsk注册</title>
<link rel="stylesheet" type="text/css" href="css/register.css"/>
<link rel="stylesheet" type="text/css" href="css/header.css" /> 
<script type="text/javascript" src="js/register.js"></script>
</head>
<body>
	<?php
	require ROOT_PATH.'includes/header.php'; 
	?>
	<div id="register">
	<h2>会员注册</h2>
		<form method="post" name="register" action="register.php?action=register" >
				<dt>请认真填写以下信息</dt>
				<dd>用户名　：<input type="text" name="username" class="text">(用户名在2-20位)</dd>
				<dd>密码输入：<input type="password" name="pwd" class="text">(密码不小于6位)</dd>
				<dd>密码确认：<input type="password" name="pwd1" class="text"></dd>
				<dd>电子邮件：<input type="text" name="email" class="text"> </dd>
				<dd>验证码　：<input name="code" type="text" class="c3a" size="8">
				<img src="includes/code.php" id="code" alt="点击刷新" onClick="this.src=this.src+'?'" /></dd>
                <dd class="submit"><input   class="submit" type="submit" value="完成" title="点击提交"/>
                <input  class="submit" type="reset" value=" 重新填写" title="点击重置"/> </dd>
		</form>
	</div>
	<?php
	require ROOT_PATH.'includes/footer.php'; 
	?>
</body>
</html>
