<?php
session_start();
  require("session_check.php");
	require("sql_con.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];

 
$id1=$regno;
 $mysql_tb = 'club_'.$club_id.'_members';
 $sql = "SELECT * FROM `" . $mysql_tb . "` where regno='$id1'";
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
      $department=$row['department'];
     if(empty($name))
{
  $name="Not Available";
}
	if(empty($department))
{
  $department="Not Available";
}
  if(empty($regno))
{
  $regno="Not Available";
}	
if(empty($email))
{
  $email="Not Available";
}
if(empty($address))
{
  $address="Not Available";
}
if(empty($phone))
{
  $phone="Not Available";
}
if(empty($gender))
{
  $gender="Not Available";
}
if(empty($photo))
{
  $photo="Not Available";
}
		}

		
		
		?>
            
                          <div class="panel-body">
                            <div class="row m-t-xl">
                              
                              <div class="col-xs-6 text-right">
                                <div class="inline">

                                 <a href="#" <div class="easypiechart" data-percent="75" data-line-width="6" data-bar-color="#fff" data-track-Color="#2796de" data-scale-Color="false" data-size="140" data-line-cap='butt' data-animate="1000">
                                    <div  class="thumb-lg avatar ">
<img  onclick="change_photo()" src="data:image/jpeg;base64,<?php echo base64_encode( $photo ); ?>" class="dker"  height="200px" width="150px"/>
                                      
                                 
                                    </div>
                                  </div></a>
                               
                                  <b><small class="text-muted m-b"><h3><?php echo"$name"; ?></h3></small></b>
                                </div>

                              </div>
                              
                            </div>
                            <div class="wrapper m-t-xl m-b">
                              <div class="row m-t-xl">
                                
                                <div class="col-xs-2">
                                  <small>Registration no. :</small>
                                  <div class="text-lt font-bold"><?php echo"$regno"; ?></div>
                                </div>
                                <div class="col-xs-2">
                                  <small>Phone No. :</small>
                                  <div class="text-lt font-bold"><?php echo"$phone"; ?></div>
                                </div>
                                <div class="col-xs-2">
                                  <small>Address :</small>
                                  <div class="text-lt font-bold"><?php echo"$address"; ?></div>
                                </div>
                                <div class="col-xs-2">
                                  <small>Sex :</small>
                                  <div class="text-lt font-bold"><?php echo"$gender"; ?></div>
                                </div>
                                 <div class="col-xs-2">
                                  <small>Department :</small>
                                  <div class="text-lt font-bold"><?php echo"$department"; ?></div>
                                </div>
                                <div class="col-xs-2">
                                  <small>Email-id :</small>
                                  <div class="text-lt font-bold"><?php echo"$email"; ?></div>
                                </div>
                                 <div class="col-xs-2">
                                  <small>Birthday :</small>
                                  <div class="text-lt font-bold"><?php echo"$date"; ?></div>
                                </div>

                              </div>
                              
                              </div>
                              <button  type="button" onclick="update_forms1()" class="btn btn-s-md btn-success">
			Modify
	 </button> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a onclick="change_password()"><button class="btn btn-s-md btn-success" >
      Change Password
    </button> </a>
        
                              
                         
     <!-------->                   </section> 
   
                        
                      </div>
                    </section>
                  </section>
<?php
mysqli_close($mysqli);		  
?>