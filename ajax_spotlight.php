<style type="text/css">
    .hidemeeting{display:block;display:none;width:500px;}
    .showmeeting{display:block;width:1000px;}
    .hideevent{display:block;display:none;}
    .showevent{display:block;width:1000px;}
</style>
<?php
session_start();
  require("session_check.php");
	require("sql_con.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];
echo '
    <div class="row" style="margin-top:10px;">
       <div class="col-md-11">
            <h3 class="paddh">Spotlight</h3>
        </div>							    
    </div>';
			     
       		       if($status==1)
					    {
						
					   echo '<div id="materialdesign" class="section paddl">
								<button class="waves-effect waves-light btn tabs" onclick="showev();">Events</button>
			                    <button class="waves-effect waves-light btn tabs" onclick="showme();">Meetings</button>
						
						   
									<table class="hoverable centered"  ng-show="tab===1" id="event">
										<thead>
										  <tr>
											<th data-field="id">Event</th>
											<th data-field="id"> Scheduled Date</th>
											<th data-field="name">Details</th>
											
										  </tr>
										</thead>
										<tbody>';
										  
                                                
												$mysql_tbl='events';
									            $sql = "SELECT * FROM `" . $mysql_tbl . "` where club_id= '$club_id'";
												$result = mysqli_query($mysqli,$sql);
                                             
                                        

								
								      while($row = mysqli_fetch_array($result))
										{
											
												echo '<tr>	
													<td>';echo $row['name']; echo '</td>
													<td>';echo $row['date']; echo '</td>
													<td>';echo $row['details'];echo '</td>
													
												</tr>';	
										
								         }
                                         
									  echo ' </tbody>
								             </table>
                                   
                                   
									<table class="hoverable hidemeeting centered" id="meeting" ng-show="tab===2">
										<thead>
										  <tr>
											<th class="attendance-club text-center">Meeting</th>
											<th class="text-center"> Scheduled Date</th>
											<th class="text-center"> Venue</th>
											
										  </tr>
										</thead>
										<tbody>';
												$mysql_tbl='meetings';
									            $sql = "SELECT * FROM `" . $mysql_tbl . "` where club_id= '$club_id'";
												$result = mysqli_query($mysqli,$sql);
                                                while($row = mysqli_fetch_array($result))
												{
												echo '	
												<tr>	
													<td>';echo $row['details']; echo'</td>
													<td>';echo $row['date']; echo '</td>
													<td>';echo $row['place']; echo '</td>
													
												</tr>';	
												
												 }
												 
									   echo '</tbody>
								   </table>
						      </div>';
						
					    }
						mysqli_close($mysqli);
						
?>
