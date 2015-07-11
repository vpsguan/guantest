<?php
/*
 * 肖祖鹏
 * myanswer.php------右侧div我的回答
 * 2012/7/17
 * 2012/8/13修改
 */
session_start();
//error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
$A->judge_session();
$answerpass=DB_PRE.'ask_answer';
$_sql="SELECT title,support,against,status,time,qid FROM $answerpass WHERE author='{$login['lzuname']}'";
$re=mysql_query($_sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>未采纳的回答</title>
<link rel="stylesheet" type="text/css" href="css/myanswer.css" />
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
  <div class="answer">
    <div class="list">
    <a href="myanswer.php?type=0">未采纳的回答</a>
    </div>
    <div class="list">
    <a href="myanswer.php?type=1">已采纳的回答</a>
    </div>
    <div class="list">
    <a href="myanswer.php?type=2">待审核的回答</a>
    </div>
 </div>
 <div class="title">
   <div class="list1">
   标题
   </div>
   <div class="list2">
   支持/反对
   </div>
   <div class="list3">
   已采纳
   </div>
   <div class="list4">
   回答时间
   </div>
 </div>
  <?php
  $type=$_GET['type'];
  switch($type)
  { case 0:{
	  while($answer=mysql_fetch_array($re,MYSQL_ASSOC))
        { 
          if($answer['status']==0)
          {echo '<div class="content">';
           echo '<div class="list1">';
           echo $answer['title'];
           echo '</div>';
           echo '<div class="list2">';
           echo $answer['support'];
           echo '/'.$answer['against'];
           echo '</div>';
           echo '<div class="list3">';
           echo $answer['status'];
           echo '</div>';
           echo '<div class="list4">';
           echo $answer['time'];
           echo '</div>';
           echo '</div>';}}}break;
	case 1:{
	  while($answer=mysql_fetch_array($re,MYSQL_ASSOC))
        { 
          if($answer['status']==1)
          {echo '<div class="content">';
           echo '<div class="list1">';
           echo $answer['title'];
           echo '</div>';
           echo '<div class="list2">';
           echo $answer['support'];
           echo '/'.$answer['against'];
           echo '</div>';
           echo '<div class="list3">';
           echo $answer['status'];
           echo '</div>';
           echo '<div class="list4">';
           echo $answer['time'];
           echo '</div>';
           echo '</div>';}}}break;
	case 2:{
	  while($answer=mysql_fetch_array($re,MYSQL_ASSOC))
        { 
          if($answer['status']==2)
          {echo '<div class="content">';
           echo '<div class="list1">';
           echo $answer['title'];
           echo '</div>';
           echo '<div class="list2">';
           echo $answer['support'];
           echo '/'.$answer['against'];
           echo '</div>';
           echo '<div class="list3">';
           echo $answer['status'];
           echo '</div>';
           echo '<div class="list4">';
           echo $answer['time'];
           echo '</div>';
           echo '</div>';}}}break;	
  }
  ?>
</div>
</div>
<?php
	require ROOT_PATH.'includes/FOOTER.php'; 
?>
</body>
</html>