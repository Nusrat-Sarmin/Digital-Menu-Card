<!DOCTYPE html>
<html>
	<head></head>
	<body>
	<center><strong>
		<form action="productorder.php" method="POST">
			Product Name:<input type="text" name="productname"></br></br>
			Product Quantity:<input type="number" name="productamount"></br></br>
			Address:<input type="text" name="address"></br></br>
			<input type="submit" name="submit" value="save">
		</form>
		</strong>
		</center>
	</body>
</html>

<center>
<?php
	
	include_once("ordercls.php");
	
	$crud = new ordercls();
	
	
	if(isset($_POST['submit']))
	{	
	$productname = $crud->escape_string($_POST['productname']);

	$productamount = $crud->escape_string($_POST['productamount']);

	$address = $crud->escape_string($_POST['address']);

	
	$result = $crud->execute("INSERT INTO orderlist(productname,productamount,address) VALUES('$productname','$productamount','$address')");
	if($result)
		{
			echo "</br></br>Order Successfull</br></br>";
			echo"<a href='home.php'><h1>Home</h1></a>";
		}

		else
		{
			echo "Order cancel";
		}

	}
	
	
	?>
</center>

