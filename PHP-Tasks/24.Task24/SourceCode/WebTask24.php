
<!DOCTYPE html>
<html>
<head>
	<title>REQUEST AND SERVER</title>
</head>
<body>
<h2>REQUEST AND SERVER VARIABLES</h2>
<?php 
	//print_r($_SERVER);
	echo "<h3>Server Details</h3>". "</br>"; 
	echo "SERVER NAME: " . $_SERVER['SERVER_NAME'] . "</br>"; 
	echo "SERVER Address: " . $_SERVER['SERVER_ADDR'] . "</br>";
	echo "SERVER PORT: " . $_SERVER['SERVER_PORT'] . "</br>";

	//Just like the above, there are other PHP reserved Server Variables, use print_r($_SERVER); statement to find the one you need below.
	echo "<h3>Page Details</h3>". "</br>";
	echo "DOCUMENT ROOT:"  . ""  . " ? " .  "</br>";
	echo "Script Filename:" . ""  .  " ? " . "</br>";


	echo "<h3>Request Details</h3>". "</br>";
	echo "REMOTE ADDRESS:"  . ""  . $_SERVER["REMOTE_ADDR"] .  "</br>";
	echo "REMOTE PORT :" . ""  .  $_SERVER["REMOTE_PORT"] . "</br>";
	echo "REQUEST URI:" . ""  .  " ? " . "</br>";
	echo "QUERY STRING:" . ""  .  " ? " . "</br>";
	echo "REQUEST METHOD:" . ""  .  " ? " . "</br>";
	echo "REQUEST TIME:" . ""  .  " ? " . "</br>";
	echo "HTTP REFERER" . ""  .  " ? " . "</br>";

?>

</body>
</html>
