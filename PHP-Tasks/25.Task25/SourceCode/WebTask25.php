<!DOCTYPE html>
<html>

<head>
    <title>REFERENCE VARIABLES</title>
</head>

<body>
    <h2>REFERENCE VARIABLES</h2>
    <?php
	$a = 1;
	$b = 4;

	echo "a: $a / b:$b" . "</br>";
	//outputs a:1 / b:4
	$b = &$a; // <-- $b is pointing to the $a variable value.
	echo "a: $a / b:$b" . "</br>";
	//Outputs a:1 b:1 

	/*Passing variables as reference in functions*/

	function ref_test(&$var)
	{
		// Multiply passed value by 2 and do not return it
		// Use $var variable to change value of $x variable outside this function.

	}
	$x = 10;
	ref_test($x);
	echo $x; // The output should be 20. Make sure you DO NOT directly use $x variable to change its value

	?>

</body>

</html>