<?php
session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	 require("db_connect.php");
//$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];
$id1=$club_id;
$t_name = $_GET['name'];
$desc = $_GET['desc'];
$id = $_GET['regno'];
$ydob = $_GET['ydob'];
$mdob = $_GET['mdob'];
$ddob = $_GET['ddob'];
 $TAD = $ydob.'-'.$mdob.'-'.$ddob;
$ydob1 = $_GET['ydob1'];
$mdob1 = $_GET['mdob1'];
$ddob1 = $_GET['ddob1'];
 $TAC = $ydob1.'-'.$mdob1.'-'.$ddob1;
$g_id= $_GET['g_id'];

  	$mysql_tb = 'club_'.$club_id.'_members';
							$sql = "SELECT * FROM `" . $mysql_tb . "` where id= '$id'";
							$res = mysqli_query($con,$sql);
						
							while($arr=mysqli_fetch_array($res))//selecting the events
							{
								
								$regno=$arr['regno'];
							}
   $up=mysqli_query($con,"INSERT INTO  group_tasks (task, description,assignment_date,reg_no,completion_date,club_id,grp_id) VALUES ('$t_name', '$desc', '$TAD','$regno', '$TAC','$club_id','$g_id') ");
if($up)
		{echo "Task added successfully!";}
	else
		{echo "OOPS!! There was a problem in Adding the task!";
	}

mysqli_close( $con);
 
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
