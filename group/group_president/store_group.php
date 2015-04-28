<?php
	session_start();
	require("db_connect.php");
	$club_id = $_SESSION['cid'];
	$name = $_GET['name'];
	$admin = $_GET['admin'];
	$details = $_GET['details'];
	mysqli_query($con, "insert into groups(club_id, name, admin, details) values($club_id, '$name', '$admin', '$details')") or die("error");
	$r1 = mysqli_query($con, "select grp_id from groups where club_id=$club_id and name='$name' and admin='$admin'");
	while ($row = mysqli_fetch_array($r1)) {
		$grp_id = $row['grp_id'];
	}
	$q1 = "create table group_".$grp_id."_members (
			reg_no varchar(10)
		)";
	mysqli_query($con, $q1) or die("error2");
//	mysqli_query($con, "insert into group_".$grp_id." values ('$admin')") or die("error3");
	$q2 = "create table group_".$grp_id."_meeting_attendance (
			reg_no varchar(10)
		)";
	mysqli_query($con, $q2) or die("error3");
	echo "group created successfully.";
?>