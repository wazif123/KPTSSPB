<?php

if(isset($_POST['sub']))

{

$mm=$_POST['mm'];

$dd=$_POST['dd'];

$yy=$_POST['yy'];

$dob=$mm."/".$dd."/".$yy;

$arr=explode('/',$dob);

//$dateTs=date_default_timezone_set($dob); 
$dateTs=strtotime($dob);

$now=strtotime('today');

if(sizeof($arr)!=3) die('ERROR:please entera valid date');

if(!checkdate($arr[0],$arr[1],$arr[2])) die('PLEASE: enter a valid dob');

if($dateTs>=$now) die('ENTER a dob earlier than today');

$ageDays=floor(($now-$dateTs)/86400);

$ageYears=floor($ageDays/365);

$ageMonths=floor(($ageDays-($ageYears*365))/30);

echo "<font color='red' size='10'> You are aprox $ageYears years and $ageMonths months old.  </font>";

}

?>

<form method="post"><center>
	
choose your DOB

	<select name="yy">
		<option value="">Year</option>
	        <?php
		for($i=1900;$i<=2014;$i++)
		{
		echo "<option value='$i'>$i</option>";
		}
		?>
	</select>
	

	<select name="mm">
		<option value="">Month</option>
		<?php
		for($i=1;$i<=12;$i++)
		{
		echo "<option value='$i'>$i</option>";
		}
		?>
	</select>
	
	
	<select name="dd">
		<option value="">Date</option>
		<?php
		for($i=1;$i<=31;$i++)
		{
		echo "<option value='$i'>$i</option>";
		}

		?>
	</select>
	
<input type="submit" name="sub" value="check it"/>

	</center>

	</form>
	

