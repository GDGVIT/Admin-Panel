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
                                <div class="col-md-11 paddl">
                                    <h3 style="color:grey">Attendance</h3>
                                </div>							    
						  </div>';
										     $event_id=$_GET['id']; 
										      $mysql_tbl=$club_id.'_event_attendance';
											  $event_id="event_".$event_id;
                                              $sql = "SELECT  regno,`" . $event_id . "` FROM `" . $mysql_tbl . "`";
                                              $result = mysqli_query($mysqli,$sql);
                                             if(!$result)
                                             {
                                                 echo '<h4 class="paddl">Attendance not posted yet.</h4>';
                                             }
                                             else
                                             {
                                                echo '<div class="tab-content attendance-table" style="width:500px; margin:0 auto;">
						
							     
  								
								
								<table class="hoverable centered" style="margin-top:10px;">
									<thead class="centered">
									  <tr>
									  <th>Name</th>
										<th>Registration Number</th>
										 <th>Status</th> 
										
									  </tr>
									</thead>
									<tbody>';
        
                                              while($row = mysqli_fetch_array($result))
											  { $name="";
                                        $mysql_tb = 'club_'.$club_id.'_members'; 
                                        $regno1=$row['regno'];
      $sql1 = "SELECT `name`  FROM  `$mysql_tb` where `regno`='$regno1'";
      $res1 = mysqli_query($mysqli,$sql1);
      while($rows1=mysqli_fetch_array($res1))
      {
      
        $name=$rows1['name'];
        
      } 
      if($name=="")
      {
          $name="Not Available";
        }
										echo '<tr>';
										echo '<td><b>'; echo "$name"; echo '</b></td>';
										echo '<td><b>'; echo $row['regno']; echo '</b></td>';	
																		   $status= $row[$event_id]; 	
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
?>