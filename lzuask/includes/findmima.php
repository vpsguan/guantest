<?php
/*
 * 找回密码
 * 发送邮件
 */
session_start();
error_reporting(0);
header("Content-Type:text/html; charset=UTF-8");
require 'common.inc.php'; 
require 'login.inc.php';
require 'stmp.class.php';
	$_data['email']=($_POST['email']);
	$pass=DB_PRE.'ask_user';
	$_sql="SELECT * FROM $pass where email='{$_data['email']}'";
		if($re=_fetch_array($_sql)){
			/*
			 * 
			 */
			$smtpemailto=$_data['email'];
			$mailsubject="message from lzu_ask ";
				$newpassword=rand(100000, 999999);
				$pa="你的密码是";
				$mailbody='尊敬的'.$re['username'].'用户'.$pa.$newpassword.'请马上修改您的密码！';
			    send_email($smtpemailto, $mailsubject, $mailbody);
			    $newpassword=sha1($newpassword);
			    $sql="UPDATE $pass SET password='{$newpassword}' WHERE email='{$_data['email']}'";
			    _query($sql);
			_location("请查收邮件", "blank.php");
			
	    }
		else{
			_alert_back("该邮箱不存在");
		}
	?>