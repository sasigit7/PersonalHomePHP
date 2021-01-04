<?php 
session_start()
?>
<html>
<h1>
    <center>Admin Login Page</center>
</h1>
<form method="post" action="">
    <table style="margin-left:600px;background-color:pink;">
        <tr>
            <td>Enter Username</td>
            <td><input type="text" name="uname" />
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="pwd" /></td>
        </tr>

        <tr>
            <td><input type="submit" value="Login" name="login"></td>
        </tr>
    </table>
</form>

</html>
<?php  
   if(isset($_POST['login'])){
	   if(empty($_POST['uname'])){
		   echo " Enter username "; //i.e your own choice
	   }
	   else if(empty($_POST['pwd'])){
		   echo " Enter password  "; //i.e your own choice
	   }
	   else {
        $_SESSION['message']=$_POST['uname']; 
        $_SESSION['msg']="Congratulations! You are successfully logged in.";
		header("location:dashboard.php");
	   }
	   
   } 
?>