<h1>Local and Global Scope</h1>
<?php
	$number = 10; // global scope
	echo $number."<br/>"; // outputs 10
   
	/*This function accepts a parameter which needs to multiplied with a global variable*/
	function multiply ($multiplyBy) {
		global $number; // Import global variable $number using "global" keyword inside the function
		return $number * $multiplyBy;
	}
	echo "Number Output: " . multiply (5); // Output: 50
?>
<hr>

<h1>Static Variables</h1>
<?php
	/* This function has a number variable. Use Static variable power so that
	variable value stays in memory */

	function printNumber() {
		static $number = 0; // declare static variable
		$number = $number + 5; 
		echo "$number"."<br/>";
	}
	
	printNumber(); // 5
	printNumber(); // 10
	printNumber(); // 15
	printNumber(); // 20
?>
<hr>
<hr>

