<?php
$text = ['text1', 'text2', 'text3', 'text4', 'text5', 'text6', 'text7'];
$index = rand(0, 6);
function drawImage(){
  header('Content-Type: image/png');
  $im = @imagecreate(300, 40)
      or die('Cannot Initialize new GD image stream');
  $background_color = imagecolorallocate($im, 0xFF, 0xCC, 0xDD);
  $text_color = imagecolorallocate($im, 133, 14, 91);
  imagestring($im, 5, 300, 300,  $text[$index], $text_color);
  imagepng($im);
  imagedestroy($im);
}
echo drawImage();
?>
