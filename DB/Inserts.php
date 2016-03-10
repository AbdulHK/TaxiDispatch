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
$taxi="Insert into Taxi Values('T001','Abdul','HK','Ivy','Parnell',0873569532,'IE113',4,'05-10'),
			('T002','Arttu','HK','Central Park','D18',0873457654,'IE113-4345',5,'04-10'),
			('T003','David','HR','The Forum','Stillorgan',0851234567,'IE113-4234',4,'02-20'),
			('T004','Kuhle','Kiernan','Deansgrange','Blackrock',0896548732,'IE113-5235',4,'18-24'),
			('T005','Bruno','McKeever','The Trainangle','Rathimines',0819834576,'IE113-5432',6,'16-03'),
			('T006','Damian','bourke','DIT','Kevin St',0853569765,'IE113-5431',8,'15-24'),
			('T007','Pat','brownie','DIT','Auinger Street',0891287690,'IE113-5678',4,'01-12')
			";

if ($conn->query($taxi) === TRUE) {
    echo " Taxi rows added ";
} else {
    echo "Error adding rows " . $conn->error;
}

$dispatcher="Insert into Dispatcher Values('D001','test123','Abdul','Hakim','01-12'),
			('D002','12345Aa','Alex','Kiernan','01-12'),
			('D003','testAa12349','Kuhle','Grogan','06-12'),
			('D004','JustAtest','Bruno','Kane','07-15'),
			('D005','Dispatch','Arttu','Gietka','16-04'),
			('D006','admin','David','HR','01-12')
			";

if ($conn->query($dispatcher) === TRUE) {
    echo " <br>dispatcher rows added ";
} else {
    echo "<br>Error adding rows " . $conn->error;
}
?>
