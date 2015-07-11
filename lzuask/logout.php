<?php
/*
 * 袁俊虎
 * 2012/7/16
 * 退出页面
 * 修改 2012/8/13
 */
session_start();
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
$userpass=DB_PRE.'ask_user';
$_sql_1="UPDATE $userpass SET is_login=0 WHERE username='{$login['lzuname']}'";
mysql_query($_sql_1);
$_sql_2="UPDATE $userpass SET lastlogin='{$login['lastlogin']}' WHERE username='{$login['lzuname']}'";
mysql_query($_sql_2);
$A->destroy_session();
mysql_close();
header("location:index.php");
?>