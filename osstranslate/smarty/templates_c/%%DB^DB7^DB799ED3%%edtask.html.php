<?php /* Smarty version 2.6.26, created on 2012-11-20 05:07:08
         compiled from edtask.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑任务</title>

</head>

<body>
<script language="JavaScript" src="../date.js">
</script>
<h1 align="center">编辑任务</h1>
<form action="edtask.php"  method="post">
<div id="add">

<dd>标题:<input type="text" name="title"   value=<?php echo $this->_tpl_vars['title']; ?>
></input></dd>
<dd>开始时间:<input type="text" name="starttime" id="starttime" onclick="MyCalendar.SetDate(this)" value=<?php echo $this->_tpl_vars['starttime']; ?>
></dd>
<dd>截止时间：<input type="text" name="stoptime" id="stoptime" onclick="MyCalendar.SetDate(this)" value=<?php echo $this->_tpl_vars['stoptime']; ?>
></dd>
<dd>翻译人:<input type="text" name="user" id="user" value=<?php echo $this->_tpl_vars['user']; ?>
 /></dd>
<dd>翻译内容:<input type="button" name="content" onclick="document.location.href='../<?php echo $this->_tpl_vars['content']; ?>
'" value=<?php echo $this->_tpl_vars['content']; ?>
  /></dd>
<dd>上传修改后的翻译文件<input type="file" name="file" id="file" />
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