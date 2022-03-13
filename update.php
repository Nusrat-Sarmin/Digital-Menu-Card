<?php
include_once("usercls.php");
	
	$data = new usercls();
	$id= $data->escape_string($_GET['id']);
	$result = $data->getdata("SELECT * FROM productlist WHERE ID=$id");
	
	foreach($result as $res)
	{
		$productname = $res['productname'];
		$productprice = $res['productprice'];
		$discount = $res['discount'];
	}
	
	if(isset($_POST['Update']))
{	
	$id = $data->escape_string($_POST['id']);
	
	$productname = $data->escape_string($_POST['productname']);
	$productprice = $data->escape_string($_POST['productprice']);
	$discount = $data->escape_string($_POST['discount']);

	
	$result = $data->execute("UPDATE productlist SET productname='$productname',productprice='$productprice',discount='$discount' WHERE id=$id");
	if ($result)
	{
		echo "Update successfully";
	}
	else 
	{
		echo "Error";
	}
	header("Location: showproductlist1.php");
}
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Edit</title>
	</head>
	<body>
		<form name="form1" method="POST" action= "update.php">
			<table border="0">
			<tr> 
				<td>Product Name</td>
				<td><input type="text" name="productname" value="<?php echo $productname;?>"></td>
			</tr>
			<tr> 
				<td>Product Price</td>
				<td><input type="number" name="productprice" value="<?php echo $productprice;?>"></td>
			</tr>
			<tr> 
				<td>Discount</td>
				<td><input type="number" name="discount" value="<?php echo $discount;?>"></td>
			</tr>
			
			<tr> 
				<td> <input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
				<td><input type="submit" name="Update" value="UPDATE"></td>
			</tr>
		</table>
		</form>
	
	</body>
</html>