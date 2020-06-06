<?php
	session_start();
if(isset($_SESSION['status']) and $_SESSION['status'] == true) 
		{
	require "require/connection.php";
	
	$id = $_GET['d_id'];
	
	
	
	$querry = "DELETE FROM `tblproducts` WHERE `tblproducts`.`productid` = $id";
	
	$result = mysqli_query($conn,$querry);
	
	if($result)
	{
		$_SESSION['result'] = true; 
		header('location:viewproducts.php');
	}
	else
	{
		echo "Error occured while deleting";
	}

}
	else
	{
		header('location:logout.php');
	}
?>
