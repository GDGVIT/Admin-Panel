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
      <h3>Add Members</h3>
      <select name="department" id="department" class="browser-default" style="width:50%;">
        <option selected value="" disabled selected><b>Department :</B></option>     
        <option  value="technical">Technical</option>
        <option  value="management">Management</option>
        <option  value="design">Design</option>     
      </select>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="m_name" name="m_name" tabindex="1" type="text" class="validate" style="min-width:240px;">
        <label for="m_name" style="min-width:240px;">Name</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="reg_no" name="reg_no" type="text" style="min-width:240px;" class="validate">
        <label style="min-width:240px;" for="reg_no">Registration Number</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="dob" type="date" style="min-width:240px;" class="validate">
        <label for="dob" style="min-width:240px;">Birthday</label>
      </div>
    </div>
    <div class="row">
    <div class="input-field col s6">
      <h6 style="color:grey">I Am </h6>
      <p>
        <input name="group1" class="with-gap" type="radio" id="test1" value="male" />
        <label for="test1">Male</label>
        <input name="group1" class="with-gap" style="color:red;background-color:red;" type="radio" id="test2" value="female" />
        <label for="test2">Female</label>
      </p>
    </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="emailid" style="min-width:240px;" name="emailid" type="email" class="validate">
        <label style="min-width:240px;" for="emailid">E-Mail</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="mobno" style="min-width:240px;" name="mobno" type="text" class="validate">
        <label style="min-width:240px;" for="mobno">Contact</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="hblock" style="min-width:240px;" name="hblock" type="text" class="validate">
        <label style="min-width:240px;" for="hblock">Block</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input style="min-width:240px;" id="hroom" type="text" class="validate">
        <label style="min-width:240px;" for="hroom">Room</label>
      </div>
    </div>
   
    <div class="row">
    <div class="input-field col s6">
        <button onclick="change_password2()" tabindex="5" style="height:42px;background-color:rgba(0,0,0,0);border:none;">
            <a class="waves-effect waves-light btn" style="background-color:#e75457;color:white;">
            Sign Up</a></button>
      </div>
    </div>
</div>
<?php
  mysqli_close($mysqli);
?>
