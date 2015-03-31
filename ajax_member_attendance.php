<style type="text/css">
    .hidemeeting{display:none;}
    .showmeeting{position:relative;top:0px;}
    .hideevent{display:none;}
    .showevent{position:relative;top:0px;}
</style>
<?php
	session_start();
	require("session_check.php");
	require("sql_con.php");
	

$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];

echo '<div class="row" style="margin-top:10px;">
                                <div class="col-md-11">
                                    <h3 class="paddh">Attendance</h3>
                                </div>
	          <div id="materialdesign" class="section paddl">
								
			                    <button class="waves-effect waves-light btn tabs" onclick="showev();">Events</button>
			                    <button class="waves-effect waves-light btn tabs" onclick="showme();">Meetings</button>
				
				
                               
					   <table class="hoverable centered" id="event">
										<thead class="centered">
										  <tr>
										    <th class="attendance-club">Event</th>
											<th class="attendance-attendance">Status</th>
										  </tr>
										</thead>
										<tbody>';
										  	
                                                
												$mysql_tbl=$club_id.'_event_attendance';
										        $sql = "SELECT * FROM `" . $mysql_tbl . "` where regno= '$regno'";
												$result = mysqli_query($mysqli,$sql);
                                                while($row = mysqli_fetch_array($result))
												{
												$res2 = mysqli_query($mysqli, "select * from events");	 
												while($row2 = mysqli_fetch_array($res2)) {
												echo '<tr>';
												    $eid = $row2['id'];
													$ename = $row2['name'];
                                                    echo '<td>'; echo $ename; echo '</td>';
													if($row[$eid] == 0)
												      echo '<td> Absent</td>';
													else
												      echo '<td> Present</td';
												  echo '</tr>';
												}   
											                
												 
                                             }

															 
										 echo '</tbody>';
									   echo '</table>';
                      
                      echo '<table class="hoverable hidemeeting centered" id="meeting" style="margin-top:10px;">
									<thead>
									  <tr>
										<th class="attendance-club text-center">Meeting</th>
						                <th class="attendance-date text-center">Status</th>
									  </tr>
									</thead>
									<tbody>';
									      
                                                
												$mysql_tbl=$club_id.'_meeting_attendance';
										
                                                 $sql = "SELECT * FROM `" . $mysql_tbl . "` where regno= '$regno'";
												$result = mysqli_query($mysqli,$sql);
                                                while($row = mysqli_fetch_array($result))
												{
												$res2 = mysqli_query($mysqli, "select * from meetings");	 
												while($row2 = mysqli_fetch_array($res2)) {
												echo '<tr>';
													$eid = $row2['id'];
													$ename = $row2['details'];
                                                    echo '<td>'; echo $ename; echo '</td>';
													if($row[$eid] == 0)
												      echo '<td> Absent</td>';
													else
												      echo '<td> Present</td';
												  echo '</tr>';
												}   
											                
												 
                                             }

															 
										 echo '</tbody>
								  </table></div>';
                  
               
			

mysqli_close($mysqli);
?>
