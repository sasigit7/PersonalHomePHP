<!DOCTYPE html>
<html>

<head>
    <title>REQUEST AND SERVER</title>
</head>

<body>
    <h2>REQUEST AND SERVER VARIABLES</h2>
    <?php
	//print_r($_SERVER);
	echo "<h3>Server Details</h3>" . "</br>";
	echo "SERVER NAME: " . $_SERVER['SERVER_NAME'] . "</br>";
	echo "SERVER Address: " . $_SERVER['SERVER_ADDR'] . "</br>";
	echo "SERVER PORT: " . $_SERVER['SERVER_PORT'] . "</br>";

	//Just like the above, there are other PHP reserved Server Variables, use print_r($_SERVER); statement to find the one you need below.
	echo "<h3>Page Details</h3>" . "</br>";
	//$_SERVER['DOCUMENT_ROOT'] is used to find document root of the project
	echo "DOCUMENT ROOT:"  . $_SERVER['DOCUMENT_ROOT'] . "</br>";

	//$_SERVER["SCRIPT_FILENAME"] is used to find or print the current file name in php
	echo "Script Filename:" . $_SERVER["SCRIPT_FILENAME"] . "</br>";

    echo "<h3>Request Details</h3>" . "</br>";
	echo "REMOTE ADDRESS:"  . ""  . $_SERVER["REMOTE_ADDR"] .  "</br>";
	echo "REMOTE PORT :" . ""  .  $_SERVER["REMOTE_PORT"] . "</br>";
	echo "REQUEST URI:" . $_SERVER["REQUEST_URI"] . "</br>";

	//$_SERVER['QUERY_STRING'] helps you to determine the part the string after the ?
	echo "QUERY STRING:" . $_SERVER["QUERY_STRING"] . "</br>";

	// $_SERVER['REQUEST_METHOD'] to identify the method used 
	echo "REQUEST METHOD:" . $_SERVER['REQUEST_METHOD'] . "</br>";

	//$_SERVER['REQUEST_TIME'] corresponds to the time when the request has started, the web server provides this data.
	echo "REQUEST TIME:" . $_SERVER['REQUEST_TIME'] . "</br>";

	//Returns the complete URL of the current page (not reliable because not all user-agents support it)

	echo "HTTP REFERER  " . $_SERVER['HTTP_REFERER'] . "</br>";

	?>

</body>

</html>