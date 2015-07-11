<?php
/*
 * 肖祖鹏
 * change_secret.php----右侧div更改个人密码
 * 2012/7/17
 * 关俊鹏 
 * 2012/7/28
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
<title>修改密码</title>
<link rel="stylesheet" type="text/css" href="css/change_secret.css" />
<link rel="stylesheet" type="text/css" href="css/basic.css" />
<link rel="stylesheet" type="text/css" href="css/header.css" />
<link rel="stylesheet" type="text/css" href="css/left_nav.css" />
</head>

<body>
<?php
	require ROOT_PATH.'includes/header.php'; 
?>
<div id="person">
     <?php include ROOT_PATH.'includes/left_nav.php'; ?>
<div class="details">
<h4>修改密码</h4>
<div class="minute">
<form action="includes/secret.php" method="post" name="send" onSubmit="return Check()">
<table width="442" height="298">
<tr><td>当前密码</td><td><input type="password" name="secret1" /> </td></tr>
<tr><td>新密码</td><td><input type="password" name="secret2" /></td></tr>
<tr><td>确认密码</td><td><input type="password" name="secret3" /> </td></tr>
<tr><th><input type="submit" name="submit" value="提交" /></th></tr> 
</table>
</form>
</div>
</div>
</div>
<?php
	require ROOT_PATH.'includes/FOOTER.php'; 
?>
<script language="javascript">
function Check()// 验证表单数据有效性的函数
{

    if (document.send.secret2.value=="") 
    {
        alert('请输入密码!'); 
        
        return false;
    }
    if (document.send.secret2.value.length<6) 
    {
        alert('密码长度必须大于6!'); 
        
        return false;
    }
    if (document.send.secret2.value!= document.send.secret3.value) 
    {
        alert('确认密码与密码不一致!'); 
        return false;
    }
 

    return true;
}
</script>
</body>
</html>