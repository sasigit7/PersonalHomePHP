<!DOCTYPE html>
<html>
<head>
	<title>Submission Form</title>
</head>
<body>
	<?php 
	// Write code to perform form submission and display validation errors
	//Username must not be greater than 8 Characters
	//Password must contain One Capital, atleast 8 Characters and atleast one special character in it
	//Email Address must be a valid email
	//Phone number must be a US Number Pattern
	//First Name and Last Name should not be empty
	 
	/*
	The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.
	This function returns true if the variable exists and is not NULL, otherwise it returns false.
    */
	 if(isset($_POST['submit'])){
		// To get data from first_page.php to second_page.php, use $_POST method and store it's value in a variable. 
		 $user_name=$_POST['user_name'];
		 $first_name=$_POST['first_name'];
		 $last_name=$_POST['last_name'];
		 $password=$_POST['password'];
		 $email=$_POST['email'];
		 $phone_number=$_POST['phone_number'];//555-555-1212
		 
		 // Form Validation to check whether given username is empty or not and must not be greater than 8 Characters:
		 if(empty($user_name)) {
			 echo "Username shouldn't be empty and must not be greater than 8 Characters.";
			 echo "<br/>";
		 }
	   
		 // Form validation to check whether first_name and last_name shouldn't be empty: 
		 if(empty($first_name) && empty($last_name)){
			 echo "First Name and Last Name shouldn't be empty.";
			 echo "<br/>";
		 }
		 // Form validation to check whether an email is valid or not: 
		  if(empty($email)){
			 echo "Email Address shouldn't be empty and must be a valid email address.";
			  echo "<br/>";
		 }

		 /* preg_match – this function is used to perform a pattern match on a string. 
		    It returns true if a match is found and false if a match is not found.
		 */ 
		if(strlen($phone_number < 10)) {
			echo "Phone number must contain 10 digits";
		} elseif (!preg_match("/^([2-5]-)?[2-9]{3}-[0-9]{3}-[0-9]{4}$/i", $phone_number)) {
			echo "Phone number shouldn't be empty and must be in US Number Pattern."; //555-555-1212
			echo "<br/>";
		}
		  
	/* Form validations to check whether Password must contain One Capital, at least 8 Characters 
	and at least one special character in it. 
	*/	  

	if (empty($password)) {
       echo $passwordErr = "Password shouldn't be empty and must contain One Capital, atleast 8 Characters and atleast one special character in it.";
    }
	else if (strlen($password) <= 8) {
       echo $passwordErr = "Password must contain atleast 8 Characters.";
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
       echo $passwordErr = "Your Password Must Contain At Least one Number!.";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        echo $passwordErr = "Your Password Must Contain At Least one Capital Letter!.";
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        echo $passwordErr = "Your Password Must Contain At Least one Lowercase Letter!.";
    }
	elseif (!preg_match("/\W/", $password)) {
      echo $passwordErr= "Password should contain at least one special character.";
        }
	 
	 }
	 echo "<br/>";
	 echo "<br/>";
	 echo "<strong>:::::Form Values:::::</strong>";
     echo "<br/>";
     echo "<br/>";
  
	 echo "<strong>User Name</strong>    :".@$_POST['user_name']."<br/>";
		echo "<strong>First Name</strong>    :".@$_POST['first_name']."<br/>";
		echo "<strong>Last Name</strong>     :".@$_POST['last_name']."<br/>"; 
		echo "<strong>Email Address</strong> :".@$_POST['email']."<br/>"; 
		echo "<strong>Password</strong>    :".@$_POST['password']."<br/>";
		echo "<strong>Phone Number</strong>  :".@$_POST['phone_number']."<br/>";  
        echo "<br/>";
		echo "<br/>";
		echo "<a href='first_page.php'>Click here to go to first page Web Form</a>";

	?>
	
	
</body>
</html>