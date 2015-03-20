<?php
session_start();
	require("session_check.php");
require("sql_con.php");
$id = $_REQUEST["id"];
$msg = $_REQUEST["msg"];
date_default_timezone_set('Asia/Calcutta');
$date = date('Y-m-d H:i:s');
session_start();
$user_id = $_SESSION['name'];
$sql_0 = "INSERT INTO `$id` (`time`, `sender`, `message`) VALUES ( '$date', '$user_id', '$msg');";
mysqli_query($mysqli,$sql_0);

$sql = "SELECT * FROM `thread_list` WHERE `id` = $id";
$res = mysqli_query($mysqli,$sql);
while($arr = mysqli_fetch_array($res))
{
	echo $arr['name']."<br><I style='text-align:right'> ".$arr['description']."</I>";
}
echo "<br><input type='text' id='msg' name='msg' autocomplete='off' ><input type='button' id=$id onClick='send_message(this.id)' value='Send'>";
mysqli_close($mysqli);
?>