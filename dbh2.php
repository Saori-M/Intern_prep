<?php
header("Content-Type: text/html; charset=UTF-8");

function div($a, $b) {
  try {
    if ($b === 0) {
      throw new Exception('cannot divide by 0!');
    }
    echo $a / $b;
  } catch(Exception $e){
    echo $e->getMessage();
    exit ("スクリプトを終了します");
  }
}

div(7, 2);
div(5, 0);

 ?>
