<style type="text/css">
    .hidemeeting{display:none;}
    .showmeeting{position:relative;top:0px;}
    .hideevent{display:none;}
    .showevent{position:relative;top:0px;}
    .hidetech{display:none;}
    .hidemanage{display:none;}
    .hidedes{display:none;}
    .showtech{position:relative;top:0px;}
    .showmanage{position:relative;top:0px;}
    .showdes{position:relative;top:0px;}
</style>
<?php
	session_start();
  require("session_check.php");
	require("sql_con.php");
  $regno=$_SESSION['name'];
  $status=$_SESSION['status'];
  $club_id=$_SESSION['cid'];
  $regno1=$_GET["id"];                       
  /*   echo "<div class='col-lg-6'>";
     echo '<table class="table table-bordered table responsive admin-attendance-table " style="margin-top:10px">
                  <thead>
                    <tr>
                    <th class="attendance-club text-center">event</th>
                            <th class="attendance-date text-center">Attendance</th>
                    </tr>
                  </thead>
                  <tbody>';*/
            echo '<div class="row" style="margin-top:10px;">
      <div class="col-md-1">
        <i class="fa fa-calendar fa-5x"></i>
      </div>
      <div class="col-md-11">
        <h3 class="paddh"></h3>
      </div>                  
     </div>

     <div id="materialdesign" class="section paddl">
                    <button class="waves-effect waves-light btn tab" onclick="show1();">Events</button>
                    <button class="waves-effect waves-light btn tab" onclick="show2();">Meetings</button>
                    <button class="waves-effect waves-light btn tab" onclick="show3();">Tasks</button></div>

    <div id="technical" class="showtech">   
     <h4 class="paddh">Event details</h4>    
    <table class="hoverable" style="padding-left:50px;padding-right:50px">   
      <thead>
        <tr>
            <th><strong>Event</strong></th>
            
                  <th><strong>Absent/Present</strong></th>
                </tr>
            </thead>';

            $res1 = mysqli_query($mysqli, "select * from events where club_id=$club_id") or die("q1 error");
            $tab = $club_id."_event_attendance";
            $inres1 = mysqli_query($mysqli, "select * from $tab where regno='$regno1'") or die("in q1 error");
            $inrow1=mysqli_fetch_array($inres1);
            while($row1=mysqli_fetch_array($res1)) {
              $event_name = $row1['name'];
              $event_id = $row1['id'];
              $col = "event_".$event_id;
              echo '<tbody><tr>';
            echo' <td>';echo"$event_name";echo'</td>';
      echo '<td>';          
              if($inrow1["$col"] == 0)
                echo "    Absent</td></tr>";
              else
                echo "    Present</td></tr>";
            }
            echo "</tbody></table></div>";


            echo "<div class='hidemanage' id='management'><h4 class='paddh'>Meeting Details</h4><br>";
           echo' <table class="hoverable">   
      <thead>
        <tr>
            <th><strong>Meeting</strong></th>
            
                  <th><strong>Absent/Present</strong></th>
                </tr>
            </thead>';
            $res2 = mysqli_query($mysqli, "select * from meetings where club_id=$club_id") or die("q2 error");
            $tab = $club_id."_meeting_attendance";
            $inres2 = mysqli_query($mysqli, "select * from $tab where regno='$regno1'") or die("in q2 error");
            $inrow2=mysqli_fetch_array($inres2);
            while($row2=mysqli_fetch_array($res2)) {
              $meeting_name = $row2['details'];
              $meeting_id = $row2['id'];
              $col = "meeting_".$meeting_id;
                echo '<tbody><tr>';
            echo' <td>';echo"$meeting_name";echo'</td>';
      echo '<td>'; 
              if($inrow2["$col"] == 0)
                echo "    Absent</td></tr>";
              else
                echo "    Present</td></tr>";
            }
             echo "</tbody></table></div>";

            echo "<div class='hidedes' id='design'><h4 class='paddh'>Task Status</h4><br>";
            echo' <table class="hoverable">   
      <thead>
        <tr>
            <th><strong>Task</strong></th>
            
                  <th><strong>Absent/Present</strong></th>
                </tr>
            </thead>';
            $res3 = mysqli_query($mysqli, "select * from task where club_id=$club_id and regno='$regno1'");
            while($row3=mysqli_fetch_array($res3)) {
              $tname= $row3['task'];
               echo '<tbody><tr>';
            echo' <td>';echo"$tname";echo'</td>';
      echo '<td>'; 
             
              if($row3['status'] == 1)
                echo "   Done</td></tr>";
              else
                echo "   Pending</td></tr>";
            }
              echo "</tbody></table></div></div>";          
                                                
  /*                      $mysql_tbl=$club_id.'_event_attendance';
                        $sql = "SELECT * FROM `" . $mysql_tbl . "` where regno= '$regno1'";
                      
                        $result = mysqli_query($mysqli,$sql);

                                             
                                         

                    echo '<tbody>';
                        
                                              
                                               
                        while($row1 = mysqli_fetch_array($result))
                        {
							$sql2="select `id` from `events`";
                            $res2 = mysqli_query($mysqli, $sql2);
                            while($row2 = mysqli_fetch_array($res2)) 
                            {
                              echo '<tr>';
                              $ename = "meeting_".$row2['id'];
                              
                                                        echo '<td>'; echo $ename; echo '</td>';
                              if($row1[$ename] == 0)
                                  echo '<td> Absent</td>';
                              else
                                  echo '<td> Present</td';
                              echo '</tr>';
                            }   
                                      
                         
                       }

                               
                     echo '</tbody>
                  </table>

   </section>
                </div>
                 <div class="col-lg-6">
                  <section class="panel panel-default">
                    <header class="panel-heading">
                      <h4 style=" text-align:center";>Task assigned and its Status</h4>
                    </header>
                    <div class="panel-body text-center">
                      <style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align:center;
}
table#t01 tr:nth-child(even) {
    background-color: #fff;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th  {
    background-color: #eee;
    color: orange;
    text-align: center;
}
</style>
</head>

<body>
  <table id="t01" >
    <tr>
    <th>Task</th>
    <th>Date</th>    
    <th>Status</th>
  </tr>';
  
 
  /*  $id1=$_GET["id"];
    $sql = "SELECT * FROM task where `regno` ='$reg'";
    $res = mysqli_query($mysqli,$sql);

    while($arr=mysqli_fetch_array($res))//selecting the club members
    {
      
      $t_name = $arr["task"];
      $t_date = $arr["assignment_date"];
      $t_status = $arr["status"];

echo "

  
  
    <tr> 
    <td>$t_name</td>
    <td>$t_date</td>  ";   
    if($t_status=='1')
      {
      echo "<td><img src='images/tick.png' height='50' width ='50' ></td>  ";
      } 
     else
      {
      echo "<td><img src='images/cross.jpg' height='50' width ='50' ></td>  ";
      } 
    echo" 

  </tr>";
}

?>
</table> 
<?php
}
	else
	{
		session_unset();
		session_destroy();
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		header("Location:signin.php");
	}
  */
?>