<!DOCTYPE html>
<html>

<head>
    <title>User Submission Form via AJAX</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        // Receive values from POST one by one
        if (isset($_POST["first_name"])) {
            $first_name = $_POST["first_name"];
        } else {
            $first_name = "";
        }
        if (isset($_POST["last_name"])) {
            $last_name = $_POST["last_name"];
        } else {
            $last_name = "";
        }
        if (isset($_POST["email"])) {
            $email = $_POST["email"];
        } else {
            $email = "";
        }
        if (isset($_POST["password"])) {
            $pwd = $_POST["password"];
        } else {
            $pwd = "";
        }
        if (isset($_POST["phone_number"])) {
            $phone_number = $_POST["phone_number"];
        } else {
            $phone_number = "";
        }

        // write validations code if any of the validation fails the record should not be submitted into the database.

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "myDB";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        //Write Update Query here for User form
        // UPDATE table_name
        // SET column1=value, column2=value2,...
        // WHERE some_column=some_value

        $sql = " UPDATE users 
	         SET first_name='$first_name', last_name='$last_name', email='$email', password='$pwd', 
			 phone_number='$phone_number' 
             WHERE user_id='2' ";

        if ($conn->query($sql) === true) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        echo "<br/>";
        echo "<a href='first_page.php'>Click here to go back</a>";
    }
    ?>

</body>

</html>