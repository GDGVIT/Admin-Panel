<?php
session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	require("sql_con.php");
	$m=$_GET['r'];

	$reg=json_decode($_GET['reg'],true);
	
	$atten=json_decode($_GET['atten'],true);
	
	$len=$_REQUEST["len"];
	for ($k = 0; $k < $len; $k++) {
	

	

	$s=$atten[$k];
	$r1=$reg[$k];

$mysql_tbl=$_SESSION["cid"].'_event_attendance';

	$sql="UPDATE `$mysql_tbl` SET `$m`=$s WHERE regno ='$r1'";
	
	$r1=mysqli_query($mysqli,$sql);
}
	if($r1)
		echo "<h4 class='paddl'>Update Successful !</h4>";
	else
		echo "<h4 class='paddl'>Update Failed !</h4>";
	

	}
	else
	{
		session_unset();
		session_destroy();
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		header("Location:signin.php");
	}
?>
