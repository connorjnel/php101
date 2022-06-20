<?php

class Person // Create a class
{
  //Create
  private $name;
  private $email;

  // Constructor

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
    echo __CLASS__ .  " Created<br>";
  }

  // Setter function

  public function setName($name)
  {
    $this->name = $name;
  }

  // Getter function

  public function getName()
  {
    return $this->name . "<br>"; // $this allows us to access properties
  }

  // Setter function

  public function setEmail($email)
  {
    $this->email = $email;
  }

  // Getter function

  public function getEmail()
  {
    return $this->email . "<br>"; // $this allows us to access properties
  }
}

// Instantiate a object in class
$person1 = new Person("John Doe", "jdope@test.com"); // When using constructor need to provide arguments when instantiating

// Unsecure method
// $person1->name = "John Doe";
// echo $person1->name;

// Use setter function to write object property
// $person1->setName("John Doe");
// $person1->setEmail("haha@test.com");


// Use getter function to read object property
echo $person1->getName();
echo $person1->getEmail();

// Using 