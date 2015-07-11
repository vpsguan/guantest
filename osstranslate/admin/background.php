<?php
session_start();
//初始化信息
include('smarty_init.php');
include("dbconnect.php");
include('checklogin.php');
//header("Content-Type:text/html;charset=utf-8");
$dbconnect=new DBconnect();
$conn=$dbconnect->open();

check_admin();


$action=$_GET['action'];
$q_id=$_GET['id'];

switch ($action){

	case 'selectone':

		//查询单条相关信息

		$sql="select title,starttime,stoptime,user,content from list where id=".$q_id;
		$res=mysql_query($sql);
		$row1=mysql_fetch_array($res);
	
		$rc="../{$row1['content']}";
		  $filename=$rc;  
          $fe = fopen($filename,'rt'); 
          $content=fread($fe,filesize($filename));
          fclose($fe);
		$smarty->assign('title',$row1['title']);
		$smarty->assign('starttime',$row1['starttime']);
		$smarty->assign('stoptime',$row1['stoptime']);
		$smarty->assign('user',$row1['user']);
		$smarty->assign('content',$content);
		$smarty->display('singleNews.html');
		break;

	case 'addtask':
		$smarty->assign("action","addtask");
		$smarty->display('addtask.html');
		break;

	case 'delete':
		$sql="delete from list where id=".$q_id;
		mysql_query($sql);
		echo "Have done！<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1; URL=./background.php\">";
		break;

	case 'update':
		$sql="select title,starttime,stoptime,user,content from list where id=".$q_id;
		$res=mysql_query($sql);
		$row1=mysql_fetch_array($res);

		mysql_query($sql);
		$smarty->assign("action","update");
		$smarty->assign('id',$q_id);
		$smarty->assign('title',$row1['title']);
		$smarty->assign('user',$row1['user']);
		$smarty->assign('starttime',$rwo1['starttime']);
		$smarty->assign('stoptime',$row1['stoptime']);
		$smarty->assign('content',$row1['content']);
		$smarty->display('edtask.html');
		break;

	default:$sql="select * from list ";
	$res=mysql_query($sql,$conn);
	$i=1;
	if(mysql_num_rows($res)>0){
		while($row=mysql_fetch_array($res)){
			if($row['rid']==0)
			{
			   $need[$i]['title']=$row['title'];
			   $need[$i]['starttime']=$row['starttime'];
			   $need[$i]['id']=$row['id'];
			   $i++;
			   continue;
			}
			else if($row['rid']==2){
			   $do[$i]['title']=$row['title'];
			   $do[$i]['starttime']=$row['starttime'];
			   $do[$i]['stoptime']=$row['stoptime'];
			   $do[$i]['user']=$row['user'];
			   $do[$i]['id']=$row['id'];
			   $i++;
			   continue;}
			else if($row['rid']==1){

			$tasklist[$i]['title']=$row['title'];
			$tasklist[$i]['starttime']=$row['starttime'];
			$tasklist[$i]['stoptime']=$row['stoptime'];
			$tasklist[$i]['id']=$row['id'];
			$i++;}
		}
	}
 

		
	 $smarty->assign('do',$do);
    $smarty->assign('need',$need);
	$smarty->assign('tasklist',$tasklist);
	$smarty->display('backdisplay.html');  

}

//关闭连接
$dbconnect->close($conn);

?>