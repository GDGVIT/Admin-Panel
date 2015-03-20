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
       <div class="col-md-11" style="padding-left:10px;">
            <h3 class="paddh">Club Members</h3>
        </div>							    
    </div>';
			       
       		      
						
					   echo '<div id="materialdesign" class="section paddl">
								<button class="waves-effect waves-light btn tabs" onclick="show1();">Technical</button>
			                    <button class="waves-effect waves-light btn tabs" onclick="show3();">Design</button></div>';
						
						  

		$mysql_tb = 'club_'.$club_id.'_members';
        $sql1 = "SELECT * FROM `" . $mysql_tb . "` where status= 'active' and department='technical'";
        $sql2 = "SELECT * FROM `" . $mysql_tb . "` where status= 'active' and department='management'";
        $sql3 = "SELECT * FROM `" . $mysql_tb . "` where status= 'active' and department='design'";

        $res1 = mysqli_query($mysqli,$sql1) or die("sql1 error");
        $res2 = mysqli_query($mysqli,$sql2) or die("sql2 error");
        $res3 = mysqli_query($mysqli,$sql3) or die("sql3 error");

        while($row1 = mysqli_fetch_array($res1)) {

        	$name=$row1['name'];
            $id=$row1['id'];

            echo "<div  class='card' style='float:left;width:250px;box-shadow:2px 2px 0px #c7c7c7;;margin:5px;'>
            		<div class='card-content'>
            		<a href='#' onclick='view_members_profile(".$id.")' class='attendance-club text-center'>
                        <span id='".$id."'>".$name."</span>
                    </a>
                    </div>
                    </div>";
        }

        echo "<br><br><br>";

        while($row2 = mysqli_fetch_array($res2)) {

        	$name=$row2['name'];
            $id=$row2['id'];

            echo "<div class='card' style='float:left;width:250px;box-shadow:2px 2px 0px #c7c7c7;;margin:5px;'>
            		<div class='card-content'>
            		<a href='#' onclick='view_members_profile(".$id.")' class='attendance-club text-center'>  
                        <span id='".$id."'>".$name."</span>
                    </a>
                    </div>
                    </div>";
        }

        echo "<br><br><br>";

        while($row3 = mysqli_fetch_array($res3)) {

        	$name=$row3['name'];
            $id=$row3['id'];

            echo "<div class='card' style='float:left;width:250px;box-shadow:2px 2px 0px #c7c7c7;;margin:5px;'>
            		<div class='card-content'>
            		<a href='#' onclick='view_members_profile(".$id.")' class='attendance-club text-center'>
                        <span id='".$id."'>".$name."</span>
                    </a>
                    </div>
                    </div>";
        }



					  
 /*                                               
			$mysql_tb = 'club_'.$club_id.'_members';
            $sql = "SELECT * FROM `" . $mysql_tb . "` where status= 'active' and department='technical'" ;
            $res = mysqli_query($mysqli,$sql);
            
            while($rows=mysqli_fetch_array($res))//selecting the events
            {

            $name=$rows['name'];
            $id=$rows['id'];

           
            ?> <div><a onclick="view_members_profile(<?php echo $id; ?>)" class="attendance-club text-center">
                        <a   href="#"  class="auto">                                                        
                       <?php echo '   
                           <span $id='.$rows['id'].';>'.$name. '<br/>' . ''.'</span>
                             </a>
                          </a></div>';
                     
            }

            echo "</div>";

			$mysql_tb = 'club_'.$club_id.'_members';
            $sql = "SELECT * FROM `" . $mysql_tb . "` where status= 'active' and department='management'" ;
            $res = mysqli_query($mysqli,$sql);
            
            while($rows=mysqli_fetch_array($res))//selecting the events
            {
            $name=$rows['name'];
            $id=$rows['id'];

           
            ?> <div><a onclick="view_members_profile(<?php echo $id; ?>)" class="attendance-club text-center">
                        <a   href="#"  class="auto">                                                        
                       <?php echo '   
                           <span $id='.$rows['id'].';>'.$name. '<br/>' . ''.'</span>
                          </a>
                          </a></div>';
                     
                       }
												 
									   echo '</tbody>
								   </table>
								   <table class="hoverable hidemeeting" id="3" ng-show="tab===2">
										<thead>
										  <tr>
											<th class="attendance-club text-center">Members</th>
											
										  </tr>
										</thead>
										<tbody>';
$mysql_tb = 'club_'.$club_id.'_members';
            $sql = "SELECT * FROM `" . $mysql_tb . "` where status= 'active' and department='design'" ;
            $res = mysqli_query($mysqli,$sql);
            
            while($rows=mysqli_fetch_array($res))//selecting the events
            {
            $name=$rows['name'];
            $id=$rows['id'];

           
            ?> <tr><td   onclick="view_members_profile(<?php echo $id; ?>)" class="attendance-club text-center">
                        <a   href="#"  class="auto">                                                        
                       <?php echo '   
                           <span $id='.$rows['id'].';>'.$name. '<br/>' . ''.'</span>
                             </td></tr>
                          </a>';
                     
                       }
												 
									   echo '</tbody>
								   </table>
						      </div>';
						
					    }*/
						mysqli_close($mysqli);				
?>
