<?php

//The parent class
class Car
{
  // Public property inside the class
  public $model; // Changed given Private property to Public to make $model variable available to child classes. 

  //Public setter method
  public function setModel($model)
  {
    //Complete this function and assign model to Class Property $model
    $this->model = $model;
  }


  public function hello()
  {
    return "Beep! I am a <i>" . $this->model . "</i>.<br />";
  }
}

////////////////////////////EXAMPLE TASK//////////////////////////
//The child class inherits the code from the parent class
class SportsCar extends Car
{
  // No code 
}
//Create an instance from the child class
$sportsCar1 = new SportsCar();

// Set the value of the class property.
// For this aim, we use a method that we created in the parent
$sportsCar1->setModel('Mercedes Benz');

//Use another method that the child class inherited from the parent class
echo $sportsCar1->hello();

echo "<br/>";
////////////////////////////TASK 1//////////////////////////////////////

//The child class inherits the code from the parent class
class SUV extends Car
{

  public function hello()
  {
    return "Beep! I am a <i>" . $this->model . "</i>.<br />";
  }
}
//Create an instance from the child class
$SUVCar = new SUV();
$SUVCar->setModel('BMW');

//Use another method that the child class inherited from the parent class
echo $SUVCar->hello();

echo "<br/>";

////////////////////////////TASK 2//////////////////////////////////////
class Audi extends Car
{

  public function hello()
  {
    return "Beep! I am a <i>" . $this->model . "</i>.<br />";
  }
}
//Create an instance from the child class
$Audi = new Audi();
$Audi->setModel('Audi');

//Use another method that the child class inherited from the parent class
echo $Audi->hello();