<?php
	session_start();
	require("db_connect.php");
	$club_id = $_SESSION['cid'];
	$r1 = mysqli_query($con, "select * from groups where club_id=$club_id") or die("error");
?>

<html>
<body>
	<table>
		<tr>
			<th>GroupID</th>
			<th>ClubID</th>
			<th>Name</th>
			<th>Admin</th>
			<th>Details</th>
			<th></th>
			<th></th>
		</tr>
		<?php
			while($row = mysqli_fetch_array($r1)) {
				$r2 = mysqli_query($con, "select name from club_".$club_id."_members where regno='".$row['admin']."'");
				while($row2 = mysqli_fetch_array($r2))
					$admin_name = $row2['name'];
				echo "<tr>
				<td>".$row['grp_id']."</td>
				<td>".$row['club_id']."</td>
				<td>".$row['name']."</td>
				<td>".$admin_name."</td>
				<td>".$row['details']."</td>
				<td><input type='button' value='modify' onclick='modify_group_pre(".$row['grp_id'].")'></td>
				<td><input type='button' value='delete' onclick='delete_group_pre(".$row['grp_id'].")'></td>
				</tr>";
			}
		?>
	</table>
</body>
</html>