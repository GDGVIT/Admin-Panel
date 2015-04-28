<?php
	require("db_connect.php");
	$grp_id = $_GET['grp_id'];
	mysqli_query($con, "delete from groups where grp_id=$grp_id") or die("q1 error");
	mysqli_query($con, "drop table group_".$grp_id."_members") or die("q2 error");
	mysqli_query($con, "drop table group_".$grp_id."_meeting_attendance") or die("q3 error");
	echo "group deleted successfully.";
?>