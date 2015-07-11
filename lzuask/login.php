<?php
/*
 * 袁俊虎
 * login.php
 * 登陆页面
 * 2012/7/23修改
 * 2012/7/28修改
 * 2012/8/13 修改
 */
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
/*
 * 判断是是否经登陆
 * 
 */
if(session_is_registered(login)){
	_alert_back("已经登录了！");
}
/*
 *用户登陆
 *
 */

	if($_GET['action']==login){
		/*
		 * 这儿应该有js 用户端的验证
		 * 包括没有js验证
		 * 最后加上
		 */
		require ROOT_PATH.'includes/login.inc.php';
		$_data=array();
	    $_data['username']=_check_username($_POST['username']);
		$_data['userpwd']=_check_password($_POST['userpwd']);
		/*
		 * 验证
		 * 
		 */
		$pass=DB_PRE.'ask_user';
		$_sql="SELECT * FROM $pass where username='{$_data['username']}' AND password='{$_data['userpwd']}'";
		if(!!$result=_fetch_array($_sql)){
			if($result['active']!=NULL){
				_alert_back("用户未激活，请到邮箱激活");
			}
			$logintime=time()+28800;
			$login=array('lzuname'=>$_data['username'],'lzupwd'=>$_data['userpwd'],'lzuuid'=>$result['uid'],'lastlogin'=>$logintime);
			session_register(login);
			$_sql_1="UPDATE $pass SET is_login=1 WHERE username='{$login['lzuname']}'";
			mysql_query($_sql_1);
			$user_info=_user($login['lzuname']);
			$credit1=$user_info['credit1']+2;
			$_sql_2="UPDATE $pass SET credit1='{$credit1}' WHERE username='{$login['lzuname']}'";
			mysql_query($_sql_2);
		//	$login=array('lzuname'=>$_data['username'],'lzupwd'=>$_data['userpwd']);
		//	session_register(login);
			header("location:index.php");
		}else{
			_alert_back("用户名或密码不正确！");
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lzu登陆</title>
<link rel="stylesheet" type="text/css" href="css/header.css" />
<link rel="stylesheet" type="text/css" href="css/login.css"/>
</head>
<body>
<?php
	require ROOT_PATH.'/includes/header.php' ;
?>
<div id="contents">
<form method="post" name="login" action="login.php?action=login"> 
				<input type="image" src="images/login/login_bg1.jpg" />  	
	    		<dd>username：<input type="text" name="username" class="text" style="width:140px;height:auto;" />   </dd>
	    		<dd>password：<input type="password" name="userpwd" class="text" style="width:140px;height:auto;" /> </dd>
	    		<dd>
	    		<input type="submit" name="submit" class="submit" value="登陆" />
	    		<input type="reset" name="reset" class="submit" value="重置" /><a href="getpassword.php" style="margin-left:20px;">找回密码？</a>
	    		</dd>
	    		 </form>

</div>
<?php
	require ROOT_PATH.'/includes/footer.php'; 
?>
</body>
</html>