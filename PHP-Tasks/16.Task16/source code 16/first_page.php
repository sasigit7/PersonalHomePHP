<!DOCTYPE html>
<html>

<head>
    <title>First Page</title>
</head>

<body>
    <h1>Add User</h1>
    <form method="POST" action="second_page.php">
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
                <td>Password</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>

            <tr>
                <td>Phone Number:</td>
                <td><input type="number" name="phone_number" id="phone_number"></td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>

        </table>
    </form>
</body>

</html>