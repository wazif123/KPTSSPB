<?php 

function check_login($con)
{

	if(isset($_SESSION['ic']))
	{
		$ic = $_SESSION['ic'];
		$query = "select * from user_info where ic = '$ic' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: lgn.php");
	die;
}

function admin_login($con)
{
	if(isset($_SESSION['name']))
	{
		$name = $_SESSION['name'];
		$query = "select * from admin where name = '$name' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: adminLogin.php");
	die;
	
}


function random_num($length)
{
	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}



