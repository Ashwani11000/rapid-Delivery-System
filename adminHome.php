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
    
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">

    <!-- Custom CSS -->
    
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
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#pickedup">Picked up</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Not Picked up</a>
                    </li>
                   <li>
                        <a class="page-scroll" href="#delivered">Delivered</a>
                    </li>
                    <li>
                    	<a class="page-scroll" href="#track">Tracking</a>
                    </li>
                </ul>
                <ul>
                <div class="userName">
                
					<?php 
                    include('adminSession.php');
                    echo "<h3> $login_session </h3>";
					
                    ?>

                    
                    <form action="logout.php" method="post">
                    <div class="logout">
                    <input name="btn_logout" type="submit" value="Logout">
				    </div>
                    </form>
                    </div>
            </ul>
        </div>
        </div></nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="welcomePane">
                    <h1>Welcome to Rapid Delivery System</h1>
                    <div class="welcomePane-img">
                    	<p>&nbsp;</p>
                   
                </div>
                
            </div>
        </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About Rapid Delivery System</h1>
                    	<p align="justify"> Rapid Delivery System is a 24/7 courier service, located in Bangalore, India. The aim id to provide a better courier service that is focused on delivery transparency with the support of GPS. 
Packages are collected from any address and taken to any final destination requested by the client. Rapid Delivery System allocates a booking to the most appropriate vehicle for transport mode (including bicycles, motorbikes and vans of varying sizes). 
Our couriers are rewarded and motivated with high pay for the service levels they provide, supported by the information technology. Thus, Rapid Delivery System customers can render a courier service that is reliable, trustworthy and transparent than other traditional courier services all around the island. This industrial and organization philosophy is complex to initiate and also requiring explicit training to be given to the couriers to change the way in which they worked in their lives in the purpose of courier service and behaved in order to fit the new organizational practices and image, enabled by new information technology.  
Additionally, other than giving features to the employees, Rapid Delivery System has been provided a new feature to the customers for the real time tracking of their parcel on a map, in the power of GPS technology. So the customer can keep monitoring their parcel on the map till the package been delivered. That will be a relief for the customers to identify the package has reached to the final destination successfully. It is this high level of human-to-system connectivity at the heart of Rapid Delivery System, makes it a unique e-courier service with fulfilling the customer satisfaction.
</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="pickedup" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Picked Up</h1>
                    
 <?php
require 'connect.php';


        $sql = "SELECT * FROM
parcel where id in (SELECT parcel_ID from parcel_status where status='Pickedup')";
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
        <th>Status</th>
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
        <td>Picked Up</td>
      </tr>
	   </tr>";
    
		}
	}
    echo"</tbody></table>";

}
        
        
        ?>
        
                </div>
            </div>
        </div>
    </section>
        

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Not picked up</h1>
                        
            
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
        <th>Status</th>
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
        <td>Not picked up</td>
      </tr>
	   </tr>";
    
		}
	}
    echo"</tbody></table>";

}
        
        
        ?>
        
                    
                    
                    
                </div>
            </div>
        </div>
    </section>
    


    <!-- Services Section -->
    <section id="delivered" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Delivered</h1>
                    
 <?php
require 'connect.php';


        $sql = "SELECT * FROM
parcel where id in (SELECT parcel_ID from parcel_status where status='Delivered')";
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
        <th>Status</th>
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
        <td>Delivered</td>
      </tr>
	   </tr>";
    
		}
	}
    echo"</tbody></table>";

}
        
        
        ?>
        
                </div>
            </div>
        </div>
    </section>
        

        
        
        <!-- Tracking Section -->
    <section id="track" class="track-section">
        <div class="container">
            <div class="row">
                <div class="">
                    <h1>Tracking</h1>
                     </div>
             </div>
             <form action="CustomerParcels.php" method="post">
             <input type="text" name="parcel_ID" placeholder="Parcel ID">
             <input type="submit">
             </form>
  
<?php
	
require 'connect.php';


$sql = "SELECT parcel.id, parcel.pickup_address, parcel.delivery_address,parcel.package_type, parcel.contact_no, parcel_status.status FROM parcel INNER JOIN parcel_status on parcel.id = parcel_status.parcel_ID WHERE parcel_status.status = 'Pickedup'";

if (mysqli_query($con, $sql)) {
    
$results = mysqli_query($con, $sql) or die(mysql_error());
echo  "<table id=\"keywords\" cellspacing=\"0\" cellpadding=\"0\">
<thead>
<br/><br/>

<tr>
<th><span>ID</span></th>
        <th><span>Parcel ID</span></th>
        <th><span>From</span></th>
        <th><span>To</span></th>
        <th><span>Type</span></th>
        <th><span>Contact no</span></th>
        </tr>
    </thead>


	 <tbody>";
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
{

extract($row);
    
echo "
      <tr>
        <td class=\"lalign\">".$id."</td>
	 
        <td>".$id."</td>
        <td>".$pickup_address."</td>
        <td>".$delivery_address."</td>
		<td>".$package_type."</td>
        <td>".$contact_no."</td>
        </tr>
	   </tr>";
    
		}
	}
    echo"</tbody></table>";
}



?> 
            
            
            <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
