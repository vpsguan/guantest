<?php
/*
 * 袁俊虎
 * 点名提问页面    还没做好 
 * named_ask.php
 * 2012/7/24
 */
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>点名问答</title>
<link rel="stylesheet" type="text/css" href="css/named_ask.css"></link>
</head>
<frameset>
	<frame src="includes/headernamed.php" id="header">
	<frame src="http://www.baidu.com" name="view_frame" id="left">
</frameset>
</html>