<?php
require_once("navbar.php")
?>
    <header class="login-bg">
        <div class="header-content">
			<img border="0" alt="Kadab"  src="img/icon.png">
            <div class="header-content-inner">
			<div class="header-content-inner_2">

				<h2> here is your latest Bookings</h2>
			<?php
						require_once("DB/DB.php");

			if(isset($_SESSION["custsucess"])) 
                        {
			      $ID=$_SESSION["custid"];

			echo '<table border="1">'."\n"; 

			echo ("<tr><td>"); 
			echo("Booking ID");
			echo("</td><td>"); 
			echo("Customer ID"); 
			echo("</td><td>"); 
			echo("Passengers"); 
			echo("</td><td>"); 
			echo("Taxi ID");
			echo("</td><td>"); 
			echo("Pickup ");
			echo("</td><td>"); 
			echo("Dropoff");
			echo("</td><td>"); 
			echo("Total"); 
			echo("</td><td>"); 
			echo("Time"); 
			echo("</td></tr>\n");  

			$rec_limit=5;
		if( isset($_GET{'page'} ) )
		 {
            $page = $_GET{'page'} - 1;
            $offset = $rec_limit * $page ;
         }
         else 
         {
            $page = 0;
            $offset = 0;
         }
			$sql = "select * from Booking where CustID='$ID'
                     	ORDER BY BookingID DESC
                     	LIMIT $offset,$rec_limit"; 
$rs_result = mysql_query($sql); //run the query
$rec_count = mysql_num_rows($rs_result);  //count number of records
$left_rec = $rec_count - ($page * $rec_limit);


while($row = mysql_fetch_assoc($rs_result))
                {
				echo("<tr><td>"); 
				echo($row['BookingID']);
				echo("</td><td>"); 
				echo($row['CustID']); 
				echo("</td><td>"); 
				echo($row['Passengers']); 
				echo("</td><td>"); 
				echo($row['TaxiID']);
				echo("</td><td>"); 
				echo($row['PickupLoc']);
				echo("</td><td>"); 
				echo($row['DropoffLoc']);
				echo("</td><td>"); 
				echo($row['Total']);
				echo("</td><td>"); 
				echo($row['BookingTime']);
				echo("</td></tr>\n"); 
                }

                echo '</table>';
                	echo "<a href='currentbookings.php?page=1'>".'|<'."</a> "; // Goto 1st page  

	for ($i=1; $i<$left_rec; $i++) 

              { 

				echo "<a href='currentbookings.php?page=".$i."'>$i </a> ";
			}
			echo "<a href='currentbookings.php?page=$left_rec'> >| </a> ";
               
            }
            

                else
                 {
                	echo "login first!";
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
