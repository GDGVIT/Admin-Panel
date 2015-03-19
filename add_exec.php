<?php
	session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	require("sql_con.php");
	$regno=$_SESSION['name'];
	$status=$_SESSION['status'];
	$club_id=$_SESSION['cid'];
	function randomPassword() 
	{
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) 
		{
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}   
	$password= randomPassword();
	$name1=$_POST['name'];
	$email=$_POST['email'];
	$reg=$_POST['registration'];
	$gender=$_POST['gender'];
	$contact=$_POST['phone'];
	$ydob=$_POST['ydob'];
	$mdob=$_POST['mdob'];
	$ddob=$_POST['ddob'];
	$dob = $ydob.'-'.$mdob.'-'.$ddob;
	$add=$_POST['address'];
	if(isset($_FILES['image']) && $_FILES['image']['size'] > 0)
	{
        // *** Add your validation code here *** //
    // Get Image
    $name = $_FILES['image']['name'];
  $type = $_FILES['image']['type'];
  $get_content = file_get_contents($_FILES['image']['tmp_name']);
  $escape = mysql_real_escape_string($get_content);
   $mysql_tb = 'club_'.$club_id.'_members';
    mysqli_query($mysqli,"INSERT INTO `" . $mysql_tb . "`  (name, email, gender, mobno, dob, address,regno,photo) VALUES ('$name1', '$email', '$gender', '$contact', '$dob','$add','$reg','$escape') ");
 }
 

else
{ require("sql_con.php");
    $mysql_tb = 'club_'.$club_id.'_members';
   mysqli_query($mysqli,"INSERT INTO `" . $mysql_tb . "`  (name, email, gender, mobno, dob, address,regno) VALUES ('$name1', '$email', '$gender', '$contact', '$dob','$add','$reg') ");
}
mysqli_query($mysqli,"INSERT INTO panel (reg_no,club_id, pass) VALUES ('$reg', '$club_id', '$password') ");
mysqli_query($mysqli,"INSERT INTO `60_event_attendance` (`regno`) VALUES ('$reg')");
mysqli_query($mysqli,"INSERT INTO `60_meeting_attendance` (`regno`) VALUES ('$reg')");

    
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
