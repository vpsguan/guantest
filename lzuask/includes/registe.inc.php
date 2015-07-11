<?php
/*
 * 袁俊虎 
 * 2012、7、17
 * 验证密码的函数
 * 一系列函数
 */
///防止恶意调用
//去除空格
function _checkusername($_string,$_min,$_max){
	$_string=trim($_string);
	//长度判断
	if(mb_strlen($_string,'utf-8')<$_min||mb_strlen($_string,'utf-8')>$_max){
		_alert_back('用户名长度不得小于'.$_min.'后大于'.$_max);
	}
	$_char_pattern='/[<>\/\\\'\"\ \ ]/';
	if(preg_match($_char_pattern,$_string)){
		_alert_back('用户名不得包含敏干字符');
	}
	//铭感用户名
	/*
	$_mg[0]='袁俊虎';
	$_mg[1]='yuanjunhu';
	foreach($_mg as $value){
		$_mg_string.='['.$value.']'.'\n';
	}
	if(in_array($_string,$_mg)){
		_alert_back($_mg_string.'以上敏感用户不得注册!');
	}
	*/
	//将用户名转义输入
	return _mysql_string($_string);
}

/**
 * _checkpassword
 * @return $first加密后的密码
 * @param $first
 * @param $end
 */
function _checkpassword($first,$end){

	//判断字符数
	if(strlen($first)<6){
		_alert_back('密码不得小于六位!');
	}
	if($first!=$end){
		_alert_back('密码和确认密码不一致!');
	}
	return sha1($first);
}

/**
 * 邮箱验证
 * @param $_string
 */
function _checkemail($_string){
	if(empty($_string)){
		_alert_back('邮箱不得为空!');
	}
	if(!preg_match('/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/',$_string)){
		_alert_back('邮件格式不对!');		
	}
	return $_string;
}



