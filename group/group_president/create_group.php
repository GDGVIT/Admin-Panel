<?php
	session_start();
	$club_id = $_SESSION['cid'];
?>

<html>
<body>
	<input type="text" id="grp_name" placeholder="Enter group name"><br>
	<select id="grp_admin">
		<option value="">Select admin</option>
		<?php
			require("db_connect.php");
			$r1 = mysqli_query($con, "select * from club_".$club_id."_members");
			while($row = mysqli_fetch_array($r1)) {
				echo "<option value='".$row['regno']."'>".$row['name']."</option>";
			}
		?>
	</select><br>
	<textarea rows="5" cols="20" id="grp_details" placeholder="Enter group details"></textarea><br>
	<input type="button" value="Create Group" onclick="create_group()">
</body>
</html>