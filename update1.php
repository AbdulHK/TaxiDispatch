<?php
require_once("navbar.php")
?>

    <header class="login-bg">
        <div class="header-content">
			<img border="0" alt="Kadab"  src="img/icon.png">
            <div class="header-content-inner">
			<div class="header-content-inner_2"> 							<!-- Orange BOX (inner_2) -->

			
			<div class="content-inner-holder">

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
        $ID=$_SESSION["custid"];
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

        $cust="UPDATE Customer SET Password='$pass',FirstName='$firstname',LastName='$lastname',Phone='$mobile',Address1='$addr1',Address2='$addr2',PayPalAcc='$email' Where CustID='$ID'";

		if(mysql_query($cust)== TRUE)
		{
		echo "update sucessful";
		}
		else
		{
			echo" something is not quite right.";
		}
		mysql_close($conn);

        ?>

					
			  </div>
			 </div>
            </div>
        </div>
    </header>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
