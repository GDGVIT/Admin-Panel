<?php
session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	require("sql_con.php");

$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];
echo 	'<div class="row" style="margin-top:10px;">
								<div class="col-md-1">
									<i class="fa fa-calendar fa-5x">
									</i>
							    </div>
							    <div class="col-md-11">

									<h3 class="paddh">Attendance</h3>
							    </div>							    
						</div>
					   
						 <div class="tab-content attendance-table" style="width:500px; margin:0 auto;">
								
								<table class="table table-bordered table responsive attendance-table" style="margin-top:10px;">
									<thead>
									  <tr>
										<th class="attendance-date">Registration Number</th>
										 <th  class="attendance-date">Status</th> 
										  <th class="attendance-date text-center">Change</th>
										
										
									  </tr>
									</thead>
									<tbody>';
					                          $meeting_id=$_GET['id']; 
										      $mysql_tbl=$club_id.'_meeting_attendance';
                                              $sql = "SELECT  regno,`" . $meeting_id . "` FROM `" . $mysql_tbl . "`";
                                              $result = mysqli_query($mysqli,$sql);
                                              if(!$result)
                                              {
                                                 echo '<h4 class="paddl">Attendance not posted yet.</h4>';
                                              }
                                             else
                                             {
                                              while($row = mysqli_fetch_array($result))
											  {
                                        
										         echo '<tr>
										         <td>';$r_no= $row['regno']; 
										         echo $r_no;
									  			 echo '</td>';	
																		  $status= $row[$meeting_id]; 	
																		   if($status==1)
																				  {
																				  
																				  echo '<td>Present</td>';
																				  
																				  }
																				  
																			  if($status==0)
																			 {
																			 
																			echo '<td class="text-danger">Absent </td>';
											                                 
																			  }
																			  
											                               
										echo '<td class="text-center">';
										      
		                                    echo "<button type='button' class='btn btn-primary' id='$r_no' name='$meeting_id' onclick='modify_meeting_att(this.id,this.name)'>Modify</button>";
											 
											echo '</td>
                                                                              
																			
											                              
											                              
										</tr>';
											  }
								
                                             }
									echo '</tbody>
								  </table>';
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