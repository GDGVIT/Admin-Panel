<?php
  session_start();
  require("session_check.php");
  require("sql_con.php");
  $regno=$_SESSION['name'];
  $status=$_SESSION['status'];
  $club_id=$_SESSION['cid'];
  echo '<div class="container" ng-init="tab=1">
        <div class="row card" id="main_content">';
            $q1 = "select * from events";
            $r1 = mysqli_query($mysqli, $q1) or die("query error");
            echo "<table  class='hoverable centered'>
            <thead>
  	         <tr>
  		          <th>Event Name</th>
  		          <th>Event Date</th>
  		          <th>Place</th>
  	         </tr>
            </thead>
            <tbody>";
              while($row = mysqli_fetch_array($r1)) {
                echo "<tr>";
                echo "<td>$row[2]</td>";
                echo "<td>$row[3]</td>";
                echo "<td>$row[5]</td>";
                echo "<td><button class='btn modal-trigger modal_call_btn' style='background-color:#e75457;color:white' value='$row[0]' onclick='event_details(this.value)'>Details</button></td>";
    /*echo "<td><button value='$row[0]' onclick='del_ad(this.value)'>DELETE</button></td>";*/
                echo "</tr>";
  }
  echo "</table>";
  echo "</div></div>";
?>
  