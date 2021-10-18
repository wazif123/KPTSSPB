<?php
session_start();

	include("connection.php");
	include("function.php");

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		//something was posted
		
		$name = $_POST['name'];
		$password = $_POST['password'];
		
		if(!empty($name) && !empty($password) )
		{
			//read from database
			
			$sql = "SELECT * FROM admin WHERE name= '$name' limit 1";
			
			$result = mysqli_query($con, $sql);	
			
			if($result)
			{
					if($result && mysqli_num_rows($result) > 0)
					{
					$user_data = mysqli_fetch_assoc($result);
					
						if($user_data['password'] === $password)
						{
						$_SESSION['name'] = $user_data['name'];
						header("Location: admin.php");
						die;
						}
					}
			}
			echo '<script>alert("Wrong username or password")</script>';
		}
		else{
			echo '<script>alert("EMPTY FORM")</script>';
		}
	}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Administrator Login</title>
<link rel="stylesheet" href="adminstyle.css">

		
</head>

<body>

<div class="admin-login">
	<h1>Admin Login</h1>
	<form method="POST" >
		 <h4>Username:</h4>
		  <div class="textbox">
		 <i class="fa fa-user" aria-hidden="true"></i>
     	  <input type="text" name="name" placeholder="Enter admin username" required>
		 </div>
		
	 	<h4>Password:</h4>
		<div class="textbox">
		<label for="password"><b></b></label>
	 	<i class="fa fa-lock" aria-hidden="true"></i>
	 	 <input type="password" placeholder="Enter Password" name="password" required>
		 </div>
	    
		 <button class="btn" type="submit" value="Login" name="btn-login">Login</button><br>
		
	</form>
	
</div>
	
</body>
	
	
	
</html>
