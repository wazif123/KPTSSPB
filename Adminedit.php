<?php 
session_start();

	include("connection.php");
	include("function.php");

	$user_data = admin_login($con);
	
	$user_id = $_GET['id'];
	
	$sql = mysqli_query($con, "SELECT * FROM user_info WHERE user_id='$user_id' ");
	
	$data= mysqli_fetch_array($sql);
	//when clicked on Update button
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$first_name = $_POST['first_name'];
		$ic = $_POST['ic'];
		$Department = $_POST['Department'];
		$address = $_POST['address'];
		$Syer = $_POST['Syer'];

			$edit = "UPDATE user_info set first_name='$first_name', ic='$ic', Department='$Department', address='$address' ,Syer = '$Syer' WHERE user_id='$user_id'";
		
			mysqli_query($con, $edit);
			header("Location: admin.php");
			die;	
	}
?>
<html>
<head>
	<title>ADMIN PAGE</title>	
	<title>DR Smile Website — Login</title>
		<link rel="stylesheet" href="adminn.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" 
		rel="stylesheet">
	</head>

<body>
	<section class="header">
			<nav>
			<a href="index.html"><img src="images/drsmile.png" alt="Dr smile"></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="index.php">Logout</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
	<section class="container">
		<table>
		<form method="POST">
			<div class="user-details">
         <div class="input-box">
			<tr>
				<th>NAME</th>
				<td> <input type="text" class="kotak" name="first_name" value="<?php echo $data['first_name'] ?>" Required></td>
			</tr></div>
			 <div class="input-box">
			<tr>
				<th>Identification No.</th>
				<td> <input type="text" class="kotak" name="ic" value="<?php echo $data['ic'] ?>" Required></td>
			</tr></div>
				  <div class="input-box">
			<tr>
				<th>Department</th>
				<td> <input type="text" class="kotak" name="Department" value="<?php echo $data['Department'] ?>" Required></td>
			</tr></div>
				  <div class="input-box">
			<tr>
				<th>Syer</th>
				<td> <input type="text" class="kotak" name="Syer" value="<?php echo $data['Syer'] ?>" Required></td>
			</tr></div>
			</div>
		</table>	
		
		<p style="color:#fff">SUBMIT CUSTOMER APPOINTMENT NEW INFORMATION</h3><br><br>
			<input type="submit" name="submit" value="Submit" class="hero-btn" onClick="return alertFunction();"></input>
	</form>
</section>
	
	</section>
<script>
	function alertFunction(){
		return confirm("Proceed to edit this customer appointment?");
		
		
	}		
	</script>
		
	
</body>
	
</html>