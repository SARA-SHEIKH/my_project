
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
		require "require/connection.php";


	if(isset($_POST['cancel']))
	{
		header('location:viewproducts.php');
	}
	
	if(isset($_POST['update']))
	{
		$id = $_GET['u_id'];
		$name = $_POST['pname'];
		$price = $_POST['pprice'];
		$code = $_POST['pcode'];
		$stock = $_POST['pstock'];
		$discount = $_POST['pdiscount'];
		$size = $_POST['psize'];
		$details = $_POST['pdetails'];
		$image = $_FILES['ppicture'];
		
		if($_FILES['ppicture']['name'] == "") {
			
			$query = "SELECT `Productprofile` FROM `tblproducts` WHERE `tblproducts`.`productid` = $id";
		$result = mysqli_query($conn,$query);
		$res = mysqli_fetch_assoc($result);
			
			$full_path = $res['Productprofile'];
			
      
			}	
		
		else
		{

			$image_name = $image['name'];
			$image_tmp_name = $image['tmp_name'];

			$folder = "images/";
			$full_path = $folder . $image_name;

			move_uploaded_file($image['tmp_name'],$full_path);
		}

 

		if($stock=="Availbale In Stock")
		{
			$stock=1;
		}
		if($stock=="Not Availbale In Stock")
		{
			$stock=0;
		}
		
		$query = "UPDATE `tblproducts` SET `Productprofile`='$full_path',`productName`='$name',`productPrice`='$price',`productCode`='$code',
		`ProductinStock`='$stock',`productdiscount`='$discount',`productSizes`='$size',`productDetails`='$details'
		WHERE `tblproducts`.`productid` = $id";

		$result_update = mysqli_query($conn,$query);	

		if($result_update)
		{
			$_SESSION['result_update'] = true;
			header('location:viewproducts.php');
			
		}
		else
		{
			echo "Error occured while updating";
		}
	}

	?> 
<div align="center">
	<h1 >Update Product</h1>
	
	
	
	  
	<?php 
		
		$idshow = $_GET['u_id'];
		require "require/connection.php";
		$query = "SELECT `Productprofile`,`productid`, `productName`, `productPrice`, `productCode`, `ProductinStock`, `productdiscount`, `productSizes`, `productDetails` FROM `tblproducts` WHERE `tblproducts`.`productid` = $idshow";
		$result = mysqli_query($conn,$query);
		$res = mysqli_fetch_assoc($result)
		?>
		
		 
		
		
	
	
	
	</div>
	
	
	
	
<div style="padding: 30px" align="center">

	
	
	<form action="" method="post" enctype="multipart/form-data"> 
  <div class="form-group" >
    <input type="text" name="pname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name" style="width: 400px" value="<?php echo $res['productName']?>"  required>
  </div>
	<div class="form-group" >
    <input type="text" name="pprice" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product price" style="width: 400px" value="<?php echo $res['productPrice']?>" required>
  </div>
	<div class="form-group" >
    <input type="text" name="pcode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Code" style="width: 400px" value="<?php echo $res['productCode']?>" required>
  </div>	
	  
   <div class="form-group">
    <select name="pstock" class="form-control" id="exampleFormControlSelect1" style="width: 400px">
		
      <option  >Availbale In Stock</option>
      <option >Not Availbale In Stock</option>
    </select>
  </div>
	
	  
	  
	  <div class="form-group" >
    <input type="text" name="pdiscount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product discount" style="width: 400px" value="<?php echo $res['productdiscount']?>" required>
	  </div>
 <div class="form-group" >
    <input type="text" name="psize" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Size" style="width: 400px" value="<?php echo $res['productSizes']?>" required>
  </div>	
  <div class="form-group">
  <textarea class="form-control" name="pdetails" rows="6" id="comment" style="width: 400px" placeholder="Product Details"  required><?php echo $res['productDetails']?></textarea>
</div>
	
	  <div class="input-group" style="width: 400px">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Picture Upload</span>
  </div>
  <div class="custom-file">
    <input  type="file" name="ppicture" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" value=" <?php echo $res['Productprofile']?>"> 
    <label class="custom-file-label" for="inputGroupFile01"></label>
  </div>
</div>
	  <br>
		
	  <div>
  <button type="submit" name="update" class="btn btn-primary">Update</button>
		  <button type="submit" name="cancel" class="btn btn-primary">Cancel</button>
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
