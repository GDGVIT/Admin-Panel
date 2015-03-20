<?php
	session_start();
  require("session_check.php");
	require("sql_con.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];

?>
          <form   method="post" enctype="multipart/form-data" onsubmit="filter_update_task_status()">
           <div align="center"><h3 class="paddh">Modify Task Details</h3></div>
            <div class="col-lg-4 paddl" style="margin-top:10px">
             <select  id="Ultra" onchange="filter_update_task_status()"  class="browser-default">  
              <option value="1" selected>Select Task category</option>
            <?php  
    $sql = "SELECT * FROM task";
    $res = mysqli_query($mysqli,$sql);

    while($rows=mysqli_fetch_array($res))//selecting the events
    {

$t_name=$rows['task'];
$t_id=$rows['id'];

           ?> 
            <?php echo'<option value="'; echo "$t_id"; echo '"   > '; ?><?php echo"$t_name"; ?> <?php echo '</option>'; ?>

           <?php }
          
            ?>
            </select>

            
           </form> 
            </div>
           

<?php
mysqli_close($mysqli);
?>

