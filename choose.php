<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	
	<title>DR Smile Booking</title>
	<link rel="stylesheet" href="style2.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" 
	rel="stylesheet">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<section class="header">
		<nav>
			<a href="index.php"><img src="images/koperasi.jpg" alt="dr smile"></a>
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
		
	<div class="text-box">
		<h1>KOPERASI PTSS LOGIN</h1>
		<p>please choose</p>
		<a href="signup.php" class="hero-btn">Signup</a>
		<a href="lgn.php" class="hero-btn">Login</a>
		
	</div>
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
	var navLinks=document.getElementById("navLinks");
	function showMenu(){
		navLinks.style.right = "0";
	}
	function hideMenu(){
		navLinks.style.right = "-200px";
	}
	
</script>
	
</body>
</html>