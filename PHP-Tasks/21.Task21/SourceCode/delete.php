<?php 
	
// Recieve values from POST one by one
if(isset($_GET["user_id"])) {
	$user_id = $_GET["user_id"];
} else {
	echo 'Please provide User ID in URL';
	exit;
}

// write validations code if any of the validation fails the record should not be submitted into the database.

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Write DELETE Query here
$sql = "";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>