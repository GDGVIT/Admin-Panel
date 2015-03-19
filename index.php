<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['name'])){
header("location: main.php");
}
?>
<!--hrll-->
<html>
<head>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login | Admin Panel</title>
    <style type="text/css">
    body{background-image:url(img/alb.jpg);}
    </style>
</head>
<body>
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/materialize.min.js"></script>


        <div class="form-signin">
            <div class="row signin">
                <div class="col s12 m6">
                    <div class="card lighten-5" style="background-color:#f4f4f4;padding-top:20px; opacity:1;">
                        <div class="row">       
                            <form class="col s12" method="post" action="" autocomplete="off">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label>UserName</label>
                                        <input id="name" name="username" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label>Password</label>
                                        <input id="password" name="password" type="password">
                                    </div>
                                </div>
                                <div class="card-action ">
                                <button name="submit" type="submit" class="btn waves-effect waves-light" style="background-color:#e75457">
                                        Login
                                    <i class="mdi-content-send right"></i>
                                </button>
          <br>                  
                                </div>
                                <div class="#f44336 red" style="border-radius:5px;">
                                <span class="white-text text-darken-2"><?php echo $error; ?></span></div>
                            </form>
                        </div> 
                    </div>
              </div>
            </div>
        </div>

</body>
</html>
