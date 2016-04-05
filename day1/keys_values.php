<?php
  function printArray2($arr){
    echo "There are " .count($arr). " keys in this array: ";
    foreach($arr as $key => $value){
      echo "$key, ";
    }
    echo "<br>";
    foreach($arr as $key => $value){
      echo "The value in the key '" .$key. "' is '" .$value."'.<br>";
    }
  }
  $user = array("first_name" => "Michael", "last_name" => "Choi");
  $user2 = array("first_name" => "Kyungbae", "middle_name" => "Test", "last_name" => "Kim");
  printArray2($user);
  printArray2($user2);
?>
