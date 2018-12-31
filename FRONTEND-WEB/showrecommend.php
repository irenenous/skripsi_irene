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

#noti-count {
  background-color:#aa80ff;
  color:#fff;
  padding:10px;
  margin-left:-5px;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  border-radius: 30px;
  width:45px;
  height:45px;
  text-align:center; }

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

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Our Recommendation			
							</h1>	
							<p class="text-white link-nav">Here's the list of our EO recommendations based on the rank</p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	


			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
				<div class="section-top-border" style="margin-top:-10px;">
			
				<div class="progress-table">
				<div class="table-head">
				<div class="serial" style="width:100px">Rank</div>
				<div class="country" style="width:300px">Event Organizer</div>
				<div class="visit" style="width:160px;">Rating</div>
                <div class="visit" style="width:160px">Price</div>
                <div class="visit" style="width:270px">Location</div>
                <div class="visit" style="width:120px"></div>
                </div>
                    
<?php

function addOrdinalNumberSuffix($num) {
if (!in_array(($num % 100),array(11,12,13))){
switch ($num % 10) {
// Handle 1st, 2nd, 3rd
case 1:  return $num.'st';
case 2:  return $num.'nd';
case 3:  return $num.'rd'; } }
return $num.'th'; }
                    
                    
                    
if (isset ($_SESSION['data'])!="") {
   $reco = $_SESSION['data'];

    foreach ($_SESSION['data'] as $key => $kriteria) {
        $eoid = $kriteria['id_eo'];
        $eoname = $kriteria['nama_eo'];
        $eophoto = $kriteria['foto_eo']; 
        $eoprov = $kriteria['nama_provinsi'];
        $eocity = $kriteria['nama_kota'];
                    
$query5 = "SELECT cast(AVG(rating) as decimal(2,1)) FROM review where id_eo = '$eoid'";
$tampil5 = mysqli_query($koneksi, $query5);
$select = mysqli_fetch_array($tampil5);
$totalrating = $select['cast(AVG(rating) as decimal(2,1))'];            
$query2 = "SELECT min(harga_paket) from paket where id_eo ='$eoid'";
$simpan2 = mysqli_query($koneksi, $query2); 
$select = mysqli_fetch_array($simpan2);
$lowprice = $select['min(harga_paket)'];
                    
                    ?>
        
        <div class="table-row" style="text-align:center">
        <div class="serial" style="width:100px;"><div id='noti-count'><div><?php echo addOrdinalNumberSuffix($key+1) ?></div></div></div>
        <div class="country" style="width:300px;"><img class="media-object img-circle" src="../eo/<?php echo $eophoto ?>" style="width:50px; height:50px; border-radius: 50%;"><?php echo $eoname ?></div>
        <div class="visit" style="width:160px">
        <?php if ($totalrating !="") {    
        echo $totalrating; }
        else { 
        echo 'No rating yet';
        }    
        ?></div>
        <div class="visit" style="width:160px">Start From <br> IDR <?php echo $lowprice ?></div>
        <div class="visit" style="width:270px"><i class="fa fa-map-o"></i> &nbsp; <?php echo $eocity ?>, <?php echo $eoprov ?></div>
        <div class="visit" style="width:120px"><a href="view-profile-eo.php?id_eo=<?php echo $eoid ?>" class="genric-btn success medium">Visit</a></div>
        </div>
        
<?php   } }
?>
			
				</div>
				</div>
				</div>
    </div>
			<!-- End Align Area -->
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
<img src="../temp-fiyeo/img/irene/fiyeo2.png" alt=""> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | PT. XYZ
						</p>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->		

			<script src="../temp-fiyeo/js/vendor/jquery-2.2.4.min.js"></script>
            <script src="../temp-dashboard/jquery-calx-master/sample/js/jquery-calx-sample-2.2.7.min.js" type="text/javascript"></script>
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
    
       <script>
            $('#recommend-form').calx();
            $('#show_formula').click(function(e){
                e.preventDefault();

                if($(this).attr('data-shown') == '0'){
                    $('[data-formula],[data-cell]').each(function(){
                        $(this).after('<span class="formula">'+$(this).attr('data-cell')+($(this).attr('data-formula') ? ' = '+$(this).attr('data-formula') : '')+'&nbsp;</span>');
                    });

                    $(this).attr('data-shown', 1).html('Hide Formula');
                }else{
                    $('span.formula').remove();
                    $(this).attr('data-shown', 0).html('Show Formula');
                }
            });
        </script>    
    
</body>
</html>