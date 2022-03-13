<?php
	
	//session_start();
	
	//include_once("config.php");
	
	//if(isset($_POST['submit']))
	{
		//$email=$_POST['email'];
		//$password=$_POST['password'];
		
		//$result=mysqli_query($conn, "Select * from onlineshop where email='$email' AND password='$password'");
		
		//$rows=mysqli_fetch_assoc($result);
		
		//if(!empty($result))
		{
			//$_SESSION['id']=$rows['id'];
			
			//if($_SESSION['id'])
			{
				//echo "longin successfully";
				//echo "<br />";
				//echo "<a href='homepage.php'> <h1>GO TO HOME PAGE</h1> </a>";
				
				
				
			}
		}
	}


?>
    
<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="style.css">    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-green bg-green">
  <a class="navbar-brand" href="index.php"><b>DMC</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#"><b>Home </b><span class="sr-only">(current)</span></a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <b>Categories</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="showproductlist2.php">Food Item</a>
          <a class="dropdown-item" href="productorder.php">Order Item</a>

        </div>
      </li>
      
	   <a class="nav-item nav-link" href="plogout.php"><b>Logout</b></a>
      
    </div>
  </div>
</nav>

<!-- body part -->

<div class="container main-body">
	<div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/food_one.jpeg" class="d-block w-100 carousol-img" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/food_two.jpg" class="d-block w-100 carousol-img" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/food_three.jpg" class="d-block w-100 carousol-img" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>



<!-- end of body -->
   
	
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
