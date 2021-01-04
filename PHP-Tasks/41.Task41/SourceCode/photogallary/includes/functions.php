<?php


function redirect_to( $location = NULL ) {
  
}

function output_message($message="") {
  if (!empty($message)) { 
    return "<p class=\"message\">{$message}</p>";
  } else {
    return "";
  }
}

function __autoload($class_name) {
	$class_name = strtolower($class_name);
  $path = LIB_PATH.DS."{$class_name}.php";
  if(file_exists($path)) {
    require_once($path);
  } else {
		die("The file {$class_name}.php could not be found.");
	}
}

function include_layout_template($template="") {
	include(SITE_ROOT.DS.'public'.DS.'layouts'.DS.$template);
}

function log_action($action, $message="") {
	$logfile = SITE_ROOT.DS.'logs'.DS.'log.txt';
	$new = file_exists($logfile) ? false : true;
  /* Complete this function so that $action and $message can be conactenated and saved into the log file. Sample Logs: 

  2019-11-11 08:19:44 | Logs Cleared: by User ID 1
  2019-11-11 08:19:48 | Login: mike logged in.
  2019-11-11 08:22:13 | Login: mike logged in.
  2019-11-11 08:22:15 | Login: mike logged in.
  
  */

}

?>