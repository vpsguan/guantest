<?php /* Smarty version 2.6.26, created on 2012-11-20 03:57:32
         compiled from singleNews.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link type="text/css" rel="stylesheet" href="css/web.css"/>
</head>

<body>
<div id="wrapper">
	<div id="main">
		<h3 class="newstitle"><?php echo $this->_tpl_vars['title']; ?>
</h3>
		<h4 class="newsdate">开始日期:<?php echo $this->_tpl_vars['starttime']; ?>
</h4>
		<h4 class="newsdate">截止日期:<?php echo $this->_tpl_vars['stoptime']; ?>
</h4>
		<h3 class="newsdate">翻译者:<?php echo $this->_tpl_vars['user']; ?>
</h3>
		<div class="content">
		<?php echo $this->_tpl_vars['content']; ?>

		</div>
	</div>
</div>
<hr/>
<a href="./index.php" align="right">返回主页</a>
</body>
</html>