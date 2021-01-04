<?php 

//The parent class
class Car {
  // Private property inside the class
  private $model;
 
  //Public setter method
  public function setModel($model)
  {
    //Complete this function and assign model to Class Property $model
  }
  //Implement a getModel Function here
 
  public function hello()
  {
    return "beep! I am a <i>" . $this -> model . "</i><br />";
  }
}
 
 
//The child class inherits the code from the parent class
class SportsCar extends Car {
  /* This function throws an error that Model property is not accessible here. Please provide
     a solution to resolve this issue. $model should be a private property of Car Class. Now the 
     question is how do we get Model Name inside a SportsCar Class. */
  public function showModel()
  {
    //Try to get $this->model value here. As $model is a private property of Car Class. It is not accessible here.
    // Below line Throws an error
    return "beep! I am a SportsCar <i>" . $this -> model . "</i><br />";
  }

	
}
 
 
//Create an instance from the child class
$sportsCar1 = new SportsCar();
  
// Set the value of the class’ property.
// For this aim, we use a method that we created in the parent
$sportsCar1 -> setModel('Ferrari');
  
//Use another method that the child class inherited from the parent class
echo $sportsCar1 -> showModel();

?>