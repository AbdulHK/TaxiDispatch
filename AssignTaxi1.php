<?php

		require_once("navbar.php");
		require_once("DB/DB.php");


 		$ID= $_SESSION["Booking"];
		$total = $_POST['total'];
        $TaxiID = $_POST['taxiid'];
        $dID=$_SESSION["dispatcherid"];
        $psngr=	$_SESSION["psngrs"];
		$sql1="select carsize from Taxi where TaxiID='$TaxiID'"

		$sql="UPDATE Booking Set Total='$total',TaxiID='$TaxiID',DispatcherID='$dID'
			Where BookingID='$ID'";
			$rs_result = mysql_query($sql); //run the query
				if( rs_result> $psngrs)
				{
					echo "yey";
				}
				if(mysql_query($sql)== TRUE)
				{
				echo "update sucessful";
				}
				else
				{
					echo" something is not quite right.";
				}
				mysql_close($conn); ?>
				 ?>
