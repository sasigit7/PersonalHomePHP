<?php
class Beverage
{
  public $name;
  function __construct()
   {
      echo "New Beverage was created. <br/>";   
    }
    
   function __clone() {
      echo "Existing Beverage was cloned. <br/>";
   }

   function __destruct()
   {
     echo "Beverage was destroyed.<br/>";
   }
 }

// Create an object of Beverage
$beverage = new Beverage();

// Clone an Object of Beverage
$clone = clone $beverage;

// Delete or unset an object of Beverage.
unset($beverage);