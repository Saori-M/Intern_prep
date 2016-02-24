<?php

class User {
  // property
  public $name;
  public $age;
  //constructor
  public function __construct($name) {
    $this->name = $name;
  }

  //method
  public function sayHi() {
    echo "hi, i am $this->name!";
  }
}

$tom = new User("Tom");
$bob = new User("Bob");
$saori = new AdminUser("Saori");


class AdminUser extends User {
  public function sayHello() {
    echo "hello from Admin!";
  }
  public function sayHi() {
    echo "[admin] hi, i am $this->name!";
  }

}


echo $tom->name;
$bob->sayHi();
$saori->sayHi();
$saori->sayHello();


 ?>
