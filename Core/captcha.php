<?php 
session_start();
$string= md5(time());
$string= substr($string,0,6); // cắt chuỗi lấy 6 kí tự đầu

$_SESSION['captcha']=$string;
$img= imagecreate(110, 48);
for($i=0;$i<20;$i++)
{
 imageline ( $img , rand(0,100) , rand(0,100) , rand(0,100),rand(0,100),rand(0,100000));   
}

$backgroud = imagecolorallocate($img, 0, 0, 0);
$text_color = imagecolorallocate($img, 255, 255, 255);
imagestring($img, 5, 20, 15, $string, $text_color);

header("Content-type: image/png"); // định nghĩa file là một hình ảnh
imagepng($img);
imagedestroy($img);
 ?>