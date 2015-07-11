<?php /* Smarty version 2.6.26, created on 2013-02-23 12:33:30
         compiled from index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="css/head.css"> 
<link rel="stylesheet" type="text/css" href="css/index.css" /> 
<title>兰州大学社团联合会</title>

</head >

<body bgcolor="#ebf7ff" >
<script language="javascript" type="text/javascript" src="templates/head.js" charset="gb2312"></script> 
<embed src="a1.mp3" width="0" height="0" autostart="true" > 
<div id="fclass0">
<ul>

<div style=" text-align:center; height:20%;">
<DIV
style="FILTER: progid:DXImageTransform.Microsoft.Fade ( duration=0.5,overlap=1.0 );text-align:center; WIDTH: 100%; HEIGHT: 200px"
id=fc>
<DIV style="display: block;text-align:center;" onmouseover="clearAuto()" onmouseout="setAuto()" onclick="turnto(1)"><IMG src="<?php echo $this->_tpl_vars['dz1']; ?>
" width=100% height=200></DIV>
<DIV style="display: none; text-align:center"onmouseover="clearAuto()" onmouseout="setAuto()" onclick="turnto(2)"><IMG src="<?php echo $this->_tpl_vars['dz2']; ?>
" width=100% height=200></DIV>
<DIV style="display: none; text-align:center"onmouseover="clearAuto()" onmouseout="setAuto()" onclick="turnto(3)"><IMG src="<?php echo $this->_tpl_vars['dz3']; ?>
" width=100% height=200></DIV>
<DIV style="display: none; text-align:center"onmouseover="clearAuto()" onmouseout="setAuto()"onclick="turnto(4)"><IMG src="<?php echo $this->_tpl_vars['dz4']; ?>
" width=100% height=200></DIV>
<DIV style="display: none; text-align:center"onmouseover="clearAuto()" onmouseout="setAuto()"onclick="turnto(5)"><IMG src="<?php echo $this->_tpl_vars['dz5']; ?>
" width=100% height=200></DIV>
<DIV style="display: none; text-align:center"onmouseover="clearAuto()" onmouseout="setAuto()"onclick="turnto(6)"><IMG src="<?php echo $this->_tpl_vars['dz6']; ?>
" width=100% height=200></DIV>
</DIV>
<SCRIPT>
var n=0;
function Mea(value){
n=value;
plays(value);
}
function plays(value){
try
{
with (fc)
{
filters[0].Apply();
for(i=0;i<6;i++)i==value?children[i].style.display="block":children[i].style.display="none";
filters[0].play();
}
}
catch(e)
{
var divlist = document.getElementById("fc").getElementsByTagName("div");
for(i=0;i<6;i++)
{
i==value?divlist[i].style.display="block":divlist[i].style.display="none";
}
}
 
 
}
 
function clearAuto(){clearInterval(autoStart)}
function setAuto(){autoStart=setInterval("auto(n)", 1000)}
function starta(){setAuto();}
function auto(n){
n++;
if(n>5)n=0;Mea(n);
}
starta();
function turnto(w){
window.location.href="www.baidu.com";
}
 
</SCRIPT>
</DIV>
</ul>
</div>
<div id="fclass1">
<ul id="title">
<label ><a href="newsc.php?tid=<?php echo $this->_tpl_vars['titletype0']; ?>
" style=" font-size:18px; color:#999999; float:right;">more</a></lable>
<label style=" font-size:25px; color:#999999; "><?php echo $this->_tpl_vars['titletype0']; ?>
</label>

</ul>


<?php $_from = $this->_tpl_vars['t0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['st'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['st']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['s0']):
        $this->_foreach['st']['iteration']++;
?>
<ul id="cont">
<label style=" color:#999999; font-size:12px; float:right;">		<?php echo $this->_tpl_vars['s0']['time']; ?>
</label>
		<a href="display_onenews.php?id=<?php echo $this->_tpl_vars['s0']['id']; ?>
" style="font-size:22px;color:#000000; text-decoration:none;"><?php echo $this->_tpl_vars['s0']['title']; ?>
</a>

		</ul>
<?php if ($this->_foreach['st']['iteration'] == 6): ?> 
<?php break; ?>
<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>

</div>
<div id="fclass2">
<ul id="title"><label ><a href="newsc.php?tid=<?php echo $this->_tpl_vars['titletype1']; ?>
" style=" font-size:18px; color:#999999;text-align:right; float:right;">more</a></lable>
<label style=" font-size:25px; color:#999999; "><?php echo $this->_tpl_vars['titletype1']; ?>
</label>

</ul>

<?php $_from = $this->_tpl_vars['t1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['s1']):
?>
		<ul><label style="text-align:right; color:#999999; font-size:12px; float:right;">		<?php echo $this->_tpl_vars['s1']['time']; ?>
</label>
		<a href="display_onenews.php?id=<?php echo $this->_tpl_vars['s1']['id']; ?>
" style="font-size:22px;color:#000000; text-decoration:none;"><?php echo $this->_tpl_vars['s1']['title']; ?>
</a>
		</ul>
		<?php if ($this->_foreach['st']['iteration'] == 5): ?> 
<?php break; ?>
<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>

</div>
<div id="fclass3">
<ul id="title">
<label ><a href="message.php" style=" font-size:18px; color:#999999; float:right;">more</a></lable>
<label style=" font-size:25px; color:#999999; "><?php echo $this->_tpl_vars['titletype2']; ?>
</label>

</ul>

<?php $_from = $this->_tpl_vars['t2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['s2']):
?>
		<ul >
		<label style="text-align:right; color:#999999; font-size:12px; float:right;">		<?php echo $this->_tpl_vars['s2']['time']; ?>
</label>
		<a href="display_onenews.php?id=<?php echo $this->_tpl_vars['s2']['id']; ?>
" style="font-size:22px; color:#000000; text-decoration:none;"><?php echo $this->_tpl_vars['s2']['title']; ?>
</a>
		</ul>
		<?php if ($this->_foreach['st']['iteration'] == 5): ?> 
<?php break; ?>
<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>

</div>
<div id="fclass4">
<ul id="title">
<label ><a href="newsc.php?tid=<?php echo $this->_tpl_vars['titletype3']; ?>
" style=" font-size:18px; color:#999999; float:right;">more</a></lable>
<label style=" font-size:25px; color:#999999; "><?php echo $this->_tpl_vars['titletype3']; ?>
</label>

</ul>

<?php $_from = $this->_tpl_vars['t3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['s3']):
?>
		<ul >
		<label style="text-align:right; color:#999999; font-size:12px; float:right;">		<?php echo $this->_tpl_vars['s3']['time']; ?>
</label>
	<a href="display_onenews.php?id=<?php echo $this->_tpl_vars['s3']['id']; ?>
" style="font-size:22px;color:#000000; text-decoration:none;"><?php echo $this->_tpl_vars['s3']['title']; ?>
</a>
	</ul>
		<?php if ($this->_foreach['st']['iteration'] == 5): ?> 
<?php break; ?>
<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>

</div>
<div id="fclass5">
<ul id="title">
<label ><a href="newsc.php?tid=<?php echo $this->_tpl_vars['titletype4']; ?>
" style=" font-size:18px; color:#999999; float:right;">more</a></lable>
<label style=" font-size:25px; color:#999999; "><?php echo $this->_tpl_vars['titletype4']; ?>
</label>

</ul>

<?php $_from = $this->_tpl_vars['t4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['s4']):
?>
	<ul>
	<label style="text-align:right; color:#999999; font-size:12px; float:right;">		<?php echo $this->_tpl_vars['s4']['time']; ?>
</label>
		<a href="display_onenews.php?id=<?php echo $this->_tpl_vars['s4']['id']; ?>
" style="font-size:22px;color:#000000; text-decoration:none;"><?php echo $this->_tpl_vars['s4']['title']; ?>
</a>
		</ul>
		<?php if ($this->_foreach['st']['iteration'] == 5): ?> 
<?php break; ?>
<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>

</div>

<script language="javascript" type="text/javascript" src="templates/foot.js" charset="gb2312"></script>
</body>
</html>