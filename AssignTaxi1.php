<?php

		require_once("navbar.php");
		require_once("DB/DB.php");


 		$booking= $_GET["bookingid"];
		$total = $_POST["total"];
        $TaxiID = $_POST["taxiid"];
        $ID=$_SESSION["dispatcherid"];

		$sql="UPDATE Booking Set Total='$total',TaxiID='$TaxiID',DispatcherID='$ID'
			Where BookingID='$booking'";

				if(mysql_query($sql)== TRUE)
				{
				echo "update sucessful";
				 echo "Booking ID: " ."$booking";

				}
				else
				{
					echo" something is not quite right.";
				}
				mysql_close($conn);
				 ?>
