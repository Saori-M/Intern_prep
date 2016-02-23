<?php
$array1 = array(1,2,3,4);

echo sum($array1);

 function sum($array){
  $sum = 0;
  for ($i = 0; $i < count($array); $i++){
    $sum = $sum + $array[$i];
  }
 return $sum;
}

?>
