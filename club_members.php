<style type="text/css">
    .hidemeeting{display:block;display:none;width:500px;}
    .showmeeting{display:block;width:1000px;}
    .hideevent{display:block;display:none;}
    .showevent{display:block;width:1000px;}
    .hidetech{display: block;display:none;}
    .hidemanage{display: block;display:none;}
    .hidedes{display: block;display:none;}
    .showtech{display:block;}
    .showmanage{display:block;}
    .showdes{display:block;}
</style>
<?php
session_start();
  require("session_check.php");
  require("sql_con.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];
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
                          <div class="paddl" style="text-align:center;">';
            
              
    $mysql_tb = 'club_'.$club_id.'_members';
        $sql1 = "SELECT * FROM `" . $mysql_tb . "` where status= 'active' and department='technical'";
        $sql2 = "SELECT * FROM `" . $mysql_tb . "` where status= 'active' and department='management'";
        $sql3 = "SELECT * FROM `" . $mysql_tb . "` where status= 'active' and department='design'";
        $res1 = mysqli_query($mysqli,$sql1) or die("sql1 error");
        $res2 = mysqli_query($mysqli,$sql2) or die("sql2 error");
        $res3 = mysqli_query($mysqli,$sql3) or die("sql3 error");
        echo "<div id='technical' class='showtech'>";
        while($row1 = mysqli_fetch_array($res1)) {
          $name=$row1['name'];
            $id=$row1['id'];
            $photo = $row1['photo'];
            echo "<a href='#' onclick='view_members_profile(".$id.")' style='float:left;width:250px;margin-right:50px;''>
            <div  class='card #eceff1 blue-grey lighten-5'>
                <div class='card-content blue-grey-text'>
                       <span id='".$id."'>".$name."</span>
                    </div>
                    </div></a>";
        }
        echo "</div>";
        echo "<div class='hidemanage' id='management'>";
        while($row2 = mysqli_fetch_array($res2)) {
          $name=$row2['name'];
            $id=$row2['id'];
            $photo = $row2['photo'];
            echo "<a href='#' onclick='view_members_profile(".$id.")' style='float:left;width:250px;margin-right:50px;''>
            <div  class='card #eceff1 blue-grey lighten-5'>
                <div class='card-content blue-grey-text'>
                       <span id='".$id."'>".$name."</span>
                    </div>
                    </div></a>";
        }
        echo "</div>";
        echo "<div class='hidedes' id='design'>";
        while($row3 = mysqli_fetch_array($res3)) {
          $name=$row3['name'];
            $id=$row3['id'];
            $photo = $row3['photo'];
            echo "<a href='#' onclick='view_members_profile(".$id.")' style='float:left;width:250px;margin-right:50px;''>
            <div  class='card #eceff1 blue-grey lighten-5'>
                <div class='card-content blue-grey-text'>
                       <span id='".$id."'>".$name."</span>
                    </div>
                    </div></a>";
        }
        echo "</div></div>";
            
 
mysqli_close($mysqli);        
?>