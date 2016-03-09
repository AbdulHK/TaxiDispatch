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
$drop = "DROP TABLE Booking,Status,Dispatcher,Taxi,Customer";
if ($conn->query($drop) === TRUE) {
    echo "Tables dropped";
} else {
    echo "Error dropping table: " . $conn->error;
}

// sql to create table
$cust = "CREATE TABLE Customer (
CustID VARCHAR(6) PRIMARY KEY, 
Password VARCHAR(30) NOT NULL,
FirstName VARCHAR(30) NOT NULL,
LastName VARCHAR(50) NOT NULL,
Phone Integer NOT NULL,
Address1 VARCHAR(50),
Address2 VARCHAR(50),
PayPalAcc VARCHAR(20)
)";

if ($conn->query($cust) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$Taxi = "CREATE TABLE Taxi (
TaxiID VARCHAR(6) PRIMARY KEY, 
FirstName VARCHAR(30) NOT NULL,
LastName VARCHAR(50) NOT NULL,
Address1 VARCHAR(50),
Address2 VARCHAR(50),
PhoneNo Integer(10),
Licenseplate VARCHAR(20),
carsize INTEGER,
WorkingHours VARCHAR(5)
)";
if ($conn->query($Taxi) === TRUE) {
    echo "Table Taxi created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$Dispatcher = "CREATE TABLE Dispatcher (
DispatcherID VARCHAR(6) PRIMARY KEY, 
Password VARCHAR(30) NOT NULL,
FirstName VARCHAR(30) NOT NULL,
LastName VARCHAR(50) NOT NULL,
WorkingHours VARCHAR(5)
 )";
 if ($conn->query($Dispatcher) === TRUE) {
    echo "Table Dispatcher created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$Booking = "CREATE TABLE Booking (
BookingID INT(6) PRIMARY KEY, 
CustID VARCHAR(6) NOT NULL,
TaxiID VARCHAR(6) NOT NULL,
DispatcherID VARCHAR(6),
PickupLoc VARCHAR(50) NOT NULL,
DropoffLoc VARCHAR(50),
Payment VARCHAR(20),
Total DECIMAL,
time TIMESTAMP,
FOREIGN KEY (CustID) REFERENCES Customer(CustID),
FOREIGN KEY (TaxiID) REFERENCES Taxi(TaxiID),
FOREIGN KEY (DispatcherID) REFERENCES Dispatcher(DispatcherID)
 )";
 if ($conn->query($Booking) === TRUE) {
    echo "Table Booking created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$Status = "CREATE TABLE Status (
DispatcherID VARCHAR(6) PRIMARY KEY, 
TaxiID VARCHAR(6),
Status VARCHAR(20),
QueueNo INTEGER,
FOREIGN KEY (TaxiID) REFERENCES Taxi(TaxiID),
FOREIGN KEY (DispatcherID) REFERENCES Dispatcher(DispatcherID)
 )";
 if ($conn->query($Status) === TRUE) {
    echo "Table Dispatcher created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>