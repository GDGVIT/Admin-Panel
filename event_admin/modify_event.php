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

<div style="padding-left:30%">
	<div class="row">
    	<div class="input-field col s6">
			<input type="text" id="name" style="min-width:240px;" required>
			<label for="name" style="min-width:240px;"><?php echo $name;?></label>
		</div>
	</div>
	<div class="row">
    	<div class="input-field col s6">
    		<input type="text" id="place" style="min-width:240px;" required>
    		<label for="place" style="min-width:240px;"><?php echo $place;?></label>
    	</div>
    </div>
    <div class="row">
    	<div class="input-field col s6">
    		<input type="text" id="purpose" style="min-width:240px;" required>
    		<label for="purpose" style=""><?php echo $purpose;?></label>
    	</div>
    </div>
    <div class="row">
    	<div class="input-field col s6">
    		<textarea rows="5" class="materialize-textarea" cols="20" id="details" style="min-width:240px;" required></textarea>
    		<label for="details" style="min-width:240px;"><?php echo $details;?></label>
    	</div>
    </div>
    <div class="row">
    	<div class="input-field col s6">
    		<input type="date" id="date" value='<?php echo $date;?>' style="min-width:240px;">
    		<!--<label for="date" style="min-width:240px;">Date</label>-->
    	</div>
    </div>
    <div class="row">
    	<div class="input-field col s6">
    		<input type="time" id="time" value='<?php echo $time;?>' style="min-width:240px;">
    		<!--<label for="time" style="min-width:240px;">Time</label>-->
    	</div>
    </div>
	<input type="hidden" value="<?php echo $club_id;?>" id="club_id">
	<input type="hidden" value="<?php echo $id;?>" id="event_id">
	<a href="#" class="btn" style="color:white;background-color:#e75457;" onclick="modification_update_ad()">MODIFY EVENT</a>
</div>