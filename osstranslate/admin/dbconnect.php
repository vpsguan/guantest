<?php 
class DBconnect{
	private $host="127.0.0.1";
	private $name="root";
	private $pass="vps";
	private $dbname="lzu_st";
	private $encode="gb2312";
	
//构造方法
	function __construct(){}
	
//数据库连接
	function open(){
		$conn=mysql_connect($this->host,$this->name,$this->pass) or die("连接错误");
		mysql_select_db($this->dbname,$conn) or die("选择数据库错误");
		mysql_query("set names ".$this->encode);
		return $conn;
	}
	
//关闭连接
	function close($conn){
		mysql_close($conn);
	}
}
?>