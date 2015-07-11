<?php
/*
 * 肖祖鹏
 * personalinfo.php----右侧div个人信息设置
 * 2012/7/17
 * 关俊鹏 
 * 修改 2012/7/28
 */
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
/*
 * 处理数据
 */

    $_data['gender']=($_POST['gender']);
	$_data['email']=($_POST['email']);
	$_data['phone']=($_POST['phone']);
	$_data['qq']=($_POST['qq']);
	$_data['MSN']=($_POST['MSN']);
	$_data['signature']=($_POST['signature']);
	$pass=DB_PRE.'ask_user';
	$query1=	"update $pass SET signature='{$_data['signature']}'	where uid='{$login['lzuuid']}'";
	_query($query1);
	$query=	"update $pass SET
	gender='{$_data['gender']}',
	email='{$_data['email']}',
	phone='{$_data['phone']}',
	qq='{$_data['qq']}',
	msn='{$_data['MSN']}'
	where uid='{$login['lzuuid']}'";
	_query($query);
	echo '<a href="personnav.php">信息修改成功</a>';

?>