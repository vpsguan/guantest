<?php /* Smarty version 2.6.26, created on 2013-03-10 11:01:23
         compiled from bianji.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑任务</title>

</head>

<body>
<script language="JavaScript" src="../date.js">
</script>
<h1 align="center">编辑</h1>
<form action="bianji.php"  method="post">

<dd>标题:<input type="text" name="title"   value=<?php echo $this->_tpl_vars['title']; ?>
></input></dd>
<dd>图片地址:<input type="text" name="image"   value=<?php echo $this->_tpl_vars['image']; ?>
></input></dd>
<dd>类别:<input type="text" name="rid"   value=<?php echo $this->_tpl_vars['rid']; ?>
></input></dd>
<dd>时间: <input type="text" name="time" id="time" onclick="MyCalendar.SetDate(this)" value=<?php echo $this->_tpl_vars['time']; ?>
></dd>
<dd>作者:<input type="text" name="editer" id="editer" value=<?php echo $this->_tpl_vars['editer']; ?>
 /></dd>
<dd>内容:<textarea type="text" name="content" style="width:400px;height:120px;"  /><?php echo $this->_tpl_vars['content']; ?>
</textarea></dd>
<dd><input name="tijiao" type="submit" value="提交" /></dd>
<dd><input name="reset" type="reset" value="重置" /></dd>		
		<input type="hidden" name="id" value=<?php echo $this->_tpl_vars['id']; ?>
 />
		<input type="hidden" name="action" value=<?php echo $this->_tpl_vars['action']; ?>
 />
</form>
</body>
</html>