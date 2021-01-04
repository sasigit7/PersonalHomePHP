<?php 
// A session is a way to store information (in variables) to be used across multiple pages.
// Unlike a cookie, the information is not stored on the users computer but in servers. 
// Session variables are set with the PHP global variable: $_SESSION
// $_SESSION['variable name'], here variable name is nothing but session name
// By default, PHP Session lasts only 24 minutes or 1440 seconds. 
// A session is started with the session_start() function.
   session_start();
?>

<?php 
  if(isset($_SESSION['message'])) {
        echo "Congratulations! You are successfully logged in.";
		echo "<br/>";
		echo "Your session username is " . $_SESSION['message'];
		// A session is usually stored on the server, we can save values in session when users log in
		// and also use flash messages when moving across pages.
	}
	if(isset($_POST['sub'])) {
		// echo "<pre>";print_r($_POST);
	    $userName = $_POST['uname'];
		$password = $_POST['psw'];

     // When submitted if the value of username and password is not empty, the session should be saved.
		if(!empty($userName) && !empty($password)) {  
		   $_SESSION['message'] = $userName; 
		// Store username in session when the user is logged in by providing username and password.
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<h1>Welcome to Dashboard</h1>
</body>
</html>


