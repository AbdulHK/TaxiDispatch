<?php
require_once("navbar.php")
?>
    <header class="login-bg">
        <div class="header-content">
		<img border="0" alt="Kadab"  src="img/icon.png">
		
			<div class="header-content-inner_dash">
				<!--<div class="navbar"></div>-->

				<div id="menu-left">
					<a href="darshboard.php">Dashboard</a>
					<a href="#about">Assign Taxi</a>
					<a href="#about">Phone Bookings</a>
					<a href="#about">Reports</a>
					<a href="availablebookings.php">Available Bookings</a>
					<a href="#about">Find Out More</a>

				</div>
			
				<div class="header-content-inner_3" >
				
				  <h2>Bordered Table</h2>
					  <p>Bookings</p>            
					  <table class="table table-bordered" width="600" border="1" style="font-size:12px;">
					  <?php
					  		require_once("DB/DB.php");


					echo ("<tr><td>"); 
					echo("Booking ID");
					echo("</td><td>"); 
					echo("First Name"); 
					echo("</td><td>"); 
					echo("Last Name"); 
					echo("</td><td>"); 
					echo("Phone");
					echo("</td><td>"); 
					echo("Passengers");
					echo("</td><td>"); 
					echo("Taxi");
					echo("</td><td>"); 
					echo("Pick up Loc"); 
					echo("</td><td>"); 
					echo("Booking Time");
					echo("</td><td>"); 
					echo("Assign Taxi"); 
					echo("</td></tr>\n"); 
			$sql = "select Booking.*,customer.*
					from Booking
                    LEFT JOIN Customer 
                    ON Customer.CustID=Booking.CustID
                    LIMIT 5";


             $rs_result = mysql_query($sql); //run the query


            while($row = mysql_fetch_assoc($rs_result))
                {
				echo("<tr><td>"); 
				echo($row['BookingID']);
				echo("</td><td>");
				if($row['CustID'] == NULL)
				{
					$sql1="select FirstName,LastName,Phone from Booking
					where BookingID='$row[BookingID]'";
					$rs_result1 = mysql_query($sql1); //run the query

					 while($row1 = mysql_fetch_assoc($rs_result1))
					 {
                		echo($row1['FirstName']); 
						echo("</td><td>"); 
						echo($row1['LastName']); 
						echo("</td><td>"); 
						echo($row1['Phone']);
               		 }
				}
				else
				{
				echo($row['FirstName']); 
				echo("</td><td>"); 
				echo($row['LastName']); 
				echo("</td><td>"); 
				echo($row['Phone']);
				}
				
				echo("</td><td>"); 
				echo($row['Passengers']);
				echo("</td><td>"); 
				echo($row['TaxiID']);
				echo("</td><td>"); 
				echo($row['PickupLoc']);
				echo("</td><td>"); 
				echo($row['BookingTime']);
				echo("</td><td>"); 
				?>
				<form method="post" action="AssignTaxi.php">
	        <button class="btn btn-primary"type="submit" name="Assign Taxi" id="AssignTaxi" value=" <?php echo "$row[BookingID]"?>">AssignTaxi
	        </button>
	        	</form>	
	        	<?php	        	
				echo("</td></tr>\n"); 
                }         	 		
                echo '</table>';

			?> 
					   <p>Available Taxi's</p>
					  <table class="table table-bordered" width="600">
						<?php
					echo ("<tr><td>"); 
					echo("Booking ID");
					echo("</td><td>"); 
					echo("Customer ID"); 
					echo("</td><td>"); 
					echo("Passengers"); 
					echo("</td><td>"); 
					echo("PickupLoc");
					echo("</td><td>"); 
					echo("Payment");
					echo("</td><td>"); 
					echo("Dropoff");
					echo("</td><td>"); 
					echo("Time"); 
					echo("</td><td>"); 
					echo("BookingTime"); 
					echo("</td></tr>\n"); 
					echo '</table>';

?>					  
<div class="navbar"></div>
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
