<?php 
session_start()
?>

<!DOCTYPE html>
<html>

<head>
    <title>First Page</title>
</head>
<?php 
// This code is used to get selected user details from database.
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "myDB");
$id = $_GET['id'];
$sql = "select *from users where user_id='" . $id . "'";
$data = mysqli_query($con, $sql);
while ($result = mysqli_fetch_assoc($data)) {
?>

<body>
    <h1>Update User</h1>
    <form method="POST" action="">
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="first_name" id="first_name" value="<?php echo $result['first_name']; ?>">
                </td>
            </tr>

            <tr>
                <td>Last Name:</td>
                <td><input type=" text" name="last_name" id="last_name" value="<?php echo $result['last_name']; ?>">
                </td>
            </tr>

            <tr>
                <td>Email Address:</td>
                <td><input type="email" name="email" id="email" value="<?php echo $result['email']; ?>"></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password" value="<?php echo $result['password']; ?>">
                </td>
            </tr>

            <tr>
                <td>Phone Number:</td>
                <td><input type="number" name="phone_number" id="phone_number"
                        value="<?php echo $result['phone_number']; ?>">
                </td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="update"></td>
            </tr>

        </table>
    </form>
    <?php  } ?>
</body>

</html>

<?php
       $con=mysqli_connect("localhost","root","");
		mysqli_select_db($con, "myDB");
        if (isset($_POST['submit'])) {
            $user_id=$_POST['user_id'];
            $fname=$_POST['first_name'];
            $lname=$_POST['last_name'];
            $email=$_POST['email'];
            $pwd=md5($_POST['password']); // PHP built in function (md5)=> message encryption 
			$phone=$_POST['phone_number'];
			$id = $_GET['id'];
        
            //insert query
          $sql="update users set first_name='$fname',last_name='$lname',email='$email',
		  password='$pwd',phone_number='$phone' where user_id='$id'";
            
            
            // query execute section
            $res=mysqli_query($con, $sql);
            if ($res=="1") {
                $_SESSION['msg']="Your record has been udpated successfully.";
                header("location:dashboard.php");
            } else {
                echo "Updation failed";
                echo "<a href='edit_user.php'>Click Here to go to table</a>";
            }
        }
?>