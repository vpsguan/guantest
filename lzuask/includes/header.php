<?php
/*
*
*/
$pass=DB_PRE.'ask_user';
$sql="SELECT groupid FROM $pass WHERE username='{$login['lzuname']}'";
$result=_query($sql);
$groupid=mysql_fetch_array($result);
?>
<div id="container">
	<div id="globallink">
		<ul>
			<li id="one"><a href="index.php">首页</a></li>
			<li id="two"><a href="ask.php">回答论坛</a></li>
			<li id="three"><a href="washingwall.php">许愿墙</a></li>
			<?php if(session_is_registered(login)){?>
				<?php if($groupid['groupid']==1){?>
			<li id="four"><a href="#">管理中心</a></li>
			<?php }?>
			<li id="five"><a href="logout.php" >退出</a></li>
			<li id="six"><a href="personnav.php">个人中心</a></li>
			<?php }else{?>
			<li id="five"><a href="login.php">登陆</a></li>
			<li id="five"><a href="register.php">注册</a></li>
			<?php }?>	
		</ul>
		<br>
	</div>

