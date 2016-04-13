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
				<h2>Booking</h2>
			  <form role="form" class="form-horizontal" action="custbook1.php" method="post" name="custbook">
				<div class="form-group">
				<label for="inputfirstname" class="col-md-4 control-label">Customer ID</label>
				<div class="col-md-8">
				<input type="text" class="form-control" id="inputcustid" name="inputcustid" placeholder="Enter your Customer ID" required/>
				</div>
				</div>
				<div class="form-group">
					<label for="inputpickup" class="col-md-4">Pick Up Location</label>
					<div class="col-md-8">
					<input type="text" class="form-control" id="inputpickup" name="inputpickup" placeholder="Enter Pick Up Location" required></input>
					</div>
				</div>

				<div class="form-group">
					<label for="inputdropoff" class="col-md-4">Drop Off Location</label>
					<div class="col-md-8">
					<input type="text" class="form-control" id="inputdropoff" name="inputdropoff" placeholder="Enter Drop Off Location"></input>
					</div>
				</div>

				<div class="form-group">
					<label for="inputdatetime" class="col-md-4">Date and Time</label>
					<div class="col-md-8">
					<input type="datetime-local" class="form-control" id="inputdatetime" name="inputdatetime" required></input>
					</div>
					       
				</div>
				<div class="form-group">
					<label for="inputpassengers" class="col-md-4">number of passengers</label>
                    <div class="col-md-8">
                    <input type="number" class="form-control" id="inputpassengers" name="inputpassengers" placeholder="No of passenger" min="1" max="7"></input>
					</div>
				</div>
				<div class="form-group">
					<label for="inputpayment" class="col-md-4">Payment</label>
					<div class="col-md-8 ">
					<label>
					<input type="radio" name="Payment" value="Cash" checked id="Payment">Cash</label>
					<label>
					<input type="radio" name="Payment" value="Card" id="Payment">Card</label>

					</div>
				</div>
				
				<button type="submit" class="btn btn-primary">Submit</button>
			  </form>
			  </div>
			 </div>
            </div>
        </div>
    </header>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

     <script src="js/validation.js"></script>  
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
