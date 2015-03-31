<?php
	session_start();
  require("session_check.php");
	require("sql_con.php");
  $regno=$_SESSION['name'];
  $status=$_SESSION['status'];
  $club_id=$_SESSION['cid'];

?>
  <form   method="post" enctype="multipart/form-data" onsubmit="filter_update_task_status()">
    <div align="center">
      <h3 class="paddh">Modify Task Details</h3>
    </div>
    <div class="col-lg-4 paddl" style="margin-top:10px">
    <select  id="Ultra" onchange="filter_update_task_status()" class="browser-default">  
      <option value="1" disabled selected>Select Task category</option>
      <?php  
      $sql = "SELECT * FROM task";
      $res = mysqli_query($mysqli,$sql);
      while($rows=mysqli_fetch_array($res))//selecting the events
      {
        $t_name=$rows['task'];
        $t_id=$rows['id'];
        echo "<option value='".$t_id."'>";
        echo $t_name;
        echo "</option>";
      }
      ?>
            
    </select>
    </div>
  </form> 
            
  <div class="paddl">
    <table class='hoverable centered'>
      <thead>
        <tr>
          <th>Task Name</th>
          <th>Assigned Member</th>
          <th>Completion Date</th>
          <th>Task Current Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>

 <?php
    
    $sql = "SELECT * FROM task ";
    $res = mysqli_query($mysqli,$sql);

    while($rows=mysqli_fetch_array($res))//selecting the events
    {
      $name="";
      $t_name="";
      $TAD="";
      $TAC="";

      $desc="";
      $t_name=$rows['task'];  
      $t_id=$rows['id'];
      $regno=$rows['regno'];
      $TAD=$rows['assignment_date'];
      $TAC=$rows['completion_date'];
      $status=$rows['status'];
      $desc =$rows['description'];
      if($t_name=='')
      {
        $t_name="Not Available";
      }
      if($TAD=='')
      {
        $TAD="Not Available";
      }
      if($TAC=='')
      {
        $TAC="Not Available";
      }
      if($status=='')
      {
        $status="Not Available";
      }
      if($desc=='')
      {
        $desc="Not Available";
      }
      $mysql_tb = 'club_'.$club_id.'_members';

      $sql1 = "SELECT * FROM `" . $mysql_tb . "` where regno='$regno' ";
      $res1 = mysqli_query($mysqli,$sql1);

      while($rows1=mysqli_fetch_array($res1))//selecting the events
        {
          $name=$rows1['name'];}
          if($name=="")
          {
            $name="Not Available";
          }
        
      echo'  <form>';
      echo'<input type="hidden"  id="task_id" value="'.$t_id.'">';
      echo "<td>";echo"$t_name";echo"</td>";
      echo' <td>';echo"$name";echo'</td>';
      echo' <td>';echo"$TAC";echo'</td>';

      if($status==0)
      {
        echo'<td><select id="'; echo"$t_id";echo'" class="browser-default" name="status" required>
          <option value="1">Done</option>
          <option value="0" selected>Not yet</option>
          </select></td>';
      }
      else
      {
        echo'<td><select  id="'; echo"$t_id";echo'" class="browser-default" name="status" required>
        <option value="1" selected>Done</option>
        <option value="0" >Not yet</option>
        </select></td>';
      } 
      echo '
      </form>
      <td>
        <a href="#" onclick="change_password1('; echo"$t_id";  echo')">
          <button type="button" class="btn btn-s-md btn-info">Modify Task</button>
        </a>
      </td>
      </tr>';
          }
          echo "</tbody></table>";

  ?>
     
</div>  

<?php
mysqli_close($mysqli);
?>

