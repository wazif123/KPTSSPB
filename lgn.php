<?php
session_start();

	include("connection.php");
	include("function.php");

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		//something was posted
		$ic = $_POST['ic'];
		$password = $_POST['password'];
		
		if(!empty($password) && !empty($ic) )
		{
			//read from database
			
			$sql = "SELECT * FROM `user_info` WHERE ic= '$ic' limit 1";	
			
			$result = mysqli_query($con, $sql);	
			
			if($result)
			{
					if($result && mysqli_num_rows($result) > 0)
					{
					$user_data = mysqli_fetch_assoc($result);
					
						if($user_data['password'] === $password)
						{
						$_SESSION['ic'] = $user_data['ic'];
						header("Location: cuslogin.php");
						die;
						}
					}
			}
			echo '<script>alert("Wrong email or password")</script>';
		}
		else{
			echo '<script>alert("EMPTY FORM")</script>';
		}
	}
?>

<!DOCTYPE html>

<html>
<head>
	 <meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	
	<title>DR Smile Website — Login</title>
	<link rel="stylesheet" href="stylee.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" 
	rel="stylesheet">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
<style>
body{
	background-image:url('img4.jpg');
	background-size:cover;
	margin:0;
	padding:0;
	font-family: 'Poppins', sans-serif;
}

	
	

/**login page**/

input[type=text], input[type=password] {
  width: 70%;
  padding: 12px 120px;
  margin: 8px 0;
}

button {
  background-color: #1196d9;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 90%;
}
	button:hover{
		color: #000000;
		transition: 0.6s;
		
	}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.container{	
  align-content:center; 
  max-width: 700px;
  width: 100%;
  background-color: #35617E;
  padding: 50px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  top:50%;
}
.container p{
	margin-top: 30px;
}
.container h3{
	color: darkgrey;
	margin-bottom: 10px;
	margin-top: 5px;
}
	</style>
<!--Form validation-->
	<script>
	function validateForm(){
		var x= document.forms["login"]["ic"].value;
		var y= document.forms["login"]["password"].value;
		if (x == "") {
    alert("Please enter your email");
    return false;
                     }
		else if (y == "") {
    alert("Please enter your password");
    return false;
                     }
	}
	</script>
	
	
</head>

<body>
	<section class="header">
		<nav>
			<a href="index.php"><img src="images/koperasi.jpg" alt="Koperasi Politeknik Tuanku Syed Sirajuddin"></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				 <ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="activities.php">ACTIVITIES</a>
					<li><a href="announcement.php">ANNOUNCEMENT</a>	
					<li><a href="rules.php">RULES</a></li>
					<li><a href="choose.php">LOGIN</a></li>
					<li><a href="team.php">OUR TEAM</a></li>
			</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		
	<center>
  <div class="container">


    <div class="content">


	
     <form method="POST">
		 <div class="user-details">
   		 <div>
			<p style="color:white">
   			 <div class="input-box">
           	 <span class="details"><h4 style="color:#000000;">Identification No.</h4></span>
         	   <input type="text" name="ic" placeholder="Enter your identification no." required>
       	   	 </div>
       	   <div class="input-box">
			   <span class="details"><h4 style="color:#000000;">Password</h4></span>
            <input type="password" name="password" placeholder="Enter your password" required>
         	 </div>
        	</p>
	
    <button type="submit" value="Login" name="btn-login">Login</button><br>
    
	<label>
		
	<a href="signup.php">Sign up</a>
		<span class="psw" style="color:white"><a href="adminLogin.php">Admin login</a>
      
    </label>
		
        </div>
	<br>
  <div>
    <span class="psw" style="color:white"><a href="adminLogin.php">Admin login</a></span>
  </div>
 </form>


    </div>

  </div>
	</center>
	</section>
	
	
	
	 <footer>
        <div class="footer-content">
            <h4>About us</h4>
			<p>PAUH PUTRA, 02600 ARAU, PERLIS<br>

			04-9867 176<br>
			koop.poliperlis@gmail.com </p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
		<div class="footer-bottom">
            <p>copyright &copy;Koperasi Politeknik Tuanku Syed Sirajuddin.</p>
        </div>
	 </footer>
	
<!--Menu toggle-->	
	<script>
	 var navLinks = document.getElemetById("navLinks");
	 
	 function showMenu(){
		navLinks.style.right="0";
	 }
	 function hideMenu(){
		navLinks.style.right="-200px";
	 }
	</script>
	
</body>
</html>