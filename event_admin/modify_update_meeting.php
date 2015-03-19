<?php
	session_start();
	include("db_connect.php");
	$id = $_GET['id'];
	$cid = $_GET['cid'];
	$date = $_GET['d'];
	$time = $_GET['t'];
	$place = $_GET['pl'];
	$details = $_GET['det'];
	$date_added = $_GET['da'];
	$q1 = "update meetings set date='$date', time='$time', place='$place', date_added='$date_added', details='$details' where id=$id";
	mysqli_query($con, $q1) or die('query1 error');
	echo "meeting modified successfully";
?>