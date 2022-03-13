<?php
include_once ("usercls.php");
		
		$data = new usercls();
		
		$query = "SELECT * FROM productlist ORDER BY id ASC";
		$result = $data->getdata($query);
?>

<!DOCTYPE html>
<html>
<head>  <title>view data</title></head>
<body>
	<center><a href = "productinsert1.php"> <h1>Add Data</h1> </a> <center>
	
	<table width="100%" border="1">
		<tr bgcolor="gray">
			<td>ID</td>
			<td>Product Name</td>
			<td>Product Price</td>
			<td>Discount</td>
			<td>Admin Work</td>
		</tr>
		
<?php
	
	foreach ($result as $key => $res)
	{
		echo "<tr>";
		echo "<td>" .$res['id']."</td>";
		echo "<td>" .$res['productname']."</td>";
		echo "<td>" .$res['productprice']."</td>";
		echo "<td>" .$res['discount']."</td>";
		echo "<td><a href =\"delete.php?id=$res[id]\">Delete</a></td>";
		echo "<td><a href =\"update.php?id=$res[id]\">Update</a></td>";
		echo "</tr>";
		
	}
	
	echo "<center><a href ='plogout.php'><h1>Logout</h1></a></center>";
	
?>		
	</table>
	
</body>

</html>