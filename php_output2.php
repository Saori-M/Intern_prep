<?php
header("Content-Type: text/html; charset=UTF-8");
try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog_app','dbuser','pass');
} catch (PDOException $e){
    var_dump($e->getMessage());
    exit;
}
$stmt = $dbh->prepare("SELECT * FROM engineers");
$stmt->execute(array());


 ?>

 <html>
  <body>
<?php
$data = $stmt->fetchAll();
foreach($data as $row) {
  echo $row["name"].":".$row["age"]."歳";
 ?>
  <br />---<br />
<?php
  }
 ?>

  </body>
 </html>
