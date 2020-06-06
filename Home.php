<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	
  <title>Chocolatto</title>
  
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>

  
 
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
	?>

  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
	 
  </ul>
	
  <!-- The slideshow -->
  <div class="carousel-inner" style="padding-left: 10px;padding-right: 10px">
    <div class="carousel-item active">
      <img src="1.jpg" alt="Los Angeles" width="100%" height="500">
    </div>
    <div class="carousel-item">
      <img src="2.jpg" alt="Chicago" width="100%" height="500">
    </div>
    <div class="carousel-item">
      <img src="3.jpg" alt="New York" width="100%" height="500">
    </div>
	 
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
	  
	  
</div>
	  
	  
	<div class="row">
		<div class="col-md-12" style="padding: 30px">
			<h1>CHOCOLATTO </h1> 
			<h3> The Great Taste</h3><br>
			<h1>Latest Products</h1>
		</div>   
	</div>
	
	<?php 
	
		require "require/connection.php";
		$query = "SELECT `Productprofile`,`productid`, `productName` FROM `tblproducts` ";
		$result = mysqli_query($conn,$query);
		
		?>
		
	
	
	<div class="row">
		<div class="col-md-4">	
		<a href="http://localhost/choco/cupcake.php"><img src="choclte cupckae.jpg" class="rounded mx-auto d-block" width="300px" height="300px">
		<span style="text-align: center"><h4>Chocolate Cupcake</h4></span></a>
			
		</div>
		<div class="col-md-4">	
		<a href="http://localhost/choco/moltenlava.php"><img src="moltan lava.jpg" class="rounded mx-auto d-block" width="300px" height="300px">
		<span style="text-align: center"><h4>Molten Lava</h4></span></a>
			
		</div>
		<div class="col-md-4">	
		<a href="http://localhost/choco/Oreoshake.php"><img src="oreo shakee.jfif" class="rounded mx-auto d-block" width="300px" height="300px">
		<span style="text-align: center"><h4>Oreo Shake</h4></span></a>
			
		</div>
	</div>
	
	
	<?php
	 
		include "include/footer.php";
	?>
	
	
	
	
	
	
	
	
	

</body>

</html>