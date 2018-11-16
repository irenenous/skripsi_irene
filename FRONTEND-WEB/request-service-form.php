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
		<title>Request Service</title>

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
            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
           
<style>
.durationpicker-container {
    background-color: white;
    display: inline-block;
    
}

.durationpicker-innercontainer {
    display: inline-block;
    width: auto;
    padding-right: 5px;
}

.durationpicker-duration {
    width: 60px;
    display: inline-block;
    border: none;
    padding-left: 3%;
    text-align: right;
}

.durationpicker-label {
    display: inline-block;
}

</style>
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

<?php 
$query = "SELECT * FROM user where id_user = '$iduser' AND status = 'ACTIVE'";
$tampil = mysqli_query($koneksi, $query);
$select = mysqli_fetch_array($tampil); 
        $namauser = $select['nama_user'];
        $nohpuser = $select['nohp_user'];
        $emailuser = $select['email_user'];  
?>
            
<?php
include("config.php");
if(!empty($_GET['id_eo'])){
    $ideo = $_GET['id_eo'];
}                
?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Request Service
							</h1>	
							<p class="text-white link-nav">Please fill in the form properly</p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start post Area -->
<section class="post-area section-gap" style="padding-top:50px;">
<div class="container" style="margin-bottom:0px;">
<div class="row">
        <div class="col-md-8 offset-md-2 form-box">
        <form id="RequestForm" class="form-area" role="form" action="../user/addrequest.php?id_eo=<?php echo $ideo ?>" method="post">    
        <div class="form-group">
        <label for="date"><b style="color:black">Date of Event</b></label>
        <input name="eventdate" id="datepicker" placeholder="mm/dd/yyyy" onfocus="this.placeholder = ''" onblur="this.placeholder = 'mm/dd/yyyy'" class="common-input mb-20 form-control" required="" type="text">
        </div>
        <div class="form-group">
        <label for="type"><b style="color:black">Event Type</b></label>
        <input name="eventtype" id="eventtype" placeholder="Enter the type of event  (Example: Wedding Party / Birthday Party / Graduation)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter the type of event you'd like to hold. Example: Wedding Party / Birthday Party / Graduation'" class="common-input mb-20 form-control" required="" type="text">
        </div>
        <div class="form-group">
        <label for="location"><b style="color:black">Event Location</b></label>
        <textarea class="mt-10 form-control" name="eventlocation" id="eventlocation" placeholder="Enter the complete address where you want your event to be hold" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter the complete address where you want your event to be held'" required="" style="height:100px;"></textarea>
        </div>
        <div class="form-group">
        <label for="guests"><b style="color:black">Number of Guests</b></label>
        <div class="row d-flex" style="margin-bottom:-15px;">
        <div class="col-lg-2">
        <input name="guestnumber" id="guestnumber" class="common-input mb-20 form-control" required="" min="1" type="number" required value="1">
        </div>
        <div class="align-self-center">
        <label>person(s)</label>
        </div>
        </div>
        </div>
        <div class="form-group">
        <label for="duration"><b style="color:black">Event Duration</b></label>
        <input type="text" class="form-control" id="duration" name="duration" required>
        </div>
        <div class="form-group">
        <label for="desc"><b style="color:black">Event Description</b></label>
        <textarea class="mt-10 form-control" name="eventdesc" id="eventdesc" placeholder="Explain more about the event and what you'd like us to do for you" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Explain more about the event and what you'd like us to do for you'" required="" style="height:200px;"></textarea>
        </div>
        <div class="form-group">
        <label for="paket"><b style="color:black">Service Package</b></label>
        <select name="package" id="package" class="common-input mb-20 form-control" required="" style="border-radius:0px; height:50px;">
        <?php 
        include 'config.php';
        $tampil1=mysqli_query($koneksi, "SELECT id_paket, nama_paket FROM paket where id_eo = '$ideo'");
        while($id_paket=mysqli_fetch_array($tampil1)) {
        echo "<option value='".$id_paket[id_paket]."' required> ".$id_paket[nama_paket]."</option>";}
        ?>
        </select>
        </div>
        <div class="form-group">
        <label for="name"><b style="color:black">Name</b></label>
        <input name="name" id="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text" value="<?php echo $namauser ?>" disabled>
        </div>
        <div class="form-group">
        <label for="phone"><b style="color:black">Phone Number</b></label>
        <input name="phonenumber" id="phonenumber" placeholder="Enter your phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone number'" class="common-input mb-20 form-control" required="" type="text" value="<?php echo $nohpuser ?>" disabled>
        </div>
        <div class="form-group">
        <label for="email"><b style="color:black">E-mail</b></label>
        <input name="email" id="email" placeholder="Enter your email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email address'" class="common-input mb-20 form-control" required="" type="email" value="<?php echo $emailuser ?>" disabled>
        </div>
        <div class="pull-right" style="margin-top: 40px;">
        <button type="submit" class="genric-btn success-border circle arrow" name="tambah" id="tambah">Submit<span class="lnr lnr-arrow-right"></span></button>
        </div>
 
        </form>
        </div>
</div>
</div>
            </section>
			<!-- End post Area -->		
		
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
        <script src="//code.jquery.com/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script src="../temp-fiyeo/Easy-Responsive-jQuery-Duration-Picker-Plugin-duration-picker-js/duration-picker.js"></script>
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
            <script src="../temp-fiyeo/js/jQuery-Mask-Plugin-master/dist/jquery.mask.js"></script>
          
<script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>
<script>
$("#duration").durationPicker({
  hours: {
    label: "hours",
    min: 0,
    max: 24
  },
  minutes: {
    label: "minutes",
    min: 0,
    max: 59
  },
  seconds: {
    label: "seconds",
    min: 0,
    max: 59
  },
  classname: 'form-control',
  responsive: true
});
</script>
<script type="text/javascript">
$(document).ready(function(){
  $('#phonenumber').mask('0000-0000-0000');
});
</script>
            
		</body>
	</html>