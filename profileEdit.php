<?php 
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);
	
	$user_id = $user_data['user_id'];

	$qry = mysqli_query($con, "SELECT * FROM user_info WHERE user_id='$user_id' ");

	$data = mysqli_fetch_array($qry);
	//when clicked on Update button
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		
	$first_name = $_POST['first_name'];
	$ic = $_POST['ic'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$guardiancontact = $_POST['guardiancontact'];
		
		$edit = "UPDATE user_info set email='$email',mobile='$mobile',address='$address',guardiancontact='$guardiancontact' WHERE user_id='$user_id'";

		mysqli_query($con, $edit);	
		header("Location: profile.php");
		die;
		} 
		
?>
<html>
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	
	<title>Login status</title>
	<link rel="stylesheet" href="style23.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" 
	rel="stylesheet">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     
	</head>
	<body>
		<section class="header">
			<nav>
			<a href="cuslogin.php"><img src="images/koperasi.jpg" alt="Koperasi Politeknik Tuanku Syed Sirajuddin"></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="cuslogin.php">HOME</a></li>
					<li><a href="profile.php ">PROFILE</a></li>
					<li><a href="appointment.html">BOOK</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		
	<center>
  <div class="container">
	  
	   <img src="images/profile.gif" alt="profile"></img><p>
		<h1>Please Update your data in the form</h1>
		<p>
			<table class="w3-table-all">
		<form method="POST">
			<tr>
				<th>Contact No.</th>
				<td> <input type="text" class="kotak" name="mobile" value="<?php echo $data['mobile'] ?>" Required></td>
			</tr>
			<tr>
				<th>Guardian's Contact No.</th>
				<td> <input type="text" class="kotak" name="guardiancontact" value="<?php echo $data['guardiancontact'] ?>" Required></td>
			</tr>
			<tr>
				<th>Email</th>
				<td> <input type="text" class="kotak" name="email" value="<?php echo $data['email'] ?>" Required></td>
			</tr>
			<tr>
				<th>Address</th>
				<td> <input type="text" id="caps1" onBlur="mycapital()" class="kotak" name="address" value="<?php echo $data['address'] ?>" Required></td>
			</tr>
			
	  		</table>
	
	  <p style="color:#151615">SUBMIT EDIT</h3><br>
		<input type="submit" name="update" value="Update" class="hero-btn" onClick="alertFunction()">
	  
	</form>
	  
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
	
	<script>
	function alertFunction(){
		let confirmation = confirm("Are you sure you want to edit your profile?");
		if(confirmation){
			alert("Profile Successfully Edited.");
		}else{
			alert("Profile edit cancelled.");
		}
		
	}	
		function mycapital(){
		var x = document.getElementById("caps1");
		x.value=x.value.toUpperCase();
	}
	</script>
	</body>
</html>
