<?php
require_once(LIB_PATH . DS . "config.php");

class MySQLDatabase
{

	private $connection;
	public $last_query;

	function __construct()
	{
		$this->open_connection();
	}

	public function open_connection()
	{
		$this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		if (!$this->connection) {
			die("Database connection failed: " . mysql_error());
		}
	}

	public function close_connection()
	{
		if (isset($this->connection)) {
			mysql_close($this->connection);
			unset($this->connection);
		}
	}

	public function query($sql)
	{
		$this->last_query = $sql;
		// Complete this function
		return  mysqli_query($this->connection, $sql);
	}

	public function escape_value($value)
	{
		// Complete this function to sanitize the $value variable by using mysqli_real_escape_string function
		return  mysqli_escape_string($value);
	}

	// "database-neutral" methods
	public function fetch_array($result_set)
	{
		// Complete this function by using mysqli_fetch_array 
		return mysqli_fetch_array($result_set);
	}

	public function num_rows($result_set)
	{
		return mysqli_num_rows($result_set);
	}

	public function insert_id()
	{
		// get the last id inserted over the current db connection
		return mysqli_insert_id($this->connection);
	}

	public function affected_rows()
	{
		return mysqli_affected_rows($this->connection);
	}

	private function confirm_query($result)
	{
		if (!$result) {
			$output = "Database query failed: " . mysqli_error() . "<br /><br />";
			//$output .= "Last SQL query: " . $this->last_query;
			die($output);
		}
	}
}

$database = new MySQLDatabase();
$db = &$database;