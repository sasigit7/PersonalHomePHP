<?php 

class Person {
	public $arms;
	public $legs;
	// Add a constructor to this class that should receive a parameter $message and assign it to $message property of class
	public __constructor($arms, $legs) {
		$this->arms = $arms;
		$this->legs = $legs;
	}
	public function showPerson() {
		/* When this function is called from an object, Echo Output as follow:
		 (This person has 2 arms and 2 legs) */
	}
}

// Create Two objects of class Person. 

$person = new Person();
$person->showPerson();

?>