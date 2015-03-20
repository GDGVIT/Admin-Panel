<?php
session_start();
  require("session_check.php");
	require("sql_con.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];

$t_nam1=$_GET['task_id'];
 $t_nam2=$_GET['status'];
   
    $sql = "SELECT * FROM task WHERE id = $t_nam1";
    $res = mysqli_query($mysqli,$sql);

    while($arr=mysqli_fetch_array($res))//selecting the events
    {




 
     $up=$mysqli->query("UPDATE task SET 
                                
								`status` = '$t_nam2'
								
                             WHERE `id` = '$t_nam1'") ;
    
    
 
}
if($up)
{
	echo"Task status updated sucessfully !";
}

mysqli_close($mysqli);
?>