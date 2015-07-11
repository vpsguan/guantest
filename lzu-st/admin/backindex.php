<?php
session_start();
//初始化信息
include('smarty_init.php');
include("dbconnect.php");
include('checklogin.php');

$dbconnect=new DBconnect();
$conn=$dbconnect->open();

check_admin();
$action=$_GET['action'];
$q_id=$_GET['id'];

switch ($action){

	case 'selectone':

		//查询单条相关信息

		$sql="select title,time,content,image,rid,editer from lzu_st_news where id=".$q_id;
	$res=mysql_query($sql,$conn);
	$row1=mysql_fetch_array($res)or die(mysql_error());
	$tid=$row1['rid'];
	$tsql="select type from lzu_st_type where rid='".$tid."'";
	$tres=mysql_query($tsql,$conn);
	$trow=mysql_fetch_array($tres)or die(mysql_error());
	$smarty->assign('tid',$trow['type']);
	$smarty->assign('title',$row1['title']);
	$smarty->assign('image',$row1['image']);
	$smarty->assign('content',$row1['content']);
	$smarty->assign('time',$row1['time']);
	$smarty->assign('editer',$row1['editer']);
	$smarty->display('news.html');
		break;

	case 'addtask':
		$smarty->assign("action","addtask");
		$smarty->display('add.html');
		break;

	case 'delete':
		$sql="delete from lzu_st_news where id=".$q_id;
		mysql_query($sql);
		echo "Have done！<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1; URL=./background.php\">";
		break;

	case 'update':
        $sql="select title,time,content,image,rid,editer from lzu_st_news where id=".$q_id;
		$res=mysql_query($sql);
		$row1=mysql_fetch_array($res);

	mysql_query($sql);
	$smarty->assign("action","update");
	$smarty->assign('id',$q_id);
	$smarty->assign('title',$row1['title']);
	$smarty->assign('image',$row1['image']);
	$smarty->assign('content',$row1['content']);
	$smarty->assign('time',$row1['time']);
	$smarty->assign('editer',$row1['editer']);
	$smarty->assign('rid',$row1['rid']);
		$smarty->display('bianji.html');
		break;}

	$sql="select * from lzu_st_news order by id desc";
	$res=mysql_query($sql,$conn);
	$i=1;
	if(mysql_num_rows($res)>0){
		while($row=mysql_fetch_array($res)){
			if($row['rid']==0)
			{
			   $t0[$i]['title']=$row['title'];
			   $t0[$i]['time']=$row['time'];
			   $t0[$i]['id']=$row['id'];
			   $i++;
			   continue;
			}
			if($row['rid']==1)
			{
			   $t1[$i]['title']=$row['title'];
			   $t1[$i]['time']=$row['time'];
			   $t1[$i]['id']=$row['id'];
			   $i++;
			   continue;
			}			
			if($row['rid']==2)
			{
			   $t2[$i]['title']=$row['title'];
			   $t2[$i]['time']=$row['time'];
			   $t2[$i]['id']=$row['id'];
			   $i++;
			   continue;
			}
			if($row['rid']==3)
			{
			   $t3[$i]['title']=$row['title'];
			   $t3[$i]['time']=$row['time'];
			   $t3[$i]['id']=$row['id'];
			   $t3[$i]['image']=$row['image'];
			   $i++;
			   continue;
			}
			if($row['rid']==4)
			{
			   $t4[$i]['title']=$row['title'];
			   $t4[$i]['time']=$row['time'];
			   $t4[$i]['id']=$row['id'];
			   $i++;
			   continue;
			}
		}
	}
	$sqltype="select * from lzu_st_type";
	$restype=mysql_query($sqltype,$conn);
	if(mysql_num_rows($restype)>0){
	while($rowtype=mysql_fetch_array($restype)){
	if($rowtype['rid']==0)$titletype0['type']=$rowtype['type'];
	if($rowtype['rid']==1)$titletype1['type']=$rowtype['type'];
	if($rowtype['rid']==2)$titletype2['type']=$rowtype['type'];
	if($rowtype['rid']==3)$titletype3['type']=$rowtype['type'];
	if($rowtype['rid']==4)$titletype4['type']=$rowtype['type'];
	}
	}
    $smarty->assign('t0',$t0);
	$smarty->assign('t1',$t1);
	$smarty->assign('t2',$t2);
	$smarty->assign('t3',$t3);
	$smarty->assign('t4',$t4);
	$smarty->assign('titletype0',$titletype0['type']);
	$smarty->assign('titletype1',$titletype1['type']);
	$smarty->assign('titletype2',$titletype2['type']);
	$smarty->assign('titletype3',$titletype3['type']);
	$smarty->assign('titletype4',$titletype4['type']);
	$smarty->display('back.html');  




//关闭连接
$dbconnect->close($conn);

?>