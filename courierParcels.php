
<a 
   href="courierHome.php">Go back</a>

					<?php
                    include('courierSession.php');
                    //echo "<h3> $login_session </h3>";
                    ?>

                <?php
require 'connect.php';
$Pid = $_POST['Parcelid'];
$sql1 = "SELECT id,vehicle_ID from courier where username='$login_session'";
if (mysqli_query($con, $sql1)) {
    
$results = mysqli_query($con, $sql1) or die(mysql_error());
$x=1;
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
if ($x <= 1)
{

extract($row);

    $custid=$row["id"];
    $vehid=$row["vehicle_ID"];
    
}
}
}
$sql = "SELECT * from parcel where id='$Pid'";
if (mysqli_query($con, $sql)) {
    
$results = mysqli_query($con, $sql) or die(mysql_error());
$x=1;
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
if ($x <= 1)
{

extract($row);
$pid=$row["id"];
$cid=$row["customer_id"];
$insert="INSERT INTO parcel_status (courier_id,customer_id, status, Vehicle_ID, parcel_ID) 
VALUES ('$custid','$cid','Pickedup','$vehid','$pid')";
	if(mysqli_query($con, $insert))
    {
        
    echo "Courier has been successfully assigned to".$login_session;
}
	}
}}
?>

