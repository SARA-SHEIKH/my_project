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
		
		
		
		include "connection.php";
		$query = "SELECT `userId`, `username`, `userpassword` FROM `tblusers` ";
		$result = mysqli_query($conn,$query);
		?>
		
		 
		<?php
	$check = "no";
		while($res = mysqli_fetch_assoc($result)) 
	
		{
			if($res['username']===$u && $res['userpassword']===$p) 
			{
				header("location:loginpage.php");
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
