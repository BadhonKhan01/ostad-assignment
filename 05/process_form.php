<?php 

class Person {
  private $name;
  private $email;
  
  public function setName($name) {
    $this->name = $name;
  }
  
  public function setEmail($email) {
    $this->email = $email;
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getEmail() {
    return $this->email;
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  
  $person = new Person();
  $person->setName($name);
  $person->setEmail($email);
  
  echo 'Name: ' . $person->getName() . '<br>';
  echo 'Email: ' . $person->getEmail() . '<br>';
}