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
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
   include ("header-loggedin.php");
}
else {
include("header-fiyeo.php");
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
<?php 
$query7 = "SELECT count(1) FROM paket where id_eo = '$ideo'";
$result7 = mysqli_query($koneksi, $query7);
$row = mysqli_fetch_array($result7); 
$totalpaket = $row[0];       
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
                            <?php if (isset ($_SESSION['id'])!="") {
                            if ($statusbook != 'BOOKMARKED') {?>
                            <a href="../user/addbookmark.php?id_eo=<?php echo $ideo ?>" class="genric-btn success circle" style="width:210px; font-size: 100%"><i class="fa fa-bookmark fa-lg"></i>&nbsp;&nbsp;&nbsp;Add To Bookmark</a>
                            <?php }
                            else { ?>
                            <a href="#" class="genric-btn circle disable" style="width:210px; color: #4cd3e3; font-size: 100%;"><i class="fa fa-bookmark fa-lg"></i>&nbsp;&nbsp;&nbsp;Bookmarked</a>
                            <?php } }
                            else { ?>
                            <a href="../user/login-fiyeo.php" class="genric-btn success circle" style="width:210px; font-size: 100%"><i class="fa fa-bookmark fa-lg"></i>&nbsp;&nbsp;&nbsp;Add To Bookmark</a>  
                            <?php } ?>
                            &nbsp;&nbsp;&nbsp; 
                            <?php if (isset ($_SESSION['id'])!="") { ?>
                            <button class="genric-btn success circle" style="width:210px; font-size: 100%; font-weight:300;" data-toggle="modal" data-target="#modalForm"><i class="fa fa-weixin fa-lg"></i>&nbsp;&nbsp;&nbsp;Send Message</button>
                            <?php } 
                            else { ?>
                            <a href="../user/login-fiyeo.php" class="genric-btn success circle" style="width:210px; font-size: 100%"><i class="fa fa-weixin fa-lg"></i>&nbsp;&nbsp;&nbsp;Send Message</a>
                            <?php } ?>
                            </div>
						</div>
					</div>
				</div>
			</section>
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
                <ul>
            <?php 
                $query9 = "SELECT * FROM kategori_eo INNER JOIN kategori ON kategori_eo.id_kategori = kategori.id_kategori where id_eo = '$ideo'";
                $simpan9 = mysqli_query($koneksi, $query9);
                while ($select = mysqli_fetch_array($simpan9)) {
			     $namakat = $select['nama_kategori'];
           
            ?>   
                <li><img src ="../temp-fiyeo/img/pages/list.jpg">&nbsp; <?php echo $namakat ?></li>
            <?php }
            ?>
            </ul>
            </div>
            <div class="single-post job-experience">
                <h4 class="single-title">Service Packages
                <div class="pull-right">
                <?php if (isset ($_SESSION['id'])!="") { ?>
                <a href="request-service-form.php?id_eo=<?php echo $ideo ?>" class="genric-btn success circle medium" style="font-size:70%">Request Service</a>
                <?php }
                else { ?>
                <a href="../user/login-fiyeo.php" class="genric-btn success circle medium" style="font-size:70%">Request Service</a>
                <?php } ?>
                </div></h4>
            <hr style="margin-top:30px;">
        <?php if ($totalpaket == '0') { ?>
            <p>No service package available yet</p>
        <?php } 
        else {
            
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
        
    <?php } }
	?>
      
            </div>
            </div>				
<?php 
$query5 = "SELECT cast(AVG(rating) as decimal(2,1)) FROM review where id_eo = '$ideo'";
$tampil5 = mysqli_query($koneksi, $query5);
$select = mysqli_fetch_array($tampil5);
$totalrating = $select['cast(AVG(rating) as decimal(2,1))'];
?>
<?php 
$query6 = "SELECT count(1) FROM review where id_eo = '$ideo'";
$result6 = mysqli_query($koneksi, $query6);
$row = mysqli_fetch_array($result6); 
$totalreview = $row[0];       
?>
<?php 
$query8 = "SELECT count(1) FROM portfolio where id_eo = '$ideo'";
$result8 = mysqli_query($koneksi, $query8);
$row = mysqli_fetch_array($result8); 
$totalportfolio = $row[0];       
?>
                
				<div class="col-lg-4 sidebar">
                <?php if ($totalreview == '0') {?>
			     <div class="container" style="padding:20px; margin-bottom: 30px; border: 1px solid #aa80ff; border-radius: 5px; width:300px; height:100px;">
                <div class="row d-flex align-items-center justify-content-center">
				<div>
				<div class="box-deskripsi" style="text-align: center; font-size:130%; font-weight:300; padding:5px; color: #aa80ff;">
                <div>
                <i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                </div>
                <div class="tulisan">
				<small>No rating yet</small></div>
                </div></div></div>
                </div>
                <?php } 
                else { ?>      
                <div class="container" style="padding:20px; margin-bottom: 30px; border: 1px solid #aa80ff; border-radius: 5px; width:300px; height:120px;">
                <div class="row d-flex align-items-center justify-content-center">
				<div>
				<div class="box-deskripsi" style="text-align: center; font-size:130%; font-weight:300; padding:5px; color: #aa80ff;">
                <div>
                <h1 style="color: #aa80ff;">
				<?php echo $totalrating ?> <small>/ 5</small></h1></div>
                <div class="tulisan">
				<small>Total rating from <?php echo $totalreview ?> Reviews</small></div>
                </div>
                </div>
                </div> 
                </div>
                <?php } ?>
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
        <?php if ($totalportfolio == '0') { ?>
                <p>No portfolio available yet</p>
         <?php } 
        else { ?>
                <div class="row gallery-item">
    <?php
	include("config.php");
	$query3="SELECT * from portfolio WHERE id_eo ='".$ideo."'";           
	$simpan3= mysqli_query($koneksi,$query3);
                           
   while($select = mysqli_fetch_assoc($simpan3)) {
			$idport     = $select['id_portfolio'];
            $fotoport   = $select['foto'];
            $ketfoto  = $select['ket_foto'];

    ?>      
				<div class="col-md-4">
				<a href="../eo/<?php echo $fotoport ?>" class="img-pop-up"><div class="single-gallery-image" style="background: url(../eo/<?php echo $fotoport ?>);"></div></a>
				</div>
    <?php }
    ?>
				</div>
    <?php } ?>
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
            <?php if (isset ($_SESSION['id'])!="") { ?>
             <button class="genric-btn success circle medium" style="" id="showreview">Add Your Review</button>
            <?php }
            else { ?> 
            <a href="../user/login-fiyeo.php" class="genric-btn success circle medium" style="">Add Your Review</a> 
            <?php } ?>
            </div>
       
        <form role="form" method="POST" action="../user/addreview.php?id_eo=<?php echo $ideo ?>" id="editForm">
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
       <label for="review"><b style="color:black">Review</b></label>
        <textarea class="form-control" name="review" id="review" placeholder="Please write an honest review" required style="height:120px;"></textarea>
        </div>
        <br>
      <div align="right">
        <button type="submit" class="genric-btn success circle medium submitBtn" id="tambah" name="tambah"> Publish </button>
            </div>
    </form>
            </div>
                
                
            <div class="single-post job-experience">
            <h4 class="single-title">Reviews
            <hr> </h4>  
            <div class="details justify-content-center align-items-center" style="margin-top:30px;">
            <?php if ($totalreview == '0') { ?>
            <p>No review available yet</p>
            <?php }
            else { 
                
	include("config.php");
	$query4="SELECT * from review INNER JOIN user ON review.id_user = user.id_user WHERE id_eo ='".$ideo."'";           
	$simpan4= mysqli_query($koneksi,$query4);
                           
   while($select = mysqli_fetch_assoc($simpan4)) {
            $date     = $select['tgl_review'];
			$rating   = $select['rating'];
            $ket      = $select['keterangan'];
            $fotoklien  = $select['foto_user'];
            $namaklien = $select['nama_user'];

    ?>      
            <div class="row d-flex">
            <div>
            <table style="color:black; padding:20px; margin-left:18px">
            <tr>
            <td><img src="../user/<?php echo $fotoklien ?>" style="height:50px; width:50px;"></td>
            </tr>
            <tr>
            <td width="150px;"><?php echo $namaklien ?></td>
            </tr>
            </table>
            </div>
            <div>
            <table style="color:black; padding:20px;">
            <tr>
            <td style=""><?php echo $date ?></td>
            </tr>
            <tr>
            <td style="color:#aa80ff;">
            <?php if ($rating == '1') {?>
            <i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
            <?php }
            else if ($rating == '2') { ?>
            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
            <?php }
            else if ($rating == '3') { ?>
            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
            <?php }
            else if ($rating == '4') { ?>
            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
            <?php }
            else if ($rating == '5') { ?>
            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            <?php }
            else { ?>
            <i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
            <?php } ?>
            </td>
            </tr>
            <tr>
            <td style="width:830px;">"<?php echo $ket ?>"</td>
            </tr>    
            </table>
            </div>
            </div>
            <hr>
    <?php } }
    ?>
            </div>
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



