<?php
session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	require("db_connect.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];

$t_nam1=$_GET['task_id'];
 $t_nam2=$_GET['status'];
   
   
   $up=  mysqli_query($con, "delete from group_tasks where id = $t_nam1") or die("q2 error");
if($up)
{
	echo"Task Deleted sucessfully !";
}

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