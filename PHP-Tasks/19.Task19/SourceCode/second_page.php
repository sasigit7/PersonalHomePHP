<!DOCTYPE html>
<html>

<head>
    <title>User Deletion Page</title>
</head>

<body>
    <?php
	$id = $_GET['user_id']; // Get Query String value by using $_GET method where user_id is the Query String. 
	// Database connection established. 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	//Write DELETE Query here
	$sql = "DELETE FROM users WHERE user_id='$id'";

	if ($conn->query($sql) === TRUE) {
		echo "Record deleted successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
	?>

</body>

</html>