<?php
/*
 * 把主页中间输出来了
 */
/*
 * 分液处理
 */
//分页
if($_GET['page']){
	$_page=$_GET['page'];
}else{
	$_page=1;
}
$_pagesize=10;
$_pagenum=($_page-1)*$_pagesize;
//得到所有数据综合

$pass=DB_PRE.'say_put';
/*
 * 获取有几条数据 $num
*/
$sql='SELECT id FROM '.$pass;
$datanum=mysql_query($sql);
$num=mysql_num_rows($datanum);
$_pageabsolute=ceil($num/$_pagesize);
/*
 * 共有几条记录
 * 一次读取十条记录
*/
$_sql="SELECT * FROM $pass ORDER BY id DESC LIMIT $_pagenum,$_pagesize ";//, ORDER BY id DESC
$dataq=_query($_sql);
?>
<span id="ask">
	<div id="write">
		<img src="images/index/say.gif"></img>
		<form id="sub_say" method="post" name="sayout" action="index.php?action=sayout">
		<textarea name="say" class="text" id="editor_id" wrap="physical"  style="width:auto;height:120px;" >#</textarea>
        <input type="submit" name="submit" class="submit" value="发表" ></input>
		</form>
	</div>
	<!-- 这里输出  说的内容 -->
	<div id="say_show">
	<?php while($_data=mysql_fetch_array($dataq)){ 
		/*
		 * 获取 头像
		 * 
		 */
		$p=DB_PRE.'ask_user';
		$sql="SELECT mid_avatar FROM $p WHERE uid='{$_data['authorid']}'";
		$result=_query($sql);
		$avatar=mysql_fetch_array($result);
	?>
	
	<dl>
		<dt>
			<p><img src="<?php echo $avatar['mid_avatar'];?>" width="32" height="32" /><?php echo $_data['author'];echo "说：";?><?php echo $_data['title'];?></p>
		</dt>
		<?php 
			/*
			 * 获得回复的内容
			 */
			$passanswer=DB_PRE.'say_answer';
			$sql_answer="SELECT * FROM $passanswer WHERE qid='{$_data['id']}' ORDER BY time DESC";
			$result_an=_query($sql_answer);
		?>
		<?php while(!!$_re=mysql_fetch_array($result_an)){
		/*
		 *头像 
		 * 
		 */
			$pa=DB_PRE.'ask_user';
			$sql="SELECT mid_avatar FROM $pa WHERE uid='{$_re['authorid']}'";
			$result=_query($sql);
			$avatar=mysql_fetch_array($result);
		 ?>	
		<dd>
		<p><img src="<?php echo $avatar['mid_avatar'];?>" width="24" height="24" /><?php  echo $_re['author'];echo "回复说：";echo $_re['contents'];echo "　 时间：";echo $_re['time'];?></p>
		</dd>
		<?php }?>
		<form  id="sub_answer" method="post" name="s_answer" action="index.php?action=s_answer">
		<input type="hidden" name="author_id" value=<?php echo $_data['id']?>></input>
		<dd><input type="text" name="answer" class="text" style="color:#FF0000" onmouseover="this.style.border='1px solid #FFCC66';this.style.height='40px';this.style.width='400px'" onmouseout="this.style.border='1px';this.style.height='20px';this.style.width='320px'"></input>
		<input type="submit" name="sub_answer" class="sub"  value="回复" onmouseover="this.style.border='1px solid #FFCC66'" onmouseout="this.style.border=''" /> </dd>
		</form> 
	</dl>
		<?php }?>
	</div>
	<div id="page_num">
			<?php echo '<ul><a href="index.php?page='.($_page+1).'">'.('下一页').'</a></ul>'?>
			<?php echo '<ul><a href="index.php?page='.($_page-1).'">'.('上一页').'</a></ul>'?>
			<?php for($i=0;$i<$_pageabsolute;$i++){
				echo '<li><a href="index.php?page='.($i+1).'">'.($i+1).'</a></li>';
			}
			?>
	</div>
	<img src="images/index/page_bg.jpg" alt="尾部" />
	</span>
	