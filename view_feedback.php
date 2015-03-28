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
  
      echo'<fieldset ><legend>';echo"$name";echo'</legend>';
     echo"$feedback"; echo' </fieldset><br><br>';
           }     
            ?>
 
   </div>
</div>      
</div>
<?php
mysqli_close($mysqli);
?>