<?php
//including the database connection file
include_once('usercls.php');

$crud = new usercls();

//getting id of the data from url
$id = $crud->escape_string($_GET['id']);

//deleting the row from table
$result = $crud->execute("DELETE FROM productlist WHERE id=$id");
$result = $crud->delete($id, 'productlist');

if ($result) {
	//redirecting to the display page (index.php in our case)
	header("Location:showproductlist1.php");
}




include_once("config.php");



if($result)
{
	header("Location:showproductlist1.php");
}
else
{
	echo "Delete Error";
}
?>