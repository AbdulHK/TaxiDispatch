<?php
require_once("navbar.php")
?>
    <header class="login-bg">
        <div class="header-content">
			<img border="0" alt="Kadab"  src="img/icon.png">
            <div class="header-content-inner">
			<div class="header-content-inner_2">

				<h2> here is your Bookings</h2>
			<?php
						require_once("DB/DB.php");

			if(isset($_SESSION["custsucess"])) 
                        {
			      $ID=$_SESSION["custid"];

			echo '<table border="1">'."\n"; 

			echo ("<tr><td>"); 
			echo("Booking ID");
			echo("</td><td>"); 
			echo("Passengers"); 
			echo("</td><td>"); 
			echo("TaxiID");
			echo("</td><td>"); 
			echo("Pickup ");
			echo("</td><td>"); 
			echo("Dropoff");
			echo("</td><td>"); 
			echo("Total"); 
			echo("</td><td>"); 
			echo("Time"); 
			echo("</td></tr>\n");  

			$sql = "select * from Booking where CustID='$ID'
                     ORDER BY BookingID DESC
                    ";
            $result = mysql_query($sql);

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
		echo '<td>' . mysql_result($result, $i, 'Passengers') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'TaxiID') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'PickupLoc') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'DropoffLoc') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'Total') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'BookingTime') . '</td>';
		
				echo("</td></tr>\n"); 
                

            }
            echo '</table>';
            
                echo "<a href='currentbookings.php?page=1'>".'|<'."</a> "; // Goto 1st page  
		
	for ($i=1; $i<$total_pages; $i++) 

              { 

				echo "<a href='currentbookings.php?page=".$i."'>$i </a> ";
			}
			echo "<a href='currentbookings.php?page=$total_pages'> >| </a> ";
		}

                else
                 {
                	echo "login as a customer first!";
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
