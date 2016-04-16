<?php
require_once("navbar.php")
?>
    <header class="login-bg">
        <div class="header-content">
		<img border="0" alt="Kadab"  src="img/icon.png">
		
			<div class="header-content-inner_dash">
				<!--<div class="navbar"></div>-->

				<div id="menu-left">
					<a href="dashboard.php">Dashboard</a>
					<a href="AssignTaxi.php">Assign Taxi</a>
					<a href="book.php">Phone Bookings</a>
					<a href="reports.php">Reports</a>
					<a href="availablebookings.php">All bookings</a>
				</div>
			
				<div class="header-content-inner_3" >
				<h2>AssignTaxi</h2>
						<form  method="post" action="AssignTaxi.php">

			  
				<?php
				require_once("DB/DB.php");
				echo '<div class="header-content-inner_2" >';
				echo '<div class="content-inner-holder">';

				if(isset($_POST['bookingid']))
									 {

				                        $_SESSION["Booking"]=$_POST['bookingid'];
				                        $ID=$_POST['bookingid'];
				                        echo "Booking ID: " .$_SESSION["Booking"];

				                    }
				                    else
				                    {
				                    	?>
		<input type="text" class="form-control"  id="bookingid" name="bookingid" placeholder="Enter booking id" ></input>
		</form>
		<?php
		}
 			if(isset($_POST['bookingid']))
	{
						                        	echo '	</form>';

 			$sql="select Booking.*,Customer.*
 			from Booking
 			LEFT JOIN Customer
 			ON Customer.CustID=Booking.CustID
 			where BookingID='$ID'";

 			$sql1="select FirstName,LastName,Phone from Booking
			where BookingID='$ID'";
			$rs_result1 = mysql_query($sql1); //run the query
 			$rs_result = mysql_query($sql); //run the query
 			 					echo '<table>';

 			while($row = mysql_fetch_array($rs_result))

					 {
			echo '<td>' . "Customer Name: "."" . '</td>';

			if(($row['CustID']) == NULL)
			{
			
			while($row1 = mysql_fetch_assoc($rs_result1))
					 {
					 	
	echo'<td>' . ($row1['FirstName']) ." " .($row1['LastName']) .'</td>';
						echo ("</tr>");
			echo '<td>' . "Customer Phone No: "."" . '</td>';

			echo '<td>' . ($row1['Phone']) . '</td>';
						echo ("</tr>");

               		 }
               }		 

else 	{
			echo'<td>' . ($row['FirstName']) ." " .($row['LastName']) .'</td>';
			echo ("</tr>");
			
			echo '<td>' . "Customer Phone No: "."" . '</td>';
			echo'<td>' . ($row['Phone']).'</td>';
		}
			echo ("</tr>");
			echo '<td>' . "No. of Passengers : "."" . '</td>';
			echo'<td>' . ($row['Passengers']).'</td>';
			$_SESSION["psngrs"]=($row['Passengers']);
			echo ("</tr>");
			echo '<td>' . "Pick up Location: "."" . '</td>';
			echo'<td>' . ($row['PickupLoc']).'</td>';
			echo ("</tr>");
			echo '<td>' . "Drop Off Location: "."" . '</td>';
			echo'<td>' . ($row['Phone']).'</td>';
			echo ("</tr>");
			echo '<td>' . "Payment type: "."" . '</td>';
			echo'<td>' . ($row['Payment']).'</td>';
			echo ("</tr>");
			echo '<td>' . "Total: "."" . '</td>';
			echo '<td>' ;
				if( $row['Total'] == NULL)
			{
			?>
			<form  method="post" action="AssignTaxi1.php">

		<input type="text" class="form-control" id="total" name="total" placeholder="Enter total" ></input>

		<?php
			}
		else
		{
			echo($row['Total']).'</td>';
		}
			
			echo '</td>' ;
			echo ("</tr>");
			echo '<td>' . "Taxi ID: "."" . '</td>';
			echo '<td>' ;
			if( $row['TaxiID'] == NULL)
			{
			?>

		<input type="text" class="form-control" id="taxiid" name="taxiid" placeholder="Enter Taxi ID" ></input>

		<?php
			}
		else
			{
			echo ($row['TaxiID']).'</td>';
			}

			echo ("</tr>");
			echo '<td>' . "BookingTime: "."" . '</td>';
			echo'<td>' . ($row['BookingTime']).'</td>';

					 }
					}
					 echo '</table>';
		echo '<button type="submit" class="btn btn-primary">Submit</button>';
					echo '</form>';

					echo '</div>';
					echo '</div>';
				
				?>
				</form>

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

		