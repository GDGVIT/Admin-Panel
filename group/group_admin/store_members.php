<?php
	require("db_connect.php");
	$mem_arr = json_decode($_GET['members'],true);
	$grp_id = $_GET['grp_id'];
	foreach($mem_arr as $reg_no) {
		mysqli_query($con, "insert into group_".$grp_id."_members values ('$reg_no')") or die("q2 error");
		mysqli_query($con, "insert into group_".$grp_id."_meeting_attendance (reg_no) values ('$reg_no')") or die("q3 error");
	}
	echo "members added successfully";
?>