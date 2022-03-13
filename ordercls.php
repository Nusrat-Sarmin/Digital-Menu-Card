<?php
include_once ("DbConfig.php");
session_start();
class ordercls extends DbConfig
{
	public function __construct()
	{
		parent::__construct();
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
	
     unset($_SESSION['email']);
	 header("location:index.php");
	 
		
	}
}
?>
