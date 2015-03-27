<?php
  session_start();
  require("session_check.php");
  require("sql_con.php");
  $regno=$_SESSION['name'];
  $status=$_SESSION['status'];
  $club_id=$_SESSION['cid'];
?>
    
<div class="row" style="padding-left:25%;padding-right:25%;">
    <div class="row">
      <h3>Feedback</h3>
      
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="feedback" name="feedback" tabindex="1" type="text" class="validate" style="min-width:240px;">
        <label for="feedback" style="min-width:240px;">feedback</label>
      </div>
    </div>
   
    <div class="row">
    <div class="input-field col s6">
        <button onclick="add_feedback()" tabindex="5" style="height:42px;background-color:rgba(0,0,0,0);border:none;">
            <a class="waves-effect waves-light btn" style="background-color:#e75457;color:white;">
            Submit</a></button>
      </div>
    </div>
</div>
<?php
  mysqli_close($mysqli);
?>
