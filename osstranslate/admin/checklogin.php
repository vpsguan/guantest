<?php
function check_admin()
{
	   if(!private_admin()){
	   exit('�Ƿ�����!');

	   }
}
function private_admin()
{
       if(isset($_COOKIE['ckaid'])&&!empty($_COOKIE['ckaid'])){
	  return true;
       }
	  else{
	  return false;
	  }
}
?>