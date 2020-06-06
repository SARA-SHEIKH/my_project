<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Chocolatto-Contact Us</title>
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
	
	<div class="row" style="padding: 10px">
		<div class="col-md-12">
			<h1>Contact Us</h1>
		</div>
		
	
	
	</div>
	<div class="row">
		<div class="col-md-8" style="padding-left: 30px;padding-bottom: 10px">	
		<table >
	
	<tr>
	<td>Name</td>
	<td><input type="text"
			name="Name"
			placeholder="Enter Your Name"
			/>
			</td>
	</tr>		
	<tr>
		<td>Email</td>
		<td><input type="text"
				name="email"
				placeholder="Enter your Email"
		</td>	
	</tr>
	<tr>
		<td>Phone</td>
		<td><input type="text"
				name="Phone"
				placeholder="Enter your cell number"
		</td>	
	</tr>	
	
	<tr>
	<td>Role</td>
	<td >
		<label class="radio-inline">
      	<input type="radio" name="Role">Student
    	</label>
    	<label class="radio-inline">
     	 <input type="radio" name="Role">Teacher
    	</label>
	</td>
	</tr>
	
	<tr>
		<td>City</td>
		<td>
			<select id="cars" name="cars">
    <option value="Lahore" selected>Lahore</option>
    <option value="Karachi">Karachi</option>
    <option value="Islamabad">Islamabad</option>
  </select>
		</td>	
	</tr>	
	
	
</table>
	
	<span><b>Message</b></span><br>
<div class="form-group">
  
  <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" ></textarea>
</div>

</textarea>

<td colspan="2" align="center"><input type="submit" name="Submit" value="Submit" ></td>

		</div>
			
			
		<div class="col-md-4">	
			<div align="center">
				<table border="2">
				<tr>
					<td width="260px"><p style="margin: : 20%">
						<h3>Address</h3>
					  Guldberg Road<br>
					  <strong>Phone:</strong> +1 5589 55488 55<br>
					  <strong>Email:</strong> info@gmail.com<br></td>
					</p>
				</tr>
				</table>
			</div>
			<br>
			
		

			</div>
	</div>
	
	
	
	
	
 <?php
	include "include/footer.php";
	?>

</body>

</html>