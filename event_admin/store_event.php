<?php
	session_start();
	include("db_connect.php");
	$name = $_GET['name'];
	$cid = $_GET['cid'];
	$date = $_GET['d'];
	$time = $_GET['t'];
	$place = $_GET['pl'];
	$purpose = $_GET['pu'];
	$details = $_GET['det'];
	$date_added = $_GET['da'];
	$q1 = "insert into events(club_id, name, date, time, place, purpose, date_added, details) values($cid, '$name', '$date', '$time', '$place', '$purpose', '$date_added', '$details')";
	mysqli_query($con, $q1) or die('query1 error');
	$q2 = "select id from events where date='$date' and time='$time' and name='$name'";
	$r2 = mysqli_query($con, $q2) or die('q2 error');
	$row = mysqli_fetch_array($r2);
	$eid = $row[0];
	mysqli_query($con, "alter table ".$cid."_event_attendance add column event_".$eid." int DEFAULT 0") or die('q3 error');
	echo "event created successfully";
?>