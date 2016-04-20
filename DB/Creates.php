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
$drop = "DROP TABLE Booking,Dispatcher,Taxi,Customer";
if ($conn->query($drop) === TRUE) {
    echo "Tables dropped";
} else {
    echo "Error dropping table: " . $conn->error;
}

// sql to create table
$cust = "CREATE TABLE Customer (
CustID INTEGER(6) PRIMARY KEY AUTO_INCREMENT, 
Password VARCHAR(30) NOT NULL,
FirstName VARCHAR(30) NOT NULL,
LastName VARCHAR(50) NOT NULL,
Phone Integer NOT NULL,
Address1 VARCHAR(50),
Address2 VARCHAR(50),
Email VARCHAR(20),
Deleted VARCHAR(1) DEFAULT 'N'
)";

if ($conn->query($cust) === TRUE) {
    echo "<br>Table MyGuests created successfully";
} else {
    echo "<br>Error creating table: " . $conn->error;
}
$Taxi = "CREATE TABLE Taxi (
TaxiID INTEGER(6) PRIMARY KEY AUTO_INCREMENT, 
FirstName VARCHAR(30) NOT NULL,
LastName VARCHAR(50) NOT NULL,
Address1 VARCHAR(50),
Address2 VARCHAR(50),
PhoneNo Integer(10) NOT NULL,
Licenseplate VARCHAR(20) NOT NUlL UNIQUE,
carsize INTEGER NOT NULL,
StartTime TIME  NOT NULL,
FinishTime TIME NOT NULL,
Stats VARCHAR(50) NOT NULL,
Deleted VARCHAR(1) DEFAULT 'N'
)";
if ($conn->query($Taxi) === TRUE) {
    echo "<br>Table Taxi created successfully";
} else {
    echo "<br>Error creating table: " . $conn->error;
}
$Dispatcher = "CREATE TABLE Dispatcher (
DispatcherID INTEGER(6) PRIMARY KEY AUTO_INCREMENT, 
Password VARCHAR(30) NOT NULL,
FirstName VARCHAR(30) NOT NULL,
LastName VARCHAR(50) NOT NULL,
Deleted VARCHAR(1) DEFAULT 'N',
StartTime TIME  NOT NULL,
FinishTime TIME NOT NULL
 )";
 if ($conn->query($Dispatcher) === TRUE) {
    echo "<br>Table Dispatcher created successfully ";
} else {
    echo "<br>Error creating table: " . $conn->error;
}
$Booking = "CREATE TABLE Booking (
BookingID INTEGER(6) PRIMARY KEY AUTO_INCREMENT, 
CustID INTEGER(6) ,
FirstName VARCHAR(30),
LastName VARCHAR(30),
Phone INTEGER(10),
Passengers INTEGER,
TaxiID INTEGER(6),
DispatcherID INTEGER(6),
PickupLoc VARCHAR(50) NOT NULL,
DropoffLoc VARCHAR(50),
Payment VARCHAR(20),
Total DECIMAL,
Time TIMESTAMP,
BookingTime DATETIME,
Deleted VARCHAR(1) DEFAULT 'N',
Completed TINYINT(1) NOT NULL DEFAULT '0',
FOREIGN KEY (CustID) REFERENCES Customer(CustID),
FOREIGN KEY (TaxiID) REFERENCES Taxi(TaxiID),
FOREIGN KEY (DispatcherID) REFERENCES Dispatcher(DispatcherID)
 )";
 if ($conn->query($Booking) === TRUE) {
    echo "<br>Table Booking created successfully";
} else {
    echo "<br>Error creating table: " . $conn->error;
}

$conn->close();
?>