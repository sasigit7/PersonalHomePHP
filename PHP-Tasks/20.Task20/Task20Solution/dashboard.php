<?php
session_start()
?>
<html>

<head>
</head>
<h1>
    <center>Dash Board Page</center>
</h1>
<?php
if (isset($_SESSION['message'])) {
    echo "Welcome  <b>" . $_SESSION['message'] . "</b>";
    echo "<br/>";
    echo "Congratulations! You are successfully logged in.";
    echo "<br/>";
    echo "<a href='index.php'>Log Out</a>";
}


?>
<table border="1">
    <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Phone Number</th>
        <th colspan="2">Actions</th>
    </thead>
    <?php
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "mydb");
    $sql = "select *from users";
    $data = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($data)) { ?>
    <tbody>
        <tr>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['phone_number']; ?></td>
            <td><button class="btn btn-primary btn-sm"><a href='edit_user.php?id=" . $row[' user_id'] . "'>Edit</a></button></td>
            <td><button class=" btn btn-danger btn-sm"><a href='delete.php?id=" . $row[' user_id'] . "'>Delete</a></button></td>
        </tr>
    </tbody>
    <?php } ?>
</table>

</html>