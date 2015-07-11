<?php
/*
 * 用户类 
 * 袁俊虎
 * 2012/8/22
 */
class usermode{
	var $db;
	/*
	 * 通过UID获取用户信息
	 */
	function getuserinfo($uid){
		$pass=DB_PRE.'ask_user';
		$sql="SELECT * FROM $pass WHERE uid=$uid";
		$result=_query($sql);
		$re=mysql_fetch_array($result);
		return $re;	
	}
	/*
	 * 判断是否显示头像
	 */
	function avater($hidden){
		if($hidden==0){
			return 0;
		}else{
			return 1;
		}
	}
	/*
	 *显示回答之星  
	 */
	function answerstar(){
		$pass=DB_PRE.'ask_user';
		$sql="SELECT * FROM $pass ORDER BY answers DESC";
		$result=_query($sql);
		return $result;	
	}
}
?>