<?php
  session_start();
  require("session_check.php");
	require("sql_con.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];

 
$id1=$regno;
 $mysql_tb = 'club_'.$club_id.'_members';
 $sql = "SELECT * FROM `" . $mysql_tb . "` where regno='$regno'";
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
            
           
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title" id="modifyLabel">Profile Pic</h4>
        </div>
        <div class="modal-body"  id="email1">
            <div class="easypiechart" data-percent="75" data-line-width="6" data-bar-color="#fff" data-track-Color="#2796de" data-scale-Color="false" data-size="140" data-line-cap='butt' data-animate="1000">
                                    <div  >
<img  src="<?php echo" $photo "; ?>" style="width:230px;height:220px;"  alt="not available"class="dker"  />
                                      
                                 
                                    </div>
                                  </div>
          <form   id="myform" action="pic_update.php" onsubmit="return photo_exec();" method="post" enctype="multipart/form-data">
            <div class="form-group">
            
            
               <div class="col-lg-12"  style="margin-top:10px">
              <label>Choose new pic</label><br>
              
              <input name="MAX_FILE_SIZE" value="102400000" type="hidden">
               <input name="file" id="file" accept="image" type="file" class="btn btn-default">
            </div><div id="errorBox"></div>
              
                       <br>
                       <br>
            
                  <button type="submit" name="submit" onclick="photo_exec()" class="btn btn-success" style="margin-top:40px ">Update</button> 
           
                       
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>    
  
                         </div>
                          </div>
                         
                             
     <!-------->                   </section> 
   
                        
                      </div>
                    </section>
                  </section>
<?php
mysqli_close($mysqli);		  
?>
