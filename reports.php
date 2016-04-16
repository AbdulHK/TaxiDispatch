<?php
require_once("navbar.php")
?>
    <header class="login-bg">
        <div class="header-content">
		<img border="0" alt="Kadab"  src="img/icon.png">
		
			<div class="header-content-inner_dash">
				<!--<div class="navbar"></div>-->

				
				<div id="menu-left">
					<a href="dashboard.php">Dashboard</a>
					<a href="AssignTaxi.php">Assign Taxi</a>
					<a href="book.php">Phone Bookings</a>
					<a href="reports.php">Reports</a>
					<a href="availablebookings.php">All bookings</a>
				</div>
				<div class="header-content-inner_3" >
					
					
				  <h2>Print Reports</h2>
				
					<button id="myButton" class="btn btn-primary btn-block" >Current Empoyees</button>

						<script type="text/javascript">
						document.getElementById("myButton").onclick = function () {
						window.open('employeeReport.php', '_blank');
						};
						</script>
					
					<br><button id="myButton2" class="btn btn-primary btn-block" >Report 2</button></br>

						<script type="text/javascript">
						document.getElementById("myButton2").onclick = function () {
						location.href = "index.php";
						};
						</script>
					
					<button id="myButton3" class="btn btn-primary btn-block" >Report 3</button>

						<script type="text/javascript">
						document.getElementById("myButton3").onclick = function () {
						location.href = "index.php";
						};
						</script>
						
					<br><button id="myButton4" class="btn btn-primary btn-block" >Report 4</button></br>

						<script type="text/javascript">
						document.getElementById("myButton4").onclick = function () {
						location.href = "index.php";
						};
						</script>
						

						
				
				</div>
   

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
