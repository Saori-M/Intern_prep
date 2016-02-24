<?php
$number = trim(fgets(STDIN));

 for ($i = 1; $i <= $number; $i ++){
   for ($n = 1; $n <= $i; $n ++){
     echo "*";
   }
 echo"\n";
 }
?>
