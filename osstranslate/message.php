<?php 
/*


*/
include('admin/dbconnect.php');
include('smarty_init.php');	

	//从数据库中取出相关信息
	$dbconnect=new DBconnect();
	$conn=$dbconnect->open();
	//显示
	$sql="select * from lzu_st_news order by id desc ";
	$res=mysql_query($sql,$conn);
	$i=1;
	if(mysql_num_rows($res)>0){
		while($row=mysql_fetch_array($res)){
			if($row['rid']==2)
			{
			   $t0[$i]['title']=$row['title'];
			   $t0[$i]['content']=$row['content'];
			   $t0[$i]['editer']=$row['editer'];
			   $t0[$i]['time']=$row['time'];
			   $t0[$i]['id']=$row['id'];
			   $i++;
			   continue;
			}
			}
	}
    $smarty->assign('t0',$t0);
	$smarty->display('message.html');
?>

