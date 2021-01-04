<?php 

class Person {
	// Pass a new parameter with the name of $message
	function say_hello($message) {
      echo $message;
	}
}
// Create an object of class and call say_hello function with a message e.g "Hello From Class". 
   $person = new Person(); // Creating an object of class
   $person->say_hello("Hello From Class"); // Calling Class function