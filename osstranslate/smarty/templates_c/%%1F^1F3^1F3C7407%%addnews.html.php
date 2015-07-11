<?php /* Smarty version 2.6.26, created on 2012-11-20 02:19:30
         compiled from addnews.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script charset="utf-8" src="/kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="/kindeditor/lang/zh_CN.js"></script>
<script>
        var editor;
        KindEditor.ready(function(K) {
                editor = K.create('#editor_id');
        });
</script>

</head>

<body>
<h1 align="center">添加新闻</h1>
<form action="addnews.php"  method="post">
<table>
	<tr>
		<td>标题:</td>
		<td><input type="text" name="title"  size="30" value=<?php echo $this->_tpl_vars['title']; ?>
></input></td>
	</tr>
	<tr>
	<td>类型:</td>
		<td>
		<select name="newstype" size="1">
		  <option value="1" selected="selected">公告<</option>
		  <option value="2">讲座通知</option>
		  <option value="3">社团新闻</option>
		  <option value="4">活动信息</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>内容:</td>
		<td>
			<textarea id="editor_id" name="content"   style="width:700px;height:300px;"><?php echo $this->_tpl_vars['content']; ?>
</textarea>
		</td>
	</tr>
	<tr>
		<td  colspan="2" align="center"><input name="tijiao" type="submit" value="提交" />
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input name="reset" type="reset" value="重置" />		
		</td>
		<input type="hidden" name="id" value=<?php echo $this->_tpl_vars['id']; ?>
 />
		<input type="hidden" name="action" value=<?php echo $this->_tpl_vars['action']; ?>
 />
</table>
</form>
</body>
</html>