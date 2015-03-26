
    <?php
  session_start();
  if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
  {
  require("sql_con.php");
  $regno=$_SESSION['name'];
  $status=$_SESSION['status'];
  $club_id=$_SESSION['cid'];
?>
    
<div class="row" style="padding-left:25%;padding-right:25%;">
  <form class="col s12" action="add_exec.php" method="post" enctype="multipart/form-data">
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
        <input id="name" name="name" tabindex="1" type="text" class="validate" style="min-width:240px;">
        <label for="first_name" style="min-width:240px;">Name</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="name" name="registration" type="text" style="min-width:240px;" class="validate">
        <label style="min-width:240px;" for="regnum">Registration Number</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="birthday" type="text" style="min-width:240px;" class="validate">
        <label for="birthday" style="min-width:240px;">Birthday</label>
      </div>
    </div>
    <div class="row">
    <div class="input-field col s6">
      <h6 style="color:grey">I Am </h6>
      <p>
        <input name="group1" class="with-gap" type="radio" id="test1" />
        <label for="test1">Male</label>
        <input name="group1" class="with-gap" style="color:red;background-color:red;" type="radio" id="test2" />
        <label for="test2">Female</label>
      </p>
    </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="email" style="min-width:240px;" name="email" type="email" class="validate">
        <label style="min-width:240px;" for="email">E-Mail</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="phone" style="min-width:240px;" name="phone" type="text" class="validate">
        <label style="min-width:240px;" for="contact">Contact</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="name" style="min-width:240px;" name="address" type="text" class="validate">
        <label style="min-width:240px;" for="block">Block</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input style="min-width:240px;" id="room" type="text" class="validate">
        <label style="min-width:240px;" for="room">Room</label>
      </div>
    </div>
    <div class="row">
    <div class="input-field col s6">
        <input type="file" id="profilepic"  />
      </div>
    </div>
    <div class="row">
    <div class="input-field col s6">
        <button name="submit" id="submit" tabindex="5" style="height:42px;background-color:rgba(0,0,0,0);border:none;">
            <a class="waves-effect waves-light btn" style="background-color:#e75457;color:white;">
            Sign Up</a></button>
      </div>
    </div>
  </form>
</div>
    <?php
mysqli_close($mysqli);
  }
  else
  {
    session_unset();
    session_destroy();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    header("Location:signin.php");
  }

?>
