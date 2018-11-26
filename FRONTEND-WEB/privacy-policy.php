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
		<title>Privacy Policy</title>

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
								Privacy Policy				
							</h1>	
							<p class="text-white link-nav"><a href="index-fiyeo.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="privacy-policy.php"> Privacy Policy</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start service Area -->
			<section class="service-area section-gap" id="service" style="margin-top:-30px; margin-bottom:-30px">
				<div class="container" style="font-size:16px">
				<div class="col-lg-12" style="">
				<div class="">
                <ol class="ordered-list">
                <li><span>User information; the information you give us directly like your name, email, password will be collected</span></li>
                <br>
				<li><span>The informations will be used for account verification when you register, user authentication when you login, appointment reminder notification, and also for website improvements.</span></li>
                <br>
				<li><span>We may share the photos you given to us directly and promise not to sell or rent any of your personal information to anyone without your permission.</span>
				</li>
                <br>
				<li><span>We take security measures to help safeguard your personal information from unauthorized access and disclosure. However, no system can be completely secure. Therefore, although we take steps to secure your information, we do not promise, and you should not expect, that your personal information, messages or other communications will always remain secure. Users should also take care with how they handle and disclose their personal information and should avoid sending personal information through insecure email.</span></li>
                <br>
				<li><span>We will occasionally update this Privacy Policy to reflect changes in the law, our data collection and use practices, the features of our Service, or advances in technology. If we make any changes to this Privacy Policy, we will notify you by sending an email. Your continued use of the Services following the posting of changes to this policy will mean you consent to and accept those changes.</span></li>
                <br>
				<li><span>You can contact us at 0812-5038-1345</span></li>
				</ol>
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



