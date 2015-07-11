<?php 
/* 
* ================================================

* ================================================
* Author: 袁俊虎
* 2012/7/23
*/
/**
 * _check_username表示检测并过滤用户名
 * @access public 
 * @param string $_string 受污染的用户名
 * @param int $_min_num  最小位数
 * @param int $_max_num 最大位数
 * @return string  过滤后的用户名 
 */
function _check_username($_string,$_min_num=2,$_max_num=20) {
	//去掉两边的空格
	$_string = trim($_string);
	
	//长度小于两位或者大于20位
	if (mb_strlen($_string,'utf-8') < $_min_num || mb_strlen($_string,'utf-8') > $_max_num) {
		_alert_back('用户名长度不得小于'.$_min_num.'位或者大于'.$_max_num.'位');
	}
	
	//限制敏感字符
	$_char_pattern = '/[<>\'\"\ \　]/';
	if (preg_match($_char_pattern,$_string)) {
		_alert_back('用户名不得包含敏感字符');
	}
	
	//将用户名转义输入
	return _mysql_string($_string);
}


/**
 * _check_password验证密码
 * @access public
 * @param string $_first_pass
 * @param int $_min_num
 * @return string $_first_pass 返回一个加密后的密码
 */

function _check_password($_string,$_min_num=6) {
	//判断密码
	if (strlen($_string) < $_min_num) {
		_alert_back('密码不得小于'.$_min_num.'位！');
	}
	
	//将密码返回
	return sha1($_string);
}
?>
