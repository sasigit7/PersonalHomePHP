<h1>Factorial</h1>
<?php
//////////////Assignment1:
function getFactorial($x)
{
	if (!ctype_digit("$x")) {  // Using ctype_digit — To Check for numeric character(s)                  
		return 'Please provide correct data type'; // Print a warning message to user
	}

	if ($x <= 1) {  // Conditional statement which checks if the parameter value is less than or equal to 1
		return 1;  // It should always return 1 
	} else {
		return $x * getFactorial($x - 1);  // Using Factorial formulae 
	}
}
echo getFactorial(5); // Call the function to get the desired output.
?>

<hr>

<?php
//////////////Assignment2:
/*Following HTML + PHP Code Generates Chess Board. Use Loops to create 
black and white chess boxes. Chess Board should contain 8 Rows and 8 Columns
*/
?>

<h1>Chess Board</h1>
<table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
    <!-- <tr>
		<td height=35px width=30px bgcolor=#FFFFFF></td>
		<td height=35px width=30px bgcolor=#000000></td>
	</tr> -->

    <?php
	function createChessBoard()
	{
		for ($row = 1; $row <= 8; $row++) {  // This for loop produces a row with 8 cells.
			echo "<tr>"; // Row start

			for ($col = 1; $col <= 8; $col++) { // This nested for loop produces a column with 8 cells.
				$total = $row + $col; // Add rows and columns to get the total number of cells.  

				// Ternary Operator for simplicity:
				echo ($total % 2 == 0) ? // A conditional statement to determine the color of each cell.
					"<td height=35px width=30px bgcolor=#FFF></td>" : // Render white color cell if it's true.
					"<td height=35px width=30px bgcolor=#000></td>"; // Render black color cell if it's false.
			}

			echo "</tr>"; // Row end
		}
	}
	createChessBoard(); // Call the function to get the desired output.
	?>
</table>