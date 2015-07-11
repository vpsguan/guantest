<?php
/*
 * 数据库操作类
 */

//包含数据库初始化文件
	include('dbconnect.php');
	
class DB{

//构造方法
	function __construct(){}
//增加任务
	function insert($title,$time,$content,$editer,$image,$rid){
		$db=new DBconnect();
		$msg="";
		$conn=$db->open();
		$sql="insert into lzu_st_news (title,time,editer,content,image,rid) values ('{$title}','{$time}','{$editer}','{$content}','{$image}','{$rid}')";
		if(mysql_query($sql,$conn)){
			$msg="true";
		}else{
			$msg="false";
		}
		$db->close($conn);
		return $msg;
	    }
	function insertdown($title,$time,$content,$location){
		$db=new DBconnect();
		$msg="";
		$conn=$db->open();
		$sql="insert into lzu_st_down (title,time,content,location) values ('{$title}','{$time}','{$content}','{$location}')";
		if(mysql_query($sql,$conn)){
			$msg="true";
		}else{
			$msg="false";
		}
		$db->close($conn);
		return $msg;
	}
	
//删除任务
	function delete($id){
		$db=new DBconnect();
		$msg="";
		$conn=$db->open();
		$sql="delete from lzu_st_news where id = ".$id;
		if(mysql_query($sql,$conn)){
			$msg="任务删除成功";;
		}else{
			$msg="任务删除失败";
		}
		$db->close($conn);
		return $msg;
	}
	
//更新任务
	function update($id,$rid,$title,$editer,$image,$time){
		$db=new DBconnect();
		$msg="";
		$conn=$db->open();
	    $sql="update lzu_st_news set rid='{$rid}',title='{$title}',editer='{$editer}',image='{$image}',time='{$time}' where id=".$id;
		if(mysql_query($sql,$conn)){
			$msg="任务更新成功";
		}else{
			$msg="任务更新失败";
		}
		$db->close($conn);
		return $msg;
	}
}
?>