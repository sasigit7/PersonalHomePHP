 <h2>Default Timezone</h2>
<?php 
	echo time(); // Returns an integer containing the current time in the number of seconds as a Unix timestamp
	echo "<br/>";
  // To set the default timezone: 
    date_default_timezone_set('Europe/London');
	echo date('d-m-Y h:i:s a', time()); // Displays current date and current time.
	echo "<br/>";
    echo date_default_timezone_get(); // Displays timezone 
?>

<!-- ///////////////////////////ASSIGNMENT 1 -->
<h1>Set Cookies</h1>
<?php
/*Following are three variables used to create cookies. 
Please write a code that should set cookie in the browser under localhost domain.
*/
$name = "test"; //cookie name
$value = "35"; //cookie value
$expire = time() + (60*60*24*7); // cookie expiration time in seconds

//This function will Set cookies under localhost in the browser. 
function generateCookies($name,$value,$expire) {
   setcookie($name,$value,$expire); 
	// Syntax: setcookie(name, value, expire, path, domain, secure, httponly);
	// setcookie() is a built in PHP function which is used to create or set cookies. 
}
generateCookies($name,$value,$expire); 
// To check generated cookies in the webpage, 
// Click Chrome Browser Settings=> 
// Advanced=> 
// Privacy and Security=> 
// Site Settings=> 
// Cookies and Site data=> 
// See all cookies and site data=> 
// Search for "localhost" where the webpage cookies will be saved. In this case, "test" cookie is set or created. 
echo "<br/>";
?>

<!-- ///////////////////////////ASSIGNMENT 2 -->
<h1>Delete Cookies</h1>
<?php
/*Complete this function when called, the cookie should automatically be deleted from $_COOKIE*/
$DelCookieName = "test"; //cookie name
$DelCookieValue = "35"; //cookie value
$DelCookieExpire = time() - (60*60*24*7); // cookie expiration time

function unsetCookies($DelCookieName,$DelCookieValue,$DelCookieExpire) {
  setcookie($DelCookieName,$DelCookieValue,$DelCookieExpire); 
  }
 // unsetCookies($DelCookieName,$DelCookieValue,$DelCookieExpire); // Uncomment to see the output. 
// This function will Delete or unset cookie from the webpage, in this case..."test" cookie will be removed.

?>

<br/>
<!-- ///////////////////////////ASSIGNMENT 3 -->
<h1>Get Cookies</h1>
<?php 
     // A cookie when set into the browser can be retrieved using PHP Global Cookie.
	 // print_r($_COOKIE['test']); // Un comment to check the output. 

	/* Write simple lines of code to check if particular Cookie name exist 
	then echo that value other wise echo blank
	*/
	$checkName = "test"; //cookie name
    $checkValue = "35"; //cookie value
	$checkExpire = time() + (60*60*24*7); // cookie expiration time in seconds
	
	// Make sure to use set function to check whether the cookie already exists or not.
	if(isset($_COOKIE['test'])) { 
	 	echo "The cookie name exist and it's value is ". $_COOKIE['test']; // prints 35
	} else {
		echo "Cookie name not set!";
	}
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
?>

<h1>Enlist all Cookies</h1>
<?php
	
/*Write a function that enlists all cookies being set through this web page*/
	$listCookie = "List_Cookie"; // name 
	$listCookieValue = "20"; // Value
	$listCookieTime = time() + 60*60; // Expire

	setcookie($listCookie, $listCookieValue, $listCookieTime);
	
	function listCookies() {
	    foreach($_COOKIE as $key=>$value){ 
	// $_COOKIE is a super global PHP variable which prints all cookies from the current webpage. 
            echo $key . " " . $value."<br/>";
		}
	}
	listCookies(); 

	/* Output: 
	  test 35 => First cookie name and it's value.
	  List_Cookie 20 => Second cookie name and it's value.
	*/
?>



