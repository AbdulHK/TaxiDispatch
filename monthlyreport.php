<?php
session_start();
                        if ( isset($_SESSION["error"]) ) 
                            {  
                            unset($_SESSION["error"]); 
                            } 
                            if ( isset($_SESSION["success"]) ) 
                            { 
                             $_SESSION['success'];

                            }
                            if ( isset($_SESSION["custsucess"]) ) 
                            { 

                            $_SESSION['custsucess'];
                            }  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Monthly Report</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
			
        
		<h2>Monthly Report  Based on-
		<script language="javascript"> 
		var today = new Date(); 
		document.write(today.toDateString()); 
		</script>
		</h2>
		
		
        <table class="table">
		
		 <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Pickup Location</th>
                    <th>Dropoff Location</th>
                    <th>Taxi ID</th>
                    <th>Time</th>
                    <th>Total</th>
                    <th>Passengers</th>

                </tr>
            </thead>
			
			<tbody>
		
		
		 
		
		
		<?php

		require_once("DB/DB.php");

 
		$sql = "select * from Booking where MONTH(Time) = MONTH(CURDATE()) AND TaxiID IS NOT NULL;";
		$sql1="select sum(Total) as sum from Booking";

             $rs_result = mysql_query($sql); //run the query
             $total=mysql_num_rows($rs_result);

             $sum1 = mysql_query($sql1); //run the query
              $sum2 = mysql_fetch_assoc($sum1);
              $sum = $sum2['sum'];






            while($row = mysql_fetch_assoc($rs_result))
                {
				echo("<tr><td>"); 
				echo($row['BookingID']);
				echo("</td><td>");
				echo($row['PickupLoc']);
				echo("</td><td>");
				echo($row['DropoffLoc']);
				echo("</td><td>");
				echo($row['TaxiID']);
				echo("</td><td>");
				echo($row['Time']);
				echo("</td><td>");
				echo($row['Total']);
				echo("</td><td>");
				echo($row['Passengers']);
				echo("</td></tr>");
				}
				
								echo("<td>"); 

		 

		echo "total money made\t" . $sum;
				echo("</td><td>");

		echo "\t \t \tTotal bookings made: " . $total;
     					
			?>
			</tbody>
        </table>

        <!--<input type="button" value="Print this page" onclick="window.print()"> -->
		
	
    </div>
	
	<script type="text/javascript">
		$(window).load(function(){
        $('#popUpWindow').modal('show');
		
		});
	</script>
		
		
	
	<div class="modal fade" id="popUpWindow">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Print This Report?</h3>
                </div>

                

                <!-- button -->
                <div class="modal-footer">
                    <button id="printButton" class="btn btn-primary btn-block" data-dismiss="modal">OK</button>
                </div>

            </div>
        </div>
    </div>
	

	
	<script type="text/javascript">
		document.getElementById("printButton").onclick = function () {
		$("#popUpWindow").modal("hide")
		window.print();
		};
	</script>
	


</body>
</html>