<?php
  
  class Database{
	
	private $hostdb = "localhost";
	private $userdb = "root";
	private $passdb = "";
	private $namedb = "menu_card";
	public $pdo;
	public function _constuct(){
		if(isset($this->pdo)){
			try{
				$link = new pdo("mysql:host=".$this->hostdb.";dbname=".$this->namedb,$this->userdb,$this->passdb);
				$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXECEPTION);
				$link = exec("SET CHARACTER SET utf8");
				$this->pdo=$link;
			}
			catch(PDOexception $e){
				die("Failed to connect with Database".$e->getMessage());
			}
		}
	}
	
}
?>









