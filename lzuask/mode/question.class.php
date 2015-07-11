<?php
/*
 * mode/question.class.php
 * 包含了对问答信息的获取和处理
 * 2012/8/18
 */
class questionmode{
	var $title;
	
	/*
	 * 获取还没有回答的数据
	 */
	 function statusall(){
	 	$pass=DB_PRE.'ask_question';
	 	$sql="SELECT * FROM $pass WHERE status=0 ORDER BY time DESC";
	 	$result=_query($sql);
	 	return $result;
	 }
	 /*
	  *获取已经回答的数据
	  */
	 function statusfin(){
	 	$pass=DB_PRE.'ask_question';
	 	$sql="SELECT * FROM $pass WHERE status=1 ORDER BY time DESC";
	 	$result=_query($sql);
	 	return $result;
	 }
	 /*
	  * 获取悬赏的问题 没有回答的问题
	  */
	 function price(){
	 	$pass=DB_PRE.'ask_question';
	 	$sql="SELECT * FROM $pass WHERE status=0 AND price!=0 ORDER BY price DESC";
	 	$result=_query($sql);
	 	return $result;
	 }
	 /*
	  * 获取大家都再问为什么
	  */
	 function suprise(){
	 	$pass=DB_PRE.'ask_question';
	 	$sql="SELECT * FROM $pass WHERE status=0 ORDER BY views DESC";
	 	$result=_query($sql);
	 	return $result;
	 }
	 /*
	  * 获取精彩推荐问题
	  */
	 function answersfin(){
	 	$pass=DB_PRE.'ask_question';
	 	$sql="SELECT * FROM $pass WHERE status=0 ORDER BY answers DESC";
	 	$result=_query($sql);
	 	return $result;
	 }
	 /*
	  * 通过id获取问题信息
	  */
	 function piece_que($id){
	 	$pass=DB_PRE.'ask_question';
	 	$sql="SELECT * FROM $pass WHERE id=$id ORDER BY time DESC";
	 	$result=_query($sql);
	 	$re=mysql_fetch_array($result);
	 	return $re;
	 }
	 /*
	  * 通过问题获取用户信息 头像  名字等
	  */
	 function getnav($id){
	 	$pass=DB_PRE.'ask_user';
	 	$sql="SELECT * FROM $pass WHERE uid=$id";
	 	$result=_query($sql);
	 	$re=mysql_fetch_array($result);
	 	return $re;	
	 }
	
}
