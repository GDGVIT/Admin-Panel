<?php
session_start();
	require("session_check.php");
	$r=$_REQUEST["r"];
	$m=$_REQUEST["m"];
	$mysql_tbl=$_SESSION["cid"].'_event_attendance';
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
		echo "<h4 class='paddl'>Successfully modified.</h4>";
	else
		echo "<h4 class='paddl text-danger'>Modify Failed.</h4>";
	mysqli_close($mysqli);
?>
