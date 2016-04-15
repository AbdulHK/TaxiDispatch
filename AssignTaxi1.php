<?php

		require_once("navbar.php");
		require_once("DB/DB.php");

 		//$book= $_POST["bookingid"];
		$total = $_POST["total"];
        $TaxiID = $_POST["taxiid"];
        $ID=$_SESSION["dispatcherid"];

		$sql="UPDATE Booking Set Total='$total',TaxiID='$TaxiID',DispatcherID='$ID'
			Where BookingID='$bookingid'";

				if(mysql_query($sql)== TRUE)
				{
				echo "update sucessful";
				}
				else
				{
					echo" something is not quite right.";
				}
				mysql_close($conn);
				 ?>
