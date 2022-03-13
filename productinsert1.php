
<!DOCTYPE html>
<html>
<head>
	<title>Productlist</title>
</head>
<body >
<center>
   <div class="panel panel-default">
	<div class="panel-heading user">
		<h2>Product List</h2>
	</div>

	<div class="container">
		<div style="max-width: 600; margin: 0 auto">
		<form action="" method="POST">
		<div class="form-group">
		    <label for="exampleInputProductname1">Product name</label>
		    <input type="text" class="form-control" id="exampleInputProductname1" placeholder="Enter productname" name="productname" > 
				
		  </div>
<br>
		  <div class="form-group">
		    <label for="exampleInput1">Product price</label>
		    <input type="number" class="form-control" id="exampleInputproductprice1"  placeholder="Enter productprice" name="productprice">
		    
		  </div>
		  <br>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Discount</label>
		    <input type="number" class="form-control" id="exampleInputdiscount1" placeholder="discount" name="discount">
		  </div>
		  <br>
		  
		  <input type="submit" class="btn btn-primary bt" value="submit" name="submit">

			
		</form>
	 </div>
	</div>
	
	<?php
	
	include_once("usercls.php");
	
	$crud = new usercls();
	
	
	if(isset($_POST['submit'])) {	
	$productname = $crud->escape_string($_POST['productname']);

	$productprice = $crud->escape_string($_POST['productprice']);

	$discount = $crud->escape_string($_POST['discount']);

	
	$result = $crud->execute("INSERT INTO productlist(productname,productprice,discount) VALUES('$productname','$productprice','$discount')");
	if($result){
		
		header("Location:showproductlist1.php");
	}

	}
	
	
	?>
</center>	

</body>
</html>




 