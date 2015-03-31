<?php
	session_start();
	require("session_check.php");
	require("sql_con.php");
	$regno=$_SESSION['name'];
	$status=$_SESSION['status'];
	$club_id=$_SESSION['cid'];
	$id = $_GET['id'];
	$q1 = "select * from events where id=$id";
	$r1 = mysqli_query($mysqli, $q1) or die("query error");
	while($row = mysqli_fetch_array($r1)) {
            echo "Name:  $row[2]<br>";
			echo "Date:  $row[3]<br>";
			echo "Time:  $row[4]<br>";
			echo "Place:  $row[5]<br>";
			echo "Purpose:  $row[6]<br>";
            echo "Details:  $row[8]<br>";
            if($status == 1) {
			echo "<button value='$row[0]' onclick='modify_ad(this.value)'>MODIFY</button>";
			echo "<button value='$row[0]' onclick='del_ad(this.value)'>DELETE</button>";
			}
	}
	mysqli_close($mysqli);
?>