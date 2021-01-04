<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
</head>
<body>
	<h1>PHP Headers</h1>
	<?php 
		/* Complete this function using PHP headers such that it redirects to the page specified in the parameter*/
		function redirect_to($path) {
		  // Using built in header function 
           header('location:'.$path);
		}
		$path = "second_page.php";
		redirect_to($path);	
		/* This function will redirect this page to second_page.php but it should be commented out 
		   in order to execute the following code below. 
		 */
	?>
<hr>
	<h2>Validations Functions</h2>
		<?php 
			require_once ('validation_functions.php');
	    // Use require when the file is required by the application.
        // Use include when the file is not required and application should continue when file is not found.
		
			$errors = array();
			$username = trim("");

			if(!has_presence($username)) {
				$errors["username"] = "Username cannot be blank.";
			}

			$activity = "I went to Newyork";
			$max = 10;
            if(!has_max_length($activity, $max)) {
				$errors["activity"] = "Activity should not be greater than $max characters.";
			}

			if(!empty($errors)) {
				foreach($errors as $error) {
					echo $error . "<br>";
			}

		}
	?>
</body>
</html>