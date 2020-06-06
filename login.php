<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	
  <title>Login</title>
  
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
		{
			echo "<div align='center' class='alert alert-danger' role='alert'>
  Please Login...
</div>";
				
			$_SESSION['loginfirst'] = false;
		}
	
	
		if(isset($_SESSION['result']) and $_SESSION['result'] == true)
		{
			echo "<div align='center' class='alert alert-danger' role='alert'>
  User Not Found<br>Try Again
</div>";
				
			$_SESSION['result'] = false;
		}
	?>
	<div style="padding: 30px" align="center">
	<form action="logincheck.php" method="post">
  <div class="form-group" >
	  <label for="exampleInputEmail1"><h3>Login</h3></label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" style="width: 300px" required>
  </div>
  <div class="form-group">
   
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password" style="width: 300px" required>
  </div>
  
  <button type="submit" name="login" class="btn btn-primary">Login</button>
</form>
	
	</div>
	
	
	<?php
	 include "include/footer.php";
	?>
	
</body>
</html>
