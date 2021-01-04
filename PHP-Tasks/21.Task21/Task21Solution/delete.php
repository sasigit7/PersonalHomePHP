<?php
session_start()
?>
<h1>
    <center>Delete Record</center>
</h1>

<?php
//data base connection established here
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "mydb");
$id = $_GET['id']; //get query string by using $_GET method

//insert query 
$sql = "delete from users where user_id='$id'";

// query execute section  			
$res = mysqli_query($con, $sql);
if ($res == "1") {
	$_SESSION['msg'] = "Your record has been deleted successfully.";
	header("location:dashboard.php");
} else {
	echo "Delete failed";
	echo "<br/>";
	echo "<a href='delete.php'>Click Here to go to table</a>";
}
?>