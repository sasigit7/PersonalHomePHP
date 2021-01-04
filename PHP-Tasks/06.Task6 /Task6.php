<h1>Find Tallest Candles To Blow</h1>
<!-- This function accepts an array and it should find the maximum of the array 
and return its total Count -->
<?php //////////////Assignment1:
	// => Used max() function to find the numerically maximum value in an array, 
	// In this case, tallest candle in the cake.
	// => Used array_count_values to Count all the values in an array, 
	// In this case, total Number of tallest candles in the cake
	function findCandles($ar) {
		return max(array_count_values($ar));
	}
	$ar = [1, 2, 3, 4, 4]; 
	echo "Candles Count: " . findCandles($ar);
?>

<?php
   /* Output: 
		tallest candle in the cake is 4
		Total Number of tallest candles in the cake is 2
   */
?>
<hr>
<h1>Convert 12 Hour Format Time String to 24 Hour Format String</h1>
<?php //////////////Assignment2: 
     //////// This code works only if the time is before 12
	function convertTimeFormat($time12Hour) {
		$time24Hour = ""; 
		$Split = explode(":",$time12Hour); 
		$Hour = $Split[0]; 
       // $Minutes = $Split[1];
       // $Seconds = $Split[2];
		$Split[2] = substr($Split[2],0,2);
		
		if($Hour == '12' && strpos($time12Hour,"AM")!== FALSE) {
		} elseif(strpos($time12Hour,"PM")!== FALSE && $Hour != "12") {
		} elseif($Hour != "12" && strpos($time12Hour,"AM")!== FALSE) {
            echo $convertHour = 12+$Hour.":".$Split[1].":".$Split[2]."PM";
		}
		return  $time24Hour;
	}
	$time12Hour = "06:40:03AM";
	$result = convertTimeFormat($time12Hour);
?>
<?php
   /* 
	  Input: "06:40:03AM"
      Output: "18:40:03PM"
   */
?>

<?php 
   // This is universal time conversion format (12hour to 24hour) and will work for any given time of the day. 
   function convertTimeFormat($time12Hour){
	$time24Hour="";
	$Split=explode(":",$time12Hour);
	$Hour=$Split[0];
	$Minutes = $Split[1];
	$Seconds = $Split[2];
	$Split[2]=substr($Split[2],0,2);
   
	if($Hour == '12' && strpos($time12Hour,"AM")!== FALSE) {
	$Hour = 00;
	return $time24Hour = $Hour  . ":" . $Minutes . ":" . $Seconds;
	} elseif($Hour == '12' && strpos($time12Hour,"PM")!== FALSE){
		$Hour = 00;
	 return $time24Hour = $Hour  . ":" . $Minutes . ":" . $Seconds;
	} elseif($Hour<12 && strpos($time12Hour,"AM")){
	   return 12+$Hour.":".$Split[1].":".$Split[2]." PM";
	}elseif(strpos($time12Hour,"PM") && $Hour>12){
		   return $Hour - '12'. ":".$Split[1].":".$Split[2]." PM";
	}elseif(strpos($time12Hour,"AM") && $Hour>12){
		   return $Hour - '12'. ":".$Split[1].":".$Split[2]." PM";
	}
}
 
 $time12Hour="13:05:03AM";
 echo $result=convertTimeFormat($time12Hour);
?>
<?php
   /* 
	  Input: "13:05:03AM"
      Output: "1:05:03PM"
   */
?>
<hr>
<hr>
<?php 
//// Using in built function: 
function convertTimeFormat($time12Hour){
 echo date("H:i:s:A", strtotime("6:40:03PM"));
}
$time12Hour="6:40:03PM";
echo $result=convertTimeFormat($time12Hour);
?>

<?php
   /* 
	  Input: "6:40:03PM"
      Output: "18:40:03PM"
   */
?>

