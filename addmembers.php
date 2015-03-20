<?php
	session_start();
  require("session_check.php");
	require("sql_con.php");
	$regno=$_SESSION['name'];
	$status=$_SESSION['status'];
	$club_id=$_SESSION['cid'];
?>

<div>
       <!-- <form> -->
            <div align="center"><h3 class="paddh">Member Details</h3></div>
            <div class="col-lg-10 paddl" style="width:500px; margin:0 auto;"><br>
            
              <div class="padds">           
              <select name="department" id="department" class="browser-default" >
              <option selected value="" disabled selected><b>Department :</B></option>     
              <option  value="technical">Technical</option>
              <option  value="management">Management</option>
              <option  value="design">Design</option>     
              </select>
              </div>
               
              <div class="input-field col s12">
              <label>Member Name</label>
              <input id="m_name" name="m_name" type="text" class="validate">
              </div> 
                
              <div class="input-field col s12" style="padding-bottom: 10px;" class="validate">
              <label>Registration Number</label>
              <input id="reg_no" name="reg_no" type="text">
              </div>
              <label style="padding-left:10px;"><font size="3">Gender</font></label>&nbsp;&nbsp;&nbsp;
              <input name="group1" type="radio" id="male" value="male" />
              <label for="male">Male</label>
              <input name="group1" type="radio" id="female" value="female" />
              <label for="female">Female</label>
               <br>
               
              <div class="input-field col s12">
              <label>Email-ID</label>
              <input id="emailid" name="emailid" type="email" class="validate">
              </div>
              <label style="padding-left:10px;">Date of Birth</label>
              <input id="dob" type="date" class="datepicker" required style="padding-left:10px;">
              <div class="input-field col s12">
              <label>Contact Number</label>
              <input id="mobno" name="mobno" type="text" class="validate">
              </div>
              <div class="input-field col s12">
              <label>Hostel Room Number</label>
              <input id="hroom" name="hroom" type="text" class="validate">
              </div>
              <div class="input-field col s12">
              <label>Hostel Block</label>
              <input id="hblock" name="hblock" type="text" class="validate">
              </div>
        <!--      <div class="btn">
              <input type="file" /><span>Profile Pic</span>
              </div> -->
                
              <div align="center" style="margin-top:20px;"> 
              <a href='#'><button class="btn btn-s-md btn-info" onclick="change_password2()">Add Member</button></a>
              </div>
          </div>
      <!-- </form>  -->
</div>     

<?php
mysqli_close($mysqli);
?>
