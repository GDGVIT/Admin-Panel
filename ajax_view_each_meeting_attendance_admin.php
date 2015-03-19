<?php
session_start();
if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
{
require("sql_con.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];
echo '<div class="row" style="margin-top:10px;">
								<div class="col-md-1">
                                    <i class="fa fa-bookmark-o fa-5x pull-right"></i>
                                </div>
                                <div class="col-md-11">
                                    <h3 class="paddl" style="color:grey">Attendance</h3>
                                </div>							    
						  </div>';
										      $meeting_id=$_GET['id']; 
                                              $mysql_tbl=$club_id.'_meeting_attendance';
                                              $sql = "SELECT  regno,`" . $meeting_id . "` FROM `" . $mysql_tbl . "`";
                                              $result = mysqli_query($mysqli,$sql);
                                              if(!$result)
                                              { 
                                                  echo '<h4 class="paddl">Attendance not posted yet.</h4>';
                                              }
                                              else {
                                                  echo '<div class="tab-content attendance-table" style="width:500px; margin:0 auto;">
								<table class="hoverable centered" style="margin-top:10px;">
									<thead class="centered">
									  <tr>
										<th>Registration Number</th>
										 <th>Status</th> 
										
									  </tr>
									</thead>
									<tbody>';
                                             
                                              while($row = mysqli_fetch_array($result))
											  {
                                        
										       echo '<tr>';
										       echo '<td><b>'; echo $row['regno']; echo '</b></td>';	
																		   $status= $row[$meeting_id]; 	
																		   if($status==1)
																				  {
																				  
																				  echo '<td>Present</td>';
																				  
																				  }
																				  
																			  if($status==0)
																			 {
																			 
																			echo '<td class="text-danger">Absent</td>';

																			 
																			  }
																			  
										echo '</tr>';
									  
									   }
                                      
                                              }
									echo '</tbody>
								  </table>
                              </div>';
					   






mysqli_close($mysqli);
	}
	else
	{
		session_unset();
		session_destroy();
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		header("Location:index.php");
	}

?>