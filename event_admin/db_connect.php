<?php
	$con=new mysqli("localhost","root","","club");
  if(mysqli_connect_errno())
  {
    printf("Connection failed %s",mysqli_connect_error());
    exit();
  }
?>