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
                <?php //echo "<td><button><a href='delete.php?id=" . $row['user_id'] . "'>Delete</a></button></td>";

                    ?>
                <button onclick="deleteRecord('<?php echo $row['user_id']; ?>')">Delete</button>
            </td>
        </tr>
    </tbody>
    <?php
    } ?>
</table>

</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
function deleteRecord(user_id) {
    // alert(user_id);
    // return false;
    var res = confirm("Are you sure want to delete?");
    // alert(res);
    if (res === true) {
        $.ajax({
            url: "delete.php", //the page containing php script
            type: "post", //request type,
            data: {
                id: user_id
            },
            success: function(result) {
                if (result == 1) {
                    alert("Your record has been deleted successfully!");
                    location.reload();
                } else {
                    alert("Your record deletion has failed, Please try again.");
                }
            }
        });
    }
}
</script>