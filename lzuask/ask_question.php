<?php
/*
 * 都堃
 * ask.php
 * 2012/7/16
 * 问答界面
 *
 */
session_start();
error_reporting(1);
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
	/*
	 * 编码首先先确定是否已经设置编码，软件的设置
	 */
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
//echo date("Y-m-H:i",time()+28800);
$A->judge_session();
if($_GET['action']=="submit"){
	/*
	 * 处理提交数据
	*/
	if(mb_strlen($_POST['title'])<2){
		_alert_back("问题内容不能小于2个字节");
	}
	if($_POST['hidden']==NULL){
		$_POST['hidden']=0;
	}
	$time=time();
	$endtime=time()+$_POST['endtime']*30*24*60*60;
	$pass=DB_PRE.'ask_question';
	$sql="INSERT INTO $pass(
	cid,
	cid1,
	cid2,
	category,
	price,
	author,
	authorid,
	title,
	description,
	time,
	endtime,
	hidden,
	status
	)
	VALUES(
	'{$_POST['cid']}',
	'{$_POST['cid1']}',
	'{$_POST['cid2']}',
	'{$_POST['category']}',
	'{$_POST['price']}',
	'{$login['lzuname']}',
	'{$login['lzuuid']}',
	'{$_POST['title']}',
	'{$_POST['description']}',
	'{$time}',
     '{$endtime}',
     '{$_POST['hidden']}',
	0)";
	_query($sql);
	$user_info=_user($login['lzuname']);
	$wealth1=$user_info['wealth1']+$_POST['price'];
	$pass=DB_PRE.'ask_user';
	$_sql_2="UPDATE $pass SET wealth1='{$wealth1}' WHERE uid='{$user_info['uid']}'";
	_query($_sql_2);
	
	_location("发表成功","ask.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ask</title>
<link rel="stylesheet" type="text/css" href="css/basic.css" />
<link rel="stylesheet" type="text/css" href="css/header.css" />
<link rel="stylesheet" type="text/css" href="css/ask_question.css" />
</head>

<body>
<?php
require ROOT_PATH.'includes/header.php';//把头文件添加进来
?>
<div id="content">
<div id="contents">
	<form method="post" action="ask_question.php?action=submit" name="ask" >
	<table>
	<tr>
	<td>您的问题：</td>
	<td ><input  type="text" name="title" class="title" value="<?php echo $_GET['contents'];?>" ></input></td>
	</tr>
	<tr>
	<td>问题具体描述：</td>
	<td><textarea name="description" class="description" value=""></textarea></td>
	</tr>
	<tr>
	<td>问题标签：</td>
	<td><input type="text" name="cid" class="cid" value=""/><input type="text" name="cid1" class="cid" value=""/><input type="text" name="cid2" class="cid" value=""/></td>
	</tr>
	<tr>
	<td>问题分类：</td>
	<td><select name="categroy">
	<option value="日常学习">日常学习</option>
	<option value="考研">考研</option>
	<option value="校园生活">校园生活</option>
	<option value="购物">购物</option>
	<option value="军事">军事</option>
	<option value="社会">社会</option>
	<option value="其他">其他</option>
	</select></td>
	</tr>
	<tr>
	<td>匿名设置：</td>
	<td><input type="radio" name="hidden" value="0"/>不匿名<input type="radio" name="hidden" value="2"/>匿名</td>
	</tr>
	<tr>
	<td>悬赏财富值：</td>
	<td>
	<select name="price">
	<option value="0">0分</option>
	<option value="5">5分</option>
	<option value="10">10分</option>
	<option value="20">20分</option>
	<option value="30">30分</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>回答结束时间：</td>
	<td>
	<select name="endtime">
	<option value="1">一个月</option>
	<option value="3">三个月</option>
	<option value="6">半年</option>
	</select>
	</td>
	</tr>
	<tr><td><input type="submit" value="提交" class="button"></input></td>
		<td><input type="reset" value="重置" class="button"></input><th><a href="#" >我要点名提问？</a></th></td>
	</tr>
	</table>
	</form>
</div>
<div id="right">

</div>
</div>
<?php
	require ROOT_PATH.'includes/footer.php';  //最后的尾文件
?>
</body>
</html>