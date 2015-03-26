<?php
	session_start();
	include("db_connect.php");
	$club_id = $_SESSION['cid'];
	$q1 = "select * from events";
	$r1 = mysqli_query($con, $q1) or die("query error");
	echo "<html><body>";
	if(isset($_GET['msg'])) {
		echo "<div id='msg_view'>".$_GET['msg']."</div><br>";	
	}
	echo "<table class='hoverable centered'><thead><tr><th>Event Name</th><th>Event Date</th><th>Event Time</th><th>Place</th><th>Purpose</th><th>Details</th></tr></thead><tbody>";
	while($row = mysqli_fetch_array($r1)) {
		echo "<tr>";
            echo "<td>$row[2]</td>";
			echo "<td>$row[3]</td>";
			echo "<td>$row[4]</td>";
			echo "<td>$row[5]</td>";
			echo "<td>$row[6]</td>";
            echo "<td>$row[8]</td>";
			echo "<td><button value='$row[0]' onclick='modify_ad(this.value)'>MODIFY</button></td>";
			echo "<td><button value='$row[0]' onclick='del_ad(this.value)'>DELETE</button></td>";
		echo "</tr>";
	}
	echo "</table></body></html>";
?>
<script type="text/javascript" src="event.js"></script>