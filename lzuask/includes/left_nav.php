 <?php $user_info=_user($login['lzuname']);?>
 <div class="nav">
    <!--头像-->
     <div class="avatar">
     <img src="<?php echo $user_info['avatar'];?>" />
      <div class="username">
       <?php echo $user_info['username']; ?>&nbsp;&nbsp;&nbsp; 
       <?php 
       _groupid($user_info['groupid']);
       ?>
      </div>
     </div>
     <!--导航栏-->
     <ul id="nav1">
      <li>
      <a href="personnav.php"><p>我的主页</p></a>
      </li>
      <li>
      <a href="myquestion.php"><p>我的问答</p></a>
         <ul>
           <li><a href="myquestion.php">我的提问</a></li>
           <li><a href="myanswer.php">我的回答</a></li>
         </ul>
      </li>
      <li>
      <a href="getmessage.php"><p>我的消息</p></a>
         <ul>
           <li><a href="getmessage.php">收件箱</a></li>
           <li><a href="sendmessage.php">已发送</a></li>
         </ul>
      </li>
      <li>
      <a href="mycollection.php"><p>我的收藏</p></a>
      </li>
      <li>
      <a href="personalinfo.php"><p>我的设置</p></a>
         <ul>
           <li><a href="personalinfo.php">个人信息</a></li>
           <li><a href="change_secret.php">修改密码</a></li>
           <li><a href="change_avater.php">修改头像</a></li>
         </ul>
      </li>
     </ul>
 </div>
