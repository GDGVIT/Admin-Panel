 <?php
session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	require("db_connect.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];
$id2=$_GET['id1'];
?>
 <div class="col-lg-8" style="margin-top:10px">
            <legend align="center"> All assigned task</legend></div>
            <div class="col-lg-4" style="margin-top:10px">
              <form   method="post" enctype="multipart/form-data" >
             <select  id="Ultra" onchange="filter_view_task_group()">  
              <option value="1" selected>Select Task category</option>
            <?php
  
    $sql = "SELECT * FROM group_tasks where grp_id=$id2";
    $res = mysqli_query($con,$sql);

    while($rows=mysqli_fetch_array($res))//selecting the events
    {

$t_name=$rows['task'];
$t_id=$rows['id'];

           ?> 
            <?php echo'<option value="'; echo "$t_id"; echo '"   > '; ?><?php echo"$t_name"; ?> <?php echo '</option>'; ?>

           <?php }
          
            ?>
            </select>

            
           </form>   </div> 
       
              <div class="col-lg-12" style="margin-top:10px">
     <div class="col-lg-2" style="margin-top:10px">
              <label><strong>Task Name</strong></label>
            </div>
            <div class="col-lg-2" style="margin-top:10px">
              <label><strong>Description</strong></label>
            </div>
            <div class="col-lg-2" style="margin-top:10px">
              <label><strong>Assigned Member</strong></label>
            </div>
            <div class="col-lg-2" style="margin-top:10px">
              <label><strong>Assignment Date</strong></label>
            </div>
            <div class="col-lg-2" style="margin-top:10px">
              <label><strong>completion Date</strong></label>
            </div>
            <div class="col-lg-2" style="margin-top:10px">
              <label><strong>Task current Status</strong></label>
            </div>
            <br>
             <div class="col-lg-12" style="margin-top:5px">
             
            </div>
 <?php   
   $t_nam2=$_GET['id'];
     
require("db_connect.php");
  
    $sql = "SELECT * FROM group_tasks where id='$t_nam2' and grp_id=$id2 ";
    $res = mysqli_query($con,$sql);

    while($rows=mysqli_fetch_array($res))//selecting the events
    {
 $name="";
 $t_name="";
 $TAD="";
 $TAC="";

 $desc="";

$t_name=$rows['task'];
$t_id=$rows['id'];
$regno=$rows['reg_no'];
$TAD=$rows['assignment_date'];
$TAC=$rows['completion_date'];
$status=$rows['status'];
$desc =$rows['description'];
 $mysql_tb = 'club_'.$club_id.'_members';
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
   
$sql1 = "SELECT * FROM  `" . $mysql_tb . "` where regno='$regno' ";
    $res1 = mysqli_query($con,$sql1);

    while($rows1=mysqli_fetch_array($res1))
    {
			$name=$rows1["name"];
     

	}
  if($name=="")
      {
          $name="Not Available";
        }
      
            echo '<div class="col-lg-2" style="margin-top:2px">';
             echo' <label>';echo"$t_name";echo'</label>';
            echo'</div>';
             echo '<div class="col-lg-2" style="margin-top:2px">';
             echo' <label>';echo"$desc";echo'</label>';
            echo'</div>';
             echo '<div class="col-lg-2" style="margin-top:2px">';
             echo' <label>';echo "$name";echo'</label>';
            echo'</div>';
             echo '<div class="col-lg-2" style="margin-top:2px">';
             echo' <label>';echo"$TAD";echo'</label>';
            echo'</div>';
             echo '<div class="col-lg-2" style="margin-top:2px">';
             echo' <label>';echo"$TAC";echo'</label>';
            echo'</div>';
             echo '<div class="col-lg-2" style="margin-top:2px">';
if($status==1)
{
    echo'Done';
}
else
{
    echo'Not Done';
} 
          echo' </div>';
          echo '<div class="col-lg-12" style="margin-top:2px"> </form>';
          }

            ?>
 
   </div>
</div>      
</div>
<?php
mysqli_close($con);
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