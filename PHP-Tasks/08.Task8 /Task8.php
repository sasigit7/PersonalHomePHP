<h1>PHP Arrays Functions</h1>
<?php
	/*This function accepts a parameter which needs to Output following
		Total Items in array : 10
		Maximum element in array : 100
		Minimum element in array: 1
		Sorted Array ( Ascending Order )
		Sorted Array ( Descending Order )
		Sum Of Array : 
		String : 1 * 23 * 43 * 54 * 51 * 65 * 73 * 82 * 91 * 100

	*/
	function performArrayFunctions($arr) {
		echo count($arr)."<br/>"; // Total number of elements in an array => 10
        echo max($arr)."<br/>"; // Maximum element in an array => 100
		echo min($arr)."<br/>";// Minimum element in an array => 1

		sort($arr); // Sort elements in ascending order
		print_r($arr); 
		// Prints the output => Array ( [0] => 1 [1] => 23 [2] => 43 [3] => 51 [4] => 54 [5] => 65 [6] => 73 [7] => 82 [8] => 91 [9] => 100 )
		echo "<br/>"; 
		
		rsort($arr); // Sort elements in descending order
		print_r($arr); 
		// Prints the output => Array ( [0] => 100 [1] => 91 [2] => 82 [3] => 73 [4] => 65 [5] => 54 [6] => 51 [7] => 43 [8] => 23 [9] => 1 )
		echo "<br/>";

		print_r(array_sum($arr)); 
		// Prints the sum of an array => 583
		echo "<br/>";
	   
		sort($arr);
		// Converted all array elements into a string and concatenated with *
		echo "String : "; print_r(implode(' * ',$arr)); 
		// Prints => String : 1 * 23 * 43 * 51 * 54 * 65 * 73 * 82 * 91 * 100
    }
	$arr = [1,23,43,54,51,65,73,82,91,100]; // global scope
	performArrayFunctions($arr); // outputs as described in the doc
?>
<hr>
<h1>PHP String Functions</h1>
<?php
	/*This function accepts a parameter which needs to Output following
		Extracted String = 
		String Length =
		Upper Case String =
		Lower Case String = 
		First Letter Uppercase of Sentence =
		First Letter Uppercase of each word = 
	*/
	
	function performStringFunctions($str) {
		print_r(substr($str, 20));
		// Prints => jumped over the lazy dog
		echo "<br/>";
		
		echo strlen($str); // 44
		echo "<br/>";
		
		echo strtoupper($str); // THE QUICK BROWN FOX JUMPED OVER THE LAZY DOG
		echo "<br/>";
		
		echo strtolower($str); // the quick brown fox jumped over the lazy dog
		echo "<br/>";
		
		echo ucfirst($str); // The quick brown fox jumped over the lazy dog
		echo "<br/>";
		
		echo ucwords($str); // The Quick Brown Fox Jumped Over The Lazy Dog
		echo "<br/>";
		
		$substring = substr($str, 20);
		echo str_replace("dog", "cat", $substring); // jumped over the lazy cat
		}
		
	   $str = "The quick brown fox jumped over the lazy dog";
	   performStringFunctions($str);
	
?>
<hr>
<hr>
