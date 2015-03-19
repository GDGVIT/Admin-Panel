<?php
session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	require("sql_con.php");
	$r=$_REQUEST["r"];
	$m=$_REQUEST["m"];
	$mysql_tbl=$_SESSION["cid"].'_meeting_attendance';
	$q1 = "SELECT * FROM `$mysql_tbl` WHERE regno = '$r'";
	$rs=mysqli_query($mysqli,$q1);
	$res = mysqli_fetch_array($rs);
	$s=0;
	if($res[$m]==0)	
		$s=1;
	else
		$s=0;
	
	$sql="UPDATE `$mysql_tbl` SET `$m`=$s WHERE regno ='$r'";
	$r1=mysqli_query($mysqli,$sql);
	if($r1)
		echo "Update Successful";
	else
		echo"Update Failed";
	mysqli_close($mysqli);
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
