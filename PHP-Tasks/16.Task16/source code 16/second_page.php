<!DOCTYPE html>
<html>
<head>
	<title>User Submission Form via AJAX</title>
</head>
<body>
	<?php 
       if(isset($_POST['submit'])) {
	// Receive values from POST one by one
		if(isset($_POST["first_name"])) {
		  	$first_name = $_POST["first_name"];
		} else {
			$first_name = "";
		}

		if(isset($_POST["last_name"])) {
			$last_name = $_POST["last_name"];
		} else {
			$last_name = "";
		}

		if(isset($_POST["email"])) {
			$email = $_POST["email"];
		} else {
			$email = "";
		}

		if(isset($_POST["password"])) {
			$password = $_POST["password"];
		} else {
			$password = "";
		}

		if(isset($_POST["phone_number"])) {
			$phone_number = $_POST["phone_number"];
		} else {
			$phone_number = "";
		}

		// Write validations code if any of the validation fails the record should not be submitted into the database.
        $servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "myDB";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) { // If database connection fails, $conn displays a connection error. 
		    die("Connection failed: " . $conn->connect_error);
		}
		
		// Sanitization form inputs using mysql_real_escape_string: 
		$fname = mysqli_real_escape_string($conn, $_POST['first_name']);
		$lname = mysqli_real_escape_string($conn, $_POST['last_name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$pwd = mysqli_real_escape_string($conn, $_POST['password']);
		$mobile = mysqli_real_escape_string($conn, $_POST['phone_number']);


		//Write Insert Query here for User form
		$sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `phone_number`) 
				VALUES ('$fname', '$lname', '$email', '$pwd', '$mobile')";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
        echo "<br/>";
		echo "<a href='first_page.php'>Return</a>";
	}
?>	
</body>
</html>

