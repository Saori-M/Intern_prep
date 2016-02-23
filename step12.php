<?php
$array = array(1,2,3,4,5,6,7);
$sum = 0;
$answer = array();
foreach ($array as $value){
  $sum = $sum + $value;

  if($sum > 15){
    break;
  }
  $answer[] = $value;
}

print_r($answer);

 ?>
