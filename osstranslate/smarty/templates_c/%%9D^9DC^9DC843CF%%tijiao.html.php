<?php /* Smarty version 2.6.26, created on 2012-11-14 15:55:50
         compiled from tijiao.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<div id="tijiaoform">
<form id="tijiao" action="tijiao.php" method="post"enctype="multipart/form-data">

<input type="image" src="images/loo.jpg"/> 
<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />

<dd>提交翻译内容:
<input type="file" name="file" id="file" /> 
</dd>
<dd>
<input type="submit" name="sub" value="提交"></dd>
</form>
</div>
</body>
</html>