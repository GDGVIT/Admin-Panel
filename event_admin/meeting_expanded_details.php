<?php
	session_start();
	require("session_check.php");
	require("sql_con.php");
	$regno=$_SESSION['name'];
	$status=$_SESSION['status'];
	$club_id=$_SESSION['cid'];
	$id = $_GET['id'];
	$q1 = "select * from meetings where id=$id";
	$r1 = mysqli_query($mysqli, $q1) or die("query error");
	while($row = mysqli_fetch_array($r1)) {
			echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Details</h5>&nbsp:&nbsp<span style='font-size:20px'>$row[5]</span><br><br>";
			echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Place</h5>&nbsp:&nbsp<span style='font-size:20px'>$row[4]</span><br><br>";
			echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Date</h5>&nbsp:&nbsp<span style='font-size:20px'>$row[2]</span><br><br>";
			echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Time</h5>&nbsp:&nbsp<span style='font-size:20px'>$row[3]</span><br><br>";
			echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Date Added</h5>&nbsp:&nbsp<span style='font-size:20px'>$row[6]</span><br><br>";
			if ($status == 1) {
			echo "<a class='btn' href='#' style='background-color:#e75457;color:white;margin-left:20%;' onclick='modify_meeting_ad($row[0])'>Modify</a>";
			echo "<a class='btn' href='#' style='background-color:#e75457;color:white;' onclick='del_meeting_ad($row[0])'>Cancel Meeting</a>";
		}
	}
	mysqli_close($mysqli);
?>