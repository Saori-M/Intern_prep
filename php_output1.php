<html>
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
$stmt->execute(array($name));
$row = $stmt->fetch()
 ?>
  <body>
    <h2>
      <?php echo $row["age"]; ?>
    </h2>
  </body>
</html>
