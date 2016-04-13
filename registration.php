<?php
require_once("navbar.php")
?>

    <header class="login-bg">
        <div class="header-content">
			<img border="0" alt="Kadab"  src="img/icon.png">
            <div class="header-content-inner">
			<div class="header-content-inner_2">
			<div class="content-inner-holder">
				<h2>Registration</h2>
			  <form role="form" name="registration" method="post" class="form-horizontal" action="registration1.php">
				<div class="form-group">
				<label for="inputfirstname" class="col-md-4 control-label">First Name*</label>
				<div class="col-md-8">
				<input type="text" class="form-control" placeholder="Enter First Name" id="inputfirstname" name="inputfirstname" required/>
				</div>
				</div>
				<div class="form-group">
				<label for="inputlastname" class="col-md-4 control-label">Last Name</label>
				<div class="col-md-8">
				<input type="text" class="form-control" placeholder="Enter Last Name" id="inputlastname" name="inputlastname" />
				</div>
				</div>
				<div class="form-group">
					<label for="inputemail" class="col-md-4">E-mail*</label>
					<div class="col-md-8">
					<input type="email" class="form-control" placeholder="Enter E-mail" name="inputemail" id="inputemail" onchange="validateEmail()" required></input>
					</div>
				</div>
				<div class="form-group">
					<label for="inputphone" class="col-md-4">Phone*</label>
					<div class="col-md-8">
					<input type="text" maxlength="10" pattern="[0-9]{10}" class="form-control" id="inputphone" placeholder="Enter Phone"  required name="inputphone"></input>
					</div>
				</div>
				<div class="form-group">
					<label for="inputaddress" class="col-md-4">Address</label>
					<div class="col-md-8">
					<input type="text" class="form-control" id="inputaddress" placeholder="Enter Address" name="inputaddress" ></input>
					<input type="text" class="form-control" id="inputaddress2" placeholder="Enter Address 2" name="inputaddress2"></input>
					</div>
				</div>
				<div class="form-group">
					<label for="inputpassword" class="col-md-4">Password*</label>
					<div class="col-md-8">
					<input type="password" class="form-control" name="inputpassword" id="inputpassword" required >
					</div>
				</div>
				<div class="form-group">
					<label for="inputconfirmpassword" class="col-md-4">Confirm Password*</label>
					<div class="col-md-8">
					<input type="password" name="inputconfirmpassword" class="form-control" id='inputconfirmpassword' required onchange="myFunction()">
					</div>
				</div>
				<button type="submit" class="btn btn-primary" value="Send">Submit</button>
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
