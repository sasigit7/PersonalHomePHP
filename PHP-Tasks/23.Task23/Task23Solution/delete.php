<?php
session_start()
?>
<?php
//data base connection established here
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "mydb");
$id = $_POST['id']; //get query string by using $_GET method

//insert query 
$sql = "delete from users where user_id='$id'";

// query execute section  			
$res = mysqli_query($con, $sql);
if ($res == "1") {
   echo "1"; 
	
} else {
	echo "0";
}
?>