<?php
 class Person{

 	protected $Firstname;
 	protected $Surname;
 	protected $Address1;
 	protected $Address2;
 	protected $Phone;
 	protected $ID;
 	protected $Password;
 	protected $PayPalAcc;
 	protected $Deleted;
 	function __construct( )	{ 
 	//we pass in params to consutrtor to create objects
 		//whatever values in the form values goes between the single quotes..
 		$this->ID= $_POST[''];
 		$this->Password= $_POST[''];
 		$this->Firstname= $_POST[''];
 		$this->Surname= $_POST[''];
 		$this->Address1= $_POST[''];
 		$this->Address2= $_POST[''];
 		$this->Phone= $_POST['']; 
 		$this->PayPalAcc= $_POST[''];
 	
 	}
 	//getters
 	function getFirstname(){
 		return $this->Firstname;
 	}function getSurname(){
 		return $this->Surname;
 	}function getAddress1(){
 		return $this->Address1;
 	}function getAddress2(){
 		return $this->Address2;
 	}function getPhone(){
 		return $this->Phone;
 	}function getID(){
 		return $this->ID;
 	}function getPassword(){
 		return $this->Password;
 	}function getPayPalAcc(){
 		return $this->PayPalAcc;
 	}	
 	//setters
 	// do not forget to add variables in the setters methods
 	function setFirstname($Firstname){
 		return $this->Firstname;
 	}function setSurname($Surname){
 		return $this->Surname;
 	}function setAddress1($Address1){
 		return $this->Address1;
 	}function setAddress2($Address2){
 		return $this->Address2;
 	}function setPhone($Phone){
 		return $this->Phone;
 	}function setID($ID){
 		return $this->ID;
 	}function setPassword($Password){
 		return $this->Password;
 	}function setPayPalAcc($PayPalAcc){
 		return $this->PayPalAcc;
 	}
 }
?>