<?php
require_once("DB/DB.php");
//get the userinput from the form 
$firstname = $_POST['inputfirstname'];
$lastname = $_POST['inputlastname'];
$pickup = $_POST['inputpickup'];
$dropoff = $_POST['inputdropoff'];
$mobile = $_POST['inputphone'];
$datetime = $_POST['inputdatetime'];
$payment= $_POST['Payment'];

// To protect MySQL injection 
$firstname= stripslashes($firstname);
$lastname= stripslashes($lastname);
$firstname= mysql_real_escape_string($firstname);
$laatname= mysql_real_escape_string($lastname);
$pickup= stripslashes($pickup);
$dropoff= stripslashes($dropoff);
$pickup= mysql_real_escape_string($pickup);
$dropoff= mysql_real_escape_string($dropoff);
$mobile= stripslashes($mobile);
$mobile= mysql_real_escape_string($mobile);
$datetime= stripslashes($datetime);
$datetime= mysql_real_escape_string($datetime);
$payment= stripslashes($payment);
$payment= mysql_real_escape_string($payment);


$book="INSERT INTO Booking (`Firstname`,`Lastname`,`Phone`,`PickupLoc`,`DropoffLoc`,`Payment`,`BookingTime`) VALUES ('$firstname','$lastname','$mobile','$pickup','$dropoff','$payment','$datetime')";



mysql_query($book);
mysql_close($conn);
?>