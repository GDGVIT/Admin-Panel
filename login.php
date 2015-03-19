<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require("sql_con.php");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);
// Selecting Database
// SQL query to fetch information of registerd users and finds user match.
    
$sql = "select * from `panel` where pass='$password' AND reg_no='$username'";
$query = mysqli_query($mysqli,$sql);
$rows = mysqli_num_rows($query);
while($arr = mysqli_fetch_array($query)) {
$_SESSION['name']=$username; // Initializing Session
$_SESSION['status']=$arr["status"];
$_SESSION['cid']=$arr["club_id"];
header("location: profile.php"); // Redirecting To Other Page
} if($rows!=1)
    {
$error = "Username or Password is invalid";
}
mysqli_close($mysqli); // Closing Connection
}
}
?>