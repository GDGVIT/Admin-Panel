<style type="text/css">
    .hidemeeting{display:block;display:none;}
    .showmeeting{display:block;}
    .hideevent{display:block;display:none;}
    .showevent{display:block;}
</style>

<?php
session_start();
require("session_check.php");
require("sql_con.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];
?>


	<div class="row" style="margin-top:10px;">
        <div class="col-md-11">
            <h3 class="paddh">Attendance</h3>
        </div>							    
 	</div>
    
    <div id="materialdesign" class="section paddl">
		<button class="waves-effect waves-light btn tabs" onclick="showev();">Events</button>
		<button class="waves-effect waves-light btn tabs" onclick="showme();">Meetings</button>
						  
        <table class="hoverable centered" id="event">
			<thead class="centered">
                <tr>
					<th class="attendance-club">Event</th>
                    <th class="attendance-club">Event Date</th>
					<th class="attendance-attendance">View Attendance</th>
				</tr>
			</thead>
			<tbody>
			<?php
			$mysql_tbl='events';
			$sql = "SELECT * FROM `" . $mysql_tbl . "` where club_id= '$club_id'";
			$result = mysqli_query($mysqli,$sql);
			while($row = mysqli_fetch_array($result))
			{
				$id=$row['id'];
                echo '<tr>';
                echo '<td>'.$row['name'].'</td>';
                echo '<td>'.$row['date'].'</td>';
                echo '<td class="text-center">';echo '<a href="#" onclick="view_each_event_attendance('.$id.')">
                                     <button type="button" class="btn btn-s-md btn-info">View</button></a>';
                echo "</td></tr>";
            }

			?>		  	 
            </tbody>                 
		</table>
							 
		<table class="hoverable hidemeeting centered" id="meeting" style="margin-top:10px;">
			<thead class="centered">
				<tr>
					<th class="attendance-club">Meeting</th>
					<th class="attendance-attendance">Date</th>
                    <th class="attendance-attendance">View Attendance</th>
				</tr>
			</thead>       
			<tbody>
									
									     	 
 <?php
     $mysql_tbl='meetings';
     $sql = "SELECT * FROM `" . $mysql_tbl . "` where club_id= '$club_id'";
	 $result = mysqli_query($mysqli,$sql);
     while($row = mysqli_fetch_array($result))
	 {
	 	 $id=$row['id'];
 ?>                                               
				
  <?php	    
	echo '<tr>';
	echo '<td>'.$row['details'].'</td>';
    echo '<td>'.$row['date'].'</td>';
	echo '<td class="text-center">'; echo '<a href="#" onclick="view_each_meeting_attendance('.$id.')">
	<button type="button" class="btn btn-s-md btn-info">View</button></a>';
	echo "</td></tr>";
    }	 
   ?>
	</tbody></table></div>

<?php
mysqli_close($mysqli);
?>