<?php

//The parent class
class Car
{
  // Private property inside the class
  private static $model;

  //Public setter method
  public static function setModel($model)
  {
    return $model;
  }
}

//The child class inherits the code from the parent class
class SuperCar extends Car
{
  /* This function throws an error that Model property is not accessible here. Please provide
     a solution to resolve this issue. $model should be a private property of Car Class. Now the 
     question is how do we get Model Name inside a SuperCar Class. */
  public static function showModel()
  {
    return "Beep! I am a SuperCar <i>" . parent::setModel("Ferrari") . "</i>.<br />";
  }
}
echo SuperCar::showModel();