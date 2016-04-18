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
				
					
					  <?php 
				if ( isset($_SESSION["success"]) ) 
                            { 

                            ?>
					   <p>Occupied Taxis</p>
					  <table class="table table-bordered" width="600">
					  
					  
			<?php
			
					require_once("DB/DB.php");
					
					echo ("<tr><td>"); 
					echo("Taxi ID");
					echo("</td><td>"); 
					echo("First Name"); 
					echo("</td><td>"); 
					echo("Last Name"); 
					echo("</td><td>"); 
					echo("Phone");
					echo("</td><td>"); 
					echo("License");
					echo("</td><td>"); 
					echo("Car Size");
					echo("</td><td>"); 
					echo("Start Time"); 
					echo("</td><td>"); 
					echo("Finish Time");
					echo("</td><td>"); 
					echo("Update");  
					
		$sql1 = "select * from Taxi
			 Where Stats='Busy'
			ORDER BY TaxiID DESC
			LIMIT 5 ";


             $rs_result1 = mysql_query($sql1); //run the query


            while($row = mysql_fetch_assoc($rs_result1))
                {
				echo("<tr><td>"); 
				echo($row['TaxiID']);
				echo("</td><td>");
				echo($row['FirstName']); 
				echo("</td><td>"); 
				echo($row['LastName']); 
				echo("</td><td>"); 
				echo($row['PhoneNo']);
				echo("</td><td>"); 
				echo($row['Licenseplate']);
				echo("</td><td>"); 
				echo($row['carsize']);
				echo("</td><td>"); 
				echo($row['StartTime']);
				echo("</td><td>");
				echo($row['StartTime']);
				echo("</td><td>"); 
				

				?>

				<form method="post" action="updatestats.php">
	        <button href="#edit-modal" type="button" data-toggle="modal"
                                    class="btn btn-primary" data-target="#editModal" data-loginidedit = "<%=loginIdEdit %>">Edit</button>
	        	</form>	
				
				

  
				
				
				
				
				
				
				
	        		<?php	        	
					echo("</td></tr>\n"); 
                }         	 		
                	echo '</table>';

			
  }
  else
  {
  	echo "only dispatchers can view this page";
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



