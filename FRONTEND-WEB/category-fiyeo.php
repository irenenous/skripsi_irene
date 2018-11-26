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
		<title>Category</title>

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
.nice-select .list { max-height: 300px; overflow: scroll; }
.pagination {
 
}
.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    margin: 0 4px;
    border: 1px solid #ddd;
}
.pagination a.active {
    background-color: red;
    color: white;
}
.pagination a:hover:not(.active) {background-color: #ddd;}

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
        <!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Event Organizer
							</h1>	
							<p class="text-white link-nav"><a href="index-fiyeo.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="category-fiyeo.php"> Category</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start post Area -->
			<section class="post-area section-gap" style="padding-top:70px;">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
                            
    <?php
	include("config.php");
                            
//    $order_category = 'id_kategori';
//     if (isset($_GET['order_criteria'])) {
//        if ($_GET['order_criteria'] == 'name-asc') {
//            $order_criteria = 'nama_eo ASC';
//        } else if ($_GET['order_criteria'] == 'name-desc') {
//            $order_criteria = 'nama_eo DESC';
//        }
//        else if ($_GET['order_criteria'] == 'price-asc') {
//            $order_criteria = 'min(harga_paket) ASC';
//        }
//    }
//                            
   $order_criteria = 'eoid';
    if (isset($_GET['order_criteria'])) {
        if ($_GET['order_criteria'] == 'name-asc') {
            $order_criteria = 'nama_eo ASC';
        } else if ($_GET['order_criteria'] == 'name-desc') {
            $order_criteria = 'nama_eo DESC';
        }
        else if ($_GET['order_criteria'] == 'price-asc') {
            $order_criteria = 'min_harga_paket ASC';
        }
        else if ($_GET['order_criteria'] == 'price-desc') {
            $order_criteria = 'min_harga_paket DESC';
        }
    }
    $filter_category = isset($_GET['category']) ? $_GET['category'] : 'NULL';
    $filter_area = isset($_GET['area']) ? $_GET['area'] : 'NULL';
                            
	$query1="SELECT eo.id_eo AS eoid, eo.nama_eo, eo.foto_eo, eo.ket_eo, eo.id_kota, kota.nama_kota, kota.id_provinsi, provinsi.nama_provinsi, kategori_eo.id_kategori, kategori.nama_kategori, MIN(paket.harga_paket) AS min_harga_paket from eo INNER JOIN kota ON eo.id_kota = kota.id_kota INNER JOIN provinsi ON kota.id_provinsi = provinsi.id_provinsi INNER JOIN kategori_eo ON eo.id_eo = kategori_eo.id_eo INNER JOIN kategori ON kategori_eo.id_kategori = kategori.id_kategori INNER JOIN paket ON paket.id_eo = eo.id_eo WHERE status='VERIFIED' AND ($filter_category IS NULL OR kategori_eo.id_kategori = $filter_category) AND ($filter_area IS NULL OR eo.id_kota = $filter_area) GROUP BY eo.id_eo ORDER BY $order_criteria";           
	$simpan1= mysqli_query($koneksi,$query1);
    echo mysqli_error($koneksi);
                           
   while($select = mysqli_fetch_assoc($simpan1)) {
			$id        = $select['eoid'];
            $photo     = $select['foto_eo'];
            $name 	   = $select['nama_eo'];
			$desc 	   = $select['ket_eo'];
			$province  = $select['id_provinsi'];
			$city	   = $select['id_kota'];
            $provname  = $select['nama_provinsi'];
            $cityname  = $select['nama_kota'];
            $idkategori = $select['id_kategori'];
            $kategori = $select['nama_kategori']; 

    ?>   
                            
<?php 
$query2 = "SELECT min(harga_paket) from paket where id_eo ='$id'";
$simpan2 = mysqli_query($koneksi, $query2); 
$select = mysqli_fetch_array($simpan2);
       $lowprice = $select['min(harga_paket)'];
       
?>
                          
							<div class="single-post d-flex flex-row">
 
                                <table>
                                <tr>
                                <td rowspan="4"><img src="../eo/<?php echo $photo ?>" width='130px' height='130px'></td>
                                <td style="padding-left:20px;"><a href="view-profile-eo.php?id_eo=<?php echo $id ?>"><h4><?php echo $name ?></h4></a></td>
                                <td>
                                </td>
                                </tr>
                                <tr>
                                <td style="padding-left:20px;"><?php echo $desc ?></td>
                                </tr>
                                <tr>
                                <td style="padding-left:20px;"><i class="fa fa-map-o"></i>&nbsp; <?php echo $cityname ?>, <?php echo $provname ?></td>
                                </tr>
                                <tr>
                                <td style="padding-left:20px;"><i class="fa fa-money"></i>&nbsp; Start from IDR <?php echo $lowprice ?> </td>
                                </tr>
                                </table>
							</div>
                            
    <?php }
	?>                 
                        <div class="pull-right">
                        <div id="page-selection" class="pagination"></div>
                        </div>
						</div>
                        
						<div class="col-lg-4 sidebar">
                            <div class="single-widget search-widget" style="border:2px dotted #aa80ff;">
								<form class="example" action="#" style="margin:auto;max-width:300px">
								  <input type="text" placeholder="Search" id="search" name="search">
								  <button type="submit" disabled><i class="fa fa-search"></i></button>
                                <div id="display" class="showdis"></div>
								</form>								
							</div>
							<div class="single-slidebar" style="background-color:#fff; border:2px dotted #aa80ff;">
				            <h4>Refine Your Search</h4>
                            <hr>
				            <div class="form-group">
                            <label><strong>Select Category</strong></label>
                            <div class="form-select" id="default-select" style="">
                            <select id="filterCategory" name="category">
                            <option value='' disabled selected>Choose category</option>
                            <?php 
                            include 'config.php';
                            $tampil=mysqli_query($koneksi, "SELECT * FROM kategori");
                     while($id_kategori=mysqli_fetch_array($tampil)) {
                            echo "<option value='".$id_kategori[id_kategori]."'> ".$id_kategori[nama_kategori]."</option>";}
                            ?>
                            </select>
                            </div>
				            </div>
                            <hr>
				            <div class="form-group">
                            <label><strong>Select Area</strong></label>
                            <div class="form-select" id="default-select" style="">
                            <select id="filterArea" name='area'>
                            <option value='' disabled selected>Choose area</option>
                    <?php 
                    include 'config.php';
                    $tampil=mysqli_query($koneksi, "SELECT * FROM eo INNER JOIN kota ON eo.id_kota = kota.id_kota");
                    while($id_kota=mysqli_fetch_array($tampil)) {
                    echo "<option value='".$id_kota[id_kota]."' required> ".$id_kota[nama_kota]."</option>";}
                    ?>
                            </select>
                            </div>
				            </div>
                            <hr>
                      <div class="form-group">
                            <label><strong>Sort By</strong></label>
                            <div class="form-select" id="default-select" style="">
                            <select id="sortFilter" name="sortFilter">
                            <option value="">- Default -</option>
                            <option value="name-asc" '<?php $order_criteria == 'name-asc' ? ':selected' : '' ?>'>
                            Name A » Z
                            </option>
                            <option value="name-desc">
                            Name Z » A
                            </option>
                            <option value="price-asc">
                            Price Low » High
                            </option>
                            <option value="price-desc">
                            Price High » Low
                            </option>
                            </select>
                            </div>
                            <hr>
				            </div>
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
								<a class="primary-btn" href="register-eo.php">Register as EO</a>
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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootpag/1.0.7/jquery.bootpag.js"></script>
		
<script type="text/javascript">
$(document).ready(function(){
    $('#sortFilter').on('change',function(){
        console.log($(this).val());
        var url = new URL(window.location.href);
        url.searchParams.set('order_criteria', $(this).val());
        window.location.href = url.href; 
    });    
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    $('#filterCategory').on('change',function(){
        console.log($(this).val());
        var url = new URL(window.location.href);
        url.searchParams.set('category', $(this).val());
        window.location.href = url.href; 
    });
	$('#filterArea').on('change',function(){
        console.log($(this).val());
        var url = new URL(window.location.href);
        url.searchParams.set('area', $(this).val());
        window.location.href = url.href; 
    });    
});

</script> 
<script>
$('#page-selection').bootpag({
    total: 5
}).on("page", function(event, num){
    $("#content").html("Page " + num); // or some ajax content loading...
 
    // ... after content load -> change total to 10
    $(this).bootpag({total: 10, maxVisible: 10});
 
});
</script>
<script>
 
$(document).ready(function() {
 
   //On pressing a key on "Search box" in "search.php" file. This function will be called.
 
   $("#search").keyup(function() {
 
       //Assigning search box value to javascript variable named as "name".
 
       var name = $('#search').val();
 
       //Validating, if "name" is empty.
 
       if (name == "") {
 
           //Assigning empty value to "display" div in "search.php" file.
 
           $("#display").html("");
 
       }
 
       //If name is not empty.
 
       else {
 
           //AJAX is called.
 
           $.ajax({
 
               //AJAX type is "Post".
 
               type: "POST",
 
               //Data will be sent to "ajax.php".
 
               url: "search.php",
 
               //Data, that will be sent to "ajax.php".
 
               data: {
 
                   //Assigning value of "name" into "search" variable.
 
                   search: name
 
               },
 
               //If result found, this funtion will be called.
 
               success: function(html) {
 
                   //Assigning result to "display" div in "search.php" file.
 
                   $("#display").html(html).show();
 
               }
 
           });
 
       }
 
   });
 
});  
</script>           
            
    </body>
	</html>