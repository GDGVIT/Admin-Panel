<?php
	session_start();
	include("db_connect.php");
	$id = $_GET['id'];
	$club_id = $_SESSION['cid'];
	mysqli_query($con, "delete from events where id=$id") or die("q1 error");
	mysqli_query($con, "alter table ".$club_id."_event_attendance drop column event_".$id) or die("q2 error");
	echo "event delete successfully";
?>