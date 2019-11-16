<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rapid Delivery System</title>
    
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
    
      #map {
        height: 100%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">


</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Rapid Delivery System</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Find-couriers">Select Parcels</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Delivered">Parcel Delivered</a>
                    </li>
                    
                    
                    <li>
                        <a class="page-scroll" href="#Switch-Vehicle">Switch Vehicle</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#View-completed-jobs">View your jobs</a>
                    </li>
                </ul>
                <ul>
                <div class="userName">
                
					<?php
                    include('courierSession.php');
                    echo "<h3> $login_session </h3>";
                    ?>

                    
                    <form action="logout.php" method="post">
                    <div class="logout">
                    <input name="btn_logout" type="submit" value="Logout">
				</form>
            </div>
            </ul>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="courier_intro-section" class="courier_intro-section">
        <div class="container">
            <div class="row">
                <div class="welcomePane">
                    <h1>Welcome to Rapid Delivery System</h1>
                 <!--   <div class="welcomePane-img">
                    	
                </div>-->
                <img class="img-responsive" src="images/courier-services-2.jpg">
                <h1>About Rapid Deliery </h1>
                   	<p align="justify"> 
                    It is a 24/7 courier service, located in Bangalore, India. Our company was founded  by a final year software engineering student of the JSSATEB with the aim of providing a better courier service that is focused on delivery transparency with the support of GPS. 
<!--  
Rapid Delivery System us, utilize Intelligent Dispatch, which is an artificial intelligence and fleet management system to allocate a booking to the most appropriate vehicle for transport mode (including bicycles, motorbikes and vans of varying sizes).-->
</p>
            </div>
        </div> 
        </div>
    </section>
<br><br><br><br><br><br><br><br>
            
            

    <section id="Find-couriers" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Select Parcels</h1>
                    	<p align="justify"> 
                      
                         <form  method="post" action="courierparcels.php" >
                         <input type="text" name="Parcelid" id="Parcelid" placeholder="Parcel ID">
                        <input type="submit" Value="Submit" id="" class="submitBtn">
                        </form>
                        </p>
                     
                </div>
            </div>
        
    </section>

<?php
require 'connect.php';
					
        $sql = "SELECT * FROM
parcel where id not in (SELECT parcel_ID from parcel_status)";
if (mysqli_query($con, $sql)) {
    
$results = mysqli_query($con, $sql) or die(mysql_error());
echo  "<table id=\"keywords\" cellspacing=\"0\" cellpadding=\"0\">
<thead>
<br/><br/>

<tr>
<th><span>ID</span></th>
        <th><span>Parcel ID</span></th>
        <th><span>Customer ID</span></th>
        <th><span>From</span></th>
        <th><span>To</span></th>
        <th><span>Package id</span></th>
        <th><span>Contact no</span></th>
        <th><span>Note</span></th>
        
      </tr>
    </thead>


	 <tbody>";
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
{

extract($row);
$pid=$row["id"];
$cid=$row["customer_id"];
$paddr=$row["pickup_address"];
$daddr=$row["delivery_address"];
$pt=$row["package_type"];
$cno=$row["contact_no"];
$nt=$row["note"];


    
echo "
      <tr>
        <td class=\"lalign\">".$id."</td>
	 
        <td>".$pid."</td>
        <td>".$cid."</td>
        <td>".$paddr."</td>
        <td>".$daddr."</td>
		<td>".$pt."</td>
        <td>".$cno."</td>
        <td>".$nt."</td>
      
      </tr>
	   </tr>";
    
		}
	}
    echo"</tbody></table>";

}
        
        
        ?>
        
    
        
<section id="Delivered" class="exchange-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Parcel Delivered</h1>
                    <p align="justify"> 
                      
                         <form action="DeleteParcels.php" method="post">
             <input type="text" name="parcel_ID" placeholder="Parcel ID">
             <input type="submit" value="Delivered">
             </form>
                    </p>
                </div>
            </div>
    </div>
    </section>
<section id="Switch-Vehicle" class="exchange-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Switch Vehicle</h1>
                    <p align="justify"> 
                      
                         <form  method="post" action="shiftVehicle.php" >
 						 <input type="text" name="parcelID" id="parcelID" placeholder="Parcel ID">
                         <input type="text" name="vehicleID" id="vehicleID" placeholder="Vehicle ID">
                         <input type="submit" Value="Shift Package" id="" class="submitBtn">
                        </form>
                        </p>
                <?php
                require 'connect.php';
					
        $sql = "SELECT * FROM courier;";
if (mysqli_query($con, $sql)) {
    
$results = mysqli_query($con, $sql) or die(mysql_error());
echo  "<table id=\"keywords\" cellspacing=\"0\" cellpadding=\"0\">
<thead>
<br/><br/>

<tr>
       <th><span>Courier ID</span></th>
        <th><span>Courier name</span></th>
        <th><span>Vehicle ID</span></th>
        <th><span>Contact no</span></th>
        
      </tr>
    </thead>


	 <tbody>";
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
{

extract($row);
$cid=$row["id"];
$uname=$row["username"];
$tel=$row["telephone"];
$vid=$row["vehicle_ID"];


    
echo "
      <tr>
	 
        <td>".$cid."</td>
        <td>".$uname."</td>
        <td>".$vid."</td>
        <td>".$tel."</td>
      
      </tr>
	   </tr>";
    
		}
	}
    echo"</tbody></table>";

}                ?>
                </div>
            </div>

    </section>
            
    <section id="View-completed-jobs" class="completedJobs-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>View Your jobs</h1>
                    
                    <?php
					//include('courierSession.php');
					$sql = "SELECT id FROM courier WHERE username = '$login_session'";
					
					if (mysqli_query($con, $sql)) {
						if (mysqli_query($con, $sql)) {

                            
$results = mysqli_query($con, $sql) or die(mysql_error());

$x=1;

while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
$id= $row["id"];
extract($row);
echo "ID:".$id;
$sql = "SELECT * FROM
parcel_status where courier_id = '$id'";
if (mysqli_query($con, $sql)) {
    
$results = mysqli_query($con, $sql) or die(mysql_error());
echo  "<table id=\"keywords\" cellspacing=\"0\" cellpadding=\"0\">
<thead>
<br/><br/>

<tr>
<th><span>ID</span></th>
        <th><span>Courier ID</span></th>
        <th><span>Customer ID</span></th>
        <th><span>Status</span></th>
        <th><span>Vehicle ID</span></th>
        <th><span>Parcel ID</span></th>
      </tr>
    </thead>


	 <tbody>";
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
{

extract($row);
echo "
      <tr>
        <td class=\"lalign\">".$id."</td>
	 
        <td>".$courier_id."</td>
        <td>".$customer_id."</td>
        <td>".$status."</td>
        <td>".$Vehicle_ID."</td>
		<td>".$parcel_ID."</td>
      </tr>
	   </tr>";
    
		}
	}
    echo"</tbody></table>";

}
}
}
	}  
					?>
                </div>
            </div>
        </div>
    </section>
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>