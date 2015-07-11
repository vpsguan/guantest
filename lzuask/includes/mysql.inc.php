<?php
/*
 * 袁俊虎
 * mysql.inc.php
 * 2012/7/12
 * 
 */
/*
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', 'yuanjunhu');
define('DB_NAME', 'lzuask');
*/
/*
 * 数据库连接函数
 */
require 'config.inc.php';
require 'global.inc.php';
/**
 * 数据库连接函数
 * _connect
 */
function _connect(){
	global $_conn;
	if(!$_conn=@mysql_connect(DB_HOST,DB_USER,DB_PWD)){
		exit('数据库连接失败');
	}
}
/**
 * 选择数据库
 */
function _selet_db(){
	if(!mysql_select_db(DB_NAME)){
		exit('找不到指定的数据库');
	}
}
/**
 * 判断字符集
 */
function _set_names(){
	if(!mysql_query('SET NAMES UTF8')){
		exit('字符集错误');
	}
}
/**
 * 执行一条语句
 * @param $_sql
 */
function _query($_sql){
	if(!$_result=mysql_query($_sql)){
		exit('SQL执行失败');
	}
	return $_result;
}
/*
 * 获取用户的authorid
 */
/**
 * 处理语句的返回结果
 * @param unknown_type $_sql
 */
function _fetch_array($_sql){
	return mysql_fetch_array(_query($_sql),MYSQL_ASSOC);
}
/**
 * 判断用户名是否重复
 * @param $_sql
 * @param $_info
 */
function _is_repeat($_sql,$_info){
	if(_fetch_array($_sql)){
		_alert_back($_info);
	}
}
function _close(){
	if(!mysql_close()){
		exit('关闭异常');
	}
}
