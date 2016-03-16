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
$taxi="Insert into Taxi (`TaxiID`,`FirstName`,`LastName`,`Address1`,`Address2`,`PhoneNo`,`Licenseplate`,`carsize`,`StartTime`,`FinishTime`)
	  Values(001,'Abdul','HK','Ivy','Parnell',0873569532,'IE113',4,'05:40','10:00'),
	  		(002,'Arttu','HK','Central Park','D18',0873457654,'IE113-4345',5,'05:43','10:00'),
			(003,'David','HR','The Forum','Stillorgan',0851234567,'IE113-4234',4,'05:43','10:00'),
			(004,'Kuhle','Kiernan','Deansgrange','Blackrock',0896548732,'IE113-5235',4,'05:43','10:00'),
			(005,'Bruno','McKeever','The Trainangle','Rathimines',0819834576,'IE113-5432',6,'05:43','10:00'),
			(006,'Damian','bourke','DIT','Kevin St',0853569765,'IE113-5431',8,'05:43','10:00'),
			(007,'Pat','brownie','DIT','Auinger Street',0891287690,'IE113-5678',4,'05:43','10:00')
			";

if ($conn->query($taxi) === TRUE) {
    echo " Taxi rows added ";
} else {
    echo "Error adding rows " . $conn->error;
}

$dispatcher="Insert into Dispatcher (`DispatcherID`,`Password`,`FirstName`,`LastName`,`StartTime`,`FinishTime`)
	  Values(001,'test123','Abdul','Hakim','05:40','10:00'),
			(002,'12345Aa','Alex','Kiernan','05:40','10:00'),
			(003,'testAa12349','Kuhle','Grogan','05:40','10:00'),
			(004,'JustAtest','Bruno','Kane','05:40','10:00'),
			(005,'Dispatch','Arttu','Gietka','05:40','10:00'),
			(006,'admin','David','HR','05:40','10:00')
			";

if ($conn->query($dispatcher) === TRUE) {
    echo " <br>dispatcher rows added ";
} else {
    echo "<br>Error adding rows " . $conn->error;
}
$cust="INSERT INTO Customer (`CustID`,`Password`,`FirstName`,`LastName`,`Phone`,`Address1`,`Address2`,`PayPalAcc`) VALUES (001,'test123','Abdul','HK',0875347654,'Parnell','ivy ex','aih2090@gmail.com')";

if ($conn->query($cust) === TRUE) {
    echo " <br>customer rows added ";
} else {
    echo "<br>Error adding rows " . $conn->error;
}
 


?>
