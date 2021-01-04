<?php
function showVariableDataType() {
      $x = 3; $y = "hello"; $z = 5.67; $a = array(1,2); 
      # echo is used to output data to the screen.
      # The gettype() function is used to get the type of a variable.
      # <br> is used to break the line. 
      echo gettype($x)."<br>";
      echo gettype($y)."<br>";
      echo gettype($z)."<br>";
      echo gettype($a)."<br>";
}
showVariableDataType(); // Call the function to get the desired output. 
/*
:::::Output for the above function::::: 
      $x is an integer
      $y is a string
      $z is a Floating Point number / Also called as double
      $a is an array
 */

function changeDataType() {
	# For changing Datatype of a variable, code should be in this function. 
      # settype() function is used to set type or modify type of a variable       
     
      settype($x, "string"); # Before datatype conversion: $x is an integer
      echo gettype($x)."<br>"; # After datatype conversion: $x is a string
           
      settype($y, "bool"); # Before datatype conversion: $y is a string
      echo gettype($y)."<br>"; # After datatype conversion: $y is a boolean
         
      settype($z, "int"); # Before datatype conversion: $z is a floating Point number or double
      echo gettype($z)."<br>"; # After datatype conversion: $z is an integer

      # Not sure how to do datatype conversion for an array? 
      # Are the variables declared in showVariableDataType() function are Global variables? Aren't they function scope variables? 
      # I mean, I didn't re-declare them in changeDataType() function but the function outputted the desired result? 
      
}
changeDataType(); # Call the function to get the desired output.

function typeCastVariables() { 
      # For casting Variables, code should be in this function
      # Type casting/converting is the explicit conversion of a data type, In other words it is ...
      # ...a way to utilize one datatype variable into different datatype variable. 
     
      # type casting to string from integer
      $x = 3;
      echo (string)$x."<br>"; 

      # type casting to integer from string 
      $y = "hello";
      echo (int)$y."<br>";

      # type casting to integer from float
      $a = 5.67;
      echo (int)$a."<br>"; 
      
      # how to type cast to an array from other data type variables? 
      # Not sure, I am doing type casting right way above? 
     
}
typeCastVariables(); # Call the function to get the desired output.

echo "Thank you very much.";