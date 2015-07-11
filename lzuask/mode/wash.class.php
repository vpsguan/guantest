<?php
/*
 * washing_wall
 */
class washmode{
	var $db;
	/*
	 * 获取
	 */
	function getwash(){
		$pass=DB_PRE.'wash_wall';
		$sql="SELECT * FROM $pass";
		$result=_query($sql);
		return $result;
	}
	/*
	 * 插入信息
	 */
	function insertwash($name,$id,$title,$content){
		$time=time()+28800;
		$pass=DB_PRE.'wash_wall';
		$sql="INSERT INTO $pass(
		author,
		authorid,
		title,
		content,
		time)
		VALUES(
		'{$name}',
		'{$id}',
		'{$title}',
		'{$content}',
		'{$time}')";
		_query($sql);
	}
}
?>