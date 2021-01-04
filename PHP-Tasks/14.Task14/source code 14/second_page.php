<?php 
	// write code to perform form submission and send response back to AJAX request
	  if(empty($_POST["first_name"])){
		 // echo "Enter first name";exit;
		 echo "Incomplete user information provided"; exit;
	  } 
	  if(empty($_POST["last_name"])){
		 // echo "Enter last name"; exit;
		 echo "Incomplete user information provided"; exit;
		  
	  } 
	  if(empty($_POST["email"])){
		  //echo "Enter email";exit;
		  echo "Incomplete user information provided"; exit;
		  
	  } 
	  if(empty($_POST["password"])){
		 // echo "Enter password";exit;
		 echo "Incomplete user information provided"; exit;
		  
	  } 
	  if(empty($_POST["phone_number"])){
		  //echo "Enter phone number";exit;
		  echo "Incomplete user information provided"; exit;
	  } else {
          echo "User Information received";
	  }
?>


