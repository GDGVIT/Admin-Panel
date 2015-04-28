<?php
  session_start();
  require("session_check.php");
  require("sql_con.php");
  $regno=$_SESSION['name'];
  $status=$_SESSION['status'];
  $club_id=$_SESSION['cid'];
  $fil=$_GET['id'];
  echo '<div class="container" ng-init="tab=1">
          <div class="row card" id="main_content">';
          echo' <select  id="Ultra" onchange="filter_view_task()" class="browser-default">  
              <option value="0" selected>Show Pending Task</option>
           <option value="1" >Show Completed Task</option>';?>
            </select>
 <?php echo '<table class="hoverable">
      <thead>
        <tr>
          <th>Task Name </th>
          <th>Assigned Member</th>
          <th>Task current Status</th>
        </tr>
       </thead>
       <tbody>';  
  $mysql_tb = 'club_'.$club_id.'_members';
  $sql = "SELECT task.task,task.id,task.assignment_date,task.completion_date,task.status,task.description, `$mysql_tb`.name FROM task INNER JOIN  `$mysql_tb` ON task.regno= `$mysql_tb`.regno; ";
  $res = mysqli_query($mysqli,$sql);
  while($rows=mysqli_fetch_array($res)) { 

      $t_name=$rows['task'];
      $t_id=$rows['id'];
      $name=$rows['name'];
      $TAD=$rows['assignment_date'];
      $TAC=$rows['completion_date'];
      $status=$rows['status'];
      $desc =$rows['description'];
      if($status==$fil)
         { if(empty($t_name))
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
      echo'<td>';echo"$name";echo'</td>';
      echo'<td>';
      if($status==1)
        {
        echo" Done";
        }
      else
        {
        echo'Not Done';
        } 
        echo '</td><td><button class="btn modal-trigger" style="background-color:#e75457;color:white" value="'.$rows[1].'" onclick="task_details(this.value)">Details</button></td></tr>';
 } }
  echo "</tbody></table></div></div>";
  mysqli_close($mysqli); 
?>