<?php
$array = array(1,2,3,4,5);

for ($i = 1; $i < 10; $i ++){
  if (in_array("$i",$array)){
    $array[] = "$i";
  } else {
    continue;
  }
}

?>
