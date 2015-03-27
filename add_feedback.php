<?php
	session_start();
	require("session_check.php");
	require("sql_con.php");
	$regno=$_SESSION['name'];
	$status=$_SESSION['status'];
	$club_id=$_SESSION['cid'];
	
	
	$feedback=$_GET['feedback'];
    
  $up= mysqli_query($mysqli,"insert into feedback (regno, feedback) values ('$regno',  '$feedback')") or die("quer");


if($up ) 
  {
  	echo"<h4 class='paddl'>your feedback has been registered<br> Thanks for giving  valuable feedback </h4>";

  } 
?>
