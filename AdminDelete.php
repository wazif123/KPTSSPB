<?php 
session_start();

	include("connection.php");
	include("function.php");

	$user_data = admin_login($con);
	
	$user_id = $_GET['id'];
	
	//when clicked on Update button
	if(isset($user_id)){
	$del = mysqli_query($con,"DELETE FROM user_info WHERE user_id= '$user_id'");
		
		if($del){
			mysqli_close($con);
			echo ' <script>alert("Appointment Successfully deleted")</script>';
			header("Location: admin.php");
			exit;
		}
		else{
			echo ' <script>alert("Error Deleting record")</script>';
		}
	}
?>