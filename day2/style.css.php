<?php
 header('Content-type: text/css');

 $colors = array('lightgrey', 'red', 'blue', 'black', 'pink', 'lime', 'magenta');
 function randColor(){
   $rand = rand(0,6);
   return $colors[$rand];
 }

 $color = randColor();
?>

h1{
  color: <?php echo $color; ?>;
}
