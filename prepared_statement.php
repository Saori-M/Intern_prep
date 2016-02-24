<?php
header("Content-Type: text/html; charset=UTF-8");

try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog_app','dbuser','pass');
} catch (PDOException $e){
    var_dump($e->getMessage());
    exit;
}

$name = "南野";
$age = 26;

$stmt = $dbh->prepare("insert into engineers (name,age) values (:name,:age)");

$stmt->bindParam(":name",$name,PDO::PARAM_STR);
$stmt->bindParam(":age",$age,PDO::PARAM_INT);
$stmt->execute();

$name = "清水";
$age = 30;

$stmt->bindParam(":name",$name,PDO::PARAM_STR);
$stmt->bindParam(":age",$age,PDO::PARAM_INT);
$stmt->execute();

/*
$stmt->execute(array(":name"=>"南野",":age"=>"26"));
$stmt->execute(array(":name"=>"清水",":age"=>"30"));
*/

//,(":name"=>"清水",":age"=>"30")

echo "done";



 ?>
