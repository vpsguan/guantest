<?php
/*
 * 显示所有问题页面
 */
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
require ROOT_PATH.'mode/question.class.php';
require ROOT_PATH.'mode/user.class.php';
/*
 *  处理传的参数
 */
$question=new questionmode();
if($_GET['type']=="views"){
	$views=$question->suprise();
}
else if($_GET['type']=="answers"){
	$views=$question->answersfin();
}
else if($_GET['type']=="price"){
	$views=$question->price();
}
else if($_GET['type']=="status"){
	$views=$question->statusfin();
}else{
	$views=$question->statusall();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lzuask回答</title>
<link rel="stylesheet" type="text/css" href="css/header.css" />
<link rel="stylesheet" type="text/css" href="css/details/details.css" />
</head>
<body>
<?php
require ROOT_PATH.'includes/header.php'; 
?>
<div id="content"> 
<?php $i=0;while($re=mysql_fetch_array($views)AND$i<12){$i++;
	$usernav=$question->getnav($re['authorid']);
?> 
<div id="questions">
<div class="nav">
 <div align="center"><img src="<?php echo $usernav['avatar'];?>" alt="头像" width="114" height="99" align="middle" />
 </div>
 <p align="center"><?php echo $usernav['username'];?></p>
<p align="center"><?php echo '提问数：'.$usernav['questions'];?></p>
<p align="center"><?php echo '回答数：'.$usernav['answers'];?></p>
</div>
<div class="info">
<h3>标题：<?php echo $re['title'];?></h3>
<p>标签：&nbsp <?php echo $re['cid'];echo '&nbsp&nbsp&nbsp&nbsp&nbsp';echo $re['cid1'];echo '&nbsp&nbsp&nbsp&nbsp&nbsp';echo $re['cid2'];?></p>
<p>悬赏:<img src="images/default/price.gif" alt="#" /><?php echo $re['price'];echo '&nbsp&nbsp&nbsp&nbsp&nbsp';
if($re['status']==0){
	echo "问题未解决!";
}else{
	echo"问题已解决!";
}
?></p>
<p>
问题发表时间：<?php echo date('Y-m-d',$re['time']+28800);echo '&nbsp&nbsp&nbsp&nbsp&nbsp';?>
问题结束时间：<?php echo date('Y-m-d',$re['endtime']+28800);?>
</p>
<p>
回答次数：<?php echo $re['answers'];echo '&nbsp&nbsp&nbsp&nbsp&nbsp';?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
浏览次数：<?php echo $re['views'];?>
</p>
<p> 问题描述：<?php echo $re['description'];?></p>
<p> 问题描述：<?php echo $re['supply'];?></p>
</div>
<div class="answer">
<input type="button" name="button" class="button" value="查看答案" onclick="window.open('que_details.php?type=<?php echo $re['id'];?>')" ></input>
<input type="button" name="button" class="button" value="我要回答" onclick="window.open('que_details.php?type=<?php echo $re['id'];?>')" ></input>
</div>
</div>
<?php } ?>
</div>
<div id="detailright">
<?php 
require ROOT_PATH.'requires/morequestion.php';
?>
</div>
<?php
require ROOT_PATH.'includes/footer.php'; 
?>
</body>
</html>