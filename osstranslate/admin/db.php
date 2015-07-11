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
	function insert($title,$starttime,$stoptime){
		$db=new DBconnect();
		$msg="";
		$conn=$db->open();
		$sql="insert into list (title,starttime,stoptime) values ('{$title}','{$starttime}','{$stoptime}')";
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
		$sql="delete from list where id = ".$id;
		if(mysql_query($sql,$conn)){
			$msg="任务删除成功";;
		}else{
			$msg="任务删除失败";
		}
		$db->close($conn);
		return $msg;
	}
	
//更新任务
	function update($id,$title,$user,$content,$starttime,$stoptime){
		$db=new DBconnect();
		$msg="";
		$conn=$db->open();
		$sql="update list set title='{$title}',user='{$user}',content='{$content}',starttime='{$starttime}',stoptime='{$stoptime}' where id=".$id;
		if(mysql_query($sql,$conn)){
			$msg="任务更新成功";
		}else{
			$msg="任务更新失败";
		}
		$db->close($conn);
		return $msg;
	}
	
//查询单条新闻
	function select($id){
		$db=new DBconnect();
		$conn=$db->open();
		$sql="select * from news where id = ".$id;
		$result=mysql_query($sql,$conn);
		$row=mysql_fetch_array($result);
		$arr=array(
			'id'=>$row['id'],
			'typeid'=>$row['typeid'],		
			'title'=>$row['title'],
			'content'=>$row['content'],
			'time'=>$row['time']
		);
		mysql_free_result($result);//释放结果集
		$db->close($conn);
		return $arr;
	}

}
?>