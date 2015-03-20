<style type="text/css">
    .hidemeeting{display:block;display:none;}
    .showmeeting{display:block;}
    .hideevent{display:block;display:none;}
    .showevent{display:block;width:100%}
</style>
<?php
	session_start();
	require("session_check.php");
	require("sql_con.php");
	

$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];

echo '<div class="row" style="margin-top:10px;">
								<div class="col-md-1">
                                    <i class="fa fa-bookmark-o fa-5x pull-right"></i>
                                </div>
                                <div class="col-md-11">
                                    <h3 style="color:grey">&nbsp;&nbsp;&nbsp;Attendance</h3>
                                </div>
	          <div id="materialdesign" class="section scrollspy">
								
			                    <button class="waves-effect waves-light btn tabs" onclick="showev();">Events</button>
			                    <button class="waves-effect waves-light btn tabs" onclick="showme();">Meetings</button>
				
				
                               
					   <table class="hoverable table table-bordered table responsive admin-attendance-table" id="event" style="margin-top:10px">
										<thead>
										  <tr>
										    <th class="attendance-club text-center">Events</th>
											<th class="attendance-attendance text-center">Attendance</th>
										  </tr>
										</thead>
										<tbody>';
										  	
                                                
												$mysql_tbl=$club_id.'_event_attendance';
										
                                                 $sql = "SELECT * FROM `" . $mysql_tbl . "` where regno= '$regno'";
												$result = mysqli_query($mysqli,$sql);
                                             
                                         

										echo '<tbody>';
												
                                              
                                               
                                               while($row = mysqli_fetch_array($result))
												{
												$res2 = mysqli_query($mysqli, "select id from events");	 
												while($row2 = mysqli_fetch_array($res2)) {
												echo '<tr>';
													$ename = "event_".$row2['id'];
                                                    echo '<td>'; echo $ename; echo '</td>';
													if($row[$ename] == 0)
												      echo '<td> Absent</td>';
													else
												      echo '<td> Present</td';
												  echo '</tr>';
												}   
											                
												 
                                             }

															 
										 echo '</tbody>';
									   echo '</table>
							</div> ';
                      echo '
							   
								
							<table class="hoverable table table-bordered table responsive hidemeeting admin-attendance-table " id="meeting" style="margin-top:10px">
									<thead>
									  <tr>
										<th class="attendance-club text-center">Meetings</th>
						                <th class="attendance-date text-center">Attendance</th>
									  </tr>
									</thead>
									<tbody>';
									      
                                                
												$mysql_tbl=$club_id.'_meeting_attendance';
										
                                                 $sql = "SELECT * FROM `" . $mysql_tbl . "` where regno= '$regno'";
												$result = mysqli_query($mysqli,$sql);
                                             
                                         

										echo '<tbody>';
												
                                              
                                               
                                               while($row = mysqli_fetch_array($result))
												{
												$res2 = mysqli_query($mysqli, "select id from meetings");	 
												while($row2 = mysqli_fetch_array($res2)) {
												echo '<tr>';
													$ename = "meeting_".$row2['id'];
                                                    echo '<td>'; echo $ename; echo '</td>';
													if($row[$ename] == 0)
												      echo '<td> Absent</td>';
													else
												      echo '<td> Present</td';
												  echo '</tr>';
												}   
											                
												 
                                             }

															 
										 echo '</tbody>
								  </table>';
                  
               
			

mysqli_close($mysqli);
?>
