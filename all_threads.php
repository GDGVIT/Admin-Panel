<style type="text/css">
	.discussbtn{
         background-color:#FFFFFF;
          color:black;

        }
        .discussbtn:hover{
         background-color:teal;
          color:white;

        }
</style>
<?php
session_start();
  require("session_check.php");
	require("sql_con.php");
$user_id = $_SESSION['name'];
$club_id = $_SESSION['cid'];
echo "<div id='thread'>";
//Displaying existing threads
$sql_1 = "SELECT * from `thread_list` where `club_id` = $club_id";
$res_1 = mysqli_query($mysqli,$sql_1);
echo "<input type='button' class='waves-effect waves-light btn tabs' value='View Threads' id='create_thread' name='create_thread'>";
echo "<input type='button' class='waves-effect waves-light btn tabs' value='Create Thread' id='create_thread' name='create_thread' onClick='new_thread()'>";

while($arr_1 = mysqli_fetch_array($res_1))
{
	$id = $arr_1["id"];
	$name = $arr_1["name"];
	echo "<input type='button' class='waves-effect waves-light btn discussbtn' id=$id name=$id value='$name' onclick='thread_details(this.id)'><br>";

           
}
//Creating a new thread
echo "</div><div id='send'></div>";
mysqli_close($mysqli);
?>

