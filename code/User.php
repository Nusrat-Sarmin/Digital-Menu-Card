<?php
  
  include_once 'Session.php';
   include 'Database.php';

  class User{
  	private $db;
  	public function _construct(){
  		$this->db=new Database();
  	}
  	public function userRegistration($data){
  		$username = $data['$username'];
  		$email = $data['$email'];
  		$password = md5($data['$password']);
  		$chk_email=$this->emailCheck(email); 
  		
  		if($username ="" OR $email = "" OR $password = "" ){
  			$msg="<div class='alert alert-danger'><strong>Error! </strong>Field must not be empty</div>";
  			 return $msg;
  		}
  		if(strlen($username) <3){
  			$msg="<div class='alert alert-danger'><strong>Error! </strong>Username is too short</div>";
  			 return $msg;
  		}elseif (preg_match('/[^a-z0-9_-]+/i',$username)) {
  		    $msg="<div class='alert alert-danger'><strong>Error! </strong>Username must only contain alphanumerical,dashes and underscores!</div>";
  			 return $msg;	
  		}
  		if(filter_var($email,FILTER_VALIDATE_EMAIL) == false){
  			$msg="<div class='alert alert-danger'><strong>Error! </strong>Email address is not valid! </div>";
  			 return $msg;
  		}
  		if(chk_email==true){
  			$msg="<div class='alert alert-danger'><strong>Error! </strong>Email address already exits! </div>";
  			 return $msg;
  		}
  		$sql="INSERT INTO user(username,email,password) VALUES(:username,:email,:password)";
  		$query->bindValue(':username',$username);
  		$query->bindValue(':email',$email);
  		$query->bindValue(':password',$password);
  		$result=$query->execute();
  		if(result){
            $msg="<div class='alert alert-success'><strong>Success! </strong>THANK YOU,You have been registered</div>";
  		      return $msg;
  		}
  		else{
  			$msg="<div class='alert alert-danger'><strong>Error! </strong>Sorry,there has been problem inserting your details. </div>";
  			 return $msg;
  		}


  		 function emailCheck($email){
  			$sql ="SELECT email FROM user WHERE email= $email ";
  			$query= $this->db->pdo->prepare($sql);
  			$query->bindValue(':email',$email);
  			$query->execute();
  			if($query->rowCount() >0){
  				return true;
  			}else{
  				return false;
  			}
  		}
  	}
  }
?>