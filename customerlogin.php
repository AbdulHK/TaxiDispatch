<?php
require_once("navbar.php")
?>
    <header class="login-bg">
        <div class="header-content">
			<img border="0" alt="Kadab"  src="img/icon.png">
            <div class="header-content-inner">
			<div class="header-content-inner_2">
			<div class="content-inner-holder">
				<h2> Customer Login</h2>
			  <form role="form" action="customerlogin1.php" method="POST">
				<div class="form-group">
				  <label for="text">ID:</label>
				  <input type="text" class="form-control" name="inputcustid" id="inputcustid" placeholder="enter your customer ID here">
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" name="inputpassword"  id="inputpassword" placeholder="Enter password here">
				
				<button type="submit" class="btn btn-primary">Submit</button>
			  </form>
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
