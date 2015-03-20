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
			       
       		       if($status==1)
					    {
						
					   echo '<div id="materialdesign" class="section paddl">
								<button class="waves-effect waves-light btn tabs" onclick="show1();">Technical</button>
			                    <button class="waves-effect waves-light btn tabs" onclick="show2();">Management</button>
			                    <button class="waves-effect waves-light btn tabs" onclick="show3();">Design</button>
						
						   
									<table class="hoverable centered"  ng-show="tab===1" id="1">
										<thead>
										  <tr>
											<th data-field="id" style="color:grey">Members</th>
											
											
										  </tr>
										</thead>
										<tbody>';
										  
                                                
												$mysql_tb = 'club_'.$club_id.'_members';
            $sql = "SELECT * FROM `" . $mysql_tb . "` where status= 'active' and department='technical'" ;
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
					
                                         
									  echo ' </tbody>
								   </table>
                                   
                                   
									<table class="hoverable hidemeeting" id="2" ng-show="tab===2">
										<thead>
										  <tr>
											<th class="attendance-club text-center">Members</th>
											
										  </tr>
										</thead>
										<tbody>';
$mysql_tb = 'club_'.$club_id.'_members';
            $sql = "SELECT * FROM `" . $mysql_tb . "` where status= 'active' and department='management'" ;
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
						
					    }
						mysqli_close($mysqli);				
?>
