 <?php
session_start();
	if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
	{
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