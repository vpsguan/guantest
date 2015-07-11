<?php
function check_admin()
{
	   if(!private_admin()){
	   exit('ทวทจทรฮส!');

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