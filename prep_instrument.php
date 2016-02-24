<?php
header("Content-Type: text/html; charset=UTF-8");

try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog_app','dbuser','pass');
} catch (PDOException $e){
    var_dump($e->getMessage());
    exit;
}

$name = "南野";
$stmt = $dbh->prepare("SELECT * FROM engineers where name = ?");
if ($stmt->execute(array($name))) {
  while ($row = $stmt->fetch()) {
    print_r($row);
  }
}


 ?>
