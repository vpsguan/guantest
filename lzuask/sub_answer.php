<?php
/*
 * 主要是处理  ANSWER的回答的
 */
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
require ROOT_PATH.'mode/answer.class.php';
if($_GET['action']=="answer"){
	/*
	 * 处理提交的回答
	 */
	$qid=$_POST['questionid'];
	$title=$_POST['titles'];
	$content=$_POST['an_content'];
	$proposeid=$_POST['proposeid'];
	$answermode=new answermode();
	$answermode->insertanswer($qid, $title, $content,$login['lzuname'],$login['lzuuid'],$proposeid);	
}
if($_GET['action']=="support"){
	$answermode=new answermode();
	$answermode->answersupport($_POST['answerid'], $_POST['button']);
}
if($_GET['action']=="aganist"){
	$answermode=new answermode();
	$answermode->answeraganist($_POST['answerid'], $_POST['button']);
}

//echo $login['lzuuid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
</title>
<script>
function run(){
  window.location='ask.php' ;
}

window.onload=function(){
  setTimeout('run()',3000);
};
</script>
</head>
<body>
<p>三秒后自动跳转    <a href="ask.php">如果没有跳转请点击此处</a></p>
</body>
</html>
