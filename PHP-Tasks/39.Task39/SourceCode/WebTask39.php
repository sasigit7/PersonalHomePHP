<?php
class Beverage
{
  public $name;
  function __construct()
   {
      echo "New Beverage was created . <br/>";   
	 }
   function __clone() {
      echo "Existing Beverage was cloned . <br/>";
   }
 }

// Create an object of Beverage

// Clone an Object of Beverage

// Delete or unset an object of Beverage.
?>
