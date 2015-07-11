<?php
session_start();
header("Content-type:text/html;charset=utf-8");
include('dbconnect.php');
$user=$_POST['adminname'];
$pwd=md5($_POST['adminpwd']);
$code=$_POST['checkno'];
$randcode=$_SESSION['randcode'];

//获取管理员信息
$dbconnect=new DBconnect();
$conn=$dbconnect->open();
/*$sql="update lzu_st_admin set userpwd='{$pwd}' where id=0";
mysql_query($sql,$conn);*/

$sql="select username,userpwd from lzu_st_admin where username='".$user."'and userpwd='".$pwd."'";
if((mysql_query($sql,$conn)&&($randcode==$code))){
	setcookie("ckaid","Cookie保存成功",time()+3600);
	header("Location: ./backindex.php"); 
}else{
	?>
<META
	HTTP-EQUIV="Refresh" CONTENT="3; URL=index.php">
<p>3秒后自动跳转到登录界面</p>
<p><a href="index.php">返回登录</a></p>
<?php
}
?>