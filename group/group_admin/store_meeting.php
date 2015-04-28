<?php
	session_start();
	include("db_connect.php");
	$cid = $_GET['cid'];
	$grp_id = $_GET['grp_id'];
	$date = $_GET['d'];
	$time = $_GET['t'];
	$place = $_GET['pl'];
	$details = $_GET['det'];
	$date_added = $_GET['da'];
	$q1 = "insert into group_meetings(grp_id, club_id, date, time, place, details, date_added) values($grp_id, $cid, '$date', '$time', '$place', 
		'$details', '$date_added')";
	mysqli_query($con, $q1) or die('query1 error');
	$q2 = "select id from group_meetings where date='$date' and time='$time' and club_id=$cid and grp_id=$grp_id";
	$r2 = mysqli_query($con, $q2) or die('q2 error');
	$row = mysqli_fetch_array($r2);
	$eid = $row[0];
	mysqli_query($con, "alter table group_".$grp_id."_meeting_attendance add column meeting_".$eid." int DEFAULT 0") or die('q3 error');
	echo "meeting arranged successfully";
?>