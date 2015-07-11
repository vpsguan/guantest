<?php
session_start();
header("Content-type:text/html;charset=utf-8");
include('dbconnect.php');
$user=$_POST['adminname'];
$pwd=$_POST['adminpwd'];
$code=$_POST['checkno'];
$randcode=$_SESSION['randcode'];

//获取管理员信息
$dbconnect=new DBconnect();
$conn=$dbconnect->open();

$sql="select name,password from user where name='".$user."'and password='".$pwd."'";
//select username,password from admin where username='admin'and password='admin';
if((mysql_query($sql,$conn)&&($randcode==$code))){
	setcookie("ckaid","Cookie保存成功",time()+3600);
	header("Location: ./background.php");  /*登录成功显示后台 */
}else{
	?>
<META
	HTTP-EQUIV="Refresh" CONTENT="3; URL=index.php">
<p>3秒后自动跳转到登录界面</p>
<p><a href="index.php">返回登录</a></p>
<?php
}
?>