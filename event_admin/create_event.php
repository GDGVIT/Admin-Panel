  <?php
session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	require("sql_con.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];
?>

 <div>
       <form>
              <div align="center"><h3 class="paddh">Event Details</h3></div>
            <div class="col-lg-10 paddl" style="width:500px; margin:0 auto;"><br>
    <div class=padds>


	<div class="input-field col s12">
              <label>Event Name</label>
              <input id="e_name" name="e_name" type="text">
    </div>
    <div class="input-field col s12">
              <label>Venue</label>
              <input id="venue" name="venue" type="text">
    </div>
    
    <div class="input-field col s12">
              <label>Purpose</label>
              <input id="purpose" name="purpose" type="text">
    </div>
    <div class="input-field col s12">
    <textarea id="details" name="details" class="materialize-textarea"></textarea>
    <label for="textarea1">Details</label>
    </div>     
    <label>Event Date</label>
    <input id="event_date" type="date" class="datepicker" required>
    <label>Event Time</label><br><br> 
    <input id="event_time" type="time" class="timepicker" required>     
	<input type="hidden" value="<?php echo $club_id;?>"	 id="club_id">
         <hr><br>
    <div align="center"> 
      <a href="#" onclick="create_event_ad()"><button type="button" class="btn btn-s-md btn-info">Create Event</button></a>
    </div>
    </div>
         
                </div></div></form></div>

<?php
mysqli_close($mysqli);
	}
	else
	{
		session_unset();
		session_destroy();
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		header("Location:index.php");
	}
?>