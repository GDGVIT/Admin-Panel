<?php
	session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	require("sql_con.php");
$user_id = $_SESSION['name'];
$club_id = $_SESSION['cid'];
$name = $_POST["name"];
$desc = $_POST["desc"];
$date = date('Y-m-d H:i:s');

$sql_1 = "INSERT INTO `thread_list` (`club_id`, `name`, `description`, `created_by`, `date`) VALUES ($club_id, '$name', '$desc', '$user_id', '$date')";
$res_1 = mysqli_query($mysqli,$sql_1);
if($res_1==true)
{
		$sql_2 = "SELECT id FROM `thread_list` where name='$name' AND club_id = $club_id AND created_by = '$user_id'";
		$res_2 = mysqli_query($mysqli,$sql_2);
		$arr_2 = mysqli_fetch_array($res_2);
		$id = $arr_2["id"];
		if(isset($id))
		{
			$sql_3 = "CREATE TABLE `$id` (`id` int PRIMARY KEY AUTO_INCREMENT, `time` datetime, `sender` varchar(20), `message` text)";
			$res_3 = mysqli_query($mysqli,$sql_3);
			if($res_3==true)
			{
				
				echo "<br><br><span style='font-size:20px;font-style:italic'>Success!! Thread Created!! Visit Home page to send messages</span>";
			}
			else
			{
				echo "OOPS! We encountered a problem in creating the thread-1!";
				$sql_4 = "DELETE FROM `thread_list` WHERE `name`='$name' AND `created_by`= $user_id";
				$res_4 = mysqli_query($mysqli,$sql_4);
			}
		}
		else
		{
			echo "OOPS! We encountered a problem in creating the thread-2!";
			$sql_5 = "DELETE FROM `thread_list` WHERE `name`='$name' AND `created_by`= $user_id";
			$res_5 = mysqli_query($mysqli,$sql_5);
			
		}
}
else
	echo "OOPS! We encountered a problem in creating the thread!";
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