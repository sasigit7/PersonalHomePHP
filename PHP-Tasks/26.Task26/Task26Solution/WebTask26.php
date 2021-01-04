<!DOCTYPE html>
<html>

<head>
    <title>Array Functions</title>
</head>

<body>
    <h2>Array Functions</h2>
    <?php
	$array = [1, 2, 3, 4, 5, 6];
	echo "Given Array => ";
	print_r($array);

	echo "<br/>";
	echo "<br/>";

	//Write php array function to remove first element from an array
	array_shift($array);
	echo "Shift method removes first element => ";
	print_r($array);

	echo "<br/>";

	//Write php array function to prepend an element at the top of array
	array_unshift($array, 1);
	echo "UnShift method adds an element in the beginning => ";
	print_r($array);

	echo "<br/>";

	//Write php array function to add an element at the end of an array
	array_push($array, 7);
	echo "Push method adds an element at the end => ";
	print_r($array);

	echo "<br/>";

	//Write php array function to remove last element from an array
	array_pop($array);
	echo "Pop method removes last element => ";
	print_r($array);

	echo "<br/>";
	?>

</body>

</html>