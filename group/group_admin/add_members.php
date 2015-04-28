<?php
	session_start();
	require("db_connect.php");
	$club_id = $_SESSION['cid'];
	$grp_id = $_GET['id'];
	$r1 = mysqli_query($con, "select * from club_".$club_id."_members where regno not in (select reg_no from group_".$grp_id."_members)") or die("err");
?>

<html>
<body>
	<h1>Select the members to be added:</h1>
	<?php
		while($row = mysqli_fetch_array($r1)) {
			echo "<input type='checkbox' value='".$row['regno']."' name='members'>".$row['name']."<br>";
		}
	?>
	<input type="button" value="Add" onclick="add_members_group()">
	<input type="hidden" value="<?php echo $grp_id;?>" id="grp_id">
</body>
</html>