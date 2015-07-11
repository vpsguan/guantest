<?php
/*
 * 袁俊虎
 * stmp.func.php
 * 2102/7/24
 * 写此文件 纯属无奈  因为header conn't modify  没有解决掉    用javascript 也没解决掉  用<a>实现跳转连接
 * 参数 ：$_GET['email'];$_GET['emaibody'];  收件人地址  和内容
 */
error_reporting(0);
header("Content-Type:text/html;charset=UTF-8");
require dirname(__FILE__).'/../includes/common.inc.php'; //转换成硬路径
require_once 'stmp.class.php';
/*
 * 发送邮件
*
*/
$smtpemailto=$_GET['email'];
$mailsubject="message from lzu_ask ";
if($_GET['num']==1){
	$active=$_GET['emailbody'];
	$host=DB_HOST;
	$pass="http://$host/lzuask/includes/active.php?acti=$active";
	$mailbody='点击以下链接激活账号<a href="'.$pass.'">'.$active.'</a>';
}else{  
	$mailbody=$_GET['emailbody'];
}
send_email($smtpemailto, $mailsubject, $mailbody);
_alert('请查收邮件！');
?>
<html>
<a href="../index.php">马上转到主页</a>
</html>
