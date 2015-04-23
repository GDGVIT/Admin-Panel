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
   
    $sql = "SELECT * FROM group_tasks WHERE id = $t_nam1";
    $res = mysqli_query($con,$sql);

    while($arr=mysqli_fetch_array($res))//selecting the events
    {




 
     $up=$con->query("UPDATE group_tasks SET 
                                
								`status` = '$t_nam2'
								
                             WHERE `id` = '$t_nam1'") ;
    
    
 
}
if($up)
{
	echo"Task status updated sucessfully !";
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