<?php
/*
 * 肖祖鹏
 *sendmessage.php-----右侧div已发送消息
 * 2012/7/17
 * 2012/8/13修改
 */
session_start(); 
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
$A->judge_session();
$messagepass=DB_PRE.'ask_message';
$_sql="SELECT * FROM $messagepass WHERE from_name='{$login['lzuname']}'";
$re=mysql_query($_sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>已发送消息</title>
<link rel="stylesheet" type="text/css" href="css/sendmessage.css">
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
为了让您的提问被更多人关注，以获得最佳的回答，您可以提高悬赏。<br />
  <div class="message">
    <div class="list">
    <a href="sendmessage.php">已发送</a>
    </div>   
  </div>
  <div class="title">
  <div class="list1">
  标题
  </div>
  <div class="list2">
  收件人
  </div>
  <div class="list3">
  日期
  </div>
  </div>
   <?php
  while($message=mysql_fetch_array($re,MYSQL_ASSOC))
   { 
  echo '<div class="content">';
  echo '<div class="list1">';
  echo $message['title'];
  echo '</div>';
  echo '<div class="list2">';
  echo $message['to_name'];
  echo '</div>';
  echo '<div class="list3">';
  echo $message['time'];
  echo '</div>';
  echo '</div>';
   }
  ?>
 </div>
</div>
</div>
<?php
	require ROOT_PATH.'includes/FOOTER.php'; 
?>
</body>
</html>