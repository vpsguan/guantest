<?php
/*
 * 肖祖鹏
 * mycollection.php----右侧div我的收藏
 * 2012/7/17
 * 2012/8/13修改
 */
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
$A->judge_session();
$questionpass=DB_PRE.'ask_question';
$_sql="SELECT id,title,views,price,status,time FROM $questionpass WHERE author='{$login['lzuname']}'";
$re=mysql_query($_sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的提问</title>
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
  <h4> 我的问题</h4> <br />
  <div class="title">
  <div class="list1">
  标题
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
  <?php
  while($question=mysql_fetch_array($re,MYSQL_ASSOC))
   { 
  echo '<div class="content">';
  echo '<div class="list1">'; ?>
 <a href="que_details.php?type=<?php echo $question['id'];?>"><?php echo $question['title'];?></a>
  <?php 
  echo '</div>';
  echo '<div class="list2">';
  echo $question['views'];
  echo '</div>';
  echo '<div class="list3">';
  echo $question['price'];
  echo '</div>';
  echo '<div class="list4">';
  echo $question['status'];
  echo '</div>';
  echo '<div class="list5">';
  echo date('Y年m月d日H时s分',$question['time']);
  echo '</div>';
  echo '</div>';
   }
  ?>
</div>
</div>
<?php
	require ROOT_PATH.'includes/FOOTER.php'; 
?>
</body>
</html>