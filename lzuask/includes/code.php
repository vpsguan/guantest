<?php

/*
 * 
 * 
 * 
 */

//创建随机码
session_start();
$_width=75;
$_height=25;
$num=4;
_code($_width,$_height,$num);

//验证码
function _code($_width=75,$_height=25,$num=4){
	for($i=0;$i<$num;$i++){
		$_nmsg.=dechex(mt_rand(0,15));
	}
	//保存到session
	$_SESSION['code']=$_nmsg;
	//
	//创建图像
	$_img=imagecreatetruecolor($_width,$_height);

	//白

	$_white=imagecolorallocate($_img,255,255,255);

	imagefill($_img,0,0,$_white);

	$_black=imagecolorallocate($_img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
	//	花边狂
	imagerectangle($_img,0,0,$_width-1,$_height-1,$_black);

	for($i=0;$i<3;$i++){
		$_rnd_color=imagecolorallocate($_img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
		imageline($_img,mt_rand(0,$_width),mt_rand(0,$_height),mt_rand(0,$_width),mt_rand(0,$_height),$_rnd_color);
	}

	//随即大雪花
	for($i=0;$i<10;$i++){
		imagestring($_img,1,mt_rand(1,$_width),mt_rand(1,$_height),"*",imagecolorallocate($_img,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255)));

	}

	//输出验证码
	for($i=0;$i<strlen($_SESSION['code']);$i++){
		$_rnd_color = imagecolorallocate($_img,mt_rand(0,100),mt_rand(0,150),mt_rand(0,200));
		imagestring($_img,5,$i*$_width/$num+mt_rand(1,10),mt_rand(1,$_height/2),$_SESSION['code'][$i],$_rnd_color);
	}

	//输出图像
	header('Content-Type:image/png');
	imagepng($_img);
	//销毁
	imagedestroy($_img);

}
?>

