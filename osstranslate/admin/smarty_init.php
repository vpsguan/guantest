<?php 
/*
 * smarty模板初始化
 * 开启缓存， 编译检查；调试关闭
 * 用$smarty调用
 */
if(!defined('WEB_ROOT')){
		define('WEB_ROOT', substr(dirname(__FILE__), 0, strlen(dirname(__FILE__)) - 6));
	}
	require_once(WEB_ROOT.'/smarty/libs/Smarty.class.php'); //模版处理类
	$smarty = new Smarty();
	$smarty->template_dir = WEB_ROOT.'/admin/templates';
	$smarty->left_delimiter = '{{';
	$smarty->right_delimiter = '}}';
	$smarty->compile_dir = WEB_ROOT.'/smarty/templates_c';
	$smarty->config_dir = WEB_ROOT.'/smarty/configs';
	$smarty->cache_dir=WEB_ROOT.'/smarty/cache';
	//$smarty->compile_check = true;//编译检查
    //$smarty->debugging = true;//调试
	$smarty->caching = false;//缓存
	//$smarty->cache_lifetime = 180;//缓存周期，秒
?>

