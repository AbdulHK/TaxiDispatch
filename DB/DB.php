<?php
$servername = "localhost";
$username = "root";
$password = "";
//$dbname = "myDB";

// Create connection
$conn =mysql_connect($servername, $username, $password);
// Check connection

    if ( $conn === FALSE ) die('Fail message');
    if ( mysql_select_db("myDB") === FALSE ) die("Fail message");
?>