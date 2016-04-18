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
				if ( isset($_SESSION["success"]) ) 
                            { 

                            
				require_once("DB/DB.php");
				echo '<div class="header-content-inner_2" >';
				echo '<div class="content-inner-holder">';

				if(isset($_POST['bookingid']))
									 {

				                        $_SESSION["Booking"]=$_POST['bookingid'];
				                        $ID=$_POST['bookingid'];
				                        echo "Booking ID: " .$_SESSION[""];

				                    }
				                    else
				                    {
				                    	?>
		<input type="text" class="form-control"  id="stat" name="stat" placeholder="Enter booking id" ></input>
		</form>
		<?php
		}
 			if(isset($_POST['stat']))
	{
						                        	echo '	</form>';

 			$sql="select Booking.*,Customer.*
 			from Booking
 			LEFT JOIN Customer
 			ON Customer.CustID=Booking.CustID
 			where BookingID='$ID'";

 			
 			while($row = mysql_fetch_array($rs_result))
			{
			echo '<td>' . "Taxi Name: "."" . '</td>';

			
			echo'<td>' . ($row['FirstName']) ." " .($row['LastName']) .'</td>';
			echo ("</tr>");
			
			echo '<td>' . "Customer Phone No: "."" . '</td>';
			echo'<td>' . ($row['Phone']).'</td>';
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
				}
				else
				{
					echo "only dispatchers allowed here";
				}
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

		