<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
</head>
<body>
	<h1 style="margin-left: 30px">Form Validations</h1>
	<form method="POST" action="second_page.php">
	  <table style="border: 2px solid teal; padding: 30px">
	    <tr>
		  <td>User Name: </td>
		  <td><input type="text" name="user_name" id="user_name"></td>
		</tr>
		<tr>
		  <td>First Name:</td>
		  <td><input type="text" name="first_name" id="first_name"></td>
		</tr>

		<tr>
		  <td>Last Name:</td>
		  <td><input type="text" name="last_name" id="last_name"></td>
		</tr>

		<tr>
		  <td>Email Address:</td>
		  <td>	<input type="email" name="email" id="email"></td>
		</tr>

		<tr>
		  <td>Password: </td>
		  <td>	<input type="password" name="password" id="password"></td>
		</tr>

		<tr>
		  <td>Phone Number:</td>
		  <td><input type="text" maxlength="12" name="phone_number" id="phone_number"></td>
		</tr>

		<tr>
		  <td style="float: right;"><input type="submit" name="submit" value="Submit"/></td>
		</tr>
	  
	  </table>
</body>
</html>