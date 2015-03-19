<?php
	session_start();
	include("db_connect.php");
	$club_id = $_SESSION['cid'];
	$q1 = "select * from meetings";
	$r1 = mysqli_query($con, $q1) or die("query error");
	echo "<html><body>";
	if(isset($_GET['msg'])) {
		echo "<div id='msg_view'>".$_GET['msg']."</div><br>";	
	}
	echo "<table><tr><th>meeting_id</th><th>club_id</th><th>date</th><th>time</th><th>place</th>
	<th>details</th><th>date_added</th><th></th><th></th></tr>";
	while($row = mysqli_fetch_array($r1)) {
		echo "<tr>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
			echo "<td>$row[2]</td>";
			echo "<td>$row[3]</td>";
			echo "<td>$row[4]</td>";
			echo "<td>$row[5]</td>";
			echo "<td>$row[6]</td>";
			echo "<td><button value='$row[0]' onclick='modify_meeting_ad(this.value)'>MODIFY</button></td>";
			echo "<td><button value='$row[0]' onclick='del_meeting_ad(this.value)'>CANCEL</button></td>";
		echo "</tr>";
	}
	echo "</table></body></html>";
?>