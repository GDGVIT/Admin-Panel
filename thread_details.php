<?php
session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
require("sql_con.php");
$id = $_REQUEST["id"];
$sql = "SELECT * FROM `thread_list` WHERE `id` = $id";
$res = mysqli_query($mysqli,$sql);
while($arr = mysqli_fetch_array($res))
{
	echo $arr['name']."<br><I style='text-align:right'> ".$arr['description']."</I>";
}
$sql_1 = "SELECT * FROM `$id` ORDER BY time";
$res_1 = mysqli_query($mysqli,$sql_1);
while($arr_1 = mysqli_fetch_array($res_1))
{
	echo "<br><h3>".$arr_1['message']."<br></h3><I style='text-align:right'>By ".$arr_1['sender']." at ". $arr_1['time']."</I>";
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