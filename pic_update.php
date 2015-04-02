<?php
	session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	require("sql_con.php");
	$regno=$_SESSION['name'];
	$status=$_SESSION['status'];
	$club_id=$_SESSION['cid'];
	
	 $img_name=$regno.'.jpg';
	if($_POST)
{ 
// $_FILES["file"]["error"] is HTTP File Upload variables $_FILES["file"] "file" is the name of input field you have in form tag.

if ($_FILES["file"]["error"] > 0)
{
// if there is error in file uploading 
echo "Return Code: " . $_FILES["file"]["error"] . "<br />";

}
else
{
// check if file already exit in "images" folder.

  //move_uploaded_file function will upload your image.  if you want to resize image before uploading see this link http://b2atutorials.blogspot.com/2013/06/how-to-upload-and-resize-image-for.html
if(move_uploaded_file($_FILES["file"]["tmp_name"],"images/" .$img_name))
{
// If file has uploaded successfully, store its name in data base
	$mysql_tb = 'club_'.$club_id.'_members';
    $img_loc="images/" .$img_name;
     $mysql_tb = 'club_'.$club_id.'_members';
   // mysqli_query($mysqli,"INSERT INTO `" . $mysql_tb . "`  (name, email, gender, mobno, dob, address,regno,photo) VALUES ('$name1', '$email', '$gender', '$contact', '$dob','$add','$reg','$escape') ");
  $sql = "SELECT * FROM  `" . $mysql_tb . "` WHERE regno = '$regno'";
    $res = mysqli_query($mysqli,$sql);
    while($arr=mysqli_fetch_array($res))//selecting the events
    {
	
    $up=$mysqli->query("UPDATE `" . $mysql_tb . "` SET 
                                
								`photo` = '$img_loc'
								
                             WHERE `regno` = '$regno'");
	}
/*$query_image = "insert into club_60_members (photo) values ('".$img_name."')";
if(mysql_query($query_image))
{
echo "Stored in: " . "images/" . $img_name;
}
else
{
echo 'File name not stored in database';
}*/
}



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
