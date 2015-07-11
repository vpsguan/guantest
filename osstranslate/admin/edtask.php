<?php
session_start();
header("Content-Type:text/html;charset=utf-8");
include('checklogin.php');
include('db.php');
check_admin();
$db=new DB();
$action=$_POST['action'];
if($action=="addtask"){
	$message=$db->insert($_POST['title'],$_POST['starttime'],$_POST['stoptime']);	
	echo $message;
}
if($action=="update"){
	
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
      echo "Stored in: " ."upload/" . $_FILES["file"]["name"]."<br />";
      }
    }
	$message=$db->update($_POST['id'],$_POST['title'],$_POST['user'],$content,$_POST['starttime'],$_POST['stoptime']);
	echo $message;
}
echo "<a href='./background.php'>提交完成</a>";  /*提交成功 */
?>
