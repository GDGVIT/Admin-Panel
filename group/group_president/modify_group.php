<?php
	session_start();
	require("db_connect.php");
	$grp_id = $_GET['grp_id'];
	$club_id = $_SESSION['cid'];
	$q1 = "select * from groups where grp_id='$grp_id'";
	$r1 = mysqli_query($con, $q1) or die("query error");
	while ($row = mysqli_fetch_array($r1)) {
		$name = $row['name'];
		$admin = $row['admin'];
		$details = $row['details'];
	}
	$r2 = mysqli_query($con, "select * from club_".$club_id."_members");
	while($row = mysqli_fetch_array($r2)) {
		if($row['regno']==$admin)
			$admin_name = $row['name'];
	}
?>

<html>
<body>
	<input type="text" id="grp_name" value="<?php echo $name;?>"><br>
	<select id="grp_admin">
		<option value="<?php echo $admin;?>"><?php echo $admin_name;?></option>
		<?php
			$r3 = mysqli_query($con, "select * from club_".$club_id."_members");
			while($row = mysqli_fetch_array($r3)) {
				if($row['regno']!=$admin)
					echo "<option value='".$row['regno']."'>".$row['name']."</option>";
			}
		?>
	</select><br>
	<textarea rows="5" cols="20" id="grp_details"><?php echo $details;?></textarea><br>
	<input type="hidden" value="<?php echo $grp_id?>" id="grp_id">
	<input type="button" value="Modify Group" onclick="modify_updation_group_pre()">
	<div id="mainDiv"></div>
</body>
</html>

<script type="text/javascript" src="../ajax_call.js"></script>