<?php /* Smarty version 2.6.26, created on 2012-10-21 08:22:32
         compiled from search.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/header.css" />
</head>

<body>
<div id="container">
<div id="globallink">
		<ul>
	<form action="search.php" method="post">
			<select name="type">
			  <option value="1">公告</option>
			  <option value="2">讲座通知</option>
			  <option value="3">社团新闻</option>
			  <option value="4">活动信息</option>
			</select>
			<input type="text" name="search"  />
			<input type="submit" name="submit" value="搜索" />
		
	</form>
</ul>
</div>
<div id="search" style="width:1000px;padding:18px;overflow:hidden;word-wrap:break-word;word-break:break:all; font-size:9pt; line-height:18px; background-color:#EEE;">
<table border='1' align='center' width="1000" height="100">
	<tr bgcolor='#00FF00'>
		<th>类型</th>
		<th>标题</th>
		<th>发表时间</th>
	</tr>
	<?php $_from = $this->_tpl_vars['rowMessage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['son']):
?>
		<tr>
			<td><?php echo $this->_tpl_vars['son']['name']; ?>
</td>
			<td><a href="display_onenews.php?id=<?php echo $this->_tpl_vars['son']['id']; ?>
"><?php echo $this->_tpl_vars['son']['title']; ?>
</a></td>
			<td><?php echo $this->_tpl_vars['son']['time']; ?>
</td>
		</tr>	
	<?php endforeach; endif; unset($_from); ?>
	<tr>
		<td align='right' colspan='5'>
			<a href='./index.php'>返回</a>
		</td>
	</tr>	
	<tr>
	</tr>
</table>
</div>
</body>
</html>