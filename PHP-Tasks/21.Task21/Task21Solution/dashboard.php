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

    echo "<b>" . $_SESSION['msg'] . "</b>";
    echo "<br/>";
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
    mysqli_select_db($con, "myDB");
    $sql = "select * from users";
    $data = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($data)) {
        $id = $row['user_id'] ?>
    <tbody>
        <tr>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['phone_number']; ?></td>

            <td>
                <?php echo "<td><button><a href='edit_user.php?id=" . $row['user_id'] . "'>Edit</a></button></td>";
                    ?>
            </td>
            <td>
                <?php echo "<td><button><a href='delete.php?id=" . $row['user_id'] . "'>Delete</a></button></td>";
                    ?>
            </td>
        </tr>
    </tbody>
    <?php
    } ?>
</table>

</html>