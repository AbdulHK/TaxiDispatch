<?php
require_once("DB/DB.php");
//get the userinput from the form 
$firstname = $_POST['inputfirstname'];
$lastname = $_POST['inputlastname'];
$pass = $_POST['inputpassword'];
$addr1 = $_POST['inputaddress'];
$addr2 = $_POST['inputaddress2'];
$mobile = $_POST['inputphone'];
$email = $_POST['inputemail'];

// To protect MySQL injection 
$pass= stripslashes($pass);
$pass= mysql_real_escape_string($pass);
$firstname= stripslashes($firstname);
$lastname= stripslashes($lastname);
$firstname= mysql_real_escape_string($firstname);
$laatname= mysql_real_escape_string($lastname);
$addr1= stripslashes($addr1);
$addr2= stripslashes($addr2);
$addr1= mysql_real_escape_string($addr1);
$addr2= mysql_real_escape_string($addr2);
$mobile= stripslashes($mobile);
$mobile= mysql_real_escape_string($mobile);
$email= stripslashes($email);
$email= mysql_real_escape_string($email);
//add it to the users table

$cust="INSERT INTO Customer (`Password`,`FirstName`,`LastName`,`Phone`,`Address1`,`Address2`,`PayPalAcc`) VALUES ('$pass','$firstname','$lastname','$mobile','$addr1','$addr2','$email')";
/*
if ($conn->query($cust) === TRUE) 
{

    require_once"registeration.html";
} else 
{
	require_once"index.html";
}
*/
mysql_query($cust);
mysql_close($conn);
require_once("index.html");
?>