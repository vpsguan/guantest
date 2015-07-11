<?php
/*
 * 显示问题页面
 */
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
require ROOT_PATH.'mode/question.class.php';
require ROOT_PATH.'mode/answer.class.php';
require ROOT_PATH.'mode/user.class.php';
$question=new questionmode();
$answer=new answermode();
$que_id=$_GET['type'];
$resultq=$question->piece_que($que_id);
$resulta=$answer->answerall($que_id);
$answer->addviews($que_id);
$usermode=new usermode();
$userinfo=$usermode->getuserinfo($resultq['authorid']);
$answerstar=$usermode->answerstar();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lzuask回答</title>
<link rel="stylesheet" type="text/css" href="css/header.css" />
<link rel="stylesheet" type="text/css" href="css/details/que_detail.css" />
<link rel="stylesheet" type="text/css" href="requires/fault/ask_right.css" />
<script charset="utf-8" src="kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<script>
        var editor;
        KindEditor.ready(function(K) {
                editor = K.create('#editor_id');
        });
</script>
<style type="text/css">
<!--
.STYLE2 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<?php
require ROOT_PATH.'includes/header.php'; 
?>
<div id="contents">
<div id="contentl">
<div class="navgatar">
<div align="center">
  <!-- 头像信息 -->
  <img src="<?php echo $userinfo['avatar'];?>" width="114" height="99" align="middle" /></div>
<P align="center">
<?php 
$judge=$usermode->avater($resultq['hidden']);
if($judge==0){
	echo "匿名用户";echo"<br>";echo"<br>";
}else {
	echo $userinfo['username'];echo"<br>";echo"<br>";
}
 echo "提问数：";echo $userinfo['questions'];echo "<br>";echo"<br>";
 echo "回答数：";echo $userinfo['answers'];echo "<br>";echo"<br>";
?>
</P>
</div>
<div class="info">
          	<h3>标题：<?php echo $resultq['title'];?></h3>
      		<p>标签:<?php echo '&nbsp&nbsp&nbsp&nbsp&nbsp';echo $resultq['cid'];
      		echo '&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $resultq['cid1'];
      		echo '&nbsp&nbsp&nbsp&nbsp&nbsp';echo $resultq['cid2'];?></p>
       		<P>悬赏:<img src="images/default/price.gif" alt="#" /><?php echo $resultq['price'];
       		echo '&nbsp&nbsp&nbsp&nbsp&nbsp';
       		echo '&nbsp&nbsp&nbsp&nbsp&nbsp';
			if($resultq['status']==0){
			echo "问题未解决!";
			}else{
			echo"问题已解决!";
				}
?></P>
      <P>问题发表时间：<?php echo date('Y-m-d',$resultq['time']+28800);
      echo '&nbsp&nbsp&nbsp&nbsp&nbsp';
                     echo '问题结束时间：'.date('Y-m-d',$resultq['endtime']+28800);?>
                     </P>
                     <p>回答次数：<?php echo $resultq['answers'];
                     echo '&nbsp&nbsp&nbsp&nbsp&nbsp';
                     echo '浏览次数：'.$resultq['views'];?></p>
  
  		<P>问题描述：<?php echo $resultq['description'];?></p>
  		<P>问题补充：<?php echo $resultq['supply'];?></p>
</div>
<div id="setanswer">
<h4 align="left"></h4>
<form method="post" action="sub_answer?action=answer">
  <div align="right">
  <input type="hidden" name="questionid" value="<?php echo $resultq['id'];?>" />
  <input type="hidden" name="titles" value="<?php echo $resultq['title'];?>" />
  <input type="hidden" name="proposeid" value="<?php echo $resultq['authorid'];?>" />
  <textarea name="an_content" cols="" rows="" class="text" id="editor_id"  style="width:780px;height:100px;">我帮忙回答：</textarea>
  <input type="submit" name="submit" class="submit" value="" style="width:92px;height:33px;background:url(images/default/submit_answer.gif);"/>
  </div>
</form>
</div>
<?php
/*
 * 处理$resulta[];
 */
$i=0;
while(!!$rea=mysql_fetch_array($resulta)AND$i<2){ 
	/*
	 * 获取回答者信息
	 */
	$answerinfo=$answer->answerinfo($rea['authorid']);
?>
<div id="answer">
  <div id="answer_nav">

      <div align="center">
        <!-- 头像信息 -->
        <img src="<?php echo $answerinfo['avatar'];?>" width="60" height="60" align="middle" />
      </div>
      <p align="center"><?php echo $answerinfo['username'];?></p>
</div><div id="answer_cont">
<p>
<?php echo $rea['content'];?>
</p>
<p>回答时间：<?php echo date("Y年m月d日H时i分",$rea['time']+28800);?></p>
</div>
<form method="post" action="sub_answer.php?action=support">
<input name="answerid" type="hidden"  value="<?php echo $rea['id'];?>" />
<input name="button" type="submit" class="submit" id="button1" style="float:right;width:35px;height:36px;background:url(images/default/agree.gif);" value="<?php echo $rea['support'];?>" />
</form>
<form method="post" action="sub_answer.php?action=aganist">
<input name="answerid" type="hidden" value="<?php echo $rea['id'];?>" />
<input name="button" type="submit" class="submit" id="button2" style="float:right;width:35px;height:36px;background:url(images/default/aganist.gif);" value="<?php echo $rea['against'];?>" />
</form>
<?php if($userinfo['username']==$login['lzuname']) echo "设为最佳回答";?>
</div>
<?php }
?>
<img src="images/details/footer.jpg" alt="回答显示如上" />
</div>
<div id="answerstar" >
  <h4 align="center"  class="STYLE2" ><kbd>推荐之星</kbd></h4>
  <?php $i=0; while($star=mysql_fetch_array($answerstar)AND$i<4){$i++; ?>
    <img src="<?php echo $star['avatar'];?>" width="120" height="120" align="middle" />
  <p><?php echo $star['username'];echo '<br>'; echo '回帖数：'.$star['answers'];echo '<br>'; echo '采纳数：'.$star['adopts'];?></p>
<?php }?>
</div>
<?php
require ROOT_PATH.'includes/footer.php'; 
?>
</body>
</html>