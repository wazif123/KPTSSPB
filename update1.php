<?php 
session_start();

	include("connection.php");
	include("function.php");
	
	
	$sql = mysqli_query($con, "SELECT * FROM mesyuarat ");
	
	$data= mysqli_fetch_array($sql);
	//when clicked on Update button
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$tajuk = $_POST['tajuk'];
		$tarikh = $_POST['tarikh'];
		$masa = $_POST['masa'];
		$kehadiran = $_POST['kehadiran'];
		$lokasi = $_POST['lokasi'];

			$edit = "UPDATE mesyuarat set tajuk='$tajuk',tarikh='$tarikh',masa='$masa',kehadiran='$kehadiran',lokasi='$lokasi' ";
		
			mysqli_query($con, $edit);
		    header("Location: admin.php");
			die;	
	}
?>
<html>
<head>
	<title>UPDATE MESYUARAT</title>	
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
				<th>Tajuk</th>
				<td> <input type="text" class="kotak" name="tajuk" value="<?php echo $data['tajuk'] ?>" Required></td>
			</tr></div>
				<div class="input-box">
			<tr>
				<th>Tarikh</th>
				<td> <input type="text" class="kotak" name="tarikh" value="<?php echo $data['tarikh'] ?>" Required></td>
			</tr></div>
				<div class="input-box">
			<tr>
				<th>Masa</th>
				<td> <input type="text" class="kotak" name="masa" value="<?php echo $data['masa'] ?>" Required></td>
			</tr></div>
				<div class="input-box">
			<tr>
				<th>Kehadiran</th>
				<td> <input type="text" class="kotak" name="kehadiran" value="<?php echo $data['kehadiran'] ?>" Required></td>
			</tr></div>
				   </div>
				  <div class="input-box">
			<tr>
				<th>Lokasi</th>
				<td> <input type="text" class="kotak" name="lokasi" value="<?php echo $data['lokasi'] ?>" Required></td>
			</tr></div>
			</div>
		</table>	
		
		<p style="color:#fff">UPDATE MAKLUMAT MESYUARAT TERKINI</h3><br><br>
			<input type="submit" name="submit" value="Submit" class="hero-btn" onClick="alertFunction()"></input>
	</form>
</section>
	
	</section>
<script>
	function alertFunction(){
		let confirmation = confirm("Proceed to edit this information?");
		if(confirmation){
			alert("customer appointment Successfully edited");
		}else{
			alert("canceled");
		}
		
	}		
	</script>
		
	
</body>
	
</html>