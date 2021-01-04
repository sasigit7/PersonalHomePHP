<?php
//Write Select Query here and get data from database
$SQL = "SELECT * FROM `users`";
?>

<!DOCTYPE html>
<html>

<head>
    <title>First Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <h1 style="margin-left: 620px;">Add User</h1>
    <form method="POST" style="margin-left: 550px;">
        <table style="margin-left: 10px;">
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
                <td><input style="margin: 20px 50px 20px 20px; color: #fff; background-color: #000; padding: 10px;"
                        type="submit" name="submit" value="submit" />
                </td>
            </tr>
        </table>
    </form>

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
            $password = $_POST["password"];
        } else {
            $password = "";
        }
        if (isset($_POST["phone_number"])) {
            $phone_number = $_POST["phone_number"];
        } else {
            $phone_number = "";
        }
        // Write validations code if any of the validation fails the record should not be submitted into the database.
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "assessments";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) { // If database connection fails, $conn displays a connection error.
            die("Connection failed: " . $conn->connect_error);
        }
        // Sanitization form inputs using mysql_real_escape_string:
        $fname = mysqli_real_escape_string($conn, $_POST['first_name']);
        $lname = mysqli_real_escape_string($conn, $_POST['last_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pwd = mysqli_real_escape_string($conn, $_POST['password']);
        $mobile = mysqli_real_escape_string($conn, $_POST['phone_number']);

        //Write Insert Query here for User form
        $sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `phone_number`)
				VALUES ('$fname', '$lname', '$email', '$pwd', '$mobile')";
        if ($conn->query($sql) === true) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        echo "<br/>";
        echo "<a href='first_page.php'>Return</a>";
    }
    ?>
    <div class="container">
        <h2>Users List</h2>
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone Number</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                <tr style="color: red;">
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                    <td>123</td>
                    <td>202-555-0165</td>
                    <td>2019-10-18 12:33:00</td>
                    <td>2019-10-18 12:34:00</td>
                </tr>
                <?php
                // Write validations code if any of the validation fails the record should not be submitted into the database.
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "assessments";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) { // If database connection fails, $conn displays a connection error.
                    die("Connection failed: " . $conn->connect_error);
                }
                // code for display data from mysql database
                $SQL = "SELECT * FROM `users`";
                // The query() / mysqli_query() function performs a query against a database.
                // It takes two parameters namely connection and a query.
                $result = mysqli_query($conn, $SQL);
                //echo "<pre>";print_r($result->num_rows);
                if ($result->num_rows > 0) {
                    // echo "<pre>";print_r($data);
                    // This Code displays Users data for multiple entries from the database
                    while ($data = mysqli_fetch_assoc($result)) {
                        //The fetch_assoc() / mysqli_fetch_assoc() function fetches a result row as an associative array.
                        echo "<tr>";
                        echo "<td>" . $data['first_name'] . "</td>";
                        echo "<td>" . $data['last_name'] . "</td>";
                        echo "<td>" . $data['email'] . "</td>";
                        echo "<td>" . $data['password'] . "</td>";
                        echo "<td>" . $data['phone_number'] . "</td>";
                        echo "<td>" . $data['created_at'] . "</td>";
                        echo "<td>" . $data['updated_at'] . "</td>";
                        echo "</tr>";
                    }
                    // This code displays User data for single entry from the database
                    /*
$data=mysqli_fetch_assoc($result);
echo "<tr>";
foreach($data as $key => $val){
if($key != "user_id") {
echo "<td>".$val."</td>";
}
}
echo "</tr>";
 */
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>