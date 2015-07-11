<?php
session_start();
header("Content-Type:text/html;charset=utf-8");
include('checklogin.php');
include('db.php');
check_admin();
$db=new DB();
	 if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
 $content="upload/" . $_FILES["file"]["name"];
    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      $content);
	  copy($content,"../down/". $_FILES["file"]["name"]);
      echo "Stored in: " ."upload/" . $_FILES["file"]["name"]."<br />";
      }
    }
	$message=$db->insertdown($_POST['title'],$_POST['time'],$_POST['content'],$content);	
	echo $message;
echo "<a href='./backindex.php'>提交完成</a>";  /*提交成功 */
?>