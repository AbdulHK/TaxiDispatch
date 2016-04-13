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
