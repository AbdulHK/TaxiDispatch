<?php

		require_once("navbar.php");
		require_once("DB/DB.php");
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
				echo '<div class="header-content-inner_2" >';
				echo '<div class="content-inner-holder">';

				if ( isset($_SESSION["success"]) ) 
                            { 

                            
 		$ID= $_SESSION["Booking"];
		$total = $_POST['total'];
        $TaxiID = $_POST['taxiid'];
        $dID=$_SESSION["dispatcherid"];
        $psngr=$_SESSION["psngrs"];
        $sql1="select carsize from Taxi where TaxiID='$TaxiID'";

		$sql="UPDATE Booking Set Total='$total',TaxiID='$TaxiID',DispatcherID='$dID'
			Where BookingID='$ID'";
			$rs_result = mysql_query($sql1); //run the query
			$carsize=mysql_fetch_array($rs_result);
			if($carsize[0] >= $psngr)
			{
				if(mysql_query($sql)== TRUE)
				{
				echo "update sucessful";
				}
				else
				{
					echo" check the taxi ID!.";
				}
			}
			else
			{
				echo "taxi wont fit.";
				
			}
						echo '</div>';

			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			mysql_close($conn);
		}
		else
		{
			echo "only a dispatcher is allowed here";
		}
				 ?>
