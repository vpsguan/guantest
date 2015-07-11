<?php
session_start();
//初始化信息
include('smarty_init.php');
include("dbconnect.php");
include('checklogin.php');

$dbconnect=new DBconnect();
$conn=$dbconnect->open();

check_admin();


//关闭连接
$dbconnect->close($conn);

?>