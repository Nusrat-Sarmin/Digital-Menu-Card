<?php
include_once ("DbConfig.php");
session_start();
class productcls extends DbConfig
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function getData($query)
	{		
		$result = $this->connection->query($query);
		
		if ($result == false) {
			return false;
		} 
		
		$rows = array();
		
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		
		return $rows;
	}
		
	public function execute($query) 
	{
		$result = $this->connection->query($query);
		
		if ($result == false) {
			echo 'Error: cannot execute the command';
			return false;
		} else {
			return true;
		}		
	}
	public function escape_string($value)
	{
		return $this->connection->real_escape_string($value);
	}
	public function logout()
	{
	session_start();
     unset($_SESSION['email']);
	 header("location:index.php");
	 
		
	}
	
}
?>
