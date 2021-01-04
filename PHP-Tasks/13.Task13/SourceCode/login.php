<h1>Sessions & Login Page</h1>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
<!-- In the login.php, there is a login page, you need to submit this login page to dashboard.php -->
	<form action="dashboard.php" method="post">
	  <table>
	    <tr>
		  <td><b>Username</b></td>
		  <td><input type="text" placeholder="Enter Username" name="uname" required></td>
		</tr>
		<tr>
		  <td><b>Password</b></td>
		  <td><input type="password" placeholder="Enter Password" name="psw" required></td>
		</tr>
		<tr>
		<!-- Upon hitting login.php again, it should redirect to dashboard.php -->
		  <td ><button type="submit" name="sub" style="float: right; margin-left: 50px">Login</button></td>
		</tr>
		<tr>
		  <td><input type="checkbox" checked="checked" name="remember"> Remember me</td>
		</tr>
	  </table>
	</form>
</body>
</html>

