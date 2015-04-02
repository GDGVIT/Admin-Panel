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
			echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Task</h5>&nbsp:&nbsp<span style='font-size:20px'>$row[3]</span><br><br>";
            echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Description</h5>&nbsp:&nbsp<span style='font-size:20px'>$row[7]</span><br><br>";
            echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Assigned Member</h5>&nbsp:&nbsp<span style='font-size:20px'>$row[1]</span><br><br>";
			echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Assignment Date</h5>&nbsp:&nbsp<span style='font-size:20px'>$row[4]</span><br><br>";
			echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Completion Date</h5>&nbsp:&nbsp<span style='font-size:20px'>$row[5]</span><br><br>";
			if ($row[6] == 0)
			echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Status</h5>&nbsp:&nbsp<span style='font-size:20px'>Pending</span><br><br>";
			else
			echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Status</h5>&nbsp:&nbsp<span style='font-size:20px'>Done</span><br><br>";
	}
	mysqli_close($mysqli);
?>