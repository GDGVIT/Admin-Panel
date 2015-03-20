<?php
session_start();
  require("session_check.php");
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
?>