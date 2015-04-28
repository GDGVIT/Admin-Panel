<?php
	session_start();
	include("db_connect.php");
	$meeting_id = $_GET['id'];
	$club_id = $_SESSION['cid'];
	$r1 = mysqli_query($con, "select grp_id from group_meetings where id=$meeting_id") or die("q1 error");
	$row = mysqli_fetch_array($r1);
	$grp_id = $row['grp_id'];
	mysqli_query($con, "delete from group_meetings where id=$meeting_id") or die("q2 error");
	mysqli_query($con, "alter table group_".$grp_id."_meeting_attendance drop column meeting_".$meeting_id) or die("q3 error");
	echo "meeting cancelled successfully";
?>