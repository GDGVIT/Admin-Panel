<?php
	session_start();
	include("db_connect.php");
	$id = $_GET['id'];
	$cid = $_GET['cid'];
	$name = $_GET['name'];
	$date = $_GET['d'];
	$time = $_GET['t'];
	$place = $_GET['pl'];
	$purpose = $_GET['pu'];
	$details = $_GET['det'];
	$date_added = $_GET['da'];
	$q1 = "update events set name='$name', date='$date', time='$time', place='$place', purpose='$purpose', date_added='$date_added', details='$details' where id=$id";
	mysqli_query($con, $q1) or die('query1 error');
	echo "event modified successfully";
?>