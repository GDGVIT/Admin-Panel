<?php
	session_start();
	include("db_connect.php");
	$id = $_GET['id'];
	$club_id = $_SESSION['cid'];
	mysqli_query($con, "delete from meetings where id=$id") or die("q1 error");
	mysqli_query($con, "alter table ".$club_id."_meeting_attendance drop column meeting_".$id) or die("q2 error");
	echo "<h4 class='paddl'>Meeting cancelled successfully !</h4>";
?>