<?php
session_start();
                        if ( isset($_SESSION["error"]) ) 
                            {  
                            unset($_SESSION["error"]); 
                            } 
                            if ( isset($_SESSION["success"]) ) 
                            { 
                             $_SESSION["success"];

                            }
                            if ( isset($_SESSION["custsucess"]) ) 
                            { 

                            $_SESSION["custsucess"];
                            }  

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"> Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                                <a class="navbar-brand page-scroll" href="#page-top"></a>
                                <a class="navbar-brand" href="index.php">Kadab's Cabs</a>
                                <?php 
                                if (! isset($_SESSION["custsucess"]) ) 
                                {
                                ?>
                                 <a class="navbar-brand" href="book.php">Book</a>
                                <?php
                                }
                                else
                                 {
                                ?>
                                <a class="navbar-brand" href="custbook.php">Book</a>
                                <?php
                                 } 
                                 ?>
                                
                                <a class="navbar-brand" href="customerlogin.php">Customer Login</a>
                                <a class="navbar-brand" href="dispatcherlogin.php">Dispatcher Login</a>
                                <a class="navbar-brand" href="registration.php">Register</a>
                                <a class="navbar-brand page-scroll">
                                <?php  
                                //check for session
                            if ( isset($_SESSION["error"]) ) 
                            {  
                            unset($_SESSION["error"]); 
                            } 
                            if ( isset($_SESSION["success"]) ) 
                            { 
                            echo $_SESSION["success"];

                            }
                            if ( isset($_SESSION["custsucess"]) ) 
                            { 

                            echo $_SESSION["custsucess"];
                            }  
?>
</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="about.php">About</a>
                    </li>
                    <?php

                        if(!isset($_SESSION["name"])) 
                        { //if session not found
                        ?>
                        <li>
                        <a class="page-scroll"href="dispatcherlogin.php">  Dispatcher Sign in       </a>
                                            </li>
                                            <li>

                        <a class="page-scroll"href="customerlogin.php">  Customer Sign in       </a>
                                            </li>


                        <?php 
                        }
                        else
                        { //if session was vaild
                        ?>
                         <li>

                        <a class="page-scroll"href="signout.php">Sign out     </a>
                                            </li>

                        <?php
                        }
                        ?>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header class="login-bg">
        <div class="header-content">
			<img border="0" alt="Kadab"  src="img/icon.png">
            <div class="header-content-inner">
			<div class="header-content-inner_2"> 							<!-- Orange BOX (inner_2) -->

			
			<div class="content-inner-holder">
						<?php
						require_once("DB/DB.php");
				//get the userinput from the form 
				$custid = $_POST['inputcustid'];
				$pickup = $_POST['inputpickup'];
				$dropoff = $_POST['inputdropoff'];
				$datetime = $_POST['inputdatetime'];
				$payment= $_POST['Payment'];
				$passengers= $_POST['inputpassengers'];

				//$passengers= $_POST['inputpassengers'];
				// To protect MySQL injection 
				$custid= stripslashes($custid);
				$custid= mysql_real_escape_string($custid);
				$pickup= stripslashes($pickup);
				$dropoff= stripslashes($dropoff);
				$pickup= mysql_real_escape_string($pickup);
				$dropoff= mysql_real_escape_string($dropoff);
				$datetime= stripslashes($datetime);
				$datetime= mysql_real_escape_string($datetime);
				$payment= stripslashes($payment);
				$payment= mysql_real_escape_string($payment);
				$passengers= stripslashes($passengers);
				$passengers= mysql_real_escape_string($passengers);
				
                 $timecheck=mysql_query("select SYSDATE()");
                 while($time= mysql_fetch_array($timecheck))
               {
                if($datetime >= $time[0])

                    {
                       $book="INSERT INTO Booking (`CustID`,`Passengers`,`PickupLoc`,`DropoffLoc`,`Payment`,`BookingTime`)
                                     VALUES ('$custid','$passengers','$pickup','$dropoff','$payment','$datetime')";
                if(mysql_query($book)== TRUE)
                {
                    $bookinginfo=mysql_query("select * from Booking where CustID='$custid'
                        AND PickupLoc='$pickup'");
                    $custinfo=mysql_query("select * from Customer where CustID='$custid'");
                while($row = mysql_fetch_array($bookinginfo) and $cust =mysql_fetch_array($custinfo))
                {
                    echo "Booking ID is :{$row[0]}  <br> ".
                    "Customer ID :{$row[1]}  <br> ".
                    "First Name:{$cust[2]}  <br> ".
                    "Last Name :{$cust[3]}  <br> ".
                    "Phone number:{$cust[4]}  <br> ".
                    "Passenger number :{$row[5]}  <br> ".
                    "Pickup Location :{$row[8]}  <br> ".
                    "Drop off Location :{$row[9]}  <br> ".
                    "Payment type :{$row[10]}  <br> ".
                    "Booking Time :{$row[13]}  <br> ";
                }    

                }
                else
                {
                    echo "something is not quite right, go back and check your booking.";
                }

                mysql_close($conn);
                ?>
              </div>
             </div>
            </div>
        </div>
    </header>
            }
            else
            {
               echo "you cannt book a taxi for the past!";
            }
        }

				

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
