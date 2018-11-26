<?php 
session_start();
include 'config.php';
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}
?>	


<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>About Us</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="../temp-fiyeo/css/linearicons.css">
			<link rel="stylesheet" href="../temp-fiyeo/css/font-awesome.min.css">
			<link rel="stylesheet" href="../temp-fiyeo/css/bootstrap.css">
			<link rel="stylesheet" href="../temp-fiyeo/css/magnific-popup.css">
			<link rel="stylesheet" href="../temp-fiyeo/css/nice-select.css">					
			<link rel="stylesheet" href="../temp-fiyeo/css/animate.min.css">
			<link rel="stylesheet" href="../temp-fiyeo/css/owl.carousel.css">
			<link rel="stylesheet" href="../temp-fiyeo/css/main.css">
		</head>
		<body>

<?php
if (isset ($_SESSION['id'])!="") {
   include ("header-loggedin.php");
}
else {
include("header-fiyeo.php");
}
?>


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								About Us				
							</h1>	
							<p class="text-white link-nav"><a href="index-fiyeo.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about-us.php"> About Us</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start service Area -->
			<section class="service-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>Why Choose Us</h1>
							<p>
								F I Y E O is Indonesia’s No.1 event organizer services website that is intended for event organizers and clients. Event organizers can manage their business, connect with new & existing clients, and showcase their services. Clients can discover more about event organizers services, and find which event organizers suits them the best anytime and anywhere.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-license"></span>Informative</h4>
								<p>
									Discover lots of informations about event organizers including their profile, services, portfolios and testimonials.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-thumbs-up"></span>Convenient</h4>
								<p>
									No more wasting time. Find and request event organizer services instantly with just few clicks.
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-checkmark-circle"></span>Trusted</h4>
								<p>
									We made sure to provide the best service and keep all informations safe. 
								</p>								
							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End service Area -->						

	<!-- Start callto-action Area -->
			<section class="callto-action-area section-gap" style="padding: 80px 0;" id="join">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Join us today without any hesitation</h1>
								<p class="text-white">We will connect you with customers so you can improve your business performance.</p>
								<a class="primary-btn" href="../eo/register-eo.php">Register as EO</a>
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End calto-action Area -->

			
		
			<!-- start footer Area -->		
			<footer class="footer-area section-gap" style="padding:50px 0; height:345px;">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6>F I Y E O</h6>
								<ul class="footer-nav">
                                    <li><a href="about-us.php">About Us</a></li>
									<li><a href="privacy-policy.php">Privacy Policy</a></li>
									<li><a href="#">Terms & Conditions</a></li>
									
									
								</ul>
							</div>
						</div>
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Contact Us</h6>
								<p>E-mail : customerservice@fiyeo.com</p>
                                <p>Phone : (+62) 81250381345</p>	
							</div>
						</div>
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget mail-chimp justify-content-center">
								<h6 class="mb-20">Stay Connected With Us</h6>
								<ul class="d-flex footer-social justify-content-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
                           <a href="#"><i class="fa fa-instagram"></i></a>
								</ul>
							</div>
						</div>						
					</div>

					<div class="row footer-bottom d-flex justify-content-center" style="padding: 40px;">
						<p class="footer-text m-0 text-white">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<img src="img/irene/fiyeo2.png" alt=""> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | PT. XYZ
						</p>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->			

			<script src="../temp-fiyeo/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="../temp-fiyeo/js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="../temp-fiyeo/js/easing.min.js"></script>			
			<script src="../temp-fiyeo/js/hoverIntent.js"></script>
			<script src="../temp-fiyeo/js/superfish.min.js"></script>	
			<script src="../temp-fiyeo/js/jquery.ajaxchimp.min.js"></script>
			<script src="../temp-fiyeo/js/jquery.magnific-popup.min.js"></script>	
			<script src="../temp-fiyeo/js/owl.carousel.min.js"></script>			
			<script src="../temp-fiyeo/js/jquery.sticky.js"></script>
			<script src="../temp-fiyeo/js/jquery.nice-select.min.js"></script>			
			<script src="../temp-fiyeo/js/parallax.min.js"></script>		
			<script src="../temp-fiyeo/js/mail-script.js"></script>	
			<script src="../temp-fiyeo/js/main.js"></script>	
		</body>
	</html>



