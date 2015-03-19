<?php
	session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	require("sql_con.php");

$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];
$name=$_GET['name'];
$email=$_GET['email'];
$regno=$_GET['regno'];
$phone=$_GET['phone'];
$dob=$_GET['dob'];
$gender=$_GET['sex'];
$address=$_GET['add'];

    $mysql_tb = 'club_'.$club_id.'_members';
    
    $sql = "SELECT * FROM  `" . $mysql_tb . "` WHERE regno = '$regno'";
    $res = mysqli_query($mysqli,$sql);
    while($arr=mysqli_fetch_array($res))//selecting the events
    {
	if($email==$arr["email"]&&$phone==$arr["phone"])
	{
    $up=$mysqli->query("UPDATE `" . $mysql_tb . "` SET 
                                `name` = '$name',
                                `email` = '$email',
                                `mobno` = '$phone',
                                `gender` = '$gender',
                                `regno` = '$regno', 
								`dob` = '$dob',
								`address` = '$address'
								
                             WHERE `regno` = '$regno'");
	}
	else
	{
		if($email!=$arr["email"])
		{
		 $up=$mysqli->query("UPDATE `" . $mysql_tb . "` SET 
                                `name` = '$name',
                                `mobno` = '$phone',
                                `gender` = '$gender',
                                `regno` = '$regno', 
								`dob` = '$dob',
								`address` = '$address'
								
                             WHERE `regno` = '$regno'");
							 
							$hash = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable.
							$q2="INSERT INTO `email_confirmation` VALUES ('$regno','$email','hash')";
							if(mysqli_query($mysqli,$q2))
							{
								$to= $email; //Send email to our user
								$subject = 'GDG Email | Verification'; //// Give the email a subject 
								$message = '
									Your account has been verified, you can login with your credentials after you have activated your account by following the URL below.

										Please click this link to activate your account:
										http://www.gdgvitvellore.com/admin_panel/verify.php?email='.$email.'&hash='.$hash.'&tb='.$mysql_tb.'
								'; 
							}
		}
		else if($phone!=$arr["mobno"])
		{
			 $up=$mysqli->query("UPDATE `" . $mysql_tb . "` SET 
                                `name` = '$name',
                                `email` = '$email',
                                `gender` = '$gender',
                                `regno` = '$regno', 
								`dob` = '$dob',
								`address` = '$address'
                             WHERE `regno` = '$regno'");
			$vkey = rand(1000,9000);
				//Your authentication key
			$authKey = "70362A9VyN8Yco53da83a9";

		//Multiple mobiles numbers seperated by comma
		//$mobileNumber =strip_tags(trim($_POST["tsendertelephone"]));

		//Sender ID,While using route4 sender id should be 6 characters long.
		$senderId = "GDGVIT";

		//Your message to send, Add URL endcoding here.
		$message=urlencode("Dear ".$name.". ,Your Verification Code: ".$vkey." Regards Team GDG - VIT");
		//$message = urlencode($msg);

		//Define route 
		$route = "4";
		//Prepare you post parameters
		$postData = array(
			'authkey' => $authKey,
			'mobiles' => $phone,
			'message' => $message,
			'sender' => $senderId,
			'route' => $route
		);

		//API URL
		$url="https://control.msg91.com/sendhttp.php";

		// init the resource
		$ch = curl_init();
		curl_setopt_array($ch, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => $postData
	// CURLOPT_FOLLOWLOCATION => true
));

//get response
$output = curl_exec($ch);

curl_close($ch);
							 
		}
	}   
 }
echo"Profile Updated successfully !";
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