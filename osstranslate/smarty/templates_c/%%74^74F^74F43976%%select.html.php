<?php /* Smarty version 2.6.26, created on 2012-11-20 02:05:12
         compiled from select.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ѡ��Ŀ</title>
</head>
<body>
<script language="JavaScript" src="date.js">
</script>
<div id="selectform">
<form id="select" action="select.php" method="post">
<input type="image" src="images/loo.jpg"/> 
<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
<dd>������������<input type="text" name="user" id="user" ></dd>
<dd>ѡ�����ʱ��<input type="text" name="stoptime" id="stoptime" onclick="MyCalendar.SetDate(this)"></dd>
<dd>
<input type="submit" name="tijiao" value="�ύ"></dd>
</form>
</div>

</body>
</html>