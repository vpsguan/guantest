<?php /* Smarty version 2.6.26, created on 2013-03-10 11:18:22
         compiled from adddown.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加</title>

</head>

<body>
<script language="JavaScript" src="../date.js">
</script>
<h1 align="center">添加</h1>
<form action="downadd.php"  method="post"
enctype="multipart/form-data">
<div id="add">

<dd>标题:<input type="text" name="title"  ></input></dd>
<dd>时间: <input type="text" name="time" id="time" onclick="MyCalendar.SetDate(this)" ></dd>
<dd>内容:<input type="text" name="content"  /></dd>
<dd>上传文件<input type="file" name="file" id="file" />
<dd><input name="tijiao" type="submit" value="提交" /></dd>
<dd><input name="reset" type="reset" value="重置" /></dd>		
		<input type="hidden" name="id" value=<?php echo $this->_tpl_vars['id']; ?>
 />
		<input type="hidden" name="action" value=<?php echo $this->_tpl_vars['action']; ?>
 />
</div>
</form>
</body>
</html>