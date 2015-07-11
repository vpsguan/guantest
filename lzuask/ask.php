<?php
/*
 * 肖祖鹏
 * ask.php
 * 2012/7/13
 * 袁俊虎 修改 
 * 增加链接   我要提问  搜索答案
 * 2012/7/25
 * 2012/8/13 修改
 */
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径
$A->judge_session();
require ROOT_PATH.'mode/question.class.php';
$_sql='SELECT status FROM '.DB_PRE.'ask_question';
$result=mysql_query("$_sql");
$unsolve=0;
$solved=0;
while($row=mysql_fetch_row($result))
{
	if($row[0]==0){
		$unsolve++;
		}else{
			$solved++;
		}
}
$_sql_1='SELECT is_login FROM '.DB_PRE.'ask_user';
$result_1=mysql_query("$_sql_1");
$now_login=0;
$al_registered=0;
while($row1=mysql_fetch_row($result_1))
{
	$al_registered++;
	if($row1[0]==1){ $now_login++; }
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的问答</title>
<link rel="stylesheet" type="text/css" href="css/header.css"/>
<link rel="stylesheet" type="text/css" href="css/ask.css" />
<script type="text/javascript" src="js/ask.js"></script>
</head>
<body>
<?php
	require ROOT_PATH.'includes/header.php'; 
?>
<div id="search">
   <div class="leftborder"></div>
   <div class="count">
      <ul>
         <li>已解决问题数:<?php echo $solved ?></li><br />
         <li>待解决问题数:<?php echo $unsolve ?></li><br />
      </ul>
      </div>
   <form>
   <input type="text"  name="search"  value="搜搜" class="input"  id="input"/>
    <input type="image" id="squestion" src="css/default/search_btn.gif"   />
     <input type="image" src="css/default/ask.gif" id="aquestion"  />
     </form>
     <div class="rightborder"></div>
      <div class="online">
      <ul>
      <li>在线会员:<?php echo $now_login; ?>人</li>
      <li>注册用户:<?php echo $al_registered; ?>人</li>
      </ul>
      </div>      
</div>
<div id="content">
<!--左边栏-->
   <div class="left">
    <div class="classify">
     <div class="up"></div>
     <div class="details">
       <div class="tittle1">问题分类</div>
       <div class="content4">
       <?php
	   $_sql_5='SELECT name,question FROM '.DB_PRE.'ask_category ORDER BY displayorder';
	   $result_5=mysql_query("$_sql_5");
	   $i=0;
	   if($i<8)
	   {
		   while($category=mysql_fetch_array($result_5))
		   {
	        $i++;
			echo '<a href="#">';
	        echo $category['name'].'('.$category['question'].')';
			echo '</a>';
			echo '&nbsp;&nbsp;';
	        if($i==4)
	         {
		       echo '<br>';
		     }
		   }
	   }
	   ?>
       </div>
       <div class="more"><a href="details.php?type=classify" >查看更多</a></div>
     </div>
    <div class="down"></div>
    </div>
    <div class="charts">
     <div class="up"></div>
     <div class="details">
     <div class="tittle1">积分排行榜</div>
     <div class="content4"><?php
	   $_sql_5='SELECT uid,username,credits FROM '.DB_PRE.'ask_user ORDER BY credits DESC';
	   $result_5=mysql_query("$_sql_5");
		   while($top=mysql_fetch_array($result_5))
		   {?>
	       <tr> 
	        <td><?php echo $top['username'];?></td> 
	        <td><?php echo $top['credits'];?></td>
	        <br>
		 </tr>
		 <?php  } ?>
	  </div>
     <div class="more"><a href="details.php?type=charts">查看更多</a></div>
     </div>
     <div class="down"></div>  
    </div>
    </div>
<!--左边栏结束-->
<!--中间栏-->  
   <div class="center">
     <div class="details1">
     <div class="title_left_border"></div>
     <div class="title">
      <div class="left0">精彩推荐的问题</div>
      <div class="right0"><a href="details.php?type=answers">更多</a></div>
     </div>
     <div class="title_right_border"></div>
     <div class="content1">
      <?php 
	 $_sql_2='SELECT id,title,author,time FROM '.DB_PRE.'ask_question ORDER BY answers DESC';
	 $result_2=mysql_query("$_sql_2");
	 $i=0;
	 while(!!$question2=mysql_fetch_array($result_2))
	 {if($i>3) break; ?><a  href="que_details.php?type=<?php echo $question2['id'];?>"><?php 
		 echo '*　';
		 echo $question2['title'];
		 echo'<br>';
		 $i++;
	 }
	 ?>
	 </a>
     </div>
     </div>
     <div class="details1">
     <div class="title_left_border"></div>
     <div class="title">
      <div class="left0">大家都在问什么</div>
      <div class="right0"><a href="details.php?type=views">更多</a></div>
     </div>
     <div class="title_right_border"></div><br /><br />  
     <div class="content1">
	  <?php 
	 $_sql_2='SELECT id,title,author,time,answers FROM '.DB_PRE.'ask_question ORDER BY views DESC';
	 $result_2=mysql_query("$_sql_2");
	 $i=0;
	 while($question2=mysql_fetch_array($result_2))
	 {if($i>3) break; ?><a class="acont" href="que_details.php?type=<?php echo $question2['id'];?>"><?php 
	 	 echo '<div class="piece">';
		 echo '*　';
		 echo $question2['title'];
		
		 ?>
		 </a>
		 <?php 
		 echo $question2['answers'].'个回答';
		 echo'</div>';
		 $i++;
	 }
	   ?>
     </div>
     </div> 
     <div class="details1">
     <div class="title_left_border">
     </div>
     <div class="title">
      <div class="left0">悬赏求答案的问题
      </div>
      <div class="right0"><a href="details.php?type=price">更多</a>
      </div>
     </div>
     <div class="title_right_border">
     </div>
     <br />
     <br />
     <div class="content1">
      <?php 
	 $_sql_3='SELECT id,title,price,author,time,answers FROM '.DB_PRE.'ask_question WHERE status=0 AND price!=0 ORDER BY price DESC';
	 $result_3=_query("$_sql_3");
	 $i=0;
	 while($question3=mysql_fetch_array($result_3))
	 { if($i>4) break;
	 ?><a href="que_details.php?type=<?php echo $question3['id'];?>">
	 <img src="images/default/price.gif" alt="悬赏" />
	 <?php 
    	 echo $question3['price'].'　';
		 echo $question3['author'].'　';
		 echo $question3['title'].'　　';
		 ?></a>
		 <?php 
		 echo $question3['answers'].'个回答';
		 echo '<br>';
		 $i++;
	 }
	   ?>
	   </div>
    </div>
      <div class="details1">
     <div class="title_left_border"></div>
     <div class="title">
      <div class="left0">最新已解决的问题</div>
      <div class="right0"><a href="details.php?type=status">更多</a></div>
     </div>
     <div class="title_right_border"></div><br /><br /> 
     <div class="content1">
      <?php 
	 $_sql_4='SELECT id,title,author,time,answers FROM '.DB_PRE.'ask_question WHERE status=1 ORDER BY time DESC';
	 $result_4=mysql_query("$_sql_4");
	 $i=0;
	 if($i<4){
	 while($question4=mysql_fetch_array($result_4))
	 {	
	 	if($i>4) break; ?><a href="que_details.php?type=<?php echo $question4['id'];?>"><?php
	 	echo '<div class="piece">';
	 	echo '*　';
	 	echo $question4['title'];
	 	?>
	 	</a>
	 	<?php
	 	echo $question4['answers'].'个回答';
	 	echo'</div>';
	 	$i++;
	 }
	 }
	   ?>
     </div>
     </div>
   </div>
<!--中间栏结束-->
<!--右边栏-->
   <div class="right">
   <div class="message">
     <div class="up"></div>
     <div class="details">
      <div class="tittle1"> 站內公告</div>
      <div class="content4">
      <?php
	    $_sql_7='SELECT title,author FROM '.DB_PRE.'ask_note ORDER BY time DESC';
		$result_7=mysql_query("$_sql_7");
		$i=0;
	 if($i<4){
	 while($note=mysql_fetch_array($result_7))
	 {
		 $i++;
		 echo $i.'.';
         echo $note['title'];
		 echo '&nbsp;&nbsp;';
		 
		 echo '<br>';
	 }
	 }
	  ?>
      </div>
      <div class="more"><a href="details.php?type=message">查看全部公告</a></div>
     </div>
    <div class="down"></div>
    </div>
    <div class="hot">
     <div class="up"></div>
     <div class="details">
      <div class="tittle1">热点关键词</div>
      <div class="content4"></div>
     </div>
     <div class="down"></div>  
    </div>
</div>
<!--右边栏结束-->
</div>
<?php
	require ROOT_PATH.'includes/FOOTER.php'; 
?>
</body>
</html>