<!DOCTYPE html>
<html lang="en">

<head>
    <title>View User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <br>
    <br>

    <div class="container">
        <h2>View Users
            <a href="add_user.php" class="btn btn-warning">Add user</a>
        </h2>

        <?php  
        // Establish connection with database
        $conn = mysqli_connect('localhost', 'root', '', 'webster');
           if (isset($_GET['del'])) {
               // echo $del_id = $_GET['del']; // Displays deleted id on the page
               $del_id = $_GET['del'];
               // echo $delete = "DELETE FROM user WHERE id= $del_id";
               $delete = "DELETE FROM user WHERE user_id='$del_id'";
               // Run the delete query
               $run_del = mysqli_query($conn, $delete);
               // Check if the row has been deleted or not
             $run_del ? "Record has been deleted" : "Try, again!";
               
           }
?>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Image</th>
                    <th>Details</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                    // Establish connection with database
                    $conn = mysqli_connect('localhost', 'root', '', 'webster');
                    // Select user table data from the database
                    $select = "SELECT * FROM user";
                    // Run the select query to connect the data from the database
                    $run_select = mysqli_query($conn, $select);
                    // Loop through each row of the users table and store them in an array 
                while ($row_user = mysqli_fetch_array($run_select)) { // use while loop to get multiple rows
                    // Get the individual row values from the user table
                    // echo $user_id = $row_user['user_id'];
                    // echo $user_name = $row_user['user_name'];
                    // echo $user_email = $row_user['user_email'];
                    // echo $user_password = $row_user['user_password'];
                    // echo $user_image = $row_user['user_image'];
                    // echo $user_details = $row_user['user_details'];
                     
                    $user_id = $row_user['user_id'];
                    $user_name = $row_user['user_name'];
                    $user_email = $row_user['user_email'];
                    $user_password = $row_user['user_password'];
                    $user_image = $row_user['user_image'];
                    $user_details = $row_user['user_details']; ?>
                <tr>
                    <td><?php echo $user_id; ?></td>
                    <td><?php echo $user_name; ?></td>
                    <td><?php echo $user_email; ?></td>
                    <td><?php echo $user_password; ?></td>
                    <td><img src="upload/<?php echo $user_image; ?>" height="35px"></td>
                    <td><?php echo $user_details; ?></td>
                    <td><a href="edit_user.php?edit=<?php echo $user_id; ?>" class=" btn btn-success">Edit</a></td>
                    <td><a href="view_user.php?del=<?php echo $user_id; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>