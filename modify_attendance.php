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
				<i class="fa fa-calendar fa-5x"></i>
			</div>
			<div class="col-md-11">
				<h3 class="paddh">Attendance</h3>
			</div>							    
		 </div>			   
		<table class="hoverable">		
			<thead>
				<tr>
     				<th><strong>Name</strong></th>
            
              		<th><strong>Registration no.</strong></th>
            
              		<th><strong>Attendence</strong></th>
              	</tr>
            </thead>';

            $count=0;
            $reg=array();
            $atten=array();
			$event_id=$_GET['id']; 
			$mysql_tbl=$club_id.'_event_attendance';
			$event_id="event_".$event_id;
            $sql = "SELECT  regno,`" . $event_id . "` FROM `" . $mysql_tbl . "`";
            $result = mysqli_query($mysqli,$sql);
            while($row = mysqli_fetch_array($result))
			{$r_no= $row['regno'];
			$mysql_tb = 'club_'.$club_id.'_members';

			$sql1 = "SELECT * FROM `" . $mysql_tb . "` where regno='$r_no' ";
    		$res1 = mysqli_query($mysqli,$sql1);

    		while($rows1=mysqli_fetch_array($res1))//selecting the events
    		{
			$name=$rows1['name'];}
 			if($name=="")
      		{
          		$name="Not Available";
        	}
          	echo '<tbody><tr>';
            echo' <td>';echo"$name";echo'</td>';
 
            echo' <td>';echo"$r_no";echo'</td>';
 
			echo '<td>';					
											
			$status= $row[$event_id]; 	
			if($status==1)
			{
																				  
			echo'<select  id="'; echo"$r_no";echo'"  class="browser-default" name="status" required >
            
            <option value="1" selected>Present</option>
            <option value="0" >Absent</option>
            
            </select></td>';
																				  
			}
																				  
			if($status==0)
			{
			echo'<select  id="'; echo"$r_no";echo'" class="browser-default" name="status" required>
            
            <option value="1">Present</option>
            <option value="0" selected >Absent</option>
			</select></td>';                           
			}
																			  
											                               
								/*		echo '';
										      
		                                    echo "<button type='button' class='btn btn-primary' id='$r_no' name='$event_id' onclick='modify_event_att(this.id,this.name)'>Modify</button>";
											 
											echo '
                                                                              
																			
											                              
									';*/
			array_push($reg, $r_no);
									
									//$arr['$count']=$count;
			$count=$count+1;
			}
			$reg = implode(",", $reg);	
										
			echo'</tr></tbody></table><input type="hidden" id="arr" value="'; echo"$reg"; echo'">';
			echo '<div class="col-lg-12" style="margin-top:50px;text-align:center"> ';
			echo" <a class='btn' onclick='modify_event_att(this.name)'' name='$event_id' id='submit' tabindex='5' style='background-color:#e75457;color:white;' value='Update!'' href='#'>
					Update
				  </a></div>";
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