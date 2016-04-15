<?php
require_once("navbar.php")
?>

    <header class="login-bg">
        <div class="header-content">
			<img border="0" alt="Kadab"  src="img/icon.png" href="index.php">
            <div class="header-content-inner">
             <?php
			if(isset($_SESSION['success']))
			{
				?>
				<div id="menu-left">
					<a href="dashboard.php">Dashboard</a>
					<a href="AssignTaxi.php">Assign Taxi</a>
					<a href="book.php">Phone Bookings</a>
					<a href="#about">Reports</a>
					<a href="#about">Find Out More</a>
				</div>
				<?php
}
?>
			<div class="header-content-inner_2"> 							<!-- Orange BOX (inner_2) -->
			
				
			
			<div class="content-inner-holder">
				<h2>Booking</h2>
			  <form role="form" class="form-horizontal" action="book1.php" method="post">
				<div class="form-group">
				<label for="inputfirstname" class="col-md-4 control-label">First Name</label>
				<div class="col-md-8">
				<input type="text" class="form-control" id="inputfirstname" name="inputfirstname" placeholder="Enter First Name" />
				</div>
				</div>
				<div class="form-group">
				<label for="inputlastname" class="col-md-4 control-label">Last Name</label>
				<div class="col-md-8">
				<input type="text" class="form-control" id="inputlastname" name="inputlastname" placeholder="Enter Last Name" />
				</div>
				</div>
				<div class="form-group">
					<label for="inputphone" class="col-md-4">Phone</label>
					<div class="col-md-8">
					<input type="number-local" class="form-control" maxlength="10" pattern="[0-9]{10}" id="inputphone" name="inputphone" placeholder="Enter Phone" ></input>
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputpickup" class="col-md-4">Pick Up Location</label>
					<div class="col-md-8">
					<input type="text" class="form-control" id="inputpickup" name="inputpickup" placeholder="Enter Pick Up Location" value="<?php
					 if(isset($_POST['inputpickup']))
					 {
					 	$inputpickup=$_POST['inputpickup'];
					 echo "$inputpickup"; 
					}
					 	?>">
					 	</input>
					</div>
				</div>

				<div class="form-group">
					<label for="inputdropoff" class="col-md-4">Drop Off Location</label>
					<div class="col-md-8">
					<input type="text" class="form-control" id="inputdropoff" name="inputdropoff" placeholder="Enter Drop Off Location" value="<?php
					 if(isset($_POST['inputdropoff']))
					 {
					 	$inputdropoff=$_POST['inputdropoff'];
					 echo "$inputdropoff"; 
					}
					 	?>"></input>
					</div>
				</div>

				<div class="form-group">
					<label for="inputdatetime" class="col-md-4">Date and Time</label>
					<div class="col-md-8">
					<input type="datetime-local" class="form-control" id="inputdatetime" name="inputdatetime" value="<?php
					 if(isset($_POST['inputdatetime']))
					 {
					 	$inputdatetime=$_POST['inputdatetime'];
					 echo "$inputdatetime"; 
					}
					 	?>"></input>
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
					<input type="radio" name="Payment" value="Cash" checked id="Payment"> 
					Cash
					</label>
					<label>
					<input type="radio" name="Payment" value="Card" id="Payment">
					Card
					</label>

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
