<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connection ,"rapiddeliverynew");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection ,"select receiver from receiver where receiver='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['receiver'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: receiverHome.php'); // Redirecting To Home Page
}
?>