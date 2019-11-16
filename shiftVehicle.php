<?php
require 'connect.php';
$Vehicle_ID = $_POST['vehicleID'];
$pid=$_POST['parcelID'];
include('courierSession.php');

$sql1 = "SELECT id FROM
courier where vehicle_ID='$Vehicle_ID'";

if (mysqli_query($con, $sql1)) {
    
$results = mysqli_query($con, $sql1) or die(mysql_error());
$x=1;

while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
while($x<=1){
    $x=2;
extract($row);
$id=$row['id'];
}}
}

$sql3 = "UPDATE parcel_status SET Vehicle_ID = '$Vehicle_ID' 
where parcel_ID = '$pid'";
$sql4 = "UPDATE parcel_status SET courier_id='$id' 
where parcel_ID = '$pid'";
mysqli_query($con, $sql3);
if (mysqli_query($con, $sql4)) {
   echo "Package Transfered";
   }
   
?>