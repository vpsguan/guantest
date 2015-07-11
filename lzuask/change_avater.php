<?php
/*
 * 肖祖鹏
* change_avater.php----右侧div更改个人资料
* 2012/7/17
* 袁俊虎 修改添加
* 2012/7/25
* 主要是  页面的调整  和 修改头像
* 头像的存储在 images/face
* 2012/7/26  调整  添加数据库
* 完成
*/
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
/*
 * 登陆判断换
*/
$A->judge_session();
$annexFolder="images/face";
$smallFolder="big";
$middleFolder="middle";
$includeFolder="images/include";
/*
 * 读取数据库中头像的名称
* 如为空  则输出 固定的图像
*
*/
$pass=DB_PRE.'ask_user';
$sql="SELECT avatar FROM $pass WHERE uid='{$login['lzuuid']}'";
$re=_fetch_array($sql);
if($re['avatar']=='images/face/big/lzuask.gif'){
	$judge=1;
}else{
	$judge=0;
}
$imagepass=$re['avatar'];
$imageName=$login['lzuuid'];
require("./".$includeFolder."/upface.class.php");
$img=new UPImages($annexFolder,$smallFolder,$imageName,$middleFolder,$includeFolder);
/*
 * 数据处理
*/
if(!!$_GET["action"]==avater){
	$photo=$img->upLoad("upfile");
	$img->toFile = true;
	$middlepass=$img->middleImg($photo,32,32);
	$imagepass=$img->smallImg($photo,128,128);
	/*
	 * 修改头像
	*/

		$pass=DB_PRE.'ask_user';
		$sql="UPDATE $pass SET avatar='{$imagepass}',mid_avatar='{$middlepass}' WHERE uid='{$login['lzuuid']}'";
		_query($sql);
		/*
		*用JS实现刷新
		*
		*/
	  echo " <script type=\"text/javascript\">window.open('change_avater.php?act=1');</script> ";
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改头像</title>
<link rel="stylesheet" type="text/css" href="css/basic.css" />
<link rel="stylesheet" type="text/css" href="css/header.css" />
<link type="text/css" rel="stylesheet" href="css/change_avatar.css" />
<link rel="stylesheet" type="text/css" href="css/left_nav.css" />
</head>
<?php
if   ($act){
      
      echo " <script type=\"text/javascript\">window.close()</script> ";
	  }
	  
?> 
<body>
<?php
	require ROOT_PATH.'includes/header.php'; 
?>
<div id="person">
<?php include ROOT_PATH.'includes/left_nav.php'; ?>
<div class="details">
<p>上传头像说明：支持jpg、gif、png、jpeg四种格式图片上传.</p>
<p>上传限制：</p>
<p>1、图片大小不能超过2M;</p>  
<p>2、图片长宽大于100*100px时系统将自动压缩;</p>
<div class="avater">
<img src="<?php echo $imagepass;?>" width="128" height="128" />
</div>
<div class="operate">
   <form method="post" name="avater" action="change_avater.php?action=avater" enctype="multipart/form-data">
     <input type="file" name="upfile" class="select" />
     <br/>
     <input type="submit" name="submit" value="提交" class="submit" /><br />
   </form>
   </div>
</div>
</div>
<?php
	require ROOT_PATH.'includes/footer.php'; 
?>
</body>
</html>

