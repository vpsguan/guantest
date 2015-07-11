<?php
include('admin/dbconnect.php');
include('smarty_init.php');	

	//从数据库中取出相关信息
	$dbconnect=new DBconnect();
	$conn=$dbconnect->open();
	$sql="select * from lzu_st_down order by id desc";
	$res=mysql_query($sql,$conn);
	$i=1;
	if(mysql_num_rows($res)>0){
		while($row=mysql_fetch_array($res)){
		 $t0[$i]['title']=$row['title'];
		 $t0[$i]['time']=$row['time'];
		 $t0[$i]['id']=$row['id'];
		 $t0[$i]['content']=$row['content'];
		 $t0[$i]['location']=$row['location'];
		 $i++;
		}
		}
	
	
	
	
	$smarty->assign('t0',$t0);    	
	$smarty->display('down.html');
?>