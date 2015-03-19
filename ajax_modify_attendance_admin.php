<style type="text/css">
    .showevent{display:block;}
    .showmeeting{display:block;}
    .hideevent{display:block;display:none;}
    .hidemeeting{display:block;display:none;}
</style>
<?php  
session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	require("sql_con.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];

echo	'<div class="row" style="margin-top:10px;">
			    <div class="col-md-11">
									<h3 class="paddh">Attendance</h3>
							    </div>							    
						</div>
					    <div id="materialdesign" class="section paddl">
							
								
			                   <button class="waves-effect waves-light btn tabs" onclick="showev();">Events</button>
			                   <button class="waves-effect waves-light btn tabs" onclick="showme();">Meetings</button>
						
	<div class="col-md-11 paddl">
                                <table class="hoverable showevent centered" id="event" style="margin-top:10px;padding-left: 400px;min-width:200px;">
                   
										<thead>
										  <tr>
											 
										    <th class="attendance-club text-center">Event</th>
											<th class="attendance-attendance text-center" >Modify Attendance</th>
										  </tr>
										</thead>
										<tbody>';
										  	 
                                                
												
										         $mysql_tbl='events';
                                                 $sql = "SELECT * FROM `" . $mysql_tbl . "` where club_id= '$club_id'";
												$result = mysqli_query($mysqli,$sql);
                                             
                                         

										echo '<tbody>';
												
                                              
                                               
                                               while($row = mysqli_fetch_array($result))
												{
											    
												 echo '<tr>';
												 echo '<td class="text-center">';echo $row['details'];echo '</td>';
											     echo '<td class="text-center">';
													  $id=$row['id'];
												   ?>
													
												 <button id="$id"onclick="modify_each_event_attendance(<?php echo $id; ?>)"
											class="btn btn-s-md btn-info">Modify</button>
												  <?php    
	                                                 
											     echo '</td>		 
											    </tr>';
											   }
								        echo '</tbody>
								</table>
							   
							</div>	
								<table class="hoverable admin-attendance-table hidemeeting centered" id="meeting" style="margin-top:10px;padding-left: 400px;min-width:200px;">
									<thead>
										  <tr>
					                        <th class="attendance-club text-center">Meeting</th>
											<th class="attendance-attendance text-center">Modify Attendance</th>
										  </tr>
									</thead>
									<tbody>';
									     	 
                                                
												
										         $mysql_tbl='meetings';
                                                 $sql = "SELECT * FROM `" . $mysql_tbl . "` where club_id= '$club_id'";
												$result = mysqli_query($mysqli,$sql);
                                             
                                         

										echo  '<tbody>';
												
                                              
                                               
                                               while($row = mysqli_fetch_array($result))
												{
											    
												echo ' <tr>
												 <td class="text-center">';echo $row['details'];echo '</td>
											     <td class="text-center">';
													 $id=$row['id'];
												    ?>
													 <a href="#" onclick="modify_each_meeting_attendance(<?php echo $id; ?>)">
													<button 
													 type="button" 
											         class="btn btn-s-md btn-info">Modify</button></a>  
												      <?php
												      
	                                                 
											  echo '  </td>		 
											    </tr>';
												}
											 
									echo '</tbody>
								  </table>
                                  </div>
							 ';
mysqli_close($mysqli);
	}
	else
	{
		session_unset();
		session_destroy();
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		header("Location:signin.php");
	}						
?>