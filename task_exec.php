<?php
	session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	require("sql_con.php");
	$regno=$_SESSION['name'];
	$status=$_SESSION['status'];
	$club_id=$_SESSION['cid'];
	

	$t_name=$_POST['t_name'];
    $regno1=$_POST['regno'];    
	$desc=$_POST['desc'];
	$date_assign=$_POST['date_assign'];
	$date_comp=$_POST['date_comp'];
        
	require("sql_con.php");
    $mysql_tb = 'task';
   mysqli_query($mysqli,"INSERT INTO `" . $mysql_tb . "`  (regno, club_id, task, assignment_date, completion_date, status,description) VALUES ('$regno1', '$club_id', '$t_name', '$date_assign', '$date_comp','0','$desc') ");
    
mysql_close($dbLink);
header("location: index.php");
}
else
	{
		session_unset();
		session_destroy();
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		header("Location:index.php");
	}

?>
