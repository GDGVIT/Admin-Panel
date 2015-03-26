<?php
	session_start();
	require("session_check.php");
	require("sql_con.php");
	$regno=$_SESSION['name'];
	$status=$_SESSION['status'];
	$club_id=$_SESSION['cid'];

	echo "<select id='member_selected' class='browser-default' required>
	<option value=''>None</option>";
    $mysql_tb = 'club_'.$club_id.'_members';
    $sql = "SELECT * FROM `" . $mysql_tb . "` where status='active' order by name";
    $res = mysqli_query($mysqli,$sql) or die("quer error");

    while($rows=mysqli_fetch_array($res))//selecting the events
    {
        
        $name=$rows['name'];
        $id=$rows['regno'];
        echo "<option value='$id'>$name</option>";
    }

	echo "</select><br><input type='button' onclick='report()' value='SELECT'>";
	echo "<div id='reportDiv'></div>";

	mysqli_close($mysqli);
?>