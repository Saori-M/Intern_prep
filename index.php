<?php

//header("Content-Type: text/html; charset=UTF-8");

try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog_app','dbuser','pass');
} catch (PDOException $e){
    var_dump($e->getMessage());
    exit;
}

//データを格納
/*
$stmt = $dbh->prepare("insert into users (name,age) values (:name,:age)");
$stmt->execute(array(":name"=>"saori",":age"=>"20"));

echo "done";


$sql = "select * from engineers";
$stmt = $dbh->query($sql);
foreach ($stmt->fetchALL(PDO::FETCH_ASSOC) as $user){
  var_dump($user);
}
echo $dbh->query("select count(distinct name) from engineers")->fetchColumn() . "records found";
*/

//データの更新
/*
$stmt = $dbh->prepare("update engineers set age = :age where name like :name");
$stmt->execute(array(":age"=>"21",":name"=>"Saori"));

echo "done";
*/

//データの削除
/*
$stmt = $dbh->prepare("delete from engineers where name = :name");
$stmt->execute(array(":name"=>"Saori"));

echo "done";
*/

//Cookie
/*
setcookie('myName','saori', time()+10);
echo $_COOKIE['myName'];
*/

//session保存
/*
session_start();
$_SESSION['myName'] = "Saori";
echo $_SESSION['myName'];
*/


$dbh = null;
 ?>
