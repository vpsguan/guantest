<?php
/*
 * 袁俊虎
 * common.inc.php
 * 2012/7/12
 * 此文件通常包含常用的一些函数设置
 * 通常要包含此文件 才能调用函数库
 */
define('ROOT_PATH',substr(dirname(__FILE__),0,-8));//用ROOT_PATH表示硬路径，在后面一律用ROOT_PATH添加require和include
require ROOT_PATH.'includes/mysql.inc.php';
_connect();
_selet_db();
/*
 * 设置session用到的$login  保存session
 * 全局变量
 */
global $login;
class _session{
	/*
	 *判断用户是否登录
	 */
	function judge_session(){
		if(!session_is_registered(login)){
		header("location:login.php");
		}
	}
	/*
	 * 退出时注销session
	 */
	function destroy_session(){
		session_unregister(login);
		header("index.php");
	}
}
$A=new _session();
/*
 * 获取用户的 authorid
 */

	
/*
 * 判断页面关闭
 * 
 */
/*
 * 获取用户信息的函数
 */
function _user($name){
	$userpass=DB_PRE.'ask_user';
	$_sql="SELECT * FROM $userpass WHERE username='{$name}'";
	$user=_query($_sql);
	//$user_info=mysql_fetch_array($image,MYSQL_ASSOC);
	$user_info=mysql_fetch_array($user);
	return $user_info;
}
/*
 * 判断用户组 
 */
function _groupid($groupid){
	switch ($groupid){
		case 1:echo "管理员";break;
		case 7:echo "普通用户";break;
		default:echo "暂时未知";break;
	}
}
?>
