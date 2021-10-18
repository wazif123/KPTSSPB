<?php 
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);
	
	$user_id = $user_data['user_id'];
	$sql = "SELECT * FROM user_info where user_id = '$user_id' ";
	
	$result=mysqli_query($con,$sql);
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
			<a href="cuslogin.php"><img src="images/koperasi.jpg" alt="Koperasi Politeknik Tuanku Syed Sirajuddin"></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="cuslogin.php">HOME</a></li>
					<li><a href="profile.php ">PROFILE</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		
	<center>
  <div class="container">
	   
			<table class="w3-table-all">
			<?php 
				while($row = mysqli_fetch_assoc($result)){
				?>
				<tr>
				 <th id="date"></th>
				</tr>
			<tr>
				<th>Name</th>
				<td> <?php echo $row['first_name']?></td>
			</tr>
			<tr>
				<th>Identification No.</th>
				<td><?php echo $row['ic']?></td>
			</tr>
				<th>Email</th>
				<td><?php echo $row['email']?></td>
			</tr>
			<tr>
				<th>Mobile Number</th>
				<td><?php echo $row['mobile']?></td>
			</tr>
			<tr>
				<th>Age</th><td>
	<?php
      $birthDate = $row['bday'];

$currentDate = date("Y");

$age = date_diff(date_create($birthDate), date_create($currentDate));

echo $age->format("%y");
					?>
	</td> 
			</tr>
				
				<th>Department</th>
				<td><?php echo $row['Department']?></td>
			</tr>
				
		        <th>Address</th>
				<td><?php echo $row['address']?></td>
			</tr>
		        <th>Guardian Contact</th>
				<td><?php echo $row['guardiancontact']?></td>
			</tr>
	            <th>Intake</th>
				<td><?php echo $row['intake']?></td>
			</tr>
                  <th>Semester</th>
				<td><?php echo $row['semester']?></td>
			</tr>
                <th>Membership date</th>
				<td><?php echo date('d/m/20y', strtotime($row['membershipdate']));?></td>
			</tr>
		
				<th>Syer</th>
				<td>RM&nbsp<?php echo $row['Syer']?></td>
			</tr>
            <th>Birthdate</th>
				<td><?php echo date('d/m/20y', strtotime($row['bday']));?></td>
			</tr>       
			
	  		</table>

	  
	  <p style="color:#151615">EDIT PROFLE</h3><br>
<a class="hero-btn" onclick="window.print()">PRINT</a>
		<a class="hero-btn" href="profileEdit.php"edit.php?id=<?php echo $row['user_id']; ?>>EDIT</a>
	  <?php 
				}
			?>
	  
		</div>
		
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
		
		</section>
<script>
			n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = "DATE :&nbsp"+ d + "/" + m + "/" + y;
			
			</script>
																							 
																							 
																							 
	</body>
</html>
