<?php 
/*
 * smarty模板初始化
 * 开启缓存， 编译检查；调试关闭
 * 用$smarty调用
 */
if(!defined('WEB_ROOT')){
		define('WEB_ROOT', substr(dirname(__FILE__), 0, strlen(dirname(__FILE__))));
	}
	require_once(WEB_ROOT.'/smarty/libs/Smarty.class.php'); //模版处理类
	$smarty = new Smarty();
	$smarty->template_dir = WEB_ROOT.'/templates';
	$smarty->left_delimiter = '{{';
	$smarty->right_delimiter = '}}';
	$smarty->compile_dir = WEB_ROOT.'/smarty/templates_c';
	$smarty->config_dir = WEB_ROOT.'/smarty/configs';
	$smarty->caching = false;//缓存
?>

