<?php
	session_start();
	include("db_connect.php");
	$id = $_GET['id'];
	$club_id = $_SESSION['cid'];
	$q1 = "select * from group_meetings where id='$id'";
	$r1 = mysqli_query($con, $q1) or die("query error");
	while ($row = mysqli_fetch_array($r1)) {
		$date = $row[3];
		$time = $row[4];
		$place = $row[5];
		$details = $row[6];
		$date_added = $row[7];
	}
?>

<html>
<body>
	<p>Venue:</p>
	<input type="date" id="date" value='<?php echo $date;?>'><br>
	<input type="time" id="time" value='<?php echo $time;?>'><br>
	<input type="text" id="place" value='<?php echo $place;?>' placeholder="Enter place"><br>
	<p>Details:</p>
	<textarea rows="5" cols="20" id="details" placeholder="Enter event details"><?php echo $details;?></textarea><br>
	<input type="hidden" value="<?php echo $club_id;?>" id="club_id">
	<input type="hidden" value="<?php echo $id;?>" id="meeting_id">
	<button onclick="modification_update_meeting_group()">MODIFY MEETING</button>
</body>
</html>