if($status==0)
					    {
						
					  echo' <div class="row" style="margin-top:10px;">
							<ul id="myTab" class="nav nav-tabs nav-justified" role="tablist">
								<li role="presentation" class="active">
										<a href="#tasks" role="tab" id="profile-tab" data-toggle="tab" 
										aria-controls="Events">
											Tasks
									    </a>                
								</li>
			                    
								<li role="presentation">
										<a href="#events" role="tab" id="profile-tab" data-toggle="tab" 
										aria-controls="Events">
										
											Events
									    </a>                
								</li>
			                    <li role="presentation">
									    <a href="#meetings" role="tab" id="profile-tab" data-toggle="tab" 
										aria-controls="Meetings">
											Meetings
									    </a>                 
								</li>
			               </ul>
						</div>
						
					    <div class="tab-content attendance-table">
						
						   <div role="tabpanel" class="tab-pane active" id="tasks">
	                             
								<div  style="margin-top:20px">
									<table class="table table-bordered table-responsive ">
										<thead>
										  <tr>
											<th class="attendance-club text-center">Tasks</th>
											<th class="text-center"> Assigned Date</th>
											<th class="text-center"> Deadline</th>
											<th class="text-center">Details</th>
											  
											
										  </tr>
										</thead>
										<tbody>';
										  
                                                
												$mysql_tbl='task';
									            $sql = "SELECT * FROM `" . $mysql_tbl . "` where regno= '$regno'";
												$result = mysqli_query($mysqli,$sql);
                                             
                                         

								
								       while($row = mysqli_fetch_array($result))
										{
											
												echo '<tr>	
													<td>';echo $row['task']; echo'</td>
													<td>';echo $row['assignment_date'];  echo'</td>
													<td>';echo $row['completion_date'];  echo '</td>
													<td>';echo $row['description']; echo '</td>
										        </tr>';	
										
								         }
                                         
									   echo '</tbody>
								   </table>
							   </div>
							</div> 
							  <div role="tabpanel" class="tab-pane" id="events">
	                             
								<div  style="margin-top:20px">
									<table class="table table-bordered table responsive ">
										<thead>
										  <tr>
											<th class="attendance-club text-center">Event</th>
											
											<th class="text-center"> Scheduled Date</th>
											<th class="text-center"> Venue</th>
											<th class="text-center">Details</th>
											<th class="attendance-date text-center">Date Added</th>  
											
										  </tr>
										</thead>
										<tbody>';
										  
                                                
												$mysql_tbl='events';
									            $sql = "SELECT * FROM `" . $mysql_tbl . "` where club_id= '$club_id'";
												$result = mysqli_query($mysqli,$sql);
                                             
                                         

								
								      while($row = mysqli_fetch_array($result))
										{
											
												echo '<tr>	
													<td>';echo $row['name'];echo '</td>
													<td>';echo $row['purpose'];echo '</td>
													<td>';echo $row['date'];echo' </td>
													<td>';echo $row['place'];echo '</td>
													<td>';echo $row['details'];echo' </td>
													<td>';echo $row['date_added'];echo '</td>
													
												</tr>';	
										
								         }
                                         
									   echo '</tbody>
								   </table>
							  </div>		
							</div>
							<div role="tabpanel" class="tab-pane" id="meetings">
	                             
								<div style="margin-top:20px">
									<table class="table table-bordered table responsive ">
										<thead>
										  <tr>
											<th class="attendance-club text-center">Meeting</th>
											<th class="text-center"> Scheduled Date</th>
											<th class="text-center"> Time</th>
											<th class="text-center"> Venue</th>
											<th class="attendance-date text-center">Date Added</th>
											
										  </tr>
										</thead>
										<tbody>';
												   
                                                
												$mysql_tbl='meetings';
									            $sql = "SELECT * FROM `" . $mysql_tbl . "` where club_id= '$club_id'";
												$result = mysqli_query($mysqli,$sql);
                                             
                                                 


											  while($row = mysqli_fetch_array($result))
												{
													
												echo '<tr>
													<td>';echo $row['details']; echo '</td>
													<td>';echo $row['date'];echo ' </td>
													<td>';echo $row['time']; echo '</td>
													<td>';echo $row['place']; echo '</td>
													<td>';echo $row['date_added'];echo '</td>
													
												</tr>';	
												
												 }
												 
									  echo ' </tbody>
								   </table>
							   </div>		
							</div>
						</div>';
						
					    }