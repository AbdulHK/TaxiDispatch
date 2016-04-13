<?php
require_once("navbar.php")
?>

    <header class="index-bg">
        <div class="header-content">
			<img border="0" alt="Kadab"  src="img/icon.png">
            <div class="header-content-inner">
			
				<form role="form" class="container-fluid" action="book.php" method="POST">
					<div class="form-group">
					<div class="controls controls-row row-fluid">
						<input type="text" class="Formsize" placeholder="Pick-up" /><input type="text" class="Formsize" placeholder="Drop-Off" /><input type="datetime-local" class="Formsize" placeholder="Date" /><button href="#about" class="Btnsize btn-primary btn-xl">Book</button>
					</div>
					</div>
				</form>
				
                <h1>Welcome to Kadab Cabs</h1>
                <hr>
                <a href="index.php" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Need a Cab</h2>
                    <hr class="light">
                    <p class="text-faded">Kadab cabs will take you where you need to go</p>
                    <a href="book.php" class="page-scroll btn btn-default btn-xl">Book a Cab!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Kadab cabs will get you to your destination </h2>
                    <hr class="primary">
                    <p>Get in Touch</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>Phone 123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">kadabcabs@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>

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
