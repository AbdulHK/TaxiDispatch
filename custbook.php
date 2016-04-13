<?php
require_once("navbar.php")
?>

    <header class="login-bg">
        <div class="header-content">
			<img border="0" alt="Kadab"  src="img/icon.png">
            <div class="header-content-inner">
			<div class="header-content-inner_2"> 							<!-- Orange BOX (inner_2) -->
			

			
			<div class="content-inner-holder">
				<h2>Booking</h2>
			  <form role="form" class="form-horizontal" action="custbook1.php" method="post" name="custbook">
				<div class="form-group">
				<label for="inputfirstname" class="col-md-4 control-label">Customer ID</label>
				<div class="col-md-8">
				<input type="text" class="form-control" id="inputcustid" name="inputcustid" placeholder="Enter your Customer ID" required value=" <?php
				                        $ID=$_SESSION["custid"];
				                        echo $ID;
 ?>"/>
				</div>
				</div>
				<div class="form-group">
					<label for="inputpickup" class="col-md-4">Pick Up Location</label>
					<div class="col-md-8">
					<input type="text" class="form-control" id="inputpickup" name="inputpickup" placeholder="Enter Pick Up Location" required></input>
					</div>
				</div>

				<div class="form-group">
					<label for="inputdropoff" class="col-md-4">Drop Off Location</label>
					<div class="col-md-8">
					<input type="text" class="form-control" id="inputdropoff" name="inputdropoff" placeholder="Enter Drop Off Location"></input>
					</div>
				</div>

				<div class="form-group">
					<label for="inputdatetime" class="col-md-4">Date and Time</label>
					<div class="col-md-8">
					<input type="datetime-local" class="form-control" id="inputdatetime" name="inputdatetime" required></input>
					</div>
					       
				</div>
				<div class="form-group">
					<label for="inputpassengers" class="col-md-4">number of passengers</label>
                    <div class="col-md-8">
                    <input type="number" class="form-control" id="inputpassengers" name="inputpassengers" placeholder="No of passenger" min="1" max="7"></input>
					</div>
				</div>
				<div class="form-group">
					<label for="inputpayment" class="col-md-4">Payment</label>
					<div class="col-md-8 ">
					<label>
					<input type="radio" name="Payment" value="Cash" checked id="Payment">Cash</label>
					<label>
					<input type="radio" name="Payment" value="Card" id="Payment">Card</label>

					</div>
				</div>
				
				<button type="submit" class="btn btn-primary">Submit</button>
			  </form>
			  </div>
			 </div>
            </div>
        </div>
    </header>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

     <script src="js/validation.js"></script>  
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
