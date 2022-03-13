<?php
include_once ("productcls.php");
		
		$data = new productcls();
		
		$query = "SELECT * FROM productlist ORDER BY id ASC";
		$result = $data->getdata($query);
?>

<!DOCTYPE html>
<html>
<head>  <title>view data</title></head>
<body>
	
	<table width="100%" border="1">
		<tr bgcolor="gray">
			<td>ID</td>
			<td>Product Name</td>
			<td>Product Price</td>
			<td>Discount</td>
		
		</tr>
		
<?php
	
	foreach ($result as $key => $res)
	{
		echo "<tr>";
		echo "<td>" .$res['id']."</td>";
		echo "<td>" .$res['productname']."</td>";
		echo "<td>" .$res['productprice']."</td>";
		echo "<td>" .$res['discount']."</td>";
		echo "<td><a href =\"productorder.php?id=$res[id]\">Order</a></td>";
		echo "</tr>";
		
	}
	
	echo "<center><a href ='plogout.php'><h1>Logout</h1></a></center>";
	echo "<center><a href ='home.php'><h1>Home Page</h1></a></center>";
?>		
	</table>
	
</body>

</html>