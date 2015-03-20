<?php
include('sql_con.php');
session_start();
$club_id = $_SESSION["cid"];
$name=$_SESSION["name"];
$status=$_SESSION["status"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Admin portal for managing members and assigning tasks efficiently">
    <title>Admin Panel</title>

    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- CSS-->
    <link href="css/prism.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">

      <style type="text/css">
        body{background-image:url(img/alb.jpg);background-attachment:fixed;}
        .horizontal{background-color:white;}
        .profile-button{background-color:#e75457;color:white;}
        .profile-button:hover{background-color:white;color:black;}
        .tabs{width:50%;height:40px;float:left;background-color:#e75457}
        .tabs:hover{background-color:white;color:grey;}
        .menushadow{box-shadow:#847777 10px 10px 10px;}
        
        #over:hover{background-color:#e75457;}
          
        .bakra{color:#5E5B5B;position:fixed;right:20px;font-size:17px;}
        .jaadu{position:fixed;right:20px;width:150px;color:white;height:80px;background-color:#55555a;display:block;display:none;
            z-index:9999;line-height:40px;}
        .bakra:hover .jaadu{display:block;}
        .option{color:white;padding-left:40px;}
        .enhance{width:150px;}
    </style>      
      
  </head>
  <body ng-app>
    <header>
        <!--Top NavBar Begin-->
        <div class="navbar-fixed" style="outline-offset: 0px;">
        <nav class="top-nav horizontal" style="box-shadow:#847777 4px 0.5px 4px;">
            
             <?php
                   require("sql_con.php");
				   $id1=$_SESSION['name'];
				   $mysql_tb = 'club_'.$club_id.'_members';
                   $sql = "SELECT * FROM `" . $mysql_tb . "` where regno= '$id1'";
				   $res = mysqli_query($mysqli,$sql);
				   $name="";
				   $photo="";
				   while($arr=mysqli_fetch_array($res))//selecting the events
                  	{
				      $photo=$arr["photo"];
					  $name=$arr['name'];
					}
             ?>

            <span class="bakra">
                <a class='dropdown-button btn white blue-grey-text' href='#' data-activates='dropdown1'>
                <img src="data:image/jpeg;base64,<?php echo base64_encode( $photo ); ?>" style="width:20px;height:20px;" alt="..."/>&nbsp;
                <?php echo"$name"; ?>
                </a>
                
                 <ul id='dropdown1' class='dropdown-content'>
    <li><a class="modal-trigger" href="#self_profile">Profile</a></li>
    <li><a href="#!">Settings</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
            </span>
            </nav>   </div>     
        <!--Top NavBar End-->
        <!--Side NavBar Begin-->
        <!--Icon When NavBar is Hidden-->
      <div class="container ">
          <a href="#" data-activates="nav-mobile" class="button-collapse top-nav">
              <i class="mdi-navigation-menu"></i>
          </a>
      </div>
        <!--Icon When NavBar is Hidden-->
        <!--Menu-->
      <ul id="nav-mobile" class="side-nav fixed" style="width:240px;background-color:#12131a">
          <li style="background-color:white;height:60px;">
              <a>
                  <img src="img/logo.png" style="padding-top:10px;width:180px;height:50px;">
              </a>
          </li>
          <li style="height:20px;"></li>
          <li class="waves-effect waves-light" id="over" style="width:240px;">
              <a href="main.php" style="color:#C6C6C6;font-weight:bold;font-size:13px;">
                  Overview
              </a>
          </li>
          <li class="waves-effect waves-light" id="over" style="width:240px;">
              <a href="#!" style="color:#C6C6C6;font-weight:bold;font-size:13px;" onclick="members_list()">
                  Club Members
              </a>
          </li>
          <ul class="collapsible collapsible-accordion" style="width:240px;background-color:#12131a">
          <li id="over">
              <a href="#" style="color:#C6C6C6;font-weight:bold;font-size:13px;" class="collapsible-header">
                  Task
              </a>
             <div class="collapsible-body" style="background-color:#000000">
                <ul>
                  <li class="waves-effect waves-light" id="over" style="width:240px;">
                      <a href="#" style="color:#C6C6C6;font-weight:bold;font-size:13px;" onclick="view_task()">
                          View Tasks
                      </a>
                  </li>
                   <?php
					  if($_SESSION['status']==1)
					  echo"
                        <li class='waves-effect waves-light' id='over' style='width:240px;'>
                            <a href='' onclick='add_task()' style='color:#C6C6C6;font-weight:bold;font-size:13px;'>
                                Assign Task
                            </a>
                        </li>
                        <li class='waves-effect waves-light' id='over' style='width:240px;'>
                            <a href='' style='color:#C6C6C6;font-weight:bold;font-size:13px;'>
                                Modify Task Status
                            </a>
                        </li>";
                    ?>
                </ul>
              </div>
          </li>
          <li id="over">
              <a href="#" style="color:#C6C6C6;font-weight:bold;font-size:13px;" class="collapsible-header">
                  Attendance
              </a>                    
              <div class="collapsible-body" style="background-color:#000000">
                <ul>
                  <?php if($status==0)
					  {
				   ?>
                  <li class="waves-effect waves-light" id="over" style="width:240px;">
                      <a href="" style="color:#C6C6C6;font-weight:bold;font-size:13px;" onclick="view_member_attendance();">
                          View Attendance
                      </a>
                  </li>
                  <?php
					 }
					?>
					<?php if($status==1)
					  {
					 ?>
                  <li class="waves-effect waves-light" id="over" style="width:240px;">
                      <a href="" style="color:#C6C6C6;font-weight:bold;font-size:13px;" onclick="view_admin_attendance();">
                          View Attendance
                      </a>
                  </li>
                  <?php
					 }
					?>	  
				    <?php
					  if($_SESSION['status']==1)
					  {
				   ?>
                  <li class="waves-effect waves-light" id="over" style="width:240px;">
                      <a href="" onclick="modify_admin_attendance();" style="color:#C6C6C6;font-weight:bold;font-size:13px;">
                          Modify Attendance
                      </a>
                  </li>
                   <?php
					   }
                      ?>
                </ul>
              </div>
          </li>
          <li id="over">
              <a href="#!" style="color:#C6C6C6;font-weight:bold;font-size:13px;" class="collapsible-header">
                  Events
              </a>
                <div class="collapsible-body" style="background-color:#000000">
                <ul>
                  <?php
					  if($_SESSION['status']==1)
					  {
				   ?>
                  <li class="waves-effect waves-light" id="over" style="width:240px;">
                      <a href="#" style="color:#C6C6C6;font-weight:bold;font-size:13px;" onclick="view_event_member()">
                          View Events
                      </a>
                  </li>
                   <?php
					  }
                      ?>
					  <?php
					  if($_SESSION['status']==0)
					  {
				  ?>
                  <li class="waves-effect waves-light" id="over" style="width:240px;">
                      <a href="#" style="color:#C6C6C6;font-weight:bold;font-size:13px;" onclick="view_event_member()">
                          View Events
                      </a>
                  </li>
                  <?php
					  }
                      ?>	  
						  
					    <?php
					  if($_SESSION['status']==1)
					  {
				  ?>    
                  <li class="waves-effect waves-light" id="over" style="width:240px;">
                      <a href="" onclick="create_event_admin()" style="color:#C6C6C6;font-weight:bold;font-size:13px;">
                          Create Event
                      </a>
                  </li>
                  <?php
					  }
                  ?>    
                </ul>
              </div>
          </li>
          <li>
              <a href="#!" style="color:#C6C6C6;font-weight:bold;font-size:13px;" class="collapsible-header">
                  Meetings
              </a>
                <div class="collapsible-body" style="background-color:#000000">
                <ul>
                  <?php
                          if($_SESSION['status']==1)
					      {
                  ?>       
                  <li class="waves-effect waves-light" id="over" style="width:240px;">
                      <a href="#" style="color:#C6C6C6;font-weight:bold;font-size:13px;" onclick="view_meeting_member()">View                         Meetings
                      </a>
                  </li>
                  <?php
						  }
						?>
					    <?php
                          if($_SESSION['status']==0)
					      {
						  ?>  
                  <li class="waves-effect waves-light" id="over" style="width:240px;">
                      <a href="#" style="color:#C6C6C6;font-weight:bold;font-size:13px;" onclick="view_meeting_member()">View                         Meetings
                      </a>
                  </li>  
                  <?php
						  }
						?>	  
					    <?php
					  if($_SESSION['status']==1)
					  {
						?>    
                  <li class="waves-effect waves-light" id="over" style="width:240px;">
                      <a href="" style="color:#C6C6C6;font-weight:bold;font-size:13px;" onclick="create_meeting_admin()">
                          Add Meetings
                      </a>
                  </li>
                    <?php
					  }
					 ?>
                </ul>
              </div>    
          </li>
          <?php
            if($_SESSION['status']==1)
                echo"
                    <li class='waves-effect waves-light' id='over' style='width:240px;'>
                    <a href='#' style='color:#C6C6C6;font-weight:bold;font-size:13px;' onclick='add_members();' class='collapsible-header'>
                            Add Members
                    </a>             
                    </li>";
          ?>
          
 <?php
            if($_SESSION['status']==1)
                echo"
                    <li class='waves-effect waves-light' id='over' style='width:240px;'>
                    <a href='#' style='color:#C6C6C6;font-weight:bold;font-size:13px;' onclick='report();' class='collapsible-header'>
                            Reports
                    </a>             
                    </li>";
          ?>
          

<?php
            if($_SESSION['status']==1)
                echo"
                    <li class='waves-effect waves-light' id='over' style='width:240px;'>
                    <a href='#' style='color:#C6C6C6;font-weight:bold;font-size:13px;' onclick='all_threads();' class='collapsible-header'>
                            Discussion Forum
                    </a>             
                    </li>";
          ?>

        </ul>
      </ul>
        <!--Menu Ends-->
    </header>
    

      
<main>
    <div class="container" ng-init="tab=1">
    <!--  Outer row  -->
        <div class="row card" id="main_content">
            <!--Icon and Header-->
            <div class="col-md-1">
                <i class="fa fa-bookmark-o fa-5x pull-right"></i>
            </div>
	        <div class="col-md-11">
                <h3 class="paddl" style="color:grey">Spotlight</h3>
            </div>
            <!--Icon and header End-->
    <!--  Material Design -->
            <div id="materialdesign" class="section paddl">
                <button class="waves-effect waves-light btn tabs" ng-click="tab=1">Events</button>
                <button class="waves-effect waves-light btn tabs" ng-click="tab=2">Meetings</button>
    <br>
    <!--Events Table-->
                <table class="hoverable centered" ng-show="tab===1">
                    <thead>
                        <tr>
                            <th data-field="id" >Event</th>
                            <th data-field="id" >Scheduled Date</th>
                            <th data-field="name">Details</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php                              
                       $mysql_tbl='events';
                       $sql = "SELECT * FROM `" . $mysql_tbl . "` where club_id= '$club_id'";
                       
                       $result = mysqli_query($mysqli,$sql);
                    
                    ?>

                
                   <?php while($row = mysqli_fetch_array($result))
                       {
                    ?>  
                        <tr>
                            <td style="max-width:100px;overflow:auto"><?php echo $row['name'] ?></td>
                            <td><?php echo $row['date'] ?></td>
                            <td><?php echo $row['details'] ?></td>
                            <?php
                                }
                            ?>
                        </tr>
                    </tbody>
                </table>
    <!--Events Table End-->
    <!--Meetings Table Begin-->
                <table class="hoverable centered" ng-show="tab===2">
                    <thead>
                        <tr>
                            <th data-field="id">Meeting</th>
                            <th data-field="id">Scheduled Date & Time</th>
                            <th data-field="name">Venue</th>
                        </tr>
                    </thead>

                    <tbody>
                         <?php                  
                        $mysql_tbl='meetings';
                        $sql = "SELECT * FROM `" . $mysql_tbl . "` where club_id= '$club_id'";
                        $result = mysqli_query($mysqli,$sql);
                        ?>

                        <?php while($row = mysqli_fetch_array($result))
                        {
                        ?>  
                        <tr>
                            <td style="max-width:100px;overflow:auto"><?php echo $row['details'] ?></td>
                            <td><?php echo $row['date']; echo $row['time']; ?></td>
                            <td><?php echo $row['details'] ?></td>
                        <?php
                            }
                        ?>
                        </tr>
                    </tbody>
                </table>
    <!--Meetings Table End-->
            </div>

        </div>
    </div>
</main> 

<!--Self Profile begins-->

<div id="self_profile" class="modal">
    <div class="modal-content">
    	<?php
		session_start();
		if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
			{
			require("sql_con.php");
			$regno=$_SESSION['name'];
			$status=$_SESSION['status'];
			$club_id=$_SESSION['cid'];

			$id1=$regno;
 			$mysql_tb = 'club_'.$club_id.'_members';
 			$sql = "SELECT * FROM `" . $mysql_tb . "` where regno='$id1'";
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

		<img src="data:image/jpeg;base64,<?php echo base64_encode( $photo ); ?>" class="dker" style="width:230px;height:220px;float:right;border-radius:50%;" />
        <span class="card-title">
             <h3>
              	<?php echo"$name"; ?>
             </h3>
        </span>
        <span class="card-title grey-text text-darken-4"><h5>Registraion Number</h5></span><p><?php echo"$regno"; ?></p>
        <span class="card-title grey-text text-darken-4"><h5>Email-ID</h5></span><p><?php echo"$email"; ?></p>
        <span class="card-title grey-text text-darken-4"><h5>Gender</h5></span><p><?php echo"$gender"; ?></p>
        <span class="card-title grey-text text-darken-4"><h5>Birthday</h5></span><p><?php echo"$date"; ?></p>
        <span class="card-title grey-text text-darken-4"><h5>Address</h5></span><p><?php echo"$address"; ?></p>
        <span class="card-title grey-text text-darken-4"><h5>Phone Number</h5></span><p><?php echo"$phone"; ?></p>
    </div>
    <div class="card-action" align="center">
        <a data-toggle="modal" onclick="update_forms1()" data-target="#modify" class="waves-effect btn-flat modal-action modal-close profile-button">Modify</a>&nbsp&nbsp
        <a onclick="change_password()" class="waves-effect btn-flat modal-action modal-close profile-button">Change Password</a>
    </div>
          				
    <?php
mysqli_close($mysqli);
	}
	else
	{
		session_unset();
		session_destroy();
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		header("Location:signin.php");
	}			  
?>

    <div class="modal-footer">
      <a href="#" class="waves-effect btn-flat modal-action modal-close profile-button">Close</a>
    </div>
  </div> 

  <!--Profile Ends-->

  <!--Ajax View Files-->
  <!--The following block contains the code of those ajax files which were being used for viewing things..Like view events view attendance,view meetings....Had to do it inorder to improve the ux-->
  <!--P.S: Sorry for all the troubles caused but as of now we do not have an option-->
  <!--Club Members-->
<main ng-show="option===1">
    <div class="container" ng-init="tab=1">
    <!--  Outer row  -->
        <div class="row card" id="main_content1">
            <!--Icon and Header-->
            
        </div>
    </div>
</main>
   <!--Club members end-->
   <!--Ajax view files end-->

    
    <!--  Scripts-->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/jquery.timeago.min.js"></script> 
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script src="js/prism.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/event_member.js"></script>
    <script src="js/ajax_call.js"></script>
  </body>
</html>