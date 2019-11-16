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
        li{
            list-style-type:none;}
        </style>
    
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/scrolling-nav.css" rel="stylesheet">

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
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    
                    
                    <li>
                    	<a class="page-scroll" href="#track">Tracking</a>
                    </li>
                </ul>
                <ul>
                <div class="userName">
                
					<?php
                    include('receiverSession.php');
                    echo "<h3> $login_session </h3>";
                    ?>

                    
                    <form action="logout.php" method="post">
                    <div class="logout">
                    <input name="btn_logout" type="submit" value="Logout">
                        </div>
                        </form>
            </div>
                    
            </ul>
            <!-- /.navbar-collapse -->
        </div>
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="welcomePane">
                    <h1>Welcome to Rapid Delivery System</h1>
                     <section id="Place">
                     <img src="images/courier-services-2.jpg" class="img-responsive">  
                         </section>
                     <br/>
            </div>
        </div>

  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/style4.css">
    
     
         
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About Rapid Delivery System</h1>
                    	<p align="justify"> Rapid Delivery System is a 24/7 courier service.The aim is to provide a better courier service that is focused on delivery transparency with the support of GPS. 

</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Services Section</h1>
                    <p align="justify">
                    
Rapid Delivery System has been provided a new feature to the customers for the real time tracking of their parcel on a map, in the power of GPS technology. So the customer can keep monitoring their parcel on the map till the package been delivered. That will be a relief for the customers to identify the package has reached to the final destination successfully. It is this high level of human-to-system connectivity at the heart of our system which makes it a unique e-courier service with fulfilling the customer satisfaction.
</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact</h1>
                    <p align="justify">
<center>For any further details, reach us at: </center><br>
                    <ul>
                    <li>+91-9876543210</li>
                    <li>deliver2me@gmail.com</li>
                    </ul>
                    </p>
                </div>
            </div>
    
    </section>
        
                    
        
    <!-- Tracking Section -->
    <section id="track" class="services-section">
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
$sql = "SELECT * from receiver where receiver = '$login_session'";
if (mysqli_query($con, $sql)) {
    
$results = mysqli_query($con, $sql) or die(mysql_error());
 echo  "<table id=\"keywords\" cellspacing=\"0\" cellpadding=\"0\">
<thead>

<tr>
        <th><span>Parcel ID</span></th>
        <th><span>From</span></th>
        <th><span>To</span></th>
        <th><span>Type</span></th>
        <th><span>Contact no</span></th>
        </tr>
    </thead>


	 <tbody>";
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {

extract($row);

$rid=$row["receiver"];
$custname=$row["sender"];
$parid=$row["parcel_ID"];
$sql1="SELECT * FROM parcel where id = '$parid'";
    $res = mysqli_query($con, $sql1);
    $result = mysqli_fetch_array($res, MYSQLI_ASSOC);
    echo"<tr><td>".$parid."</td><td>".$result["pickup_address"]."</td><td>".$result["delivery_address"]."</td><td>".$result["package_type"]."</td><td>".$result["contact_no"]."</td></tr>";
}
    echo "</tbody></table>";
}            ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
        </div>
        </section>
    </section>
</body>
</html>