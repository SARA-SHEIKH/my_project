<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Chocolatto-Products</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
  <!-- =======================================================
  * Template Name: Mamba - v2.0.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   <?php
	include "include/header.php";
	?>
  
	
	<div class="row">
		<div class="col-md-12" style="padding: 30px">
			<h1>Our Products</h1>
		</div>
	
		
		</div>
		
		<?php 
	
		require "require/connection.php";
		$query = "SELECT `Productprofile`,`productid`, `productName` FROM `tblproducts` ";
		$result = mysqli_query($conn,$query);
		$X;
		
		?>
		
	
	<div class="row">
		<div class="col-md-4">	
		<a href="http://localhost/choco/cupcake.php"><img src="choclte cupckae.jpg" class="rounded mx-auto d-block" width="300px" height="300px">
		<span style="text-align: center"><h4>Chocolate Cupcake</h4></span></a>
			<a href="http://localhost/choco/chocorolls.php"><img src="choclate rolls.jpg" class="rounded mx-auto d-block" width="300px" height="300px">
		<span style="text-align: center"><h4>Chocolate Rolls</h4></span></a>
		</div>
		<div class="col-md-4">	
		<a href="http://localhost/choco/moltenlava.php"><img src="moltan lava.jpg" class="rounded mx-auto d-block" width="300px" height="300px">
		<span style="text-align: center"><h4>Molten Lava</h4></span></a>
			<a href="http://localhost/choco/Chocolatedonut.php"><img src="choclate donuts.jpg" class="rounded mx-auto d-block" width="300px" height="300px">
		<span style="text-align: center"><h4>Chocolate Donuts</h4></span></a>
		</div>
		<div class="col-md-4">	
		<a href="http://localhost/choco/Oreoshake.php"><img src="oreo shakee.jfif" class="rounded mx-auto d-block" width="300px" height="300px">
		<span style="text-align: center"><h4>Oreo Shake</h4></span></a>
			<a href="http://localhost/choco/Chocolatechips.php"><img src="choclate chip cookies.jpg" class="rounded mx-auto d-block" width="300px" height="300px">
		<span style="text-align: center"><h4>Chocolate Chip Cookies</h4></span></a>
		</div>
	</div>
		 
		<?php
		do{
			
		?>
	
	<div class="row">
		<div class="col-md-4" align="center">	
			<?php 
			if($res = mysqli_fetch_assoc($result))
			{
			?>
		<a href="pdetails.php?p_id=<?php echo $res['productid']?>"><img src="<?php echo $res['Productprofile']?>" height="300px" width="300px"><span style="text-align: center"><h4><?php echo $res['productName']?></h4></span></a>
			<?php
				$x = true;
			}
			else{
				$x = false;
			}
			?>
		</div>
		<div class="col-md-4" align="center">	
			<?php 
			if($res = mysqli_fetch_assoc($result))
			{
			?>
			
		 <a href="pdetails.php?p_id=<?php echo $res['productid']?>"><img src="<?php echo $res['Productprofile']?>" height="300px" width="300px"><span style="text-align: center"><h4><?php echo $res['productName']?></h4></span></a>
			<?php
				$x = true;
			}
			else{
				$x = false;
			}
			?>
		</div>
		<div class="col-md-4" align="center">	
			<?php 
			if($res = mysqli_fetch_assoc($result))
			{
			?>
		<a href="pdetails.php?p_id=<?php echo $res['productid']?>"><img src="<?php echo $res['Productprofile']?>" height="300px" width="300px"><span style="text-align: center"><h4><?php echo $res['productName']?></h4></span></a>
			<?php
				$x = true;
			}
			else{
				$x = false;
			}
			?>
		</div>
	</div>
			
			<?php
			
		}while($x)
	?>
				 
				 
			
	  
	  
	  
	   
	  <?php
		
	  ?>
	  
		  
		
	
	
	
	
	
	
	
 <?php
	include "include/footer.php";
	?>

</body>

</html>