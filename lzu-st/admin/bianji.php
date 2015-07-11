<?php
session_start();
header("Content-Type:text/html;charset=utf-8");
include('checklogin.php');
include('db.php');
check_admin();
$db=new DB();
$action=$_POST['action'];
if($action=="addtask"){
	$message=$db->insert($_POST['title'],$_POST['time'],$_POST['content'],$_POST['editer'],$_POST['image'],$_POST['rid']);	
	echo $message;
}
if($action=="update"){	
	$message=$db->update($_POST['id'],$_POST['rid'],$_POST['title'],$_POST['editer'],$_POST['image'],$_POST['time']);
	echo $message;

}
echo "<a href='./backindex.php'>提交完成</a>";  /*提交成功 */
?>