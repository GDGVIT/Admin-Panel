<?php
  session_start();
  require("session_check.php");
	require("sql_con.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];
?>

 <?php   

require("sql_con.php");
    
    $sql = "SELECT * FROM feedback  ";
    $res = mysqli_query($mysqli,$sql);

    while($rows=mysqli_fetch_array($res))//selecting the events
    {
 

$regno=$rows['regno'];
$feedback =$rows['feedback'];
 $mysql_tb = 'club_'.$club_id.'_members';
 
$sql1 = "SELECT * FROM  `" . $mysql_tb . "` where regno='$regno' ";
    $res1 = mysqli_query($mysqli,$sql1);

    while($rows1=mysqli_fetch_array($res1))
    {
			$name=$rows1["name"];
     

	}
  
      echo'<h5 class="grey-text text-darken-4" style="font-size:20px; display:inline;">';echo"$name";echo'</h5>&nbsp:&nbsp<span style="font-size:20px;font-style:italic">';
     echo"$feedback"; echo' </span><br><br>';
           }     
            ?>
 
   </div> 
</div>      
</div>
<?php
mysqli_close($mysqli);
?>