<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sus";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect to database");
	
	
}
?>