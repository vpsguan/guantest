<?php 
/*


*/
include('admin/dbconnect.php');
include('smarty_init.php');	

	//从数据库中取出相关信息
	$dbconnect=new DBconnect();
	$conn=$dbconnect->open();
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
			   $i++;
			   continue;
			}
		}
	}
	$sqltype="select type from lzu_st_type where rid=1";
	$restype=mysql_query($sqltype,$conn);
	$rowtype=mysql_fetch_array($restype)or die(mysql_error());
	$tid=$rowtype['type'];
	$smarty->assign('tid',$tid);
    $smarty->assign('t0',$t0);
	$smarty->display('newsc.html');
?>