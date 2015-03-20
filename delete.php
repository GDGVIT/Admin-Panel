 <?php
session_start();
  require("session_check.php");
	require("sql_con.php");

$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];



$id=$_GET['id'];

 
require("sql_con.php");
     $mysql_tb = 'club_'.$club_id.'_members';
  
    $sql = "SELECT * FROM `" . $mysql_tb . "` WHERE id= '$id'";
    $res = mysqli_query($mysqli,$sql);

    while($arr=mysqli_fetch_array($res))//selecting the events
    {

   
   $up=$mysqli->query("UPDATE `" . $mysql_tb . "` SET 
                               
								`status` = ''
								
                             WHERE `id` = '$id'") ;
    
    
 
}
if($up)
{
	echo"Member deleted successfully !";

}
	
mysqli_close($mysqli);
?>
   