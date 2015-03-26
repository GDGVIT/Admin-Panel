<?php
	session_start();
	require("session_check.php");
	require("sql_con.php");
	
	$regno=$_SESSION['name'];
	$status=$_SESSION['status'];
	$club_id=$_SESSION['cid'];
	
	$t_name=$_GET['t_name'];
    $regno1=$_GET['regno'];    
	$desc=$_GET['desc'];
	$date_assign=$_GET['date_assign'];
	$date_comp=$_GET['date_comp'];
    
    $mysql_tb = 'task';
   mysqli_query($mysqli,"INSERT INTO `" . $mysql_tb . "`  (regno, club_id, task, assignment_date, completion_date, status,description) VALUES ('$regno1', '$club_id', '$t_name', '$date_assign', '$date_comp','0','$desc') ");
   echo "<h4 class='paddl'>Task assigned successfully</h4>"; 
mysqli_close($mysqli);

?>
