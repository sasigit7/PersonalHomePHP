<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Global: First Page</title>
</head>
<body>
<h2>Assignment1: Passing a variable in Query string from one page to another and print it's value.</h2>
<hr>

<?php 
// Declare a variable and assign a value. 
$firstPageVar = "I am a variable passed from First Page!";

// Assigned a color to differentiate other variable value.
echo "<p style='color:green;'>" .$firstPageVar. "</p>";

// Sending first page variable value to second page. 
echo "<a href='second_page.php?q=$firstPageVar'>Click here to go to Second Page</a>";

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<hr/>";
echo "<hr/>";
?>

<?php
echo "<h3>Below is the variable value from Second Page using Query string:</h3>";
echo @$_GET['q'];

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<hr/>";
echo "<hr/>";
?>

<h2>Assignment2: Submit a HTML form and pass it's data to Second Page from First Page</h2>
   <form method="POST" action="second_page.php">
     <table style="margin-left: 50px;">
       <tr>
         <td>
           <input type="text" name="firstName" placeholder="Enter First Name" />
         </td>
       </tr>
       <tr>
         <td>
           <input type="text" name="lastName" placeholder="Enter Last Name" />
         </td>
       </tr>
       <tr>
         <td>
           <input type="email" name="email" placeholder="Enter Email Address" />
         </td>
       </tr>
       <tr>
         <td>
           <input type="number" name="phoneNumber" placeholder="Enter Phone Number" />
         </td>
       </tr>
       <tr>
         <td>
           <input type="submit" name="submit">
         </td>
       </tr>
     </table>
   </form>
</body>
</html>


