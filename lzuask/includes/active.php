<?php
/*
 * 袁俊虎
 * 激活页面
 * includes/active.php
 * 2012/7/24
 * 主要讲ask_user中active改为特殊值 "空"
 */
//error_reporting(0);
header("Content-Type:text/html;charset=UTF-8");
require dirname(__FILE__).'/../includes/common.inc.php'; //转换成硬路径
/*
 * 数据处理
 */
	$pass=DB_PRE.'ask_user';
	$_sql="UPDATE $pass SET active=NULL WHERE active='{$_GET['acti']}'";
	_query($_sql);
	if(!!mysql_affected_rows()==1){
		_location('激活成功', '../index.php');
		}else{
		_alert('激活失败');
		exit();
	}
?>