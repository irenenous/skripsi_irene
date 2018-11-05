<?php 
session_start();
include 'config.php';
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
		<title>F I Y E O</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="../temp-fiyeo/css/linearicons.css">
			<link rel="stylesheet" href="../temp-fiyeo/css/font-awesome.min.css">
			<link rel="stylesheet" href="../temp-fiyeo/css/bootstrap.css">
			<link rel="stylesheet" href="../temp-fiyeo/css/magnific-popup.css">
			<link rel="stylesheet" href="../temp-fiyeo/css/nice-select.css">					
			<link rel="stylesheet" href="../temp-fiyeo/css/../temp-fiyeo/animate.min.css">
			<link rel="stylesheet" href="../temp-fiyeo/css/owl.carousel.css">
			<link rel="stylesheet" href="../temp-fiyeo/css/main.css">
		</head>
		<body>

<?php
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
   include ("header-loggedin.php");
}
else {
include("header-fiyeo.php");
}
?>
            <!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
							<h1 class="text-white">
								Find Your <span> Event Organizer</span>				
							</h1>	
							<form action="search.html" class="serach-form-area">
								<div class="row justify-content-center form-wrap">
									<div class="col-lg-4 form-cols">
										<input type="text" class="form-control" name="search" placeholder="what are you looking for?">
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects">
											<select>
												<option value="1">Select area</option>
												<option value="2">Dhaka</option>
												<option value="3">Rajshahi</option>
												<option value="4">Barishal</option>
												<option value="5">Noakhali</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects2">
											<select>
												<option value="1">All Category</option>
												<option value="2">Medical</option>
												<option value="3">Technology</option>
												<option value="4">Goverment</option>
												<option value="5">Development</option>
											</select>
										</div>				
									</div>
									<div class="col-lg-2 form-cols">
									    <button type="button" class="btn btn-info">
									      <span class="lnr lnr-magnifier"></span> Search
									    </button>
									</div>					
								</div>
							</form>	
							<p class="text-white"> <span>Search by tags:</span> Event, Organizer, Services, Event Organizer, Website, Information System</p>
						</div>								
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start features Area -->
			<section class="features-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Searching</h4>
								<p>
									Search which EO suits the best for your event.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Consulting</h4>
								<p>
									Asking for more detail information by consulting.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Requesting</h4>
								<p>
									Explain more about your event by requesting service.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Meeting up</h4>
								<p>
									Easily meeting up by making appointment.
								</p>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End features Area -->
			
			
			<!-- Start feature-cat Area -->
			<section class="feature-cat-area pt-100" id="category">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Featured Categories</h1>
								<p>Providing the best alternatives for your events</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="../temp-fiyeo/img/irene/wedding-rings.png" alt="">
								</a>
								<p>Wedding</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="../temp-fiyeo/img/irene/birthday-cake.png" alt="">
								</a>
								<p>Birthday</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="../temp-fiyeo/img/irene/wine-glasses.png" alt="">
								</a>
								<p>Private Party</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="../temp-fiyeo/img/irene/microphone.png" alt="">
								</a>
								<p>Entertainment</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="../temp-fiyeo/img/irene/meeting.png" alt="">
								</a>
								<p>MICE</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="../temp-fiyeo/img/irene/check-mark.png" alt="">
								</a>
								<p>Brand Activation</p>
							</div>			
						</div>																											
					</div>
				</div>	
			</section>
			<!-- End feature-cat Area -->

        <section class="section-gap" style="padding:100px 0; margin: 0px">
        <div class="container"> 
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        <div class="carousel-item active">
        <img class ="d-block w-100" src="../temp-fiyeo/img/13792.jpg" alt="First" style="width: 100%; height: 300px">
        </div>

        <div class="carousel-item">
        <img class ="d-block w-100" src="../temp-fiyeo/img/13617.jpg" alt="Second" style="width:100%; height:300px;">
        </div>
    
        <div class="carousel-item">
        <img class ="d-block w-100" src="../temp-fiyeo/img/30070.jpg" alt="Third" style="width:100%; height: 300px;">
        </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
        </div>
        </div>
        </section>                                                                                            
			<!-- Start post Area -->
			<section class="post-area section-gap" style="padding: 0px 0; margin-bottom: 50px">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
                        <div class="row d-flex justify-content-center">
						<div class="menu-content pb-50 col-lg-10">
							<div class="title text-center">
								<h2 class="mb-10">Featured Event Organizer</h2>
							</div>
						</div>
					</div>	
							<div class="single-post d-flex flex-row">
								<table>
                                <tr>
                                <td rowspan="5"><img src="../temp-fiyeo/img/b1.jpg" style="width:150px; height:150px;" alt=""></td>
                                <td style="padding-left:20px;"><h4>Creative Art Designer</h4></td>
                                <td>
                                <div class="btns">
                                <a href="view-profile-eo.php" class="genric-btn success medium">View</a>
                                </div>
                                </td>
                                </tr>
                                <tr>
                                <td style="color:#aa80ff; padding-left:20px;">
                                 <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </td>
                                </tr>
                                <tr>
                                <td style="padding-left:20px;">Event & Party Organizer in Jakarta</td>
                                </tr>
                                <tr>
                                <td style="padding-left:20px;"><i class="fa fa-map-o"></i>&nbsp; Jakarta Barat, DKI Jakarta </td>
                                </tr>
                                <tr>
                                <td style="padding-left:20px;"><i class="fa fa-money"></i>&nbsp; Start from IDR 3.000.000 </td>
                                </tr>
                                </table>
							</div>
				            <div class="single-post d-flex flex-row">
					       <table>
                                <tr>
                                <td rowspan="5"><img src="../temp-fiyeo/img/b1.jpg" style="width:150px; height:150px;" alt=""></td>
                                <td style="padding-left:20px;"><h4>Creative Art Designer</h4></td>
                                <td>
                                <div class="btns">
                                <a href="#" class="genric-btn success medium">View</a>
                                </div>
                                </td>
                                </tr>
                                <tr>
                                <td style="color:#aa80ff; padding-left:20px;">
                                 <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </td>
                                </tr>
                                <tr>
                                <td style="padding-left:20px;">Event & Party Organizer in Jakarta</td>
                                </tr>
                                <tr>
                                <td style="padding-left:20px;"><i class="fa fa-map-o"></i>&nbsp; Jakarta Barat, DKI Jakarta </td>
                                </tr>
                                <tr>
                                <td style="padding-left:20px;"><i class="fa fa-money"></i>&nbsp; Start from IDR 3.000.000 </td>
                                </tr>
                                </table>
							</div>
				            <div class="single-post d-flex flex-row">
						      <table>
                                <tr>
                                <td rowspan="5"><img src="../temp-fiyeo/img/b1.jpg" style="width:150px; height:150px;" alt=""></td>
                                <td style="padding-left:20px;"><h4>Creative Art Designer</h4></td>
                                <td>
                                <div class="btns">
                                <a href="#" class="genric-btn success medium">View</a>
                                </div>
                                </td>
                                </tr>
                                <tr>
                                <td style="color:#aa80ff; padding-left:20px;">
                                 <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </td>
                                </tr>
                                <tr>
                                <td style="padding-left:20px;">Event & Party Organizer in Jakarta</td>
                                </tr>
                                <tr>
                                <td style="padding-left:20px;"><i class="fa fa-map-o"></i>&nbsp; Jakarta Barat, DKI Jakarta </td>
                                </tr>
                                <tr>
                                <td style="padding-left:20px;"><i class="fa fa-money"></i>&nbsp; Start from IDR 3.000.000 </td>
                                </tr>
                                </table>
							</div>
							
							<a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">View More</a>

						</div>
						<div class="col-lg-4 sidebar">
							<div class="single-slidebar">
								<h4>EO by Location</h4>
								<ul class="cat-list">
									<li><a class="justify-content-between d-flex" href="category.html"><p>Jakarta</p><span>37</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Tangerang</p><span>57</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Bandung</p><span>33</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Pontianak</p><span>36</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Yogyakarta</p><span>47</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Bekasi</p><span>27</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Solo</p><span>17</span></a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>	
			</section>
			<!-- End post Area -->
				

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
                                    <li><a href="about-us.html">About Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Terms & Conditions</a></li>
									<li><a href="#">Help</a></li>
									
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
<img src="../temp-fiyeo/img/irene/fiyeo2.png" alt=""> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | PT. XYZ
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



