<!doctype html>
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
	if(isset($_SESSION['status']) and $_SESSION['status'] == true)
		{
 
	
		if(isset($_SESSION['result']) and $_SESSION['result'] == true)
		{
			echo "<div align='center' class='alert alert-warning' role='alert'>
  Product Added Sucessfully...
</div>";
				
			$_SESSION['result'] = false;
		}
	?> 

<div style="padding: 30px" align="center">
	<h1 >Add Product</h1>
	
	
	<form action="insert.php" method="post" enctype="multipart/form-data"> 
  <div class="form-group" >
    <input type="text" name="pname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name" style="width: 400px" required>
  </div>
	<div class="form-group" >
    <input type="text" name="pprice" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product price" style="width: 400px" required>
  </div>
	<div class="form-group" >
    <input type="text" name="pcode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Code" style="width: 400px" required>
  </div>	
	  
   <div class="form-group">
    <select name="pstock" class="form-control" id="exampleFormControlSelect1" style="width: 400px">
      <option  >Availbale In Stock</option>
      <option>Not Availbale In Stock</option>
    </select>
  </div>
	
	  
	  
	  <div class="form-group" >
    <input type="text" name="pdiscount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product discount" style="width: 400px" required>
	  </div>
 <div class="form-group" >
    <input type="text" name="psize" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Size" style="width: 400px" required>
  </div>	
  <div class="form-group">
  <textarea class="form-control" name="pdetails" rows="6" id="comment" style="width: 400px" placeholder="Product Details" required></textarea>
</div>
	
	  <div class="input-group" style="width: 400px">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Picture Upload</span>
  </div>
  <div class="custom-file">
    <input  type="file" name="ppicture" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" required>
    <label class="custom-file-label" for="inputGroupFile01"></label>
  </div>
</div>
	  <br>
		
	  <div>
  <button type="submit" name="login" class="btn btn-primary">Save</button>
		  </div>
</form>
	
	
	</div>
	
<?php
	}
	else
	{
		header('location:logout.php');
	}
	?>
<?php

	include "include/footer.php";
?>


</body>
</html>
