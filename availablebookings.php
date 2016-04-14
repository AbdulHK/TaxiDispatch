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
					<a href="#about">Find Out More</a>
				</div>
			
				<div class="header-content-inner_3" >
				
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
                    ORDER BY BookingID DESC
					";


            $result = mysql_query($sql);
			$row = mysql_fetch_assoc($result);

	// number of results to show per page
	$per_page = 6;

	// figure out the total pages in the database
	$total_results = mysql_num_rows($result);
	$total_pages = ceil($total_results / $per_page);

if (isset($_GET['page']) && is_numeric($_GET['page']))
	{
		$show_page = $_GET['page'];
		
		// make sure the $show_page value is valid
		if ($show_page > 0 && $show_page <= $total_pages)
		{
			$start = ($show_page -1) * $per_page;
			$end = $start + $per_page; 
		}
		else
		{
			// error - show first set of results
			$start = 0;
			$end = $per_page; 
		}		
	}
	else
	{
		// if page isn't set, show first set of results
		$start = 0;
		$end = $per_page; 
	}
	for ($i = $start; $i < $end; $i++)
	{
	              
				echo("<tr>");

		echo '<td>' . mysql_result($result, $i, 'BookingID') . '</td>';

	if(mysql_result($result, $i, 'CustID') == NULL)
					{
				$booking=mysql_result($result, $i, 'BookingID');
		$sql1="select FirstName,LastName,Phone from Booking
			where BookingID='$booking'";
			$rs_result1 = mysql_query($sql1); //run the query

				while($row1 = mysql_fetch_assoc($rs_result1))
					 {
					 	
        echo '<td>' . ($row1['FirstName']) . '</td>';
		echo '<td>' . ($row1['LastName']) . '</td>';
		echo '<td>' . ($row1['Phone']) . '</td>';
					
               		 }
				}
				else
				{
		echo '<td>' . mysql_result($result, $i, 'FirstName') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'LastName') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'Phone') . '</td>';
				}				
		echo '<td>' . mysql_result($result, $i, 'Passengers') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'TaxiID') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'PickupLoc') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'BookingTime') . '</td> <td>';
				?>
				<form method="post" action="AssignTaxi.php">
	        <button class="btn btn-primary"type="submit" name="Assign Taxi" id="AssignTaxi" value=" <?php echo "$row[BookingID]"?>">AssignTaxi
	        </button>
	        	</form>	
	        	<?php	        	
				echo("</td></tr>\n"); 
                
                }         	 		
                echo '</table>';
            
                echo "<a href='availablebookings.php?page=1'>".'|<'."</a> "; // Goto 1st page  
		
	for ($i=1; $i<$total_pages; $i++) 

              { 

				echo "<a href='availablebookings.php?page=".$i."'>$i </a> ";
			}
			echo "<a href='availablebookings.php?page=$total_pages'> >| </a> "
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
