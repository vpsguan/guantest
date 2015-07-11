<?php
/*
 * 袁俊虎
 * global.php
 * 存储一些常用的函数
 * 
 */
//弹出窗口
function _alert($_value){
	echo "<script type=text/javascript>alert('$_value');</script>";
}
function _alert_back($_value){
	echo "<script type=text/javascript>alert('$_value');history.back();</script>";
	exit();
}
function _location($_value,$url){
	echo "<script type=text/javascript>alert('$_value');location.href='$url';</script>";
}
/*
 * 判断验证码
 */
function _check_code($first,$end){
		if($first!=$end){
			_alert_back("验证码输入错误！");
		}
}
function _mysql_string($string){
	if(!GPC){
		return mysql_real_escape_string($string);
	}
	else{
		return $string;
	}
}

?>
