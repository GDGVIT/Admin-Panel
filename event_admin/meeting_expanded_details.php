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
			echo "Details:  $row[5]<br>";
			echo "Place:  $row[4]<br>";
			echo "Date:  $row[2]<br>";
			echo "Time:  $row[3]<br>";
			echo "Date Added:  $row[6]<br>";
			if ($status == 1) {
			echo "<button value='$row[0]' onclick='modify_meeting_ad(this.value)'>MODIFY</button>";
			echo "<button value='$row[0]' onclick='del_meeting_ad(this.value)'>CANCEL</button>";
		}
	}
	mysqli_close($mysqli);
?>