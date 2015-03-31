<?php
	session_start();
	require("session_check.php");
	require("sql_con.php");
	$regno=$_SESSION['name'];
	$status=$_SESSION['status'];
	$club_id=$_SESSION['cid'];
	$id = $_GET['id'];
	$q1 = "select * from task where id=$id";
	$r1 = mysqli_query($mysqli, $q1) or die("query error");
	while($row = mysqli_fetch_array($r1)) {
			echo "Task:  $row[3]<br>";
            echo "Description:  $row[7]<br>";
            echo "Assigned Member:  $row[1]<br>";
			echo "Assignment Date:  $row[4]<br>";
			echo "Completion Date:  $row[5]<br>";
			if ($row[6] == 0)
			echo "Status:  Pending<br>";
			else
			echo "Status:  Done<br>";
	}
	mysqli_close($mysqli);
?>