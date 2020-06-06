<?php

	session_start();
	$name = $_POST['pname'];
	$price = $_POST['pprice'];
	$code = $_POST['pcode'];
	$stock = $_POST['pstock'];
	$discount = $_POST['pdiscount'];
	$size = $_POST['psize'];
	$details = $_POST['pdetails'];
	$image = $_FILES['ppicture'];


	require "require/connection.php";
	
	
	$image_name = $image['name'];
	$image_tmp_name = $image['tmp_name'];

	$folder = "images/";
	$full_path = $folder . $image_name;
	
	move_uploaded_file($image['tmp_name'],$full_path);

	
	if($stock=="Availbale In Stock")
	{
		$stock=1;
	}
	if($stock=="Not Availbale In Stock")
	{
		$stock=0;
	}

	


	$query ="INSERT INTO `tblproducts`(`Productprofile`, `productName`, `productPrice`, `productCode`, `ProductinStock`, `productdiscount`, `productSizes`, `productDetails`) VALUES ('$full_path','$name','$price','$code','$stock','$discount','$size','$details')";
	$result = mysqli_query($conn,$query);
	if(!$result)
	{
		die("Database Querry Failed: ". mysqli_connect_error());
	}
	
	mysqli_close();
	
	if($result)
	{
		$_SESSION['result'] = true;
		header('location:addproduct.php');
	}
	else
	{
		echo "The Querry is not executed Sucessfully";
	}
?>

