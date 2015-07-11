<?php
/*
 * 关俊鹏
 * 2012/7/28
 *修改 加入了login.inc.php的包涵 和转跳的页面
 */
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
require 'common.inc.php'; //转换成硬路径
require 'login.inc.php';
    $_data['secret1']=_check_password($_POST['secret1']);
	$_data['secret2']=_check_password($_POST['secret2']);
	$pass=DB_PRE.'ask_user';

	$_sql="SELECT * FROM $pass where uid='{$login['lzuuid']}' AND password='{$_data['secret1']}'";
		if(_fetch_array($_sql)){
       $query=	"update $pass SET
	    password='{$_data['secret2']}'
        where uid='{$login['lzuuid']}'";
	    _query($query);
	    echo '<a href="../personnav.php">密码修改成功</a>';}
		else{
			_alert_back("密码不正确！");
		}
	?>