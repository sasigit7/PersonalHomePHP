<h1>Reverse Array</h1>
<?php //////////////Assignment1:
    function reverseArray($Arr) {
		return array_reverse($Arr); // Used PHP Built-in array_reverse() function:
	}
	$fruits = ["Mango","Strawberry","Bananas","Pineapple"];
	$result = reverseArray($fruits);
	print_r($result);
?>

<?php // Using for loop 
	function reverseArray($Arr) {
		$fruitsReverse = [];
		  for($i=count($Arr)-1; $i>=0; $i--) {
			array_push($fruitsReverse,$Arr[$i]);
			}
		return $fruitsReverse;
	}
	$fruits = ["Mango","Strawberry","Bananas","Pineapple"];	 
	$result = reverseArray($fruits);
	print_r($result);
?>
<?php
/* 
Output: 
 Array ( [0] => Pineapple [1] => Bananas [2] => Strawberry [3] => Mango )
*/
?>
<hr>
<h1>Find Max Number in Array</h1>
<?php //////////////Assignment2:
    function findMaxOfArray($Arr) {
		return max($Arr); // Used PHP Built-in max function: 
	   }
	$numbers = [23,41,633,14,54,11,66,0];
	$result = findMaxOfArray($numbers);
	echo "Maximum number in the array is: $result"
?>

<?php // Using for each method: 
    $number = 0;
    function findMaxOfArray($Arr) {
		  foreach ($Arr as $key=>$val) {
			 if ($val > $number) {
			  $number = $val;
			 }
		 }
		  return $number;
		 }
	$numbers = [23,41,633,14,54,11,66,0];	 
	$result = findMaxOfArray($numbers);
	echo "Maximum number in the array is: $result"
?>
<?php
/* 
Output: 
 Maximum number in the array is: 633
*/
?>
<hr>
<hr>
<h1>Find and Return List of Even and Odd Numbers</h1>
<?php
	/*@return Array in this format: array(
		"even" => [2,4,6,8,10,12,14]
		"odd"  => [1,3,5,7,9,11,13]
	) */

    function getEvenAndOddNumbers($Arr) {
      $result = array( 'even' => array(), 'odd' => array());
        foreach($Arr as $key=>$value) {
          if($value % 2 === 0) {
            $result['even'][] = $value;
        } else {
            $result['odd'][] = $value;
     }
}
    return $result;
}
   $numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];
   $result = getEvenAndOddNumbers($numbers);
   print_r($result);
?>
<hr>
<?php
/* 
Output: 
Array ( 
	[even] => Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 [5] => 12 [6] => 14 ) 
	[odd] => Array ( [0] => 1 [1] => 3 [2] => 5 [3] => 7 [4] => 9 [5] => 11 [6] => 13 ) 
	)
*/
?>


