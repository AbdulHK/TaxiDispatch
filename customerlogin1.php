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
		$ID = $_POST['inputcustid'];
		$password = $_POST['inputpassword'];

		// To protect MySQL injection 
		$ID= stripslashes($ID);
		$password= stripslashes($password);
		$ID= mysql_real_escape_string($ID);
		$password= mysql_real_escape_string($password);


			

		$login=mysql_query("select CustID,Password,FirstName from Customer where CustID='$ID'");

		while ($row =mysql_fetch_row($login))
		{
			if(strcmp($ID , $row[0]) == 0 && $password == $row[1] ) 
				{
                     $name=$row[2];
                    echo "logged in";
                    $_SESSION["custid"] = $ID ; 
                    $_SESSION['name'] = $name ; 
                    $_SESSION['custsucess'] = "Welcome, ".$name; 
		}else 
        {
			echo "sorry";
			$_SESSION["error"] = "Incorrect password OR username."; 


		}
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
