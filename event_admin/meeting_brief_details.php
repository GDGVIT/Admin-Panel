<?php
  session_start();
  require("session_check.php");
  require("sql_con.php");
  $regno=$_SESSION['name'];
  $status=$_SESSION['status'];
  $club_id=$_SESSION['cid'];
  $q1 = "select * from meetings";
  $r1 = mysqli_query($mysqli,$q1) or die("query error");
  echo "<table class='hoverable centered'>
  <thead>
  	<tr>
  		<th>Purpose</th>
  		<th>Venue</th>
  		<th>Date</th>
  	</tr>
  </thead>
  <tbody>";
  while($row = mysqli_fetch_array($r1)) {
    echo "<tr>";
    echo "<td>$row[5]</td>";
    echo "<td>$row[4]</td>";
    echo "<td>$row[2]</td>";
    echo "<td><button class='btn ' style='background-color:#e75457;color:white' value='$row[0]' onclick='meeting_details(this.value)'>Details</button></td>";
    echo "</tr>";
  }
  echo "</tbody></table>";
  mysqli_close($mysqli);
?>