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
            echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Name</h5>&nbsp:&nbsp<span style='font-size:20px'>$row[2]</span><br><br>";
			echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Date</h5>&nbsp:&nbsp<span style='font-size:20px'>$row[3]</span><br><br>";
			echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Time</h5>&nbsp:&nbsp<span style='font-size:20px'>$row[4]</span><br><br>";
			echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Place</h5>&nbsp:&nbsp<span style='font-size:20px'>$row[5]</span><br><br>";
            echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Date Added</h5>&nbsp:&nbsp<span style='font-size:20px'>$row[7]</span><br><br>";
			echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Purpose</h5>&nbsp:&nbsp<span style='font-size:20px'>$row[6]</span><br><br>";
            echo "<h5 class='grey-text text-darken-4' style='font-size:20px; display:inline;'>Details</h5>&nbsp:&nbsp<span style='font-size:20px'>$row[8]</span><br><br>";
            if($status == 1) {
			echo "<button class='btn' value='$row[0]' style='background-color:#e75457;color:white;margin-left:30%;' onclick='modify_ad(this.value)'>Modify</button>";
			echo "<button class='btn' value='$row[0]' style='background-color:#e75457;color:white;' onclick='del_ad(this.value)'>Delete</button>";
			}
	}
	mysqli_close($mysqli);
?>