

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

     <div class="logo float-left">
        <h1 >Chocolatto</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
       <div class="social-links mt-3" style="float: right">
              <a href="https://twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://skype.com/" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="https://linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

    </div>
  </header><!-- End Header -->


<?php
	session_start();	
	if(isset($_SESSION['status']) and $_SESSION['status'] == true)
		{
	
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  <!-- Links -->
   <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/choco/home.php">Home</a>
    </li>
	 <li class="nav-item">
      <a class="nav-link" href="http://localhost/choco/addproduct.php">Add Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/choco/viewproducts.php">View Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/choco/aboutus.php">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/choco/products.php">Products</a>
    </li>
	  <li class="nav-item">
      <a class="nav-link" href="http://localhost/choco/contactus.php">Contact Us</a>
    </li>
	   
	  <li class="nav-item">
      <a class="nav-link" href="http://localhost/choco/logout.php">Logout</a>
    </li>
  </ul>
</nav>



<?php
	}
	else
	{
		?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  <!-- Links -->
   <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/choco/home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/choco/aboutus.php">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/choco/products.php">Products</a>
    </li>
	  <li class="nav-item">
      <a class="nav-link" href="http://localhost/choco/contactus.php">Contact Us</a>
    </li>
	   
	  <li class="nav-item">
      <a class="nav-link" href="http://localhost/choco/login.php">Login</a>
    </li>
  </ul>
</nav>


<?php
		
	}
	?>

