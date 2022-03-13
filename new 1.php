<!DOCTYPE html>
 <html>
	<head>
		
		<title>registration system</title>
		<link rel="stylesheet" href="stylelogin.css">
	</head>
	
	<body>

	<div id="Registration_container">
	<br>
	 
	<center>
			<form method="POST" action="">
			<h2>Log in</h2>
			
			<input type="email" name="email" placeholder="Enter your email" required/><br><br>
			
			<input type="password" name="pass" placeholder="Enter your password" required/><br><br>
			<input type="submit" name="submit" value="submit"/><br>
			</form>
	</center>
	<br>
	</div>
	
 
 <?php
	//include_once("class/addclass.php");
	//include_once("class/validclass.php");
	
	//$data = new addclass();
	///$valid = new validation();
	
	if(isset($_POST['submit']))
	{	
	//$email = $data->escape_string($_POST['email']);
	
	//$password =$data->escape_string($_POST['pass']);
	
	
	//$msg = $valid->check_empty($_POST, array('email', 'pass'));
	//$check_email = $valid->is_email_valid($_POST['email']);
	
	//$check_password = $valid->is_password_valid($_POST['pass']);
	
	//if($msg != null)
	//{
		
	//	echo $msg;		
	//}
	
	//elseif (!$check_email) 
	//{
	//	echo 'Please provide proper email.';
	//}	
	
		
	
	//elseif (!$check_password) 
	//{
	//	echo 'Please provide proper password.';
	//}	
	
	//else
	//{
	//$result = $data->execute("INSERT INTO registration(name,email,number,password) VALUES('$name','$email','$number','$password')");
	 header("location:showproductlist1.php");  
	
	//echo "<font color='#8e1919'><center><h3>Your log in is successfull.</h3></center>";
	//echo "<br/><a href='login.php'><center><h3>Log In</a></h3></center>";
	
	//}
	
}
 
 ?>
 </body>
 
 </html>
 
 