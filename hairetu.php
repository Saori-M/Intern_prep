<?php

$sales = array(
  "taguchi" => 200,
  "kawaguchi"=> 100,
  "mizoguchi"=> 350,
);
//
// $sales = [
//   "taguchi" => 200,
//   "kawaguchi"=> 100,
//   "mizoguchi"=> 350,
// ];

foreach ($sales as $key => $value):
  echo "($key) $value ";
endforeach

//コロン構文
//phpを埋め込むときに、すっきりと見せることができる

 ?>
