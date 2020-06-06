<!doctype html>
<html>
<head>
<title>view</title>
</head>
<body>
	
	
	<?php 
		
		session_start();
		$u = $_POST['username'];
		$p = $_POST['pass'];
		
		$en_pass = md5($p);
		
		require "require/connection.php";
		$query = "SELECT `userId`, `username`, `userpassword` FROM `tblusers` ";
		$result = mysqli_query($conn,$query);
		?>
		
		 
		<?php
	$check = "no";
		while($res = mysqli_fetch_assoc($result)) 
	
		{
			if($res['username']===$u && $res['userpassword']===$en_pass) 
			{
				$_SESSION['status'] = true;
				header("location:home.php");
				$check = "yes";
			}
			
		}
	
	if($check=="no")
	{
		$_SESSION['result'] = true;
		header("location:login.php");
	}
		?>
	
	
		
	
</body>
</html>
