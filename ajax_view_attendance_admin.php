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

                    echo '<div><div class="row" style="margin-top:10px;">
                                <div class="col-md-11">
                                    <h3 class="paddh" style="color:grey">Attendance</h3>
                                </div>							    
						  </div>
                       <div id="materialdesign" class="section paddl">
			                    <button class="waves-effect waves-light btn tabs" onclick="showev();">Events</button>
			                    <button class="waves-effect waves-light btn tabs" onclick="showme();">Meetings</button>
						
                              
                        <table class="hoverable showevent centered" id="event" style="margin-top:10px;padding-left: 400px;min-width:200px;">
				            <thead class="centered">
                                <tr>
								    <th class="attendance-club">Event</th>
                                    <th class="attendance-club">Event Date</th>
									<th class="attendance-attendance">View Attendance</th>
								</tr>
				            </thead>
				            <tbody>';
										  	 
                                                
												
										         $mysql_tbl='events';
                                                 $sql = "SELECT * FROM `" . $mysql_tbl . "` where club_id= '$club_id'";
												$result = mysqli_query($mysqli,$sql);
                                             
												
                                              
                                               
                                               while($row = mysqli_fetch_array($result))
												{
											    
												 echo '<tr>';
												 echo '<td>';echo $row['name']; echo '</td>';
                                                 echo '<td>';echo $row['date']; echo '</td>';
											     echo '<td class="text-center">';
													  $id=$row['id'];
												
												 ?>
												   
		                                        <a href="#" onclick="view_each_event_attendance(<?php echo $id; ?>)">
												<button type="button" class="btn btn-s-md btn-info">View</button></a>
											 <?php
											
												     
	                                                 
											    echo ' </td>';		 
											    echo '</tr>';
											   }
								              
								       echo ' </tbody>
								</table>
							 
							<table class="hoverable hidemeeting centered" id="meeting" style="margin-top:10px;padding-left: 400px;min-width:200px;">
									<thead class="centered">
										  <tr>
					                        <th class="attendance-club">Meeting</th>
											<th class="attendance-attendance">Date</th>
                                            <th class="attendance-attendance">View Attendance</th>
										  </tr>
									</thead>       
									<tbody>';
									     	 
                                                
												
										         $mysql_tbl='meetings';
                                                 $sql = "SELECT * FROM `" . $mysql_tbl . "` where club_id= '$club_id'";
												$result = mysqli_query($mysqli,$sql);
                                             
                                        

										echo '<tbody>';
												
                                              
                                               
                                               while($row = mysqli_fetch_array($result))
												{
											    
												 echo '<tr>';
												 echo '<td>';echo $row['details']; echo '</td>';
                                                   echo '<td>';echo $row['date']; echo '</td>';
											     echo '<td class="text-center">';
													  $id=$row['id'];
												
												   ?>
		                                    <a href="#" onclick="view_each_meeting_attendance(<?php echo $id; ?>)">
											<button type="button" 
											class="btn btn-s-md btn-info">View</button></a>  
											<?php	
												      
	                                                 
											     echo '</td>';		 
											     echo '</tr>';
											   }
											
									echo '</tbody>
								  </table>
							
						</div>	
                        </div>';


mysqli_close($mysqli);
?>
