<!DOCTYPE html>
<html>

<head>
  
  <title>Chocolatto-Choco Rolls</title>
  
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
 
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
  
</head>

<body>

    <?php
	include "include/header.php";
	$id = $_GET['p_id'];
	require "require/connection.php";
		$query = "SELECT `Productprofile`,`productid`, `productName`, `productPrice`, `productCode`, `ProductinStock`, `productdiscount`, `productSizes`, `productDetails` FROM `tblproducts` WHERE `tblproducts`.`productid` = $id";
		$result = mysqli_query($conn,$query);
		$res = mysqli_fetch_assoc($result);
	?>

  
	  
	  
	<div class="row">
		<div class="col-md-12" style="padding: 30px">
			<h1><?php echo $res['productName']?></h1>	
		</div>   
	</div>
	
	<div class="row">
		<div class="col-md-4">	
		<img src="<?php echo $res['Productprofile']?>" class="rounded mx-auto d-block" width="300px" height="300px">
		</div>
		<div class="col-md-8">	
		
			<p style="font-size: 40px">
		
			Product Price: <?php echo $res['productPrice']?><br>
			Product Code: <?php echo $res['productCode']?>
			<br>
			Product Stock:<?php if($res['ProductinStock']==1)
							{
								echo "Availbale";
							}
							 if($res['ProductinStock']==0)
							{
								echo "Not Availbale";
							}
					  ?>
			<br>
			Product Discount: <?php echo $res['productdiscount']?>
			<br>
			Product Size: <?php echo $res['productSizes']?>
		</p>
		</div>
	  </div>
	<div class="row">
		<div class="col-md-12" style="padding: 30px">
			<h1>Product Details</h1>
			<p style="padding-left: 10px;padding-right: 10px ;font-size: 105%;text-align: justify"><?php echo $res['productDetails']?> </p>
		</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
  <?php
	include "include/footer.php";
	?>

</body>

</html>