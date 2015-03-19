<?php
	session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
	require("sql_con.php");
	$regno=$_SESSION['name'];
	$status=$_SESSION['status'];
	$club_id=$_SESSION['cid'];
	  $id1 = $_GET['id'];
	  require("sql_con.php");
     $mysql_tb = 'club_'.$club_id.'_members';
    
    $sql = "SELECT * FROM `" . $mysql_tb . "` where id=$id1";
    $res = mysqli_query($mysqli,$sql);

    while($row=mysqli_fetch_array($res))//selecting the events
    {
        
            
            $name=$row['name'];
    $regno=$row["regno"];
    $date=$row["dob"];
    $email=$row["email"];
    $address=$row["address"];
    $phone=$row["mobno"];
    $gender=$row["gender"];
    $photo=$row["photo"];
     $status=$row['status'];
    
    }
    
?>
  
  
        <!-- /.aside -->
      
                  
       
    <div class="modal-dialog">
      <div class="modal-content paddl" style="width:500px; margin:0 auto;">
        <div class="modal-header" align="center">
          <h4 class="modal-title" id="modifyLabel">Profile</h4>
        </div>
        <div class="modal-body"  id="email1">
           <form name="modify" >
            <div class="form-group">
            <input class="form-control" type="hidden" name="id" id="id" value="<?php echo"$id1"; ?>"  style="margin-bottom:10px;margin-right:0px">
              <div class="col-lg-6">
                        <label for="name"><strong>Name :</strong></label>
                <input class="form-control" type="text" name="name" id="name" value="<?php echo"$name"; ?>"  style="margin-bottom:10px;margin-right:0px">
              </div>
        <div class="col-lg-6">
          <label for="email"><strong>Email-id :</strong></label>    <input type="text" name="email" id="email"  value="<?php echo"$email"; ?>" class="form-control" style="margin-bottom:10px">
                </div>
              <div class="col-lg-6">
                        <label for="regno"><strong>Registration No.:</strong></label>
                <input class="form-control" type="text" name="regno" id="regno" value="<?php echo"$regno"; ?>"  style="margin-bottom:10px;margin-right:0px">
              </div>
                  <div class="col-lg-6">
                        <label for="phone"><strong>Mobile No. :</strong></label>
                <input class="form-control" type="text" name="phone" id="phone" value="<?php echo"$phone"; ?>"  style="margin-bottom:10px;margin-right:0px">
              </div>
              
            <div class="col-lg-6">
                        <label for="project"><strong>Sex:</strong></label>
                <input class="form-control" type="text" name="gender" id="sex" value="<?php echo"$gender"; ?>"  style="margin-bottom:10px;margin-right:0px">
              </div>
                  <div class="col-lg-6">
                        <label for="address"><strong>Address :</strong></label>
                <input class="form-control" type="text" name="address" id="address" value="<?php echo"$address"; ?>"  style="margin-bottom:10px;margin-right:0px">
              </div>
                        
            
          <div class="col-lg-6">
                        <label for="dob"><strong>Date of Birth :</strong></label>
                <input class="form-control" type="text" name="dob" id="dob" value="<?php echo"$date"; ?>"  style="margin-bottom:10px;margin-right:0px">
              </div>
                <div align="center">
                  <button type="button"  onclick="update_profile()" name="submit" class="btn btn-success" style="margin-top:20px;">Update</button> 
                </div>
                       
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>    
  
                         </div>
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
		header("Location:index.php");
	}

?>