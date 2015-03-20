<?php
session_start();
	require("session_check.php");
echo"<input type='text' id='name' name='name' placeholder='Name' autocomplete='off'>
		<input type='text' id='desc' name='desc' placeholder='Description' autocomplete='off'>
		<input type='button' class='waves-effect waves-light btn' style='margin-left:33%' id='submit' value='Create Thread' onclick='create_thread()'>";
?>