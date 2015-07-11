<?php
/*
 * 袁俊虎
 * install/index.php
 * 安装文件的主页
 * 简单没有检查服务器版本等性能
 * 2012/7/24 修改
 */
error_reporting(0);
header("Content-Type:text/html;charset=UTF-8");
/*
 * 用mysql.sql.lock文件来判断是否安装过了
*/
$filename="../data/mysql.sql.lock";
if(!!is_file($filename)){
	echo "mysql.sql.lock文件已经存在，无法安装！";
	exit();
}
//包含demo.php 创建数据库的类
require 'demo.php';
if($_GET['action']==sever_install){
	/*
	 * 这里应该有判断用户名是否合法
	 * 密码的 判断
	 * 暂时省略 
	 */
	//连接数据库
	$_conn=mysql_connect($_POST['sever_name'],$_POST['sever_username'],$_POST['sever_pwd'])or die("数据库连接失败！");
	//实验处 不用管 
	/*
	if(!!$_conn){
		echo "成功！";
	}
	*/
	$sever_name=$_POST['sever_name'];
	$sever_username=$_POST['sever_username'];
	$sever_pwd=$_POST['sever_pwd'];
	$data_name=$_POST['data_name'];
	$data_pre=$_POST['data_pre'];
	$manager_name=$_POST['manager_name'];
	$manager_pwd=$_POST['manager_pwd'];
	$manager_email=$_POST['manager_email'];
	//简单判断下密码  此处需要从新做
	if($manager_pwd!=$_POST['manager_password']){
		echo"密码输入不一致！";
		exit();
	}
	else{
		$manager_pwd=sha1($manager_pwd);
	}
   $_create=mysql_query("create database $data_name");
    /*
    if(!!$_create){
   	echo "创建成功！";
    }
    */
   $dbM = new DBManager($sever_name,$sever_username,$sever_pwd,$data_name);
   $dbM->createFromFile('lzu_ask.sql',null,"$data_pre");  
//   $dbM = new DBManager($sever_name,$sever_username,$sever_pwd,$data_name);
//   $dbM->createFromFile('data.sql',null,"$data_pre");
   /*
    * 创建完数据库就创建管理员
    */
   $_conn=mysql_connect($sever_name,$sever_username,$sever_pwd);
   $pass=$data_pre.'ask_user';
   mysql_select_db($data_name);
   $query="INSERT INTO $pass(
   							uid,
   							username,
   							password,
   							email,
   							groupid
   							)
  						 	VALUES(
  							1,
   							'{$manager_name}',
   							'{$manager_pwd}',
   							'{$manager_email}',
   							1)";
   mysql_query($query);
   /*
    * 创建mysql.sql.lock
    */
   $filename="../data/mysql.sql.lock";
   if(!is_file($filename)){
   	$fp=fopen($filename, 'w+');
   	fclose($fp);
   }
   /*
    * 下面是保存数据库的名称 密码等
    * 创建config.inc.php
    */
//   if(!is_file('../includes/config.inc.php')){
   	$fp=fopen('../includes/config.inc.php', 'w+');
   	$data='<?php define(DB_HOST,'.$sever_name.');'.'define(DB_USER,'.$sever_username.');'.'define(DB_PWD,'.$sever_pwd.');'.'define(DB_NAME,'.$data_name.');'.'define(DB_PRE,'.$data_pre.');?>';
   	file_put_contents('../includes/config.inc.php', $data);
   	fclose($fp);
//   }
 //  else{
 //  	echo '../includes/config.inc.php文件已经存在！';
//  	exit();
 //  } 
 
 if(!!$_POST['submit']){
 	$body='<p>欢迎注册</p><p>管理员,请妥善保管密码和账户</p>';
 	header("location:../includes/stmp.func.php?email=$manager_email&emailbody=$body");
 }
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lzuask安装</title>
<link rel="stylesheet" style="text/css" href="images/install.css"></link>
</head>
<body>
	<div id="install_bg">
		<img src="images/header_bg.gif" width="800px" height="50px"></img>
		<div id="install_h_bg">
		<table cellpadding="0" cellspacing="0">	
		</table>
	    </div>
	    <h2>安装数据</h2>
	    <form method="post" name="sever_install" action="index.php?action=sever_install">
	    	<dl id="contents">
	    		<dt>请认真填写如下内容：</dt>
	    		<dd>数据库服务器：<input type="text" name="sever_name" class="text" value="localhost"></dd>
	    		<dd>数据库名称　：<input type="text" name="data_name" class="text" value="ask"></dd>
	    		<dd>数据库用户名：<input type="text" name="sever_username" class="text" value="root"></dd>
	    		<dd>数据库密码　：<input type="password" name="sever_pwd" class="text"></dd>
	    		<dd>数据表前缀　：<input type="text" name="data_pre" class="text" value="lzu_"></dd>
	    		<dt>超级管理员信息填写</dt>
	    		<dd>管理员用户名：<input type="text" name="manager_name" class="text" value="admin"></dd>
	    		<dd>管理员密码　：<input type="password" name="manager_pwd" class="text" value=""></dd>
	    	    <dd>重复密码　　：<input type="password" name="manager_password" class="text" value=""></dd>
	    		<dd>管理员邮箱　：<input type="text" name="manager_email" class="text" value=""></dd>
	    		<dt><h2><input type="submit" name="submit" class="submit" value="下一步"></input></h2></dt>
	    	</dl>
	    </form>
	</div>
</body>
</html>
