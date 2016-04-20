
<?php

// PHP for AJAX database connection in updatetaxi

require_once("DB/DB.php");

$driverID = $_POST['driverID'];
$payment = $_POST['payment'];

mysql_query("UPDATE taxi SET Stats='Available' WHERE TaxiID= '$driverID' ");

mysql_query("UPDATE Booking SET Total='$payment', Completed=1 WHERE TaxiID= '$driverID' AND Completed=0");


?>


