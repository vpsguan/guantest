<?php 
/*
 * 袁俊虎 
 * 上传头像类  
 * images/include/upface.class.php
 * 2012/7/25
 * 头像保存需要 3给文件夹  以为三处要用
 */
class UPImages { 
var $annexFolder="images/face";//附件存放点，默认为：annex 
var $smallFolder="big";//缩略图存放路径，注：必须是放在 $annexFolder下的子目录，默认为：smallimg 
var $middleFolder="middle";
var $imageName=0;
/*不需要*/
//var $markFolder = "mark";//水印图片存放处 
var $upFileType = "jpg gif png";//上传的类型，默认为：jpg gif png rar zip 
var $upFileMax=1024;//上传大小限制，单位是“KB”，默认为：1024KB 
/*字体不需要*/
var $fontType;//字体 

var $maxWidth=500; //图片最大宽度 
var $maxHeight=600; //图片最大高度 
function UPImages($annexFolder,$smallFolder,$imageName,$middleFolder,$includeFolder) { 
$this->annexFolder = $annexFolder; 
$this->smallFolder = $smallFolder;
$this->imageName = $imageName;
$this->middleFolder = $middleFolder; 
$this->fontType = $includeFolder."/04B_08__.TTF"; 
} 
function upLoad($inputName) { 
$imageName=$this->imageName;//设定当前时间为图片名称 //自己改个名字       不如是名字加密
if(@empty($_FILES[$inputName]["name"])) die("没有上传图片信息，请确认"); 
$name = explode(".",$_FILES[$inputName]["name"]);//将上传前的文件以“.”分开取得文件类型 
$imgCount = count($name);//获得截取的数量 
$imgType = $name[$imgCount-1];//取得文件的类型 
if(strpos($this->upFileType,$imgType) === false) die("上传文件类型仅支持 ".$this->upFileType." 不支持 ".$imgType); 
$photo = $imageName.".".$imgType;//写入数据库的文件名       写入数据库的名字 包包含了 类型
$uploadFile = $this->annexFolder."/".$photo;//上传后的文件名称 // 明白 
$upFileok = move_uploaded_file($_FILES[$inputName]["tmp_name"],$uploadFile); 
if($upFileok){ 
$imgSize = $_FILES[$inputName]["size"]; 
$kSize = round($imgSize/1024); 
//判断是否 太大
if($kSize > ($this->upFileMax*1024)) { 
@unlink($uploadFile); 
die("上传文件超过 ".$this->upFileMax."KB"); 
} 
}else { 
	echo $upFileMax;
die("上传图片失败，请确认你的上传文件不超过".$upFileMax." KB 或上传时间超时"); 
} 
return $photo; 
} 
//upload函数  返回值 为 写入数据库 的名字
function getInfo($photo) { 
$photo = $this->annexFolder."/".$photo; 
$imageInfo = getimagesize($photo);  ///得到高 款 类型 四个值
$imgInfo["width"] = $imageInfo[0]; 
$imgInfo["height"] = $imageInfo[1]; 
$imgInfo["type"] = $imageInfo[2]; 
$imgInfo["name"] = basename($photo);   ///返回文件名部分 
return $imgInfo; 
} 
function smallImg($photo,$width=128,$height=128) { 
$imgInfo=$this->getInfo($photo);    //调用
$photo=$this->annexFolder."/".$photo;//获得图片源 
$newName=substr($imgInfo["name"],0,strrpos($imgInfo["name"], "."))."_thumb.jpg";//新图片名称       全部变成了jpg 格式 
//判断 图片类型的  其值 1 为 GIF 格式、 2 为 JPEG/JPG 格式、3 为 PNG 格式
if($imgInfo["type"] == 1) { 
$img=imagecreatefromgif($photo); 
} elseif($imgInfo["type"] == 2) { 
$img = imagecreatefromjpeg($photo); 
} elseif($imgInfo["type"] == 3) { 
$img = imagecreatefrompng($photo); 
}else{ 
$img = ""; 
}
if(empty($img)) return False; //如果为空返回false
//此函数  返回一个图像标识符，代表了一幅大小为 x_size 和 y_size 的黑色图像。
if(function_exists("imagecreatetruecolor")) { 
$newImg =imagecreatetruecolor($width, $height); 
ImageCopyResampled($newImg,$img,0,0,0,0,$width,$height,$imgInfo["width"],$imgInfo["height"]); 
}else{ 
$newImg=imagecreate($width, $height); 
ImageCopyResized($newImg,$img,0,0,0,0,$width,$height,$imgInfo["width"],$imgInfo["height"]); 
} 
if ($this->toFile) { 
if (file_exists($this->annexFolder."/".$this->smallFolder."/".$newName)) @unlink($this->annexFolder."/".$this->smallFolder."/".$newName); 
ImageJPEG($newImg,$this->annexFolder."/".$this->smallFolder."/".$newName); 
return $this->annexFolder."/".$this->smallFolder."/".$newName; 
}else{ 
ImageJPEG($newImg); 
} 
ImageDestroy($newImg); 
ImageDestroy($img); 
return $newName; 
} 
function middleImg($photo,$width=32,$height=32) {
	$imgInfo=$this->getInfo($photo);    //调用
	$photo=$this->annexFolder."/".$photo;//获得图片源
	$newName=substr($imgInfo["name"],0,strrpos($imgInfo["name"], "."))."_thumb.jpg";//新图片名称       全部变成了jpg 格式
	//判断 图片类型的  其值 1 为 GIF 格式、 2 为 JPEG/JPG 格式、3 为 PNG 格式
	if($imgInfo["type"] == 1) {
		$img=imagecreatefromgif($photo);
	} elseif($imgInfo["type"] == 2) {
		$img = imagecreatefromjpeg($photo);
	} elseif($imgInfo["type"] == 3) {
		$img = imagecreatefrompng($photo);
	}else{
		$img = "";
	}
	if(empty($img)) return False; //如果为空返回false
	//此函数  返回一个图像标识符，代表了一幅大小为 x_size 和 y_size 的黑色图像。
	if(function_exists("imagecreatetruecolor")) {
		$newImg =imagecreatetruecolor($width, $height);
		ImageCopyResampled($newImg,$img,0,0,0,0,$width,$height,$imgInfo["width"],$imgInfo["height"]);
	}else{
		$newImg=imagecreate($width, $height);
		ImageCopyResized($newImg,$img,0,0,0,0,$width,$height,$imgInfo["width"],$imgInfo["height"]);
	}
	if ($this->toFile) {
		if (file_exists($this->annexFolder."/".$this->middleFolder."/".$newName)) @unlink($this->annexFolder."/".$this->smallFolder."/".$newName);
		ImageJPEG($newImg,$this->annexFolder."/".$this->middleFolder."/".$newName);
		return $this->annexFolder."/".$this->middleFolder."/".$newName;
	}else{
		ImageJPEG($newImg);
	}
	ImageDestroy($newImg);
	ImageDestroy($img);
	return $newName;
}
}
?> 
