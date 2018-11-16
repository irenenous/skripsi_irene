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
        
<style>
.nice-select .list { max-height: 300px; overflow: scroll; }
</style>
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
								<select name="area" id="area">
								<option value="" selected>Select area</option>
                    <?php 
                    include 'config.php';
                    $tampil=mysqli_query($koneksi, "SELECT * FROM eo INNER JOIN kota ON eo.id_kota = kota.id_kota GROUP BY eo.id_kota");
                    while($id_kota=mysqli_fetch_array($tampil)) {
                    echo "<option value='".$id_kota[id_kota]."' required> ".$id_kota[nama_kota]."</option>";}
                    ?>
								</select>
								</div>
								</div>
								<div class="col-lg-3 form-cols">
								<div class="default-select" id="default-selects2">
								<select name="kategori" id="kategori">
								<option value="">All Category</option>
                    <?php 
                    include 'config.php';
                    $tampil=mysqli_query($koneksi, "SELECT * FROM kategori");
                    while($id_kategori=mysqli_fetch_array($tampil)) {
                    echo "<option value='".$id_kategori[id_kategori]."'> ".$id_kategori[nama_kategori]."</option>";}
                    ?>
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
            
    <section class="testimonial-area section-gap" id="review" style="padding: 0px 0; margin-bottom: 0px">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Our Recommendation</h1>
								<p>Haven't found any EO which suits your taste yet? Here we have a solution for you! </p>
							</div>
                            <div class="submit-left" style="background:none; margin-top:-30px;">
                <?php if (isset ($_SESSION['id'])!="") { ?>
                <a href="eo-recommendation.php" class="primary-btn header-btn" style="background:#bfacff; color:white">Get Started</a>
                <?php }
                else { ?>
                <a href="../user/login-fiyeo.php" class="primary-btn header-btn" style="background:#bfacff; color:white">Get Started</a>
                <?php } ?>	
							</div>
						</div>
					</div>			
				</div>	
			</section>        

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



