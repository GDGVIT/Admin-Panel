 <?php
session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	require("sql_con.php");
	$regno=$_SESSION['name'];
	$status=$_SESSION['status'];
	$club_id=$_SESSION['cid'];
?>
    
                      <div class="container">
      <!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
               
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
      <header>
        
            </header> 
           <div class="col-lg-8" style="margin-top:10px">
            <legend align="center"> All assigned Tasks</legend></div>
           
            
     
             <table>
             <tr><th>Task Name </th><th>Description </th><th>Assigned Member</th><th>Assignment Date</th><th>completion Date</th><th>Task current Status</th></tr>

 <?php   
 $mysql_tb = 'club_'.$club_id.'_members'; 
//Selecting the tasks from the database
    $sql = "SELECT task.task,task.id,task.assignment_date,task.completion_date,task.status,task.description, `$mysql_tb`.name FROM task INNER JOIN  `$mysql_tb` ON task.regno= `$mysql_tb`.regno;";
    $res = mysqli_query($mysqli,$sql);
    while($rows=mysqli_fetch_array($res))
    {
       
      $t_name=$rows['task'];
      $t_id=$rows['id'];
      $name=$rows['name'];
      $TAD=$rows['assignment_date'];
      $TAC=$rows['completion_date'];
      $status=$rows['status'];
      $desc =$rows['description'];
      if(empty($t_name))
      {
        $t_name="Not Available";
      }
       if(empty($name))
      {
        $name="Not Available";
      }
      if(empty($TAD))
      {
          $TAD="Not Available";
      }
      if(empty($TAC))
      {
        $TAC="Not Available";
      }
      if(empty($status))
      {
        $status="Not Available";
      }
      if(empty($desc))
      {
        $desc="Not Available";
      }
      //Selecting the member name from club member table
     
      
 
            echo '<tr>';
             echo'<td>';echo"$t_name";echo'</td>';
             echo'<td>';echo"$desc";echo'</td>';
             echo'<td>';echo"$name";echo'</td>';
            echo'<td>';echo"$TAD";echo'</td>';
           echo'<td>';echo"$TAC";echo'</td';
             echo'<td>';
          if($status==1)
          {
            echo" Done";
          }
          else
           {
             echo'Not Done';
            } 
             echo '</td></tr>';
          }

            ?>
 </table> 


                         
     <!-------->                   </section> 
   
                        
                      </div>
                    </section>
                  </section>
<?php
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