<?php /* Smarty version 2.6.26, created on 2012-11-20 04:00:33
         compiled from backdisplay.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<h1 align='center'>后台</h1>
<div id="add">
<li id="one"><a href="background.php?action=addtask">添加任务</a></li>
</div>
<div id="zh" style="width:210px;padding:18px;overflow:hidden;word-wrap:break-word;word-break:break:all; font-size:15pt; line-height:18px; background-color:#EEE; float:left;">

<font disabled>

		<span class="STYLE1">完成的翻译</span>  <?php $_from = $this->_tpl_vars['tasklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['oss']):
?>
		<br>
		<dd><a href="background.php?action=selectone&id=<?php echo $this->_tpl_vars['oss']['id']; ?>
"><?php echo $this->_tpl_vars['oss']['title']; ?>
</a></dd>
		<dd><a href="background.php?action=update&id=<?php echo $this->_tpl_vars['oss']['id']; ?>
">编辑</a></dd>
		<dd><a href="background.php?action=delete&id=<?php echo $this->_tpl_vars['oss']['id']; ?>
">删除</a></dd></br>
		<hr />
		<?php endforeach; endif; unset($_from); ?>
	
</div>	

<div id="zh" style="width:210px;padding:18px;overflow:hidden;word-wrap:break-word;word-break:break:all; font-size:15pt; line-height:18px; background-color:#EEE; float:left;">

<font disabled>

		<span class="STYLE1">可领取的任务</span>  <?php $_from = $this->_tpl_vars['need']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index1'] => $this->_tpl_vars['oss1']):
?>
		<br>
		<dd><a href="background.php?action=selectone&id=<?php echo $this->_tpl_vars['oss1']['id']; ?>
"><?php echo $this->_tpl_vars['oss1']['title']; ?>
</a></dd>
		<dd><a href="background.php?action=update&id=<?php echo $this->_tpl_vars['oss1']['id']; ?>
"><img src="images/icon_edit.gif" />编辑</a></dd>
		<dd><a href="background.php?action=delete&id=<?php echo $this->_tpl_vars['oss1']['id']; ?>
"><img src="images/icon_delete.gif" />删除</a></dd></br>
		<hr />
		<?php endforeach; endif; unset($_from); ?>	

</div>	
<div id="zh" style="width:210px;padding:18px;overflow:hidden;word-wrap:break-word;word-break:break:all; font-size:15pt; line-height:18px; background-color:#EEE; float:left;">

<font disabled>

		<span class="STYLE1">正在进行中的任务</span>  <?php $_from = $this->_tpl_vars['do']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index2'] => $this->_tpl_vars['oss2']):
?>
		<br>
		<dd><a href="background.php?action=selectone&id=<?php echo $this->_tpl_vars['oss2']['id']; ?>
"><?php echo $this->_tpl_vars['oss2']['title']; ?>
</a>选做人：<?php echo $this->_tpl_vars['oss2']['user']; ?>
</dd>
		<dd><a href="background.php?action=update&id=<?php echo $this->_tpl_vars['oss2']['id']; ?>
">编辑</a></dd>
		<dd><a href="background.php?action=delete&id=<?php echo $this->_tpl_vars['oss2']['id']; ?>
">删除</a></dd></br></br>
		<hr />
		<?php endforeach; endif; unset($_from); ?>
</div>	
	


</body>
</html>
