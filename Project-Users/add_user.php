<?php 
// Establish connection with database
    $conn = mysqli_connect('localhost', 'root', '', 'webster');
// Check the connection status
  // The connect_errno / mysqli_connect_errno() function returns the error code from the last connection error, if any.
  //echo  mysqli_connect_errno() ? "Connection failed" : "Connection Established";

  // If the submit button is clicked, pick the following details 
  if (isset($_POST['insert_btn'])) { 
// Get the user information from the form and store them in respective variables
    // echo $user_name = $_POST['user_name'];
    // echo $user_password = $_POST['user_password'];
    // echo $user_email = $_POST['user_email'];
    // echo $user_image = $_POST['user_image'];
    // echo $user_details = $_POST['user_details'];
     
     $user_name = $_POST['user_name'];
     $user_email = $_POST['user_email'];
     $user_password = $_POST['user_password'];
     $user_image_name = $_FILES['user_image']['name'];
     $user_image_temp_name = $_FILES['user_image']['tmp_name'];
     $user_details = $_POST['user_details'];

     // Pick these values and insert them into the database table "user" 
     $insert = "INSERT INTO user(user_name, user_email, user_password, user_image, user_details) 
     VALUES('$user_name', '$user_email', '$user_password', '$user_image_name', '$user_details')";
     
     // Run the insert query and this will insert the data into the database table
     $run_insert = mysqli_query($conn, $insert);
// Check whether data was inserted successfully into the database table
    // echo $run_insert ? "Data has been inserted successfully" : "Data not inserted successfully";
    if($run_insert === true) {
        echo "Data has been inserted successfully" ;
        move_uploaded_file($user_image_temp_name, "upload/$user_image_name");
    } else {
        echo  "Image not inserted successfully";
    }
  } 
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add User </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <br><br>
    <div class="container">
        <h2>Add New User</h2>
        <form action="view_user.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" placeholder="Enter name" name="user_name">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" name="user_email">
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="user_password">
            </div>
            <div class="form-group">
                <label>Image:</label>
                <input type="file" class="form-control" name="user_image">
            </div>
            <div class="form-group">
                <label>Details:</label>
                <textarea class="form-check" name="user_details"></textarea>
            </div>
            <input type="submit" name="insert_btn" class="btn btn-primary">
        </form>
    </div>

</body>

</html>