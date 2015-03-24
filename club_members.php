<?php
session_start();
require("session_check.php");
require("sql_con.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];
$mysql_tb = 'club_'.$club_id.'_members';
$sql1 = "SELECT * FROM `" . $mysql_tb . "` where status= 'active' and department='technical'";
$sql2 = "SELECT * FROM `" . $mysql_tb . "` where status= 'active' and department='management'";
$sql3 = "SELECT * FROM `" . $mysql_tb . "` where status= 'active' and department='design'";
$res1 = mysqli_query($mysqli,$sql1) or die("sql1 error");
$res2 = mysqli_query($mysqli,$sql2) or die("sql2 error");
$res3 = mysqli_query($mysqli,$sql3) or die("sql3 error");
  while($row1 = mysqli_fetch_array($res1)) {
       	$name1=$row1['name'];
        $id1=$row1['id'];
        $photo1=$row1['photo'];
        }
  while($row2 = mysqli_fetch_array($res2)) {
        $name2=$row2['name'];
        $id2=$row2['id'];
        $photo2=$row2['photo'];
        }        
  while($row3 = mysqli_fetch_array($res3)) {
        $name3=$row3['name'];
        $id3=$row3['id'];
        $photo3=$row3['photo'];
        }

mysqli_close($mysqli);				
?>

<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Test 1</a></li>
        <li class="tab col s3"><a class="active" href="#test2">Test 2</a></li>
        <li class="tab col s3"><a href="#test3">Test 3</a></li>
        <li class="tab col s3"><a href="#test4">Test 4</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">Test 1</div>
    <div id="test2" class="col s12">Test 2</div>
    <div id="test3" class="col s12">Test 3</div>
    <div id="test4" class="col s12">Test 4</div>
  </div>


<!--
echo '
    <div class="row" style="margin-top:10px;">
       <div class="col-md-11" style="padding-left:10px;">
            <h3 class="paddh">Club Members</h3>
        </div>                              
    </div>';
                   
                  
                        
                       echo '<div id="materialdesign" class="section paddl">
                                <button class="waves-effect waves-light btn tab" onclick="show1();">Technical</button>
                                <button class="waves-effect waves-light btn tab" onclick="show2();">Management</button>
                                <button class="waves-effect waves-light btn tab" onclick="show3();">Design</button></div>

echo "<a href='#' onclick='view_members_profile(".$id.")' class='attendance-club text-center' style='float:left;width:250px;margin:5px;'>
            <div  class='card' >
                    <div class='card-content'>
                       <span id='".$id."'>".$name."</span>
                    </div>
                    </div></a>";

 echo "<a href='#' onclick='view_members_profile(".$id.")' class='attendance-club text-center' style='float:left;width:250px;margin:5px;'> 
           <div class='card' >
                    <div class='card-content'>
                    <span id='".$id."'>".$name."</span>
                    </div>
                    </div></a>";

echo "<a href='#' onclick='view_members_profile(".$id.")' class='attendance-club text-center' style='float:left;width:250px;margin:5px;'>
            <div class='card' >
                    <div class='card-content'>
                    <span id='".$id."'>".$name."</span>
                    </div>
                    </div></a>";
-->