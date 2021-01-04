<?php 

class Person {
	public $message;
	
	// Add a constructor to this class that should receive a parameter $message and 
	// assign it to $message property of class. 

	// If you create a __construct() function, PHP will automatically call this 
	// function when you create an object from a class.
	
    function __construct($message) {
	   echo $this->message = $message;
	}
	
	function say_hello() {
		echo $this->message();
	}
}

// Created Two objects of class Person. 
  $person = new Person("Hi, I am object one of Person class."); 
  echo "<br/>";
  $person2 = new Person("Hi, I am object two of Person class.");