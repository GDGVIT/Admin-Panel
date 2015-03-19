<?php
	session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	require("sql_con.php");
	$regno=$_SESSION['name'];
	$status=$_SESSION['status'];
	$club_id=$_SESSION['cid'];
	$old=$_GET['old'];
	$new=$_REQUEST['new'];
   
    $sql = "SELECT * FROM `panel` WHERE `reg_no`='$regno' && `pass`='$old'";
    $res = mysqli_query($mysqli,$sql);
    $arr=mysqli_fetch_array($res);
	if(is_array($arr))
	{
    $q="UPDATE  panel SET `pass` = '$new'  WHERE reg_no='$regno' && pass='$old'";
	$up=mysqli_query($mysqli,$q);
    if($up)
	{
		
				$to= $arr["email"]; //Send email to our user
				$subject = 'GDG | Password Change'; // Give the email a subject 
				$message = '

					Your account password has been reset. If it was not you, report to our tech team immediately. 

					Regards,
					Team  GDG-VIT.
					'; // Our message above including the link
					
					$headers = 'From:noreply@gdgvitvellore.com' . "\r\n"; // Set from headers
					mail($to, $subject, $message, $headers); // Send the email
					echo "Password successfully updated!";
	}
	else
		echo "OOPS!! There was a problem in updating the password!";
	}
	else
		echo "OOPS!! There was a problem in updating the password!";
	mysqli_close($mysqli);
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