<!DOCTYPE html>
<html>

<head>
    <title>Date Time Objects</title>
</head>

<body>
    <h2>Date Time Objects</h2>
    <?php
	date_default_timezone_set("Europe/London");
	echo "UK TimeZone" . ": " . date_default_timezone_get();
	echo "<br/>";
	echo "This is current Unix TimeStamp in Seconds" . ': ' . time(); // This is a current unix timestamp
	echo "<br/>";
	echo "Current Unix TimeStamp in Date time format" . ': ' . date('Y-m-d h:i:s a');
	echo "<br/>";
	echo "This is start time to till now" . ': ' . strtotime("last Monday"); // strtotime(time, now);
	echo "<br/>";

	//Write a Datetime format of current time like this Y-m-d H:i:s ( For example 2019-10-25 12:47:44 )
	function addMinutesToTime($currentTime, $adjustedTime)
	{
		$newTime = strtotime("+$adjustedTime minutes", strtotime($currentTime));
		$time = date("H:i:s", $newTime);
		$timeFormat = DateTime::createFromFormat('H:i:s', $time);
		return $timeFormat->format('h:i:s');
	}

	//Get current time by using php date function
	$currentTime = date('h:i:s');
	echo "Current time" . ': ' . $currentTime;
	echo "<br/>";

	//Send current time to addMinutesToTime function
	$adjustedTime = addMinutesToTime($currentTime, 15);
	echo "Current time after adding 15minutes" . ': ' . $adjustedTime;

	?>

</body>

</html>