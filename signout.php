<?php 
session_start(); 
unset($_SESSION["success"]);
session_destroy(); 
header("Location: index.php");
?>
