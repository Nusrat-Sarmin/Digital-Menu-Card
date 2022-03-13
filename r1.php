<?php 
include 'link/header.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <div class="panel panel-default">
	<div class="panel-heading user">
		<h2>User Registration</h2>
	</div>

	<div class="container">
		<div style="max-width: 600; margin: 0 auto">
		<form action="" method="POST">
		<div class="form-group">
		    <label for="exampleInputUsername1">User name</label>
		    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Enter Username" name="username" >  
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
		  </div>
		  
		  <input type="submit" class="btn btn-primary bt" value="Submit" name="submit">
</form>
			
		</form>
	 </div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php
	
	include_once ("productcls.php");
	
	$crud = new productcls();
	
	if(isset($_POST['submit'])) {	
	$username = $crud->escape_string($_POST['username']);
	$email = $crud->escape_string($_POST['email']);
	$password =md5( $crud->escape_string($_POST['password']));
	
	$result = $crud->execute("INSERT INTO user(username,email,password) VALUES('$username','$email','$password')");
	
	if($result){
	
	header("Location:home.php");
	
	}

	}
	
	
	?>