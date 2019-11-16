<?php

require 'connect.php';
$name = $_POST['customer_Name'];
$pickup_address = $_POST['pickup_address'];
$delivery_address = $_POST['delivery_address'];
$package_type = $_POST['package_type'];
$contact_no = $_POST['contact_no'];
$state_address = $_POST['state_address'];
$note = $_POST['note'];
$rName = $_POST['receiverName'];
$rPss = $_POST['receiverPassword'];

$sql = "SELECT `id` FROM `customer` WHERE `username` = '$name'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		$realID = $row["id"];
    }
    $insert = "INSERT INTO parcel (customer_id, pickup_address, delivery_address, package_type, contact_no, state_address, note) 
VALUES ('$realID', '$pickup_address', '$delivery_address', '$package_type', '$contact_no', '$state_address', '$note')";
    $get="SELECT id FROM parcel where customer_id='$realID' and 
    pickup_address='$pickup_address' and contact_no='$contact_no'";

	mysqli_query($con, $insert);
    
if (mysqli_query($con, $get)) {
    
$results = mysqli_query($con, $get) or die(mysql_error());
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {

extract($row);
    $parid=$row["id"];

}
}
    
    
    $sql1 = "INSERT INTO receiver (receiver, password,sender,parcel_ID) VALUES ('$rName', '$rPss','$name','$parid')";
    mysqli_query($con, $sql1);
    echo "New record created successfully";

} 
	else {
   echo "Error: " . $sql . "<br>" . mysqli_error($con);
} 

?>
<br>
<a href="customerHome.php">Go back</a>
