<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Global: Second Page</title>
</head>
<body>
<h2>Assignment1: Passing a variable in Query string from one page to another and print it's value.</h2>
<hr>
<?php 
echo "<h3>Below is the variable value from First Page using Query string:</h3>"; 
echo @$_GET['q'];

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<hr/>";
echo "<hr/>";
?>

<?php 
// Declare a variable and assign a value. 
$secondPageVar = "I am a variable passed from Second Page!";

// Assigned a color to differentiate other variable value.
echo "<p style='color:red;'>" . $secondPageVar . "</p>";

// Sending second page variable value to first page.
echo "<a href='first_page.php?q=$secondPageVar'>Click here to go to First Page</a>";

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<hr/>";
echo "<hr/>";
?>

<h2>Assignment2: Retrieve submitted HTML form data from First Page to Second Page</h2>

<?php 
  echo "<strong>Form Values:</strong>";
  echo "<br/>";
  echo "<br/>";
  

  echo "<strong>First Name</strong>    :".@$_POST['firstName']."<br/>";
  echo "<strong>Last Name</strong>     :".@$_POST['lastName']."<br/>"; 
  echo "<strong>Email Address</strong> :".@$_POST['email']."<br/>"; 
  echo "<strong>Phone Number</strong>  :".@$_POST['phoneNumber']."<br/>";  
?>
<!-- <hr/>
<br/>
<br/>
-->
<?php 
  // echo "<strong>Form Values:</strong>";
  // echo "<ul style='list-style-type: circle';>";
  // echo "<li>First Name</li>";
  // echo "<li>Last Name</li>";
  // echo "<li>Email Address</li>";
  // echo "<li>Phone Number</li>";
  // echo "</ul>";
  // echo '<li style="color: red;">text</li>';
?> 
  
</body>
</html>
