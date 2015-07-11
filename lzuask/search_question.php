<?php
/*
 * 都堃
 * search_1.php
 * 2012/8/20
 * 问题搜索结果界面（空搜索）
 */
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
	/*
	 * 编码首先先确定是否已经设置编码，软件的设置
	 */
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>search_1</title>
<link rel="stylesheet" type="text/css" href="css/basic.css" />
<link rel="stylesheet" type="text/css" href="css/header.css" />
<link rel="stylesheet" type="text/css" href="css/search_1.css" />
</head>

<body>
<?php
require ROOT_PATH.'includes/header.php';//把头文件添加进来
?>
<div id="divcon">
<div id="divcenter">
<table id="ta">
<tr>
<td><p class="p1">搜索关键字不能为空！</p>
<a class="a1" href="">返回原处</a><a class="a1" href="">我的提问</a><a class="a1" href="">回到首页</a>
</td>
</tr>
</table>
</div>
</div>
<?php
	require ROOT_PATH.'includes/footer.php';  //最后的尾文件
?>
</body>
</html>