<?php
///////////////////////////// Assignment 1:
/*
Use all conditional operators between $a and $b to display the Output. 
*/
function conditionalOperators() {
	$a = 42;          $b = 0;
	if( $a && $b ) {            
		echo "TEST1 : Both a and b are true<br/>";
	}
	else {             
		echo "TEST1 : Either a or b is false<br/>";
	} 

	// your code is here => Using if else statements:
	if ($a || $b) {
		echo "TEST2 : Either a or b is false<br/>";
	} else {
		echo "TEST2 : Both a and b are true<br/>";
	}

	if($a===42 && $b===1) {
		echo "TEST3 : Both a and b are false<br/>";
	} else {
		echo "TEST3 : Either a or b is true<br/>";
	}

	if($a===40 && $b===0) {
		echo "TEST4 : Both a and b are true<br/>";
	} else {
		echo "TEST4 : Either a or b is true<br/>";
	}
    
    if($a===42 || $b!==0) {
      echo "TEST5 : a is true<br/>";
    } else {
      echo "TEST5 : a is false<br/>";
    }
    
    if($a!==42 || $b===0) {
      echo "TEST6 : b is true<br/>";
    } else {
      echo "TEST6 : b is false<br/>";
    }
 
    // Using Ternary Operator: 
    echo ($a < $b) ? "TEST7 : a is true": "TEST7: a is false<br/>";
    echo ($a > $b) ? "TEST8 : b is false": "TEST8: b is true<br/>"; 
}
conditionalOperators();

/* OUTPUT
TEST1 : Either a or b is false 
TEST2 : Either a or b is false 
TEST3 : Either a or b is true 
TEST4 : Either a or b is true 
TEST5 : a is true  
TEST6 : b is true  
TEST7 : a is false 
TEST8 : b is false 
*/

echo "<br>"; // Break the line

///////////////////////////// Assignment 2: 
/*
numberInSingleLine() => 
This function has some variables. Add code in this function which will print the number In Single Line.
*/

function numberInSingleLine () {
	$x = 0;$y = 1;$z = 2;$a = 3;
    echo "$x$y$z$a";
}
numberInSingleLine ();

/* OUTPUT: 
  0123
*/

echo "<br>"; // Break the line

///////////////////////////// Assignment 3: 
/* iterateVariables() => Enhance this function and iterate a variable from 1 to 10 and  
 print all numbers except 4 and 6 and exit loop at 8.
 */

function iterateVariables () {
  for ($x = 1; $x <= 10; $x++) { // Print all numbers from 1 to 10.
	if ($x === 8) { // Exit the loop at 8
	  break;
	}
	if ( $x !== 4 && $x !==6) { // Exclude numbers 4 and 6 from printing.
	   echo "The number is : " .$x. "<br>";
	}
  }
  }
iterateVariables (); // Call the function to get the desired output

/* OUTPUT: 
The number is : 1
The number is : 2
The number is : 3
The number is : 5
The number is : 7
*/

?>