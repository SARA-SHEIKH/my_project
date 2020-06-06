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
				 			 Product Deleted Sucessfully
							</div>";
							
						$_SESSION['result'] = false;
					}
				if(isset($_SESSION['result_update'])and $_SESSION['result_update'] == true)
					{
						echo "<div align='center' class='alert alert-warning' role='alert'>
							  Product Updated Sucessfully
							</div>";
							
						$_SESSION['result_update'] = false;
					}
	?> 
 
	<div style="padding: 30px" align="center">
	<h1>View All Products</h1>
		
		<div class="container">
      
  <table class="table table-bordered">
    <thead>
      <tr>
        <th align="center">Product ID</th>
		<th align="center">Product Picture</th>
        <th align="center">Product Name</th>
        <th align="center">Product Price</th>
		<th align="center">Product Code</th>
		<th align="center">Product In Stock</th>
		<th align="center">Product Discount</th>
		<th align="center">Product Size</th>  
		<th align="center">Product Details</th>
		<th align="center">Delete</th>
		<th align="center">Update</th>  
      </tr>
    </thead>
	  
	<?php 
	
		require "require/connection.php";
		$query = "SELECT `Productprofile`,`productid`, `productName`, `productPrice`, `productCode`, `ProductinStock`, `productdiscount`, `productSizes`, `productDetails` FROM `tblproducts` ";
		$result = mysqli_query($conn,$query);
		?>
		
		 
		<?php

		while($res = mysqli_fetch_assoc($result))
	
		{
			?>
			<tbody>
			  <tr>
				  <td align="center"><?php echo $res['productid']?></td>
				  <td align="center"><img src="<?php echo $res['Productprofile']?>" height="50" width="50"></td>
				  <td align="center"><?php echo $res['productName']?></td>
				  <td align="center"><?php echo $res['productPrice']?></td>
				  <td align="center"><?php echo $res['productCode']?></td>
				  <td align="center"><?php if($res['ProductinStock']==1)
							{
								echo "Availbale";
							}
							 if($res['ProductinStock']==0)
							{
								echo "Not Availbale";
							}
					  ?>
				  </td>
				  <td align="center"><?php echo $res['productdiscount']?></td>
				  <td align="center"><?php echo $res['productSizes']?></td>
				  <td align="center"><?php echo $res['productDetails']?></td>
				  <td align="center"><a href="delete.php?d_id=<?php echo $res['productid']?>" onclick="return confirm('Are you sure you want to delete this Product?');">Delete</a></td>
				  <td align="center"><a href="update.php?u_id=<?php echo $res['productid']?>">update</a></td>
			  </tr>
			</tbody>
	  
	  
	  
	   
	  <?php
		} 
	  ?>
	  
		  </table> 
    
</div>

	
	
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
