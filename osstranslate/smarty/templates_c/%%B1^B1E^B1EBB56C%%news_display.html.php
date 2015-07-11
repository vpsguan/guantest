<?php /* Smarty version 2.6.26, created on 2012-11-20 03:57:21
         compiled from news_display.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>新闻公告中心</title>
<link rel="stylesheet" type="text/css" href="css/header.css" />
<style type="text/css">
<!--
.STYLE1 {
	color: #330099;
	font-weight: bold;
}
.STYLE2 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>

<body bgcolor="">

<div id="container">
<div id="globallink">
		<ul>
	<li id="one"><a href="./admin/index.php">后台管理</a></li>
</ul>
</div>

</div>
	
<hr/>
<div id="zh" style="width:210px;padding:18px;overflow:hidden;word-wrap:break-word;word-break:break:all; font-size:15pt; line-height:18px; background-color:#EEE; float:left;">

<font disabled>

		<span class="STYLE1">完成的翻译</span>  <?php $_from = $this->_tpl_vars['tasklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['oss']):
?>
		<br>
		<a href="display_onenews.php?id=<?php echo $this->_tpl_vars['oss']['id']; ?>
"><?php echo $this->_tpl_vars['oss']['title']; ?>
</a></br>
		<hr />
		<?php endforeach; endif; unset($_from); ?>
	
</div>	
<div id="zh" style="width:210px;padding:18px;overflow:hidden;word-wrap:break-word;word-break:break:all; font-size:15pt; line-height:18px; background-color:#EEE; float:left;">

<font disabled>

		<span class="STYLE1">可领取的任务</span>  <?php $_from = $this->_tpl_vars['need']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index1'] => $this->_tpl_vars['oss1']):
?>
		<br>
		<a href="select.php?action=oss&id=<?php echo $this->_tpl_vars['oss1']['id']; ?>
"><?php echo $this->_tpl_vars['oss1']['title']; ?>
</a></br>
		<hr />
		<?php endforeach; endif; unset($_from); ?>	

</div>	
<div id="zh" style="width:210px;padding:18px;overflow:hidden;word-wrap:break-word;word-break:break:all; font-size:15pt; line-height:18px; background-color:#EEE; float:left;">

<font disabled>

		<span class="STYLE1">正在进行中的任务</span>  <?php $_from = $this->_tpl_vars['do']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index2'] => $this->_tpl_vars['oss2']):
?>
		<br>
		<a href="tijiao.php?action=oss&id=<?php echo $this->_tpl_vars['oss2']['id']; ?>
"><?php echo $this->_tpl_vars['oss2']['title']; ?>
</a>选做人：<?php echo $this->_tpl_vars['oss2']['user']; ?>
</br>
		<hr />
		<?php endforeach; endif; unset($_from); ?>
</div>	
</body>
</html>