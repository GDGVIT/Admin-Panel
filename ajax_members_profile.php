<?php
	session_start();
  require("session_check.php");
	require("sql_con.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];

?>

                        <?php
            
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
     if(empty($name))
{
  $name="N/A";
}
if(empty($regno))
{
  $status="N/A";
}
if($date=="0000-00-00")
{
  $date="N/A";
}
if(empty($email))
{
  $email="N/A";
}
if(empty($address))
{
  $address="N/A";
}
 if(empty($phone))
{
  $phone="N/A";
}   
if(empty($gender))
{
  $gender="N/A";
}

    }
    
    
    ?>
            
                          <div class="panel-card paddl">
                            <div class="row m-t-xl">
                              
                              <div class="col-xs-6">
                                <div class="inline">
                                  <div class="easypiechart" data-percent="75" data-line-width="6" data-bar-color="#fff" data-track-Color="#2796de" data-scale-Color="false" data-size="140" data-line-cap='butt' data-animate="1000">
                                    <div class="thumb-lg avatar">
<img src="data:image/jpeg;base64,<?php echo base64_encode( $photo ); ?>"  alt=" Not Available" class="dker"  />

                                      
                                 
                                    </div>
                                  </div>
                                  <div class="h4 m-t m-b-xs font-bold text-lt"> </div>
                                  <b><small class="text-muted m-b"><h3><?php echo"$name"; ?></h3></small></b>
                                </div>
                              </div>
                              
                            </div>
                            <div class="wrapper m-t-xl m-b">
                              <div class="row m-t-xl">
                                
                                <div class="col-xs-2">
                                    <b>Registration Number : </b><?php echo"$regno"; ?>
                                </div>
                                <div class="col-xs-2">
                                    <b>Phone Number :</b> <?php echo"$phone"; ?>
                                </div>
                                <div class="col-xs-2">
                                  <b>Address :</b> <?php echo"$address"; ?>
                                </div>
                                <div class="col-xs-2">
                                  <b>Gender :</b> <?php echo"$gender"; ?>
                                </div>
                                <div class="col-xs-2">
                                  <b>Email-ID :</b> <?php echo"$email"; ?>
                                </div>
                                 <div class="col-xs-2">
                                  <b>Birthday :</b> <?php echo"$date"; ?>
                                </div>
                              </div>
                              
                              </div>
                               <input class="form-control" type="hidden" name="id" id="id" value="<?php echo"$id1"; ?>"  style="margin-bottom:10px;margin-right:0px">
                               <?php
            if($_SESSION['status']==1)
            {$id1 = $_GET['id'];
         
              echo' 
                               <div class="col-lg-2" style="display: inline;"><input type="button" onclick="update_forms()"  value="modify" class="btn btn-s-md btn-success"></input> 
    </div>'; 

    echo' <div class="col-lg-2" style="display: inline;"><button class="btn btn-s-md btn-danger" onclick="inactive()">
      Delete
    </button>  
    </div>'; 
    }  
    ?>
       
  
                         </div>
                          </div>
                          
<?php
mysqli_close($mysqli);
?>                         
                          
                   