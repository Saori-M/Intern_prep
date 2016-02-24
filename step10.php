<?php
$array1 = array(1,2,3,4,5);

function average($array){
  $sum = 0;
  for ($i = 0; $i < count($array); $i++){
    $sum = $sum + $array[$i];
  }
  return $sum/count($array);

}

echo average($array1);


 ?>
