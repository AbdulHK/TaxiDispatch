<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
} 
$taxi="Insert into Taxi (`TaxiID`, `FirstName`, `LastName`, `Address1`, `Address2`, `PhoneNo`, `Licenseplate`, `carsize`, `WorkingHours`)  
	  Values('T005','Abdul','HK','Ivy','Parnell',0873569532,'IE113',4,'05-10'),
			('T003','Abdulelah','HK','Ivy','Parnell',0873569532,'IE113',5,'05-10'),
			('T004','David','HR','Ivy','Parnell',0873569532,'IE113',9,'05-10')
			";

if ($conn->query($taxi) === TRUE) {
    echo "rows added ";
} else {
    echo "Error adding rows " . $conn->error;
}
?>
