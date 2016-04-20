
<?php

// PHP for AJAX database connection in updatetaxi

require_once("DB/DB.php");

$rating = $_POST['rating'];

mysql_query("UPDATE taxi SET Stats='Available' WHERE TaxiID= '$rating' ");

?>


