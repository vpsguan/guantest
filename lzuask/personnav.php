<?php
/*
 * 肖祖鹏
 *personnav.php-----整个个人中心框架
 * 2012/7/17
 */
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
$A->judge_session();
$user_info=_user($login['lzuname']);
$credits=$user_info['credit1']+$user_info['credit2']-$user_info['credit3'];
$wealth=$user_info['wealth2']-$user_info['wealth1'];
$_sql='UPDATE '.DB_PRE.'ask_user SET credits='.$credits.' WHERE uid='.$user_info['uid'];
_query("$_sql");
$_sql='UPDATE '.DB_PRE.'ask_user SET wealth='.$wealth.' WHERE uid='.$user_info['uid'];
_query("$_sql");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人主页</title>
<link rel="stylesheet" type="text/css" href="css/personnav.css" />
<link rel="stylesheet" type="text/css" href="css/basic.css" />
<link rel="stylesheet" type="text/css" href="css/header.css" />
<link rel="stylesheet" type="text/css" href="css/left_nav.css" />
<script type=text/javascript><!--//--><![CDATA[//><!--
function menuFix() {
 var sfEls = document.getElementById("nav1").getElementsByTagName("li");
 for (var i=0; i<sfEls.length; i++) {
  sfEls[i].onmouseover=function() {
  this.className+=(this.className.length>0? " ": "") + "sfhover";
  }
  sfEls[i].onMouseDown=function() {
  this.className+=(this.className.length>0? " ": "") + "sfhover";
  }
  sfEls[i].onMouseUp=function() {
  this.className+=(this.className.length>0? " ": "") + "sfhover";
  }
  sfEls[i].onmouseout=function() {
  this.className=this.className.replace(new RegExp("( ?|^)sfhover\\b"), 
"");
  }
 }
}
window.onload=menuFix;
//--><!]]></script>
</head>
<body>
<?php
	require ROOT_PATH.'includes/header.php'; 
?>
<div id="person">
 <!--左边栏-->
 <?php include ROOT_PATH.'includes/left_nav.php'; ?>
 <div class="details">
  <!--用户资料栏-->
   <div class="userinfo">
   <p>用户资料</p>
     <div class="info">
     <h1><?php echo $user_info['username']; ?></h1><br />
     <div class="left">
      用户组:<?php echo  _groupid($user_info['groupid']);?> <br />
      学院：<?php echo $user_info['academy']; ?><br />
      总经验值：<?php echo $user_info['credits']; ?><br />
      提问数：<?php echo $user_info['questions']; ?><br />
      QQ：<?php echo $user_info['qq']; ?>
      </div>
      <div class="right">
      上次登录：<?php echo date("m-d H:i",$user_info['lastlogin']); ?><br />
      总财富值：<?php echo $user_info['wealth']; ?><br />
      采纳率：<?php echo $user_info['adopts']; ?><br />
      回答数：<?php echo $user_info['answers']; ?><br />
     PHONE:<?php echo $user_info['phone']; ?>
      </div>
      e-mail：<?php echo $user_info['email']; ?>
     </div>
     <div class="charge">
       <h1>管理个人资料</h1>
       <div class="left1">
         <a href="personalinfo.php">个人信息</a><br />
         <a href="myquestion.php">我的提问</a><br />
         <a href="getmessage.php">我的消息</a><br />
       </div>
       <div class="right1">
         <a href="myanswer.php">我的回答</a><br />
         <a href="change_secret.php">修改密码</a><br />
         <a href="change_avater.php">修改头像</a><br />
       </div>
   </div>
   </div>
    <!--个人简介-->
   <div class="introduction">
   <p>个人简介</p><br />
   <?php echo $user_info['signature']; ?><br />
   </div>
    <!--我的积分-->
    <div class="score">
   <p>我的积分</p>
   <div class="part1">
   <h1>经验值</h1>
   <div class="name_score">
   <div class="name_score_up">总分</div>
   <div class="name_score_down"><?php echo $credits; ?></div>
   </div>
   <div class="name_score">
   <div class="name_score_up">日常操作</div>
   <div class="name_score_down"><?php echo $user_info['credit1']; ?></div>
   </div>
   <div class="name_score">
   <div class="name_score_up">奖励得分</div>
   <div class="name_score_down"><?php echo $user_info['credit2']; ?></div>
   </div>
   <div class="name_score">
   <div class="name_score_up">违规处罚</div>
   <div class="name_score_down"><?php echo $user_info['credit3']; ?></div>
   </div>
   </div>
   <div class="part1">
   <h1>财富值</h1>
   <div class="name_score">
   <div class="name_score_up"> 总分</div>
   <div class="name_score_down"><?php echo $wealth; ?></div>
   </div>
   <div class="name_score">
   <div class="name_score_up">悬赏付出</div>
   <div class="name_score_down"><?php echo $user_info['wealth1']; ?></div>
   </div>
   <div class="name_score">
   <div class="name_score_up">回答采纳</div>
   <div class="name_score_down"><?php echo $user_info['wealth2']; ?></div>
   </div>
   </div>
  </div>
 </div>
</div>
<?php
	require ROOT_PATH.'includes/FOOTER.php'; 
?>
</body>
</html>