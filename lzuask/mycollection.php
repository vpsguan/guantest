<?php
/*
 * 肖祖鹏
 * mycollection.php----右侧div我的收藏
 * 2012/7/17
 * 袁俊虎 修改
 * 2012/7/28
 */
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
$A->judge_session();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的收藏</title>
<link rel="stylesheet" type="text/css" href="css/mycollection.css" />
<link rel="stylesheet" type="text/css" href="css/basic.css" />
<link rel="stylesheet" type="text/css" href="css/header.css" />
<link rel="stylesheet" type="text/css" href="css/left_nav.css" />
</head>

<body>
<?php
	require ROOT_PATH.'includes/header.php'; 
?>
<div id="person">
 <!--左边栏-->
<?php include ROOT_PATH.'includes/left_nav.php'; ?>
<div class="details">
  <h4> 全部收藏的问题</h4> <br />
  <div class="title">
  <div class="list1">
  标题（共0条）
  </div>
  <div class="list2">
  浏览数/阅读
  </div>
  <div class="list3">
  悬赏分
  </div>
  <div class="list4">
  状态
  </div>
  <div class="list5">
  提问时间
  </div>
  </div>
  <div class="content">
  <div class="list1">
  什么是爱
  </div>
  <div class="list2">
  25/10
  </div>
  <div class="list3">
  10
  </div>
  <div class="list4">
  已解决
  </div>
  <div class="list5">
  2012‎年‎7‎月‎16‎日&nbsp; 22：35：40
  </div>
  </div>
</div>
</div>
<?php
	require ROOT_PATH.'includes/FOOTER.php'; 
?>
</body>
</html>