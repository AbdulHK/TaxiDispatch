<?php
require_once("navbar.php")
?>

    <header class="login-bg">
        <div class="header-content">
			<img border="0" alt="Kadab"  src="img/icon.png">
            <div class="header-content-inner">
			<div class="header-content-inner_2"> 							<!-- Orange BOX (inner_2) -->

			
			<div class="content-inner-holder">
						<?php
            require_once("DB/DB.php");
            //get the userinput from the form 
            $firstname = $_POST['inputfirstname'];
            $lastname = $_POST['inputlastname'];
            $pickup = $_POST['inputpickup'];
            $dropoff = $_POST['inputdropoff'];
            $mobile = $_POST['inputphone'];
            $datetime = $_POST['inputdatetime'];
            $payment= $_POST['Payment'];
            $passengers= $_POST['inputpassengers'];

            // To protect MySQL injection 
            $firstname= stripslashes($firstname);
            $lastname= stripslashes($lastname);
            $firstname= mysql_real_escape_string($firstname);
            $lastname= mysql_real_escape_string($lastname);
            $pickup= stripslashes($pickup);
            $dropoff= stripslashes($dropoff);
            $pickup= mysql_real_escape_string($pickup);
            $dropoff= mysql_real_escape_string($dropoff);
            $mobile= stripslashes($mobile);
            $mobile= mysql_real_escape_string($mobile);
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
            $book="INSERT INTO Booking (`Firstname`,`Lastname`,`Phone`,`Passengers`,`PickupLoc`,`DropoffLoc`,`Payment`,`BookingTime`)
            					 VALUES ('$firstname','$lastname','$mobile','$passengers','$pickup','$dropoff','$payment','$datetime')";

            	if(mysql_query($book)== TRUE)
				{
                    $bookinginfo=mysql_query("select * from Booking where Firstname='$firstname'
                        AND PickupLoc='$pickup'");
                   
                while($row = mysql_fetch_array($bookinginfo))
                {
                    echo "Booking ID is :{$row[0]}  <br> ".
                    
                    "First Name:{$row[2]}  <br> ".
                    "Last Name :{$row[3]}  <br> ".
                    "Phone number:{$row[4]}  <br> ".
                    "Passenger number :{$row[5]}  <br> ".
                    "Pickup Location :{$row[8]}  <br> ".
                    "Drop off Location :{$row[9]}  <br> ".
                    "Payment type :{$row[10]}  <br> ".
                    "Booking Time :{$row[12]}  <br> ";
                }    

				}
				else
				{
					echo "something is not quite right, go back and check your booking.";
				}mysql_close($conn);



                  
            }
            else
            {
               echo "you cannt book a taxi for the past!";
            }
        }
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
