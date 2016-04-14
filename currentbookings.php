<?php
require_once("navbar.php")
?>
    <header class="login-bg">
        <div class="header-content">
			<img border="0" alt="Kadab"  src="img/icon.png">
            <div class="header-content-inner">
			<div class="header-content-inner_2">

				<h2> Bookings</h2>
			<?php
			require_once("DB/DB.php");
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
                if(isset($_SESSION["custsucess"])) 
                        {
                        $ID=$_SESSION["custid"];
                     $bookinginfo=mysql_query("select * from Booking where CustID='$ID' LIMIT 5");
                while($row = mysql_fetch_array($bookinginfo))
                {
				echo("<tr><td>"); 
				echo($row[0]);
				echo("</td><td>"); 
				echo($row[1]); 
				echo("</td><td>"); 
				echo($row[5]); 
				echo("</td><td>"); 
				echo($row[6]);
				echo("</td><td>"); 
				echo($row[8]);
				echo("</td><td>"); 
				echo($row[9]);
				echo("</td><td>"); 
				echo($row[11]);
				echo("</td><td>"); 
				echo($row[13]);
				echo("</td></tr>\n"); 
                }

                echo '</table>';
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
