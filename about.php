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
                                <a class="navbar-brand" href="index.html">Kadab's Cabs</a>
                                <?php 
                                if (! isset($_SESSION["custsucess"]) ) 
                                {
                                ?>
                                 <a class="navbar-brand" href="book.html">Book</a>
                                <?php
                                }
                                else
                                 {
                                ?>
                                <a class="navbar-brand" href="custbook.html">Book</a>
                                <?php
                                 } 
                                 ?>
                                
                                <a class="navbar-brand" href="customerlogin.html">Customer Login</a>
                                <a class="navbar-brand" href="dispatcherlogin.html">Dispatcher Login</a>
                                <a class="navbar-brand" href="registration.html">Register</a>
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
                        <a class="page-scroll"href="dispatcherlogin.html">  Dispatcher Sign in       </a>
                                            </li>
                                            <li>

                        <a class="page-scroll"href="customerlogin.html">  customer Sign in       </a>
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
            <div class="header-content-inner_2">                            <!-- Orange BOX (inner_2) -->

            
            <div class="content-inner-holder">
                        <?php
require_once("DB/DB.php");
                if(isset($_SESSION["custsucess"])) 
                        {
                        $ID=$_SESSION["custid"];
                        $details=mysql_query("select * from Customer where CustID='$ID'");
                while($row = mysql_fetch_array($details))
                {
                    echo "You are a customer <br>".
                    "ID:{$row[0]}  <br> ".
                    "First Name:{$row[2]}  <br> ".
                    "Last Name :{$row[3]}  <br> ".
                    "Phone Number:{$row[4]}  <br> ".
                    "Address 1 :{$row[5]}  <br> ".
                    "Address 2:{$row[6]}  <br> ".
                    "Email :{$row[7]}  <br> ";
                    
                }
            }
                elseif (isset($_SESSION["success"])) 
                {
                        $ID=$_SESSION["dispatcherid"];
                        $details=mysql_query("select * from Dispatcher where DispatcherID='$ID'");
                    while($row = mysql_fetch_array($details))
                    {
                        echo "You are a Dispatcher. <br>".
                        "ID:{$row[0]}  <br> ".
                        "First Name:{$row[2]}  <br> ".
                        "Last Name :{$row[3]}  <br> ".
                        "Start Time:{$row[5]}  <br> ".
                        "Finish Time:{$row[6]}  <br> ";
                        
                    }    
                        
                }

                        else
                        { //if session was vaild
                        
                         echo" you must be logged in to view this page.";
                        }
                         mysql_close($conn);

                        ?>

              </div>
             </div>
            </div>
        </div>
    </header>


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