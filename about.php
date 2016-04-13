<?php
require_once("navbar.php")
?>
 <header class="login-bg">
        <div class="header-content">
            <img border="0" alt="Kadab"  src="img/icon.png">
            <div class="header-content-inner">
            <div class="header-content-inner_2">                            <!-- Orange BOX (inner_2) -->

            
            <div class="content-inner-holder">
                        <?php
require_once("DB/DB.php");
                if(isset($_SESSION["custsucess"])) 
                        {
                        $ID=$_SESSION["custid"];
                        $details=mysql_query("select * from Customer where CustID='$ID'");
                while($row = mysql_fetch_array($details))
                {
                    echo "You are a customer <br>".
                    "ID:{$row[0]}  <br> ".
                    "First Name:{$row[2]}  <br> ".
                    "Last Name :{$row[3]}  <br> ".
                    "Phone Number:{$row[4]}  <br> ".
                    "Address 1 :{$row[5]}  <br> ".
                    "Address 2:{$row[6]}  <br> ".
                    "Email :{$row[7]}  <br> ";
                    
                }
            }
                elseif (isset($_SESSION["success"])) 
                {
                        $ID=$_SESSION["dispatcherid"];
                        $details=mysql_query("select * from Dispatcher where DispatcherID='$ID'");
                    while($row = mysql_fetch_array($details))
                    {
                        echo "You are a Dispatcher. <br>".
                        "ID:{$row[0]}  <br> ".
                        "First Name:{$row[2]}  <br> ".
                        "Last Name :{$row[3]}  <br> ".
                        "Start Time:{$row[5]}  <br> ".
                        "Finish Time:{$row[6]}  <br> ";
                        
                    }    
                        
                }

                        else
                        { //if session was vaild
                        
                         echo" you must be logged in to view this page.";
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
