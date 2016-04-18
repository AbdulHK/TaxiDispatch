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
$taxi="Insert into Taxi (`FirstName`,`LastName`,`Address1`,`Address2`,`PhoneNo`,`Licenseplate`,`carsize`,`StartTime`,`FinishTime`,`Stats`)
	  Values('Abdul','HK','Ivy','Parnell',0873569532,'IE113',4,'05:40','10:00','Available'),
	  		('Arttu','HK','Central Park','D18',0873457654,'IE413-4345',5,'05:43','10:00','Available'),
			('David','HR','The Forum','Stillorgan',0851234567,'IE153-4234',4,'05:43','10:00','Available'),
			('Kuhle','Kiernan','Deansgrange','Blackrock',0896548732,'IE133-5235',4,'05:43','10:00','Available'),
			('Bruno','McKeever','The Trainangle','Rathimines',0819834576,'IE313-5432',6,'05:43','10:00','Available'),
			('Damian','bourke','DIT','Kevin St',0853569765,'IE11-5431',8,'05:43','10:00','Available'),
			('Pat','brownie','DIT','Auinger Street',0891287690,'IE13-5678',4,'05:43','10:00','Available'),
			('taxi1','brownie','DIT','Auinger Street',0891287690,'IE13-7878',8,'05:43','10:00','Available'),
			('Taxi2','brownie','DIT','Auinger Street',0891287690,'IE13-4598',8,'05:43','10:00','Available'),
			('Taxi3','brownie','DIT','Auinger Street',0891287690,'IE13-4397',8,'05:43','10:00','Available')
			";

if ($conn->query($taxi) === TRUE) {
    echo " Taxi rows added ";
} else {
    echo "Error adding rows " . $conn->error;
}

$dispatcher="Insert into Dispatcher (`Password`,`FirstName`,`LastName`,`StartTime`,`FinishTime`)
	  Values('test123','Abdul','Hakim','05:40','10:00'),
			('12345Aa','Alex','Kiernan','05:40','10:00'),
			('testAa12349','Kuhle','Grogan','05:40','10:00'),
			('JustAtest','Bruno','Kane','05:40','10:00'),
			('Dispatch','Arttu','Gietka','05:40','10:00'),
			('admin','David','HR','05:40','10:00')
			";

if ($conn->query($dispatcher) === TRUE) {
    echo " <br>dispatcher rows added ";
} else {
    echo "<br>Error adding rows " . $conn->error;
}
$cust="INSERT INTO Customer (`Password`,`FirstName`,`LastName`,`Phone`,`Address1`,`Address2`,`Email`) VALUES ('test123','Abdul','HK',0875347654,'Parnell','ivy ex','aih2090@gmail.com')";

if ($conn->query($cust) === TRUE) {
    echo " <br>customer rows added ";
} else {
    echo "<br>Error adding rows " . $conn->error;
}
 


?>
