<?php
session_start();

//check for session
if ( isset($_SESSION["error"]) ) 
{  
unset($_SESSION["error"]); 
} 
if ( isset($_SESSION["success"]) ) 
{ 

echo $_SESSION["success"];
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
				                <a class="navbar-brand" href="index.html">Kadab's Cabs</a>
				                <a class="navbar-brand" href="book.html">Book</a>
								<a class="navbar-brand" href="customerlogin.html">Customer Login</a>
                                <a class="navbar-brand" href="dispatcherlogin.html">Dispatcher Login</a>
                                <a class="navbar-brand" href="registration.html">Register</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="about.php">About</a>
                    </li>
                    <?php

                        if(! isset($_SESSION["success"]) )
                        { //if session not found
                        ?>
                        <li>
                        <a class="page-scroll"href="dispatcherlogin.php">  Dispatcher Sign in       </a>
                                            </li>
                                            <li>

                        <a class="page-scroll"href="customerlogin.php">  customer Sign in       </a>
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

    <header class="index-bg">
        <div class="header-content">
			<img border="0" alt="Kadab"  src="img/icon.png">
            <div class="header-content-inner">
			
				<form role="form" class="container-fluid">
					<div class="form-group">
					<div class="controls controls-row row-fluid">
						<input type="text" class="Formsize" placeholder="Pick-up" /><input type="text" class="Formsize" placeholder="Drop-Off" /><input type="datetime-local" class="Formsize" placeholder="Date" /><button href="#about" class="Btnsize btn-primary btn-xl">Book</button>
					</div>
					</div>
				</form>
				
                <h1>Welcome to Kadab Cabs</h1>
                <hr>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Need a Cab</h2>
                    <hr class="light">
                    <p class="text-faded">Kadab cabs will take you where you need to go</p>
                    <a href="book.html" class="page-scroll btn btn-default btn-xl">Book a Cab!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Kadab cabs will get you to your destination </h2>
                    <hr class="primary">
                    <p>Get in Touch</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>Phone 123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">kadabcabs@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>

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