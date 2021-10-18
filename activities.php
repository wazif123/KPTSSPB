<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	
	<title>KOPERASI PTSSB</title>
	<link rel="stylesheet" href="styleee.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" 
	rel="stylesheet">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<body>
 	<section class="header">
	 	<nav>
			<a href="index.html"><img src="images/koperasi.jpg" alt="Koperasi Politeknik Tuanku Syed Sirajuddin"></a>
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
		<h1>KPTSSB's ACTIVITIES</h1>
		<p>Koperasi Politeknik Syed Sirajuddin is one of the top Koperasi in Perlis. Established in 2004, our Koperasi has been providing the best service to our customer for over decades. This legacy of service comes with responsibility. A responsibility to treat people with respect, excellence, and compassion.</p>
		</div>
	</section>
		
		
<!--about-->
	<section class="about">
		<h1>CHOOSE THE ACTIVITIES BELOW</h1>
		
		<br>
		
		<div class="about-col">
				
		<a href="koop.php" class="hero-btn">COOP MART</a>
		<a href="dobi.php" class="hero-btn">DOBI LAYAN DIRI</a>
				
			</div>
		
	</section>

<!-----Footer----->
	<footer>
        <div class="footer-content">
            <h4>About us</h4>
			<p>PAUH PUTRA, 02600 ARAU, PERLIS<br>

			04-9867 176<br>
			koop.poliperlis@gmail.com </p>
            <ul class="socials">
                <li><a href="https://www.facebook.com/ptsscoop.com.my/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#search/koop.poliperlis%40gmail.com"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
		<div class="footer-bottom">
            <p>copyright &copy;Koperasi Politeknik Tuanku Syed Sirajuddin.</p>
        </div>
	 </footer>
	</section>
		






<!--Javascript for toggle menu-->
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