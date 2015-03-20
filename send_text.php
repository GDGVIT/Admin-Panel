<?php
session_start();
	require("session_check.php");
$id = $_REQUEST["id"];
echo "<br><input type='text' id='msg' name='msg' autocomplete='off' ><input type='button' id=$id onClick='send_message(this.id)' value='Send'>";
?>