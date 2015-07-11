<?php
/*
 * 袁俊虎
 * index.php
 * 2012/7/11
 * 主页面
 * 修改 2012/7/25  问题：不登陆就可以回复   但只点击回复 跳到登陆页面
 */
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
	/*
	 * 编码首先先确定是否已经设置编码，软件的设置
	 */
/*
 * 判断是否已经安装
*/
if(!is_file("data/mysql.sql.lock")){
	header("location:install/index.php");
}
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
/*
 * 判断session
 */
if(!!session_is_registered(login)){
if($_GET['action']==sayout){
	/*
	 * 发表言论
	 */
	/*
	 * 获取发表用户的Uid  根据Uid来生成表单
	 */
	if(strlen($_POST['say'])<5){
		_alert_back("不得小于5个字符！");
	}
	
	$pass=DB_PRE.'ask_user';
	$sql="SELECT uid FROM $pass WHERE username='{$login['lzuname']}'";
	$result=_query($sql);
	$uid=mysql_fetch_array($result);
	$pass=DB_PRE.'say_put';
	$sql="INSERT INTO $pass(
		author,
		authorid,
		title,
		time)
		VALUES(
		'{$login['lzuname']}',
		'{$uid['uid']}',
		'{$_POST['say']}',
		NOW()
		)";
	_query($sql);
	/*
	 * 判断是否发表成功
	 */
	if(mysql_affected_rows()==1){
		header("location:index.php");
	}else{
		_alert_back("发表失败!");
	}
}
/*
 * 处理回复
 */
if($_GET['action']==s_answer){
	if(strlen($_POST['answer'])==0){
		_alert_back("不能为空！");
	}
	$pass=DB_PRE.'ask_user';
	$sql="SELECT uid FROM $pass WHERE username='{$login['lzuname']}'";
	$result=_query($sql);
	$uid=mysql_fetch_array($result);
	$pass_an=DB_PRE.'say_answer';
	$sql="INSERT INTO $pass_an(
		qid,
		author,
		authorid,
		time,
		contents)
		VALUES(
		'{$_POST['author_id']}',
		'{$login['lzuname']}',
		'{$uid['uid']}',
		NOW(),
		'{$_POST['answer']}'
		)";
	_query($sql);
	if(mysql_affected_rows()==1){
		header("location:index.php");
	}else{
		_alert_back("回复失败!");
	}
}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lzu问答首页</title>
<link rel="stylesheet" type="text/css" href="css/basic.css" />
<link rel="stylesheet" type="text/css" href="css/header.css" />
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
<script charset="utf-8" src="kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<script>
        var editor;
        KindEditor.ready(function(K) {
        	K.create('textarea[name="say"]', {
        		resizeType : 1,
        		allowPreviewEmoticons : false,
        		allowImageUpload : false,
        		items : [
        			'fontname', 'fontsize', '|', 'textcolor', 'bgcolor', 'bold', 'italic', 'underline',
        			'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
        			'insertunorderedlist', '|', 'emoticons', 'image', 'link']
        	});
        });             
</script>
<script type="text/javascript" src="js/index.js"></script>
</head>
<body>

<?php
require ROOT_PATH.'includes/header.php';//把头文件添加进来
?>
  <!-- 下面的是页面的主要内容 -->
 <div id="neirong">
	<span id="share">
	<h2>精彩分享</h2>
	</span>
	<?php
	/*
	 * 中间输出
	 */ 
	require ROOT_PATH.'includes/index/say_show.php';
	?>
	<span id="show">
		  <h2>活动发布</h2>
	</span>
</div>
<?php require ROOT_PATH.'includes/footer.php';?>
</body>
</html>