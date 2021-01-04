<?php

class Person
{
	public $arms;
	public $legs;

	public function __constructor($arms, $legs)
	{
		$this->arms = $arms;
		$this->legs = $legs;
	}
	public function showPerson($arms, $legs)
	{
		/* When this function is called from an object, Echo Output as follow:
		 (This person has 2 arms and 2 legs) 
		*/
		echo "This person has " . $arms . " arms and " . $legs . " legs.";
	}
}

// Created Two different objects of class Person to display two different results. 
$person = new Person();
$person->showPerson(2, 2);

echo "<br/>";

$person2 = new Person();
$person2->showPerson(4, 4);