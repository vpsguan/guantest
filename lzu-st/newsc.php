<?php 
/*


*/
include('admin/dbconnect.php');
include('smarty_init.php');	
	$dbconnect=new DBconnect();
	$conn=$dbconnect->open();
	$tid=$_GET['tid'];
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
	if($tid==$titletype0['type']){
	$sql="select * from lzu_st_news order by id desc ";
	$res=mysql_query($sql,$conn);
	$i=1;
	if(mysql_num_rows($res)>0){
		while($row=mysql_fetch_array($res)){
			if($row['rid']==0)
			{
			   $t0[$i]['title']=$row['title'];
			   $t0[$i]['time']=$row['time'];
			   $t0[$i]['id']=$row['id'];
			   $t0[$i]['image']=$row['image'];
			   $i++;
			   continue;
			}
		}
	}
	$smarty->assign('tid',$tid);
    $smarty->assign('t0',$t0);
	$smarty->display('newsc.html');
	}
		if($tid==$titletype1['type']){
	$sql="select * from lzu_st_news order by id desc";
	$res=mysql_query($sql,$conn);
	$i=1;
	if(mysql_num_rows($res)>0){
		while($row=mysql_fetch_array($res)){
			if($row['rid']==1)
			{
			   $t0[$i]['title']=$row['title'];
			   $t0[$i]['time']=$row['time'];
			   $t0[$i]['id']=$row['id'];
			   $t0[$i]['image']=$row['image'];
			   $i++;
			   continue;
			}
		}
	}
	$smarty->assign('tid',$tid);
    $smarty->assign('t0',$t0);
	$smarty->display('newsc.html');
	}

	if($tid==$titletype2['type']){
	$sql="select * from lzu_st_news order by id desc ";
	$res=mysql_query($sql,$conn);
	$i=1;
	if(mysql_num_rows($res)>0){
		while($row=mysql_fetch_array($res)){
			if($row['rid']==2)
			{
			   $t0[$i]['title']=$row['title'];
			   $t0[$i]['time']=$row['time'];
			   $t0[$i]['id']=$row['id'];
			   $t0[$i]['image']=$row['image'];
			   $i++;
			   continue;
			}
		}
	}
	$smarty->assign('tid',$tid);
    $smarty->assign('t0',$t0);
	$smarty->display('newsc.html');
	}
	
	if($tid==$titletype3['type']){
	$sql="select * from lzu_st_news order by id desc";
	$res=mysql_query($sql,$conn);
	$i=1;
	if(mysql_num_rows($res)>0){
		while($row=mysql_fetch_array($res)){
			if($row['rid']==3)
			{
			   $t0[$i]['title']=$row['title'];
			   $t0[$i]['time']=$row['time'];
			   $t0[$i]['id']=$row['id'];
			   $t0[$i]['image']=$row['image'];
			   $i++;
			   continue;
			}
		}
	}
	$smarty->assign('tid',$tid);
    $smarty->assign('t0',$t0);
	$smarty->display('newsc.html');
	}

	if($tid==$titletype4['type']){
	$sql="select * from lzu_st_news order by id desc";
	$res=mysql_query($sql,$conn);
	$i=1;
	if(mysql_num_rows($res)>0){
		while($row=mysql_fetch_array($res)){
			if($row['rid']==4)
			{
			   $t0[$i]['title']=$row['title'];
			   $t0[$i]['time']=$row['time'];
			   $t0[$i]['id']=$row['id'];
			   $t0[$i]['image']=$row['image'];
			   $i++;
			   continue;
			}
		}
	}
	$smarty->assign('tid',$tid);
    $smarty->assign('t0',$t0);
	$smarty->display('newsc.html');
	}
	
	
?>