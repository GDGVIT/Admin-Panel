<?php
	require("db_connect.php");
	$grp_id = $_GET['grp_id'];
	$name = $_GET['name'];
	$admin = $_GET['admin'];
	$details = $_GET['details'];
	$q1 = "update groups set name='$name', admin='$admin', details='$details' where grp_id=$grp_id";
	mysqli_query($con, $q1) or die('query1 error');
	echo "group modified successfully";
?>