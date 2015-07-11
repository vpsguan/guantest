<?php
/*
 * 袁俊虎
 * login.php
 * 登陆页面
 * 2012/7/23修改
 * 2012/7/28修改
 * 2012/8/13 修改
 */
session_start();
error_reporting(0);
header("Content-Type:text/html; charset=UTF-8");//如有必要一定要设置成utf-8
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>找回密码</title>
<link rel="stylesheet" type="text/css" href="css/header.css" />
<link rel="stylesheet" type="text/css" href="css/login.css"/>
</head>

<body>
<?php
	require ROOT_PATH.'/includes/header.php' ;
?>
<div id="contents">
<form method="post" name="zhmm" action="includes/findmima.php">  	
				<dd>email：<input type="text" name="email" class="text" style="width:140px;height:auto;" />   </dd>	
	 			<dd>
	    		<input type="submit" name="submit" class="submit" value="找回密码" />
	    		<input type="reset" name="reset" class="submit" value="重置" />
	    		</dd>
	    		 </form>
				 </div>
				 <?php
	require ROOT_PATH.'/includes/footer.php'; 
?>
</body>
</html>
