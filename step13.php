<?php
$hash = array(
"key1" => "1",
"key2" => "2",
"key3" => "3",

);

print_r($hash["key2"]);

$hash = array_merge($hash,array("key4" => "4"));
print_r($hash);


foreach ($hash as $key => $value) {
  echo "$key". " is ". "$value\n";
}

 ?>
