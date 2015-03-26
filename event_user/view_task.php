<?php
include('sql_con.php');
	$q1 = "select * from task";
	$r1 = mysqli_query($mysqli,$q1) or die("query error");
	echo "<html><body><div class='paddl'>";
	echo "
    <table class='hoverable centered'><thead><tr><th>ID</th><th>Reg No.</th><th>Task</th><th>Assignment Date</th><th>Completion Date</th><th>Status</th><th>Description</th></tr></thead><tbody>";
	while($row = mysqli_fetch_array($r1)) {
		echo "<tr>";
			echo "<td><b>$row[0]</b></td>";
			echo "<td>$row[1]</td>";
			echo "<td>$row[3]</td>";
			echo "<td>$row[4]</td>";
			echo "<td>$row[5]</td>";
			echo "<td>$row[6]</td>";
			echo "<td>$row[7]</td>";
		echo "</tr>";
	}
	echo "</tbody></table></div></body></html>";

?>