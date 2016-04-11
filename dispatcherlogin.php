<?php
require_once("DB/DB.php");
//get the userinput from the form 
$ID = $_POST['inputdispatcherid'];
$password = $_POST['inputpassword'];

// To protect MySQL injection 
$ID= stripslashes($ID);
$password= stripslashes($password);
$ID= mysql_real_escape_string($ID);
$password= mysql_real_escape_string($password);


	

$login=mysql_query("select DispatcherID,Password from Dispatcher where DispatcherID='$ID'");

while ($row =mysql_fetch_row($login))
{
	if(strcmp($ID , $row[0]) == 0 && $password == $row[1] ) 
		{
			echo "logged in";
			//$_SESSION["username"] = $_POST["username"] ; 
			//$_SESSION["success"] = "Welcome, ".$_POST["username"]; 
}else {
	echo "sorry";
}
	}
mysql_close($conn);
?>