
<?php

// PHP for AJAX database connection in updatetaxi

require_once("DB/DB.php");

$driverID = $_POST['driverID'];

mysql_query("UPDATE taxi SET Stats='Available' WHERE TaxiID= '$driverID' ");

?>


