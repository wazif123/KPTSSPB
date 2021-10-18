<?php
session_start();

	include("connection.php");
	include("function.php");

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		//something was posted
		$first_name = $_POST['first_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$mobile = $_POST['mobile'];
		$age = $_POST['age'];
		$conpass = $_POST['conpass'];
		$Department = $_POST['Department'];
		$guardiancontact = $_POST['guardiancontact'];
		$address = $_POST['address'];
		$membershipdate = $_POST['membershipdate'];
		$semester = $_POST['semester'];
		$ic = $_POST['ic'];
		$intake = $_POST['intake'];
			
			//save to database
			$id = random_num(20);
			$sql = "insert into user_info (id,first_name,email,password,conpass,mobile,age,Department,guardiancontact,address,membershipdate,
			semester,ic,intake) values ('$id','$first_name','$email','$password','$conpass','$mobile', '$age','$Department','$guardiancontact','$address','$membershipdate','$semester','$ic','$intake')";	
			
			if($conpass == $password){
			echo '<script>alert("Sign Up Successful, Please login to your account.")</script>';
			mysqli_query($con, $sql);
			header("Location: lgn.php");
			die;
			}
			else{
				echo '<script>alert("Password and confirm password does not match, please re-enter")</script>';
				die;
			}
	}
	
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	
	<title>DR Smile Website — Sign Up</title>
	<link rel="stylesheet" href="style2.css">
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
		
	<center>
  <div class="container">

    <div class="title">Sign Up Form</div>
    <div class="content">
      <form method="POST" >
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name (Same as in IC)</span>
            <input type="text" id="caps1" onBlur="mycapital()" name="first_name" placeholder="Enter your full name" required>
			</div>
			<div class="input-box">
            <span class="details">Identification No. (IC No./Passport) *</span>
            <input type="text" name="ic" placeholder="Without (-)" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
		  <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="conpass" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="mobile" placeholder="Enter your mobile number" required>
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="text" name="age" placeholder="Enter your age" required>
          </div>
		  <div class="input-box">
            <span class="details">Address</span>
            <input type="text" id="caps3" onBlur="mycapital()" name="address" placeholder="Enter your age" required>
          </div>
			<div class="input-box">
            <span class="details">Guardian's Phone Number</span>
            <input type="text" name="guardiancontact" placeholder="Enter your Guardian's Phone Number" required>
          </div>
			<div class="input-box">
            <span class="details">Semester</span>
            <input type="text" id="caps2" onBlur="mycapital()" name="semester" placeholder="Enter your semester" required>
          </div>
			<div class="input-box">
            <span class="details">Intake</span>
            <input type="text" name="intake" value="1.2021/2">
          </div>
			
			<div class="input-box">
            <span class="details">Membership date</span>
            <input type="date" name="membershipdate" placeholder="Enter your Membership date" required>
          </div>
			<div class="input-box">
            <span class="details">Department</span>
            <select name="Department" id="Department" required>
                    <option value="">--Required--</option>
                    <option value="Jabatan Kejuruteraan Mekanikal">Jabatan Kejuruteraan Mekanikal</option>
                    <option value="Jabatan Kejuruteraan ELektrik">Jabatan Kejuruteraan Elektrik</option>
                    <option value="Jabatan Perdagangan">Jabatan Perdagangan</option>
				    <option value="Jabatan Reka Bentuk dan Komunikasi Visual">Jabatan Reka Bentuk dan Komunikasi Visual</option>
				    <option value="Jabatan Pelancongan dan Hospitaliti">Jabatan Pelancongan dan Hospitaliti</option>
                    <option value="Jabatan Teknologi Maklumat dan Komunikasi">Jabatan Teknologi Maklumat dan Komunikasi</option>
				    <option value="Jabatan Matematik, Sains dan Komputer">Jabatan Matematik, Sains dan Komputer</option>
				    <option value="Jabatan Pengajian Am">Jabatan Pengajian Am</option>
				    <option value="Jabatan Sukan, Kokurikulum, Kebudayaan dan Warisan">Jabatan Sukan, Kokurikulum, Kebudayaan dan Warisan</option>
				</select>
          </div>
        </div>
		  
        <div class="button">
          <input type="submit" value="Sign Up" onClick="alertFunction()">
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
	
	<script>
	function alertFunction(){
		alert("Successfully booked. Please proceed to login.");
	}
		
	function mycapital(){
		var x = document.getElementById("caps1");
		x.value=x.value.toUpperCase();
		var x = document.getElementById("caps2");
		x.value=x.value.toUpperCase();
		var x = document.getElementById("caps3");
		x.value=x.value.toUpperCase();
	}
	</script>	
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
