<?php
	session_start();
	require("session_check.php");
	require("sql_con.php");
	$regno=$_SESSION['name'];
	$status=$_SESSION['status'];
	$club_id=$_SESSION['cid'];
	$old=$_GET['old'];
	$new=$_REQUEST['new'];
   
    $sql = "SELECT * FROM `panel` WHERE `reg_no`='$regno' && `pass`='$old'";
    $res = mysqli_query($mysqli,$sql) or die("querr");
    $arr=mysqli_fetch_array($res);
	if(is_array($arr))
	{
    $q="UPDATE  panel SET `pass` = '$new'  WHERE reg_no='$regno' && pass='$old'";
	$up=mysqli_query($mysqli,$q);
    if($up)
	{			$tb_name = "club_".$club_id."_members";
				$arr1 = mysqli_query($mysqli, "select email from $tb_name where regno='$regno'") or die("qer");
				$row1 = mysqli_fetch_array($arr1);
				$to= $row1["email"]; //Send email to our user
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
?>