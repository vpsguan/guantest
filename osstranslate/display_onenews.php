<?php
	include('smarty_init.php');	
	include('admin/dbconnect.php');

	$dbconnect=new DBconnect();
	$conn=$dbconnect->open();
	$sql="select title,time,editer,content,rid from lzu_st_news where id='".$_GET['id']."'";
	$res=mysql_query($sql,$conn);
	$row1=mysql_fetch_array($res)or die(mysql_error());
	$tid=$row1['rid'];
	$tsql="select type from lzu_st_type where rid='".$tid."'";
	$tres=mysql_query($tsql,$conn);
	$trow=mysql_fetch_array($tres)or die(mysql_error());
	$smarty->assign('tid',$trow['type']);
	$smarty->assign('title',$row1['title']);
	$smarty->assign('content',$row1['content']);
	$smarty->assign('time',$row1['time']);
	$smarty->assign('editer',$row1['editer']);
	$smarty->display('news.html');
?>