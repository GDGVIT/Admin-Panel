<?php
session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	
echo"<input type='text' id='name' name='name' placeholder='Name' autocomplete='off'>
		<input type='text' id='desc' name='desc' placeholder='Description' autocomplete='off'>
		<input type='button' class='waves-effect waves-light btn' style='margin-left:33%' id='submit' value='Create Thread' onclick='create_thread()'>";
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