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
					<a href="updatetaxi.php">Update Taxi Status</a>
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
					echo("Current Job Start Time");
					echo("</td><td>");
					echo("Taxi ID"); 
					echo("</td><td>");
					
					echo("Customer First Name"); 
					echo("</td><td>"); 
					echo("Customer Last Name"); 
					echo("</td><td>"); 
					echo("Driver Phone");
					echo("</td><td>"); 
					
					echo("Pick Up Location"); 
					echo("</td><td>"); 
					echo("Drop Off Location");
					echo("</td><td>"); 
					echo("Update");  
					
		$sql1 = "select taxi.*,Booking.*
			FROM taxi
			JOIN Booking ON Booking.TaxiID=taxi.TaxiID
			WHERE Stats='Busy' AND Completed=0
		
			LIMIT 10 ";


             $rs_result1 = mysql_query($sql1); //run the query


            while($row = mysql_fetch_assoc($rs_result1))
                {
				echo("<tr><td>"); 
				echo($row['BookingTime']);
				echo("</td><td>");
				echo($row['TaxiID']); 
				echo("</td><td>"); 
							if($row['CustID'] != NULL )
							{
								$cust="select * from Customer where CustID='$row[CustID]'";
								        $cust1 = mysql_query($cust); //run the query
								        while($row1=mysql_fetch_assoc($cust1))
								        {
								        	echo($row1['FirstName']); 
											echo("</td><td>"); 
											echo($row1['LastName']); 
								        }

							}
				else
{
				echo($row['FirstName']); 
				echo("</td><td>"); 
				echo($row['LastName']); 
			}
				echo("</td><td>"); 
				echo($row['PhoneNo']);
				echo("</td><td>"); 
				 
				echo($row['PickupLoc']);
				echo("</td><td>");
				echo($row['DropoffLoc']);
				echo("</td><td>"); 
				

				?>

				
	        <button id="freeButton"  type="button" data-toggle="modal"
                                    class="btn btn-primary" data-target="#freeTaxiModal" data-id="<?php echo "$row[TaxiID]"?>">Free Taxi
			
				
			</button>
									
			
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
	
		
	
	
	<div class="modal fade" id="freeTaxiModal" tabindex="-1" role="dialog" aria-labelledby="freeTaxiModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="freeTaxiModalLabel">Taxi is now available!</h4>
            </div>
            <div class="modal-body">
              Record cost:
			  
			  <div class="form-group">
			   
			  <input type="text" class="form-control" name="myPayment" value="0" />
			  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
	</div>
	
	<script type="text/javascript">
				$(document).ready(function () {
        $('#freeTaxiModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);//Button which is clicked
             clickedButtonId= button.data('id');//Get id of the button

 	

        }) 
		
		
		$('#freeTaxiModal').on('hidden.bs.modal', function(event) {
			
			

            
			var payment = $("#freeTaxiModal input[name=myPayment]").val();
			//$("#freeTaxiModal input[name=myInput]").val(clickedButtonId);
            
			
			
					 $.ajax({
			  url: 'query.php',
			  type: 'post',
			  data: 'driverID='+clickedButtonId+'&payment='+payment,
			   success: function(output) 
			  {
				  
			  }, error: function()
			  {
				  alert('Sorry, something went wrong...');
			  }
		   });
			
			location.reload();
			})
		
		

    });
			</script>

</body>

</html>



