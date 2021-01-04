<?php

//Submit login Form here.
if (isset($_SESSION['message'])) {
	echo "Congratulations! You are successfully logged in.";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h1>Welcome to Dashboard</h1>

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
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                    <td>123</td>
                    <td>202-555-0165</td>
                    <td>2019-10-18 12:33:00</td>
                    <td>2019-10-18 12:34:00</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>