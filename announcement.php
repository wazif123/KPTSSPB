<?php 
session_start();

	include("connection.php");
	include("function.php");

	
	$sql = "SELECT * FROM mesyuarat";
	
	$result=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	
	<title>KOPERASI PTSSB</title>
	<link rel="stylesheet" href="style33.css">
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
		<h1>PENGUMUMAN</h1>
		<p>Koperasi Politeknik Syed Sirajuddin is one of the top Koperasi in Perlis. Established in 2004, our Koperasi has been providing the best service to our customer for over decades. This legacy of service comes with responsibility. A responsibility to treat people with respect, excellence, and compassion.</p>
		</div>
	</section>
		
		
<!--about-->
	<section class="about">
		<?php 
				while($row = mysqli_fetch_assoc($result)){
				?>
		<h1><?php echo $row['tajuk']?></h1>
		
		<br>
		
		<div class="about-col">
			<p>NAMA : <?php echo $row['tajuk']?></p>
			<p>TARIKH : <?php echo $row['tarikh']?></p>
			<p>MASA : <?php echo $row['masa']?></p>
			<p>KEHADIRAN : <?php echo $row['kehadiran']?></p>
			<p>LOKASI : <?php echo $row['lokasi']?></p>
			<?php 
				}
			?>
			</div>
		
	</section>
<!--campus-->
	<section class="branches" id="opening">
		<h1>Location</h1>
		<p>Currently we only has one branch in Perlis</p>
		<br>
		<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.5527317199712!2d100.33682081477033!3d6.451418695332672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ca35c3598b8cb%3A0x63066d25760bb868!2sPoliteknik%20Tuanku%20Syed%20Sirajuddin!5e0!3m2!1sen!2smy!4v1632464115356!5m2!1sen!2smy" width="900" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
		
		
	</section>
<!--Facilities-->
<section class="dental">
	<h1>TEASER MESYUARAT</h1>
	<p>Good oral hygiene is necessary to keep teeth and gums healthy.<br> It involves habits such as brushing twice a day and having regular dental checkups.</p>
	
	<div class="row">
		<div class="dental-col">
		<img src="images/koopmarts.jpg">
			<h3>Perniagaan Koop Mart</h3>
			<p>Koop Mart telah ditubuhkan pada 2004. Koop Mart adalah kedai yang menjual barangan runcit dan keperluan pelajar contohnya makanan, minuman, alat tulis dan perkhidmatan percetakkan.Ia terletak bersebelahan dengan kolej siswi.</p>
		</div>
		
		
		<div class="dental-col">
		<img src="images/dobimain.PNG">
			<h3>Perniagaan Dobi Layan Diri</h3>
			<p>Koperasi Politeknik Tuanku Syed Sirajuddin Berhad juga ada menyediakan perkhidmatan Mesin Basuh Layan Diri menggunakan duit bagi kegunaan para pelajar di kamsis/asrama. Perkhidmatan mesin basuh layan diri ini telah bermula sejak 2008 secara vendor dan diambil alih sepenuhnya oleh pihak Koperasi Politeknik Tuanku Syed Sirajuddin Bhd pada tahun 2013 sehingga sekarang.</p>
		</div>
	
	</div>
</section>

<!--- testimonial---->
<section class="testimonial">
	<h1>What our patients says</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
	
	<div class="row">
		<div class="testimonial-col">
			<img src="images/patient1.jpg">
				<div>
				<p>Excellent doctor!!!Very thorough and caring. I'm terribly afraid of the dentist and she's very sensitive to that and goes the extra mile to make you feel comfortable. Love her!</p>
				<h2>Aliyah Farazi</h2>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star-o" ></i>
				</div>
		</div>
		<div class="testimonial-col">
			<img src="images/patient2.jpg">
				<div>
				<p>I went to see Dr. Meena on June 4th of this year. She took a lot of time to explain the procedure and made sure that she understood my concerns. She extracted one of my teeth which was absolutely painless and for which I am very grateful.</p>
				<h2>Ali Hamzah</h2>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star-half-o" ></i>
				</div>
	  </div>	
</section>

<!--call to action-->
<section class="cta">
	<h1>Book for an appointment online now</h1>	
	<a href="choose.php" class="hero-btn">BOOK</a>
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