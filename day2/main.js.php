<?php
  $rand1 = rand(1, 10);
  $rand2 = rand(10, 100);
  $result = $rand1 * $rand2;
  $text = ['ajsdfkh', 'qohfare', 'zcijvjoqr', 'cneik', 'riudofk', 'xrkjfds', 'siuehgj'];
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
?>

$(document).ready(function(){
  alert('<?= $rand1."x".$rand2."=".$result; ?>');
  $('p').append('<?php echo drawImage() ?>);
});
