
<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="menu_card";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($conn){
	echo "connect successfull";
		}
else{
	echo "connection problem";
		}

<?php
class DbConfig 
{	
	private $dbhost = 'localhost';
	private $dbusername = 'root';
	private $dbpassword = '';
	private $dbname = 'menu_card';
	
	protected $connection;
	
	public function __construct()
	{
		if (!isset($this->connection)) {
			
			$this->connection = new mysqli($this->dbhost, $this->dbusername, $this->dbpassword, $this->dbname);
			
			if (!$this->connection) {
				echo 'Cannot connect to database server';
				exit;
			}			
		}	
		
		return $this->connection;
	}
}
?>


