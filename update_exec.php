<?php
session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	require("sql_con.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];

 $id=$_GET['id'];
$name=$_GET['name'];
$email=$_GET['email'];
$regno=$_GET['regno'];
$phone=$_GET['phone'];
$dob=$_GET['dob'];
$gender=$_GET['sex'];
$address=$_GET['add'];


    $mysql_tb = 'club_'.$club_id.'_members';
    
    $sql = "SELECT * FROM `" . $mysql_tb . "` WHERE id = '$id'";
    $res = mysqli_query($mysqli,$sql);

    while($arr=mysqli_fetch_array($res))//selecting the events
    {

 
    $up=$mysqli->query("UPDATE  `" . $mysql_tb . "` SET 
                                `name` = '$name',
                                `email` = '$email',
                                `mobno` = '$phone',
                                `gender` = '$gender',
                                `regno` = '$regno', 
								`dob` = '$dob',
								`address` = '$address'
								
                             WHERE `id` = '$id'");
    
    }

mysqli_close($mysqli);
if( $up)
{
	echo "<h4 class='paddl'>Profile updated successfully !</h4>";


}
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