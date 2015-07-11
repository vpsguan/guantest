<?php
/*
 * 肖祖鹏
 * personalinfo.php----右侧div个人信息设置
 * 2012/7/17
 * 关俊鹏 修改  
 * 2012/7/28
 2012/8/14
 修改 格式，去掉了生日项
 */
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
$A->judge_session();
$_sql='SELECT * FROM '.DB_PRE.'ask_user WHERE username='.$login['lzuname'];
$re=mysql_query("$_sql");
$user=mysql_fetch_array($re,MYSQL_ASSOC);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人资料</title>
<link rel="stylesheet" type="text/css" href="css/personalinfo.css" />
<link rel="stylesheet" type="text/css" href="css/basic.css" />
<link rel="stylesheet" type="text/css" href="css/header.css" />
<link rel="stylesheet" type="text/css" href="css/left_nav.css" />
<script charset="utf-8" src="kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<script>
        var editor;
        KindEditor.ready(function(K) {
                editor = K.create('#editor_id');
        });
</script>
</head>

<body>
<?php
	require ROOT_PATH.'includes/header.php'; 
?>
<div id="person">
 <!--左边栏-->
 <?php include ROOT_PATH.'includes/left_nav.php'; ?>

 <div class="minute">
 <p>
 <label for="username" class="label">用户账号:<?php echo $login['lzuname'];?></label>
<?php echo $user['username']; ?></br>
</p>
 <form action="personalinfo_hand.php"method="post" name="personal_info">
 <table width="442" height="298">

	<tr><td>性别:</td><td><input name="gender" type="radio" value="1" />
	男
	<input name="gender" type="radio" value="2"/>女<input name="gender" type="radio" value="3"/>保密</td></tr>
<tr> <td>E-mail:</td><td><input name="email" type="text" value="" maxlength="40"/>  </td></tr>
 <tr><td> 联系电话:</td><td><input type="text" name="phone" /></td> </tr>
  <tr><td>QQ:</td><td><input type="text" name="qq" /></td> </tr>
  <tr><td>MSN帐号:</td><td><input type="text" name="MSN" /></td> </tr> 
  <tr><td>消息设置:</td><td><input type="checkbox" name="setting" />站内消息 <input type="checkbox" name="setting" /> 邮件通知</td></tr>
<tr>  <td>自我简介:</td><td><textarea id="editor_id" name="signature" class="text" style="width:400px;height:120px;" ></textarea></td> </tr>
  <tr><th><input type="submit" name="submit" value="提交"  /></th><td><input type="reset" name="reset" value="重写" /></td></tr>
  
  </table>

 </form>
 </div>
</div>
</div>
<?php
	require ROOT_PATH.'includes/FOOTER.php'; 
?>
</body>
</html>