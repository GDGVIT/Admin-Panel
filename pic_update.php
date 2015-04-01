<?php
	session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	require("sql_con.php");
	$regno=$_SESSION['name'];
	$status=$_SESSION['status'];
	$club_id=$_SESSION['cid'];
	
	
	
      
	if(isset($_FILES['image']) && $_FILES['image']['size'] > 0)
{
        // *** Add your validation code here *** //
    // Get Image

  $name = $_FILES['image']['name'];
  $type = $_FILES['image']['type'];
  $get_content = file_get_contents($_FILES['image']['tmp_name']);
  $escape = mysql_real_escape_string($get_content);
   $mysql_tb = 'club_'.$club_id.'_members';
   // mysqli_query($mysqli,"INSERT INTO `" . $mysql_tb . "`  (name, email, gender, mobno, dob, address,regno,photo) VALUES ('$name1', '$email', '$gender', '$contact', '$dob','$add','$reg','$escape') ");
  $sql = "SELECT * FROM  `" . $mysql_tb . "` WHERE regno = '$regno'";
    $res = mysqli_query($mysqli,$sql);
    while($arr=mysqli_fetch_array($res))//selecting the events
    {
	
    $up=$mysqli->query("UPDATE `" . $mysql_tb . "` SET 
                                
								`photo` = '$escape'
								
                             WHERE `regno` = '$regno'");
	}
	if($up)
{
echo"Profile picture updated !";

}
 }
 
 header("Location:index.php");
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
