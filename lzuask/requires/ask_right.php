<?php
/*
 * 位于que_detail.php的右侧
 * 显示  用户的回答榜单的
 */
$answerstar=$usermode->answerstar();
?>

<h3>推荐之星</h3>
<?php while(！！$star=mysql_fetch_array($answerstar)){ ?>
<img src="<?php echo $star['avatar'];?>" width="60" height="60" align="middle" />
<p>信息</p>
<?php }?>