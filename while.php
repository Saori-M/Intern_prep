<?php
$array = array(1,2,3,4,5,6,7);
$sum = 0;
foreach ($array as $value){

  if($sum >= 15){
    break;
  }
$sum = $sum + $value;
}
echo $sum;

 ?>
