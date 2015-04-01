<?php
	session_start();
	include("db_connect.php");
	$cid = $_GET['cid'];
	$date = $_GET['d'];
	$time = $_GET['t'];
	$place = $_GET['pl'];
	$details = $_GET['det'];
	$date_added = $_GET['da'];
	$q1 = "insert into meetings(club_id, date, time, place, details, date_added) values($cid, '$date', '$time', '$place', 
		'$details', '$date_added')";
	mysqli_query($con, $q1) or die('query1 error');
	$q2 = "select id from meetings where date='$date' and time='$time' and club_id=$cid";
	$r2 = mysqli_query($con, $q2) or die('q2 error');
	$row = mysqli_fetch_array($r2);
	$eid = $row[0];
	mysqli_query($con, "alter table ".$cid."_meeting_attendance add column meeting_".$eid." int DEFAULT 0") or die('q3 error');
	echo "<h4 class='paddl'>Meeting arranged successfully !</h4>";
?>