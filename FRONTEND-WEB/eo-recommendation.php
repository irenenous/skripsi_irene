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
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.11/sweetalert2.min.css" />
        
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

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Choose Your Preference			
							</h1>	
							<p class="text-white link-nav">Please fill in the form properly with the instructions given below</p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	


			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					
					<div class="section-top-border">
						<div class="row">
							<div class="col-md-4">
								<h3 class="mb-20">Instructions</h3>
								<div class="">
									<ul class="unordered-list">
										<li>Choose which EO's category that you want</li>
										<li>Input the percentage (%) for each criteria based on the importance level</li>
										<li>Choose higher percentage for your preferred criteria
										</li>
										<li>The total percentage you should give has to be 100%</li>
										<li>Make sure to input all the data properly</li>
										<li>Click submit to see our recommendation</li>
									</ul>
								</div>
							</div>
							<div class="col-md-8 mt-sm-30" style="border: 1px solid #D3D3D3; padding: 20px;">
				            <div class="col-md-12 form-box" style="margin-top:20px;">
						      <form action="../user/addrecommend.php" method="POST" class="form-area" role="form" id="recommend-form" onsubmit="recommendFunction()">
                                <div class="form-group">
                                <div class="d-flex">
                                <div class="col-lg-3 align-self-center">
                                <label for="cat"><b style="color:black">Category</b></label>
                                </div>
                                <div class="col-lg-9 form-select" id="default-select" style="">
                                <select id="kategori" name="kategori" required>
				            <?php 
                            include 'config.php';
                            $tampil=mysqli_query($koneksi, "SELECT * FROM kategori");
                     while($id_kategori=mysqli_fetch_array($tampil)) {
                            echo "<option value='".$id_kategori[id_kategori]."'> ".$id_kategori[nama_kategori]."</option>";}
                            ?>
								</select> 
                                </div>
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="d-flex">
                                <div class="col-lg-4 align-self-center">
                                <label for="category"><b style="color:black">Budget</b></label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="budget" name="budget" data-cell="A1" value="0.1"> 1
                                </label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="budget" name="budget" data-cell="B1" value="0.2"> 2
                                </label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="budget" name="budget" data-cell="C1" value="0.3"> 3
                                </label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="budget" name="budget" data-cell="D1" value="0.4"> 4
                                </label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="budget" name="budget" data-cell="E1" value="0.5"> 5
                                </label>
                                </div>
                                <div class="col-lg-3 text-right">
                                <label data-cell="F1" data-formula="SUM(A1:E1)" data-format="0%"></label>
                                </div>
                                </div>
                                </div> 
                                <div class="form-group">
                                <div class="d-flex">
                                <div class="col-lg-4 align-self-center">
                                <label for="category"><b style="color:black">Reputation</b></label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="reputasi" name="reputasi" data-cell="A2" value="0.1"> 1
                                </label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="reputasi" name="reputasi" data-cell="B2" value="0.2"> 2
                                </label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="reputasi" name="reputasi" data-cell="C2" value="0.3"> 3
                                </label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="reputasi" name="reputasi" data-cell="D2" value="0.4"> 4
                                </label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="reputasi" name="reputasi" data-cell="E2" value="0.5"> 5
                                </label>
                                </div>
                                <div class="col-lg-3 text-right">
                                <label data-cell="F2" data-formula="SUM(A2:E2)" data-format="0%"></label>
                                </div>
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="d-flex">
                                <div class="col-lg-4 align-self-center">
                                <label for="category"><b style="color:black">Facility & Service</b></label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="fasilitas" name="fasilitas" data-cell="A3" value="0.1"> 1
                                </label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="fasilitas" name="fasilitas" data-cell="B3" value="0.2"> 2
                                </label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="fasilitas" name="fasilitas" data-cell="C3" value="0.3"> 3
                                </label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="fasilitas" name="fasilitas" data-cell="D3" value="0.4"> 4
                                </label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="fasilitas" name="fasilitas" data-cell="E3" value="0.5"> 5
                                </label>
                                </div>
                                <div class="col-lg-3 text-right">
                                <label data-cell="F3" data-formula="SUM(A3:E3)" data-format="0%"></label>
                                </div>
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="d-flex">
                                <div class="col-lg-4 align-self-center">
                                <label for="category"><b style="color:black">Concept & Decoration</b></label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="konsep" name="konsep" data-cell="A4" value="0.1"> 1
                                </label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="konsep" name="konsep" data-cell="B4" value="0.2"> 2
                                </label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="konsep" name="konsep" data-cell="C4" value="0.3"> 3
                                </label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="konsep" name="konsep" data-cell="D4" value="0.4"> 4
                                </label>
                                </div>
                                <div class="col-lg-1">
                                <label class="radio-inline">
                                <input type="radio" id="konsep" name="konsep" data-cell="E4" value="0.5"> 5
                                </label>
                                </div>
                                <div class="col-lg-3 text-right">
                                <label data-cell="F4" data-formula="SUM(A4:E4)" data-format="0%"></label>
                                </div>
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="d-flex">
                                <div class="col-lg-4 align-self-center">
                                <label for="category"><b style="color:black; font-weight:700;">Total Percentage</b></label>
                                </div>
                                <div class="col-lg-8 text-right">
                                <label data-cell="F5" data-format="0%" data-formula="SUM(F1:F4)" style="font-weight:700;"></label>
                                </div>
                                </div>
                                </div> 
                                <div style="float:right; margin-top:10px; margin-bottom: 20px;">
                                <button type="submit" class="genric-btn info circle arrow" name="tambah" id="tambah">Submit<span class="lnr lnr-arrow-right"></span></button>
                                </div>
                                </form>
								</div>
							</div>
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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.11/sweetalert2.all.min.js"></script>
    
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
    <script>
    function recommendFunction(){
    var frm = $('#recommend-form');
    frm.submit(function (ev) {
    $.ajax({       
    type: "POST",
    enctype: 'multipart/form-data',
    url: frm.attr('action'),
    processData: false,
    contentType: false,
    cache: false,
    timeout: 600000,
    data: new FormData(frm[0]),
    error: function () {
    swal({
    type: 'error',
    title: 'failed!',
    text: 'Please fill in the sign up form properly',
    showConfirmButton: false,
    timer: 1500
    });  
    }
    });
    ev.preventDefault();
    ev.cancelBubble();
    });   
    } 
    </script>
    
</body>
</html>