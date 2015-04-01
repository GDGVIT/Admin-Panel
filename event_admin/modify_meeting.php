<?php
	session_start();
	include("db_connect.php");
	$id = $_GET['id'];
	$club_id = $_SESSION['cid'];
	$q1 = "select * from meetings where id='$id'";
	$r1 = mysqli_query($con, $q1) or die("query error");
	while ($row = mysqli_fetch_array($r1)) {
		$date = $row[2];
		$time = $row[3];
		$place = $row[4];
		$details = $row[5];
		$date_added = $row[6];
	}
?>
<div style="padding-left:30%">
	<div class="row">
    	<div class="input-field col s6">
    		<label for="place" style="min-width:240px;">Venue</label><br>
			<input type="text" id="place" value='<?php echo $place;?>' style="min-width:240px;">
		</div>
	</div>
	<div class="row">
    	<div class="input-field col s6">
    		<label for="details" style="min-width:240px;">Name</label><br>
			<textarea rows="5" cols="20" class="materialize-textarea" id="details" style="min-width:240px;"><?php echo $details;?></textarea>
		</div>
	</div>
	<div class="row">
    	<div class="input-field col s6">
			<input type="date" id="date" value='<?php echo $date;?>'>
		</div>
	</div>
	<div class="row">
    	<div class="input-field col s6">
			<input type="time" id="time" value='<?php echo $time;?>'>
		</div>
	</div>
	<div class="row">
    	<div class="input-field col s6">
			<input type="hidden" value="<?php echo $club_id;?>" id="club_id">
			<input type="hidden" value="<?php echo $id;?>" id="meeting_id">
			<a class="btn" style="color:white;background-color:#e75457;" onclick="modification_update_meeting_ad()">Modify Meeting</a>
		</div>
	</div>
</div>