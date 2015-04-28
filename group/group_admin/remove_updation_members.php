<?php
	require("db_connect.php");
	$mem_arr = json_decode($_GET['members'],true);
	$grp_id = $_GET['grp_id'];
	foreach($mem_arr as $reg_no) {
		mysqli_query($con, "delete from group_".$grp_id."_members where reg_no='$reg_no'") or die("q1 error");
		mysqli_query($con, "delete from group_".$grp_id."_meeting_attendance where reg_no='$reg_no'") or die("q1 error");
	}
	echo "members removed successfully";
?>