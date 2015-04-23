<?php
	session_start();
	include("db_connect.php");
	$club_id = $_SESSION['cid'];
	$grp_id = $_GET['id'];
?>

<html>
<body>
	<p>Venue:</p>
	<input type="date" id="date"><br>
	<input type="time" id="time"><br>
	<input type="text" id="place" placeholder="Enter place"><br>
	<p>Details:</p>
	<textarea rows="5" cols="20" id="details" placeholder="Enter event details"></textarea><br>
	<input type="hidden" value="<?php echo $club_id;?>" id="club_id">
	<input type="hidden" value="<?php echo $grp_id;?>" id="grp_id">
	<button onclick="create_meeting_group()">ARRANGE MEETING</button>
</body>
</html>