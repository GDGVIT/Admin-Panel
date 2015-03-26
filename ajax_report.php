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
            echo "EVENT DETAILS<br>";
            $res1 = mysqli_query($mysqli, "select * from events where club_id=$club_id") or die("q1 error");
            $tab = $club_id."_event_attendance";
            $inres1 = mysqli_query($mysqli, "select * from $tab where regno='$regno1'") or die("in q1 error");
            $inrow1=mysqli_fetch_array($inres1);
            while($row1=mysqli_fetch_array($res1)) {
              $event_name = $row1['name'];
              $event_id = $row1['id'];
              $col = "event_".$event_id;
              echo $event_name;
              if($inrow1["$col"] == 0)
                echo "    Absent<br>";
              else
                echo "    Present<br>";
            }
            echo "<br><br><br>";

            echo "MEETING DETAILS<br>";
            $res2 = mysqli_query($mysqli, "select * from meetings where club_id=$club_id") or die("q2 error");
            $tab = $club_id."_meeting_attendance";
            $inres2 = mysqli_query($mysqli, "select * from $tab where regno='$regno1'") or die("in q2 error");
            $inrow2=mysqli_fetch_array($inres2);
            while($row2=mysqli_fetch_array($res2)) {
              $meeting_name = $row2['details'];
              $meeting_id = $row2['id'];
              $col = "meeting_".$meeting_id;
              echo $meeting_name;
              if($inrow2["$col"] == 0)
                echo "    Absent<br>";
              else
                echo "    Present<br>";
            }
            echo "<br><br><br>";

            echo "TASK STATUS<br>";
            $res3 = mysqli_query($mysqli, "select * from task where club_id=$club_id and regno='$regno1'");
            while($row3=mysqli_fetch_array($res3)) {
              echo $row3['task'];
              if($row3['status'] == 1)
                echo "   Done<br>";
              else
                echo "   Pending";
            }
                        
                                                
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