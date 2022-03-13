

<?php
class DbConfig
{
	public $host="localhost";
	public $username="root";
	public $password="";
	public $dbname="kids_tool";digb 
	public $connection;
	public function __construct()
	{
	    $this->connection=new mysqli($this->host,$this->username,$this->password,$this->dbname);
		if(mysqli_connect_errno())
			{
				echo"database connection failed";
				exit;
			}
		else
			{
			
				return true;
			}
	}
	
	
}

?>