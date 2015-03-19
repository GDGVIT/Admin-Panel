<?php
session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
$id = $_REQUEST["id"];
echo "<br><input type='text' id='msg' name='msg' autocomplete='off' ><input type='button' id=$id onClick='send_message(this.id)' value='Send'>";
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