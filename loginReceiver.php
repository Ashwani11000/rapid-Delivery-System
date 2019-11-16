<?php
session_start(); 
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];

$connection = mysqli_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
/*$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);*/
// Selecting Database
//$db = mysql_select_db("rapiddeliverynew", $connection);
// SQL query to fetch information of registerd users and finds user match.
$qu = "select * from receiver where password='$password' AND receiver='$username'";//Query needs editing
$rows = $connection->query($qu);
//if (mysqli_num_rows($rows) > 0) {
$_SESSION['login_user']=$username; // Initializing Session

extract($data);

header("location: receiverhome.php"); // Redirecting To Other Page
//} else {
//$error = "Username or Password is invalid";
//}
mysqli_close($connection); // Closing Connection
}
}
?>

