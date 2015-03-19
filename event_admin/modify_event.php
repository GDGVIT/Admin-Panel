<?php
	session_start();
	include("db_connect.php");
	$id = $_GET['id'];
	$club_id = $_SESSION['cid'];
	$q1 = "select * from events where id='$id'";
	$r1 = mysqli_query($con, $q1) or die("query error");
	while ($row = mysqli_fetch_array($r1)) {
		$name = $row[2];
		$date = $row[3];
		$time = $row[4];
		$place = $row[5];
		$purpose = $row[6];
		$date_added = $row[7];
		$details = $row[8];
	}
?>

<html>
<body>
	<p>Name:</p>
	<input type="text" id="name" value='<?php echo $name;?>'><br>
	<p>Venue:</p>
	<input type="date" id="date" value='<?php echo $date;?>'><br>
	<input type="time" id="time" value='<?php echo $time;?>'><br>
	<input type="text" id="place" value='<?php echo $place;?>' placeholder="Enter place"><br>
	<p>Purpose:</p>
	<input type="text" id="purpose" value='<?php echo $purpose;?>' placeholder="Enter the Purpose"><br>
	<p>Details:</p>
	<textarea rows="5" cols="20" id="details" placeholder="Enter event details"><?php echo $details;?></textarea><br>
	<input type="hidden" value="<?php echo $club_id;?>" id="club_id">
	<input type="hidden" value="<?php echo $id;?>" id="event_id">
	<button onclick="modification_update_ad()">MODIFY EVENT</button>
</body>
</html>