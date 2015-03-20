<?php
  session_start();
  require("session_check.php");
	require("sql_con.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];
?>

               
   <div>
       <form>
              <div align="center"><h3 class="paddh">Task Details</h3></div>
            <div class="col-lg-10 paddl" style="width:500px; margin:0 auto;"><br>
            
 
     <div class=padds>           
    <select name="regno" id="regno" class="browser-default" required>
        <option selected value="" disabled selected><b>Member name</B></option>
          <?php
          $mysql_tb = 'club_'.$club_id.'_members';
          $sql = "SELECT * FROM `" . $mysql_tb . "` where status='active' order by name";
          $res = mysqli_query($mysqli,$sql);

          while($rows=mysqli_fetch_array($res))//selecting the events
          {
        
           $name=$rows['name'];
           $id=$rows['regno'];
           echo" <option  value='$id'>$name</option>";
          }
          ?>
         </select></div>
               
              <div class="input-field col s12">
              <label>Task Name</label>
              <input id="t_name" name="t_name" type="text">
              </div> 
                
              <div class="input-field col s12">
              <textarea id="desc" name="desc" class="materialize-textarea"></textarea>
              <label for="textarea1">Description</label>
              </div>
                
              <label>Task Assignment Date</label>
              <input id="date_assign" type="date" class="datepicker" required>
               
              <label>Task Completion Date</label>
              <input id="date_comp" type="date" class="datepicker" required>
                
              <div align="center"> 
              <a href="#" onclick="store_task()"><button type="button" class="btn btn-s-md btn-info">Assign Task</button></a>
                    </div>
           </div>
 </form> 
</div>     
<?php
mysqli_close($mysqli);
?> 
