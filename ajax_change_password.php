<?php
  session_start();
  require("session_check.php");
	require("sql_con.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];
?>
 <section id='content' class='m-t-lg wrapper-md animated fadeInUp'>    
        <div class='container aside-xl' style="padding-top:150px;padding-top:100px">
          <a class='navbar-brand block'>Change Password</a>
          <section class='m-b-lg'>
            <header class='wrapper text-center'>
              <strong> </strong>
            </header>
            <form  >
              <div class='list-group'>
                <div class='list-group-item'>
                  <input type='password' placeholder='Old password' class='form-control no-border' id='old'>
                </div>
 <div class='list-group-item'>
                  <input type='password' placeholder='New password' class='form-control no-border' id='new1'>
                </div>
                <div class='list-group-item'>
                   <input type='password' placeholder='Confirm Password' class='form-control no-border' id='new2'>
                </div>

              </div>
              <input type='button' onclick="update_password()" class='btn btn-lg btn-primary btn-block' name='submit'   value="Change Password">
             
            
            </form>
          </section>
        </div>
      </section>

<?php
	mysqli_close($mysqli);
?>