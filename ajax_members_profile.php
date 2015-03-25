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
    <div class="paddl">
     <div style="width:250px;float:right;">
    <img src="data:image/jpeg;base64,<?php echo base64_encode( $photo ); ?>" class="dker" style="width:230px;height:220px;border-radius:50%;" />
    </div>
    <div style="width:500px;float:left;">
        <span class="card-title">
             <h4 class="blue-grey-text">
                <?php echo"$name"; ?>
             </h4>
        </span>
        <hr>
        <br>
        <h5 class="grey-text text-darken-4" style="font-size:20px; display:inline;">Registration Number</h5><span style="float:right;font-size:20px"><?php echo"$regno"; ?></span><br><br>
        <h5 class="grey-text text-darken-4" style="font-size:20px; display:inline;">Email-ID</h5><span style="float:right;font-size:20px"><?php echo"$email"; ?></span><br><br>
        <h5 class="grey-text text-darken-4" style="font-size:20px; display:inline;">Birthday</h5><span style="float:right;font-size:20px"><?php echo"$date"; ?></span><br><br>
        <h5 class="grey-text text-darken-4" style="font-size:20px; display:inline;">Address</h5><span style="float:right;font-size:20px"><?php echo"$address"; ?></span><br><br>
        <h5 class="grey-text text-darken-4" style="font-size:20px; display:inline;">Phone Number</h5><span style="float:right;font-size:20px"><?php echo"$phone"; ?></span><br><br><br>
        <?php
if($_SESSION['status']==1)
{$id1 = $_GET['id'];
echo '<div class="col-lg-2" style="display: inline;">
      <a onclick="update_forms()" data-target="#modify" class="waves-effect waves-light btn white-text" style="margin-right:5px;">Modify</a>
      </div>'; 

echo '<div class="col-lg-2" style="display: inline;"> 
       <a onclick="inactive()" class="waves-effect waves-light btn white-text">Delete</a> 
       </div>'; 
    }  
    ?>
    </div>
    </div>
              
     <input class="form-control" type="hidden" name="id" id="id" value="<?php echo"$id1"; ?>"  style="margin-bottom:10px;margin-right:0px">

       
  
                         
                          
<?php
mysqli_close($mysqli);
?>                         
                          
                   