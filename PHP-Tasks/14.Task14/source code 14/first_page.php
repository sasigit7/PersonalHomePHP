<!DOCTYPE html>
<html>
<head>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<title>First Page</title>
</head>
<body>
	<h1>Add User</h1>
	  <form method="POST">
	      <table>
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
				<td><input type="email" name="email" id="email"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" id="password"></td>
			</tr> 
			<tr>
				<td>Phone Number:</td>
				<td><input type="number" name="phone_number" id="phone_number"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" id="submit"></td>
			</tr>
		</table>
	</form>
</body>
<script>
      $(function() {
        $('form').on('submit', function(e) {
          e.preventDefault(); // Upon Clicking "Submit" button, This method will Prevent it from submitting a form 
          $.ajax({
            type: 'post', // Post Method
            url: 'second_page.php', // Sending data to second page or server
            data: $('form').serialize(), // The serialize() method creates a URL encoded text string by serializing form values. 
            success: function (res) { // This function will return response from second page.
              alert(res);  // The alert() method displays an alert box with the response from the second page. 
            }
        });
       });
	});
    </script>
</html>

	