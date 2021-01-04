<!DOCTYPE html>
<html>

<head>
    <title>Date Time Objects</title>
</head>

<body>
    <h2>Date Time Objects</h2>
    <?php
	echo time(); // This is a current unix timestamp
	echo strtotime("last Monday");

	//Write a Datetime format of current time like this Y-m-d H:i:s ( For example 2019-10-25 12:47:44 )

	function addMinutesToTime($time, $plusMinutes)
	{

		$newTime = ""; // Should be passed $time + 15 minutes
		$time = DateTime::createFromFormat('H:i:s', $time);


		return $newTime;
	}

	$adjustedTime = addMinutesToTime('9:15:00', 15);
	$endTime = strtotime("+15 minutes", strtotime($adjustedTime));


	?>

</body>

</html>