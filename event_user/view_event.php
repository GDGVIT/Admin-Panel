<?php
include('sql_con.php');
//include('db_connect.php');

	$q1 = "select * from events";
	$r1 = mysqli_query($mysqli,$q1) or die("query error");
	echo "<html><body><div class='paddl'>";
	echo "<table class='hoverable centered'><thead><tr><th>ID</th><th>Name</th><th>Date</th><th>Time</th><th>Place</th><th>Purpose</th><th>Date added</th><th>Details</th></tr></thead><tbody>";
	while($row = mysqli_fetch_array($r1)) {
		echo "<tr>";
			echo "<td><b>$row[0]</b></td>";
			echo "<td>$row[2]</td>";
			echo "<td>$row[3]</td>";
			echo "<td>$row[4]</td>";
			echo "<td>$row[5]</td>";
			echo "<td>$row[6]</td>";
			echo "<td>$row[7]</td>";
			echo "<td>$row[8]</td>";
		echo "</tr>";
	}
	echo "</tbody></table></div></body></html>";

?>