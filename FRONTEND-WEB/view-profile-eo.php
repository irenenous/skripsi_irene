<?php
include 'config.php';
session_start();

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
		<title>Profile</title>

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
        
<style>
.rating {
  display: inline-block;
  position: relative;
  height: 30px;
  line-height: 30px;
  font-size: 30px;
}

.rating label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}

.rating label:last-child {
  position: static;
}

.rating label:nth-child(1) {
  z-index: 5;
}

.rating label:nth-child(2) {
  z-index: 4;
}

.rating label:nth-child(3) {
  z-index: 3;
}

.rating label:nth-child(4) {
  z-index: 2;
}

.rating label:nth-child(5) {
  z-index: 1;
}

.rating label input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.rating label .icon {
  float: left;
  color: transparent;
}

.rating label:last-child .icon {
  color: #000;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: #09f;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: #000;
  text-shadow: 0 0 5px #09f;
}    
</style>
        
        
		</head>
		<body>

<?php
if ($_SESSION['id']!="") {
include ("header-loggedin.php");
}
else {
include ("header-fiyeo.php");
    
//$query = "SELECT * FROM user where id_user = '$iduser' AND status = 'ACTIVE'";
//$result = mysqli_query($koneksi, $query);
//$row =mysqli_num_rows($result);
//if ($row > 0) {
//$select = mysqli_fetch_array($result);
//$iduser = $select['id_user'];
//$namauser = $select['nama_user'];
//$emailuser = $select['email_user'];
//$fotouser = $select['foto_user'];  
//    include ("header-loggedin.php");
//} else {
//        $query1 = "SELECT * FROM eo where id_eo = '$iduser' AND status = 'VERIFIED'";
//        $result1 = mysqli_query($koneksi, $query1);
//        $select = mysqli_fetch_array($result1); 
//        $emaileo = $select['email_eo'];
//        $namaeo = $select['nama_eo'];
//        $fotoeo = $select['foto_eo'];
//        $desceo = $select['ket_eo'];
//        include ("header-view-eo.php");
//        }
}
?>
  
    <?php
	include("config.php");
    if(!empty($_GET['id_eo'])){
	$ideo = $_GET['id_eo']; }

    $query="SELECT * FROM eo INNER JOIN provinsi ON eo.id_provinsi = provinsi.id_provinsi INNER JOIN kota ON eo.id_kota = kota.id_kota where id_eo = '".$ideo."' AND status = 'VERIFIED'";
	$tampil = mysqli_query($koneksi,$query);
    $select = mysqli_fetch_array($tampil);
        
        $emaileo = $select['email_eo'];
        $namaeo = $select['nama_eo'];
        $fotoeo = $select['foto_eo'];
        $desceo = $select['ket_eo'];
        $alamat = $select['alamat_eo'];
        $nohp = $select['nohp_eo'];
        $tahun = $select['tahun_diri'];
        $link = $select['link_web'];
        $provname  = $select['nama_provinsi'];
        $cityname  = $select['nama_kota'];
                     
    ?>
            
    <?php 
    $query2 = "SELECT * FROM bookmark where id_user = '$iduser' AND id_eo = '$ideo'";
    $tampil2 = mysqli_query($koneksi, $query2);
    $select = mysqli_fetch_array($tampil2);
            $idbook = $select['id_bookmark'];
            $statusbook = $select['status'];
    ?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12" style="padding:80px; margin-top:60px;">
							<img src="../eo/<?php echo $fotoeo ?>" alt="" class="rounded-circle" style="width:150px; height:150px;">
                            <div style="margin-top: 20px;">
							<h3 class="text-white link-nav"><?php echo $namaeo ?> &nbsp;<img src="../temp-fiyeo/img/tick-inside-circle.png"></h3>
                            <p style="color: white; font-size:120%; margin-top:10px;">Event Organizer</p>
                            </div>
                            <div style="margin-top:40px;">
                            <?php if ($statusbook != 'BOOKMARKED') {?>
                            <a href="../user/addbookmark.php?id_eo=<?php echo $ideo ?>" class="genric-btn success circle" style="width:210px; font-size: 100%"><i class="fa fa-bookmark fa-lg"></i>&nbsp;&nbsp;&nbsp;Add To Bookmark</a>
                            <?php }
                            else { ?>
                            <a href="#" class="genric-btn circle disable" style="width:210px; color: #4cd3e3; font-size: 100%;"><i class="fa fa-bookmark fa-lg"></i>&nbsp;&nbsp;&nbsp;Bookmarked</a>
                            <?php } ?>
                            &nbsp;&nbsp;&nbsp; <button class="genric-btn success circle" style="width:210px; font-size: 100%; font-weight:300;" data-toggle="modal" data-target="#modalForm"><i class="fa fa-weixin fa-lg"></i>&nbsp;&nbsp;&nbsp;Send Message</button>
                            </div>
						</div>
					</div>
				</div>
			</section>
         
			<!-- Start post Area -->
			<section class="post-area section-gap" style="padding: 30px;">
				<div class="container">
                <div class="col-lg-12">
                <ul class="nav nav-tabs align-items-center justify-content-center">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#portfolio" data-toggle="tab" class="nav-link">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#reviews" data-toggle="tab" class="nav-link">Reviews</a>
                </li>
            </ul>
            <div class="tab-content py-4">
            <div class="tab-pane active" id="profile">
            <div class="row justify-content-center d-flex">
            <div class="col-lg-8 post-list">	
            <div class="single-post job-details">
                <h4 class="single-title">Description</h4>
                <p> <?php echo $desceo ?> </p>
                <hr>
                <h4 class="single-title">Category</h4>
                <p> Event & Party Organizer in Jakarta. </p>
            </div>
            <div class="single-post job-experience">
                <h4 class="single-title">Service Packages
                <div class="pull-right">
                <a href="request-service-form.php?id_eo=<?php echo $ideo ?>" class="genric-btn success circle medium" style="font-size:70%">Request Service</a>
                </div></h4>
            <hr style="margin-top:30px;">
        <?php
	include("config.php");
	$query1="SELECT * from paket WHERE id_eo ='".$ideo."'";           
	$simpan1= mysqli_query($koneksi,$query1);
                           
   while($select = mysqli_fetch_assoc($simpan1)) {
			$idpaket     = $select['id_paket'];
            $namapaket   = $select['nama_paket'];
            $jenispaket  = $select['jenis_paket'];
            $hargapaket  = $select['harga_paket'];
            $ketpaket 	 = $select['ket_paket'];

    ?>   
            <table>
            <tr>
            <td><img src="../temp-fiyeo/img/pages/list.jpg" alt=""><span><strong> &nbsp;<?php echo $namapaket ?></strong></span>
            </td>
            </tr>
            <tr>
            <td>
            <span><?php echo $ketpaket ?></span>
            </td>
            </tr>
            <tr>
            <td>
            <span><i class="fa fa-calendar"></i> &nbsp; Event Type : <strong><?php echo $jenispaket ?></strong></span></td>
            </tr>
            <tr>
            <td>
            <span><i class="fa fa-money"></i> &nbsp;Price : <strong>Start from IDR <?php echo $hargapaket ?></strong></span>
            </td>
            </tr>
            </table>
            <br>
        
    <?php }
	?>
      
            </div>
            </div>				
         
				<div class="col-lg-4 sidebar">
				<div class="container" style="padding:20px; margin-bottom: 30px; border: 1px solid #aa80ff; border-radius: 5px; width:300px; height:100px;">
                <div class="row d-flex align-items-center justify-content-center">
				<div>
				<div class="box-deskripsi" style="text-align: center; font-size:130%; font-weight:300; padding:10px; color:  #aa80ff;">
                <div class="deskripsi-rating">
				<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i></div>
                <div class="tulisan">
				Rating <small>From 1 Reviews</small></div>
				</div>
				</div>
				</div>
                </div>
                <div class="single-slidebar">
				<h4>More Information</h4>
                <hr>
				<ul class="cat-list">
				<li><a class="justify-content-between d-flex">
                <p><i class="fa fa-envelope"></i> &nbsp;&nbsp;<?php echo $emaileo ?></p></a></li>
				<li><a class="justify-content-between d-flex">
                <p><i class="fa fa-phone"></i> &nbsp;&nbsp;<?php echo $nohp ?></p></a></li>
                <li><a class="justify-content-between d-flex">
                <p><i class="fa fa-map"></i> &nbsp;&nbsp;<?php echo $cityname ?>, <?php echo $provname ?></p></a></li>
                <li><a class="justify-content-between d-flex">
                <p><i class="fa fa-map-marker"></i> &nbsp;&nbsp;<?php echo $alamat ?></p></a></li>
                <li><a class="justify-content-between d-flex">
                <p><i class="fa fa-link"></i> &nbsp;&nbsp;<?php echo $link ?></p></a></li>
                </ul>
				</div></div></div></div>
                <div class="tab-pane" id="portfolio">
            <div class="col-lg-12 post-list">	
            <div class="single-post job-experience">
						<h4>Portfolio</h4>
                        <hr>
						<div class="row gallery-item">
							<div class="col-md-4">
								<a href="../temp-dashboard/img/avatar-0.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(../temp-dashboard/img/avatar-0.jpg);"></div></a>
							</div>
							<div class="col-md-4">
								<a href="../temp-dashboard/img/avatar-3.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(../temp-dashboard/img/avatar-3.jpg);"></div></a>
							</div>
							<div class="col-md-4">
								<a href="../temp-fiyeo/img/elements/g3.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(../temp-fiyeo/img/elements/g3.jpg);"></div></a>
							</div>
							<div class="col-md-6">
								<a href="../temp-fiyeo/img/elements/g4.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(../temp-fiyeo/img/elements/g4.jpg);"></div></a>
							</div>
							<div class="col-md-6">
								<a href="../temp-fiyeo/img/elements/g5.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(../temp-fiyeo/img/elements/g5.jpg);"></div></a>
							</div>
							<div class="col-md-4">
								<a href="../temp-fiyeo/img/elements/g6.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(../temp-fiyeo/img/elements/g6.jpg);"></div></a>
							</div>
							<div class="col-md-4">
								<a href="../temp-fiyeo/img/elements/g7.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(../temp-fiyeo/img/elements/g7.jpg);"></div></a>
							</div>
							<div class="col-md-4">
								<a href="../temp-fiyeo/img/elements/g8.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(../temp-fiyeo/img/elements/g8.jpg);"></div></a>
							</div>
						</div>
                </div>
                </div>
                </div>
            <div class="tab-pane" id="reviews"> 
            <div class="col-lg-12 post-list">	
                
            <div class="single-post job-experience">
            <h4 class="single-title">Write a Review 
            <div class="pull-right">
              <button id="closereview" class="genric-btn link circle medium" style="color:red">Cancel</button>
            </div></h4>
            <hr> 
            <div id="ex1" name="ex1">
            <div class="form-group">
            <input type="text" style="font-family:Poppins, FontAwesome" placeholder="&#xf040; &nbsp; Please share your own experience by writing an honest review of <?php echo $namaeo ?>" disabled class="common-input mb-20 form-control">
            </div>
             <button class="genric-btn success circle medium" style="" id="showreview">Add Your Review</button>
            </div>
       
        <form role="form" method="POST" action="addreview.php" id="editForm">
        <div class="form-group">
        <label for="rating"><b style="color:black">Rating</b></label>
        <br>
        <div class="rating" style="margin-left:3px;">
  <label>
    <input type="radio" name="stars" value="1" />
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="2" />
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="3" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>   
  </label>
  <label>
    <input type="radio" name="stars" value="4" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="5" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
        </div>
        
        </div>
        <div class="form-group">
       <label for="review"><b style="color:black">* Review</b></label>
        <textarea class="form-control" name="review" id="review" placeholder="Please write an honest review" required></textarea>
        </div>
        <p><strong>* Required Field</strong></p>
      <div class="">
        <button type="submit" class="genric-btn success circle medium submitBtn" id="tambah" name="tambah"> Publish </button>
      </div>
    </form>
            </div>
                
                
            <div class="single-post job-experience">
            <h4 class="single-title">Reviews
            <hr> </h4>  
           
            <ul><li>
            <div class="details justify-content-center align-items-center" style="margin-top:40px;">
            <table style="color:black; padding:20px;">
            <tr>
            <td rowspan="2" colspan="2"><img src="../temp-dashboard/img/avatar-1.jpg" style="height:50px; width:50px;"></td>
            <td style="padding-left:70px;">17/10/2018</td>
            </tr>
            <tr>
            <td style="padding-left:70px; color:#aa80ff;">
            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></td>
            </tr>
            <tr style="">
            <td colspan="2">Irene</td>
            <td style="padding-left:70px;">No comment</td>
            </tr>    
            </table>
            </div></li>
            <li>
            <div class="details" style="margin-top:50px;">
            <table style="color:black; padding:20px;">
            <tr>
            <td rowspan="2" colspan="2"><img src="../temp-dashboard/img/avatar-2.jpg" style="height:50px; width:50px;"></td>
            <td style="padding-left:70px;">15/10/2018</td>
            </tr>
            <tr>
            <td style="padding-left:70px; color:#aa80ff;">
            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></td>
            </tr>
            <tr>
            <td colspan="2">Iven</td>
            <td style="padding-left:70px;">Best service</td>
            </tr>    
            </table>
            </div></li>
            <li>
            <div class="details" style="margin-top:50px;">
            <table style="color:black; padding:20px;">
            <tr>
            <td rowspan="2"><img src="../temp-dashboard/img/avatar-3.jpg" style="height:50px; width:50px;"></td>
            <td style="padding-left:70px;">14/10/2018</td>
            </tr>
            <tr>
            <td style="padding-left:70px; color:#aa80ff;">
            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></td>
            </tr>
            <tr>
            <td>Andre</td>
            <td style="padding-left:70px;">Best service</td>
            </tr>    
            </table>
            </div></li>
            </ul>
            <div class="row justify-content-center align-items-right col-lg-12">
            <a href="#" class="genric-btn success-border e-large mt-20 mb-20" style="width:1000px; height:50px;">Load More</a></div>
            </div>    
            </div>  
            </div>  
            </div></div></div>	
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
  			<script src="../temp-fiyeo/j../temp-fiyeo/s/easing.min.js"></script>			
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
            <script src="../temp-fiyeo/js/modal-img.js"></script>
	
<script type="text/javascript">

    $(document).ready(function(){
        $("#editForm").hide();
        $("#closereview").hide();
        $("#showreview").click(function(e) {
            $("#editForm").toggle();
            $("#showreview").toggle();
            $("#ex1").toggle();
            $("#closereview").toggle();
                
        });
        $("#closereview").click(function(e) {
            $("#editForm").toggle();
            $("#showreview").toggle();
            $("#ex1").toggle();
            $("#closereview").toggle();
        });
    });
</script>    

<div id="modalForm" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="width:500px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Send Message</h4>
      </div>
    <form role="form" method="POST" action="../user/addmessage.php?id_eo=<?php echo $ideo ?>">
      <div class="modal-body">
        <div class="form-group">
       <label for="eo"><b style="color:black">To</b></label>
         <input type="text" class="form-control" name="eo" id="eo" value="<?php echo $namaeo ?>" disabled/>
        </div>
        <div class="form-group">
       <label for="eo"><b style="color:black">Subject</b></label>
         <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter the subject" required/>
        </div>
        <div class="form-group">
       <label for="review"><b style="color:black">Message</b></label>
        <textarea class="form-control" name="message" id="message" placeholder="Enter the message" required style="height:100px;"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary submitBtn" id="tambah" name="tambah">Send &nbsp;<i class="fa fa-paper-plane"></i></button>
      </div>
    </form>
    </div>

  </div>
</div>
        
<script type="text/javascript">
$(':radio').change(function() {
  console.log('New star rating: ' + this.value);
});
</script>

</body>
</html>



