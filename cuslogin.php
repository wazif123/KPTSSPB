<?php 
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);

?>
<html>
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	
	<title>Login status</title>
	<link rel="stylesheet" href="style2.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" 
	rel="stylesheet">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     
	</head>
	<body>
		<section class="header">
			<nav>
			<a href="cuslogin.php"><img src="images/koperasi.jpg" alt="Dr smile"></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="cuslogin.php">HOME</a></li>
					<li><a href="profile.php ">PROFILE</a></li>
					<li><a href="logout.php" onClick="alertFunction()">LOGOUT</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		
	<center>
  <div class="container">
	  <img src="images/welcome.gif"></img>
	  <p><h1>You Have Successfully logged-in</h1></p>
	  
	  <p>
		<?php
	  		echo "Hi Mr/Mrs ";
	  		echo $user_data['first_name'];
	  	?>
	  </p>
	It is such a pleasure to have you here!
			
		<h3>What can we help you? :</h3>	
		<a href="profile.php" class="hero-btn">PROFILE</a>
		
		</div>
		
		</section>
<script>
	function alertFunction(){
		let confirmation = confirm("Are you sure you want to logout?");
		if(confirmation){
			alert("Logged out");
		}else{
			alert("canceled");
		}
		
	}		
	</script>
	</body>
</html>
