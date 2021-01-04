<?php 
session_start();
// remove all session variables
session_unset();
// destroy the session
 session_destroy();
 header("location:login.php");
// remove flag from $_SESSION and use header('Location: ') to redirect user to login.php page


?>