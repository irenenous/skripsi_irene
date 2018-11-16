<?php 
session_start();
include 'config.php';
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}
?>

<?php 
$query = "SELECT * FROM user where id_user = '$iduser' AND status = 'ACTIVE'";
$tampil = mysqli_query($koneksi, $query);
$select = mysqli_fetch_array($tampil); 
        $namauser = $select['nama_user'];
        $nohpuser = $select['nohp_user']; 
        $emailuser = $select['email_user'];
        $fotouser = $select['foto_user'];     
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accounts</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../temp-dashboard/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../temp-dashboard/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../temp-dashboard/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../temp-dashboard/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../temp-dashboard/css/custom.css">
    <link rel="stylesheet" href="../temp-dashboard/css/message.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../temp-dashboard/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <link rel="stylesheet" href="../temp-dashboard/assets/calendar/fullcalendar.css">
    <link rel="stylesheet" href="../temp-dashboard/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.11/sweetalert2.css" />
    <link rel="stylesheet" type="text/css" href="../temp-dashboard/jquery.imgzoom-0.2.2/css/imgzoom.css" />
    
      
<style>
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}


.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}  
    

</style>
      
      
  </head>
  <body>
   <div class="page" style="background-color: white;">
        <?php include 'header-admin.php' ?>
        
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="../user/<?php echo $fotouser ?>" alt="..." class="img-fluid rounded-circle" style="width:60px; height:50px;"></div>
            <div class="title">
              <h1 class="h4"><?php echo $namauser ?></h1>
              <p>Admin</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled">
                    <li><a href="dashboard-admin.php"><i class="icon-home"></i>Home </a></li>
                    <li class="active"><a href="#exampledropdown" aria-expanded="false" data-toggle="collapse"><i class="fa fa-user"></i>Accounts </a>
                    <ul id="exampledropdown" class="collapse list-unstyled ">
                    <li class="active"><a href="acc-klien.php"><i class="fa fa-user"></i>Client</a></li>
                    <li><a href="acc-eo.php"><i class="fa fa-users"></i>EO</a></li>
                    </ul>
                    </li>
                    <li> <a href="criteria.php"><i class="menu-icon fa fa-tasks"></i>Criteria </a></li>
                    <li> <a href="eo-criteria.php"><i class="menu-icon fa fa-list"></i>EO Criteria </a></li>
                    <li> <a href="spk-result.php"><i class="menu-icon fa fa-file"></i>SPK Result </a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">EO Detail</h2>
            </div>
          </header>
         <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard-admin.php">Home</a></li>
              <li class="breadcrumb-item">Accounts</li>
            <li class="breadcrumb-item">EO</li>
            <li class="breadcrumb-item active">Edit</li>
            </ul>
          </div>
        <div class="container-fluid" style="margin-top:20px; margin-bottom:30px;">
        <div class="row">
        <div class="col-lg-8">
  
    <?php
	include("config.php");
    if(!empty($_GET['id_eo'])){
	$ideo = $_GET['id_eo']; }

    $query1="SELECT * FROM eo INNER JOIN provinsi ON eo.id_provinsi = provinsi.id_provinsi INNER JOIN kota ON eo.id_kota = kota.id_kota where id_eo = '$ideo'";
	$tampil1 = mysqli_query($koneksi,$query1);
    $select = mysqli_fetch_array($tampil1);
        
    $ideo	   = $select['id_eo'];
    $namaeo    = $select['nama_eo']; 
    $fotoeo    = $select['foto_eo'];
    $emaileo   = $select['email_eo'];
    $nohpeo    = $select['nohp_eo'];
    $keteo     = $select['ket_eo'];
    $idprov    = $select['id_provinsi'];
    $provname  = $select['nama_provinsi'];
    $idcity    = $select['id_kota'];
    $cityname  = $select['nama_kota'];
    $alamateo  = $select['alamat_eo'];
    $fotoid1   = $select['foto_ktp'];
    $fotoid2   = $select['fotodiri_ktp'];
    $fotoid3   = $select['foto_alamat'];
    $fotoid4   = $select['foto_siup'];
    $tahuneo   = $select['tahun_diri'];
    $linkeo    = $select['link_web'];
    $statuseo  = $select['status'];  
        
    ?>
    
<?php 
$query2 = "SELECT * FROM kategori_eo INNER JOIN kategori ON kategori_eo.id_kategori = kategori.id_kategori where id_eo = '$ideo'";
$tampil2 = mysqli_query($koneksi, $query2);
$select2 = mysqli_fetch_array($tampil2); 
?>
            
    <form method="POST" action="updateeo.php?id_eo=<?php echo $ideo ?>" class="form-horizontal">            
    <div class="form-group">
    <label for="id">ID </label>
    <input type="text" class="form-control" name="eoid" id="eoid" value="<?php echo $ideo ?>" disabled>   
    </div>          
    <div class="form-group">
    <div style="margin-left:4px;">
    <label for="image">Photo</label>
    <div class="d-flex">
    <a href="../eo/<?php echo $fotoeo ?>" target="_blank"><img class="thumbnail" src="../eo/<?php echo $fotoeo ?>" style= "width:150px; height:150px;" id="eophoto" name="eophoto" /></a> 
    <div class="align-self-center" style="margin-left: 20px;">
    <div class="upload-btn-wrapper">
    <button class="btn" disabled>Upload</button>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="form-group">
    <label for="name">Name </label>
    <input type="text" class="form-control" name="eoname" id="eoname" value="<?php echo $namaeo ?>" disabled>   
    </div>
    <div class="form-group">
    <label for="desc">Description </label>
    <textarea class="single-textarea form-control" name="eodesc" id="eodesc" style="height:150px;" disabled><?php echo $keteo ?></textarea>
    </div>
    <div class="form-group">
    <label for="category">Company Category</label>
    <?php 
    $query2 = "SELECT * FROM kategori_eo INNER JOIN kategori ON kategori_eo.id_kategori = kategori.id_kategori where id_eo = '$ideo'";
    $tampil2 = mysqli_query($koneksi, $query2);
    while ($row = mysqli_fetch_array($tampil2)) {
    ?>    
    <select name="nama_kategori[]" id="kategori" class="form-control mb-3" disabled="" required>
    <option value="<?php echo $row['id_kategori'] ?>" selected><?php echo $row['nama_kategori'] ?></option>
    </select>    
    <?php }
    ?>
    </div>
    <div class="form-group">
    <div class="row">
    <div class="col-md-6">
    <label for="province">Province </label>
    <select name="eoprov" id="eoprov" class="form-control mb-3" disabled>
    <option selected><?php echo $provname ?></option>
    </select>   
    </div>
    <div class="col-md-6">
    <label for="city">City </label>
    <select name="eocity" id="eocity" class="form-control mb-3" disabled>
    <option selected><?php echo $cityname ?></option>
    </select>   
    </div>
    </div>
    </div>
    <div class="form-group">
    <label for="email">E-mail </label>
    <input type="email" class="form-control" name="eoemail" id="eoemail" value="<?php echo $emaileo ?>" disabled>   
    </div>
    <div class="form-group">
    <label for="phone">Phone </label>
    <input type="text" class="form-control" name="eophone" id="eophone" value="<?php echo $nohpeo ?>" disabled>   
    </div>
    <div class="form-group">
    <div class="row d-flex">
    <div class="col-lg-4">
    <label for="image">Photo/Scan of ID Card</label>
    <div class="d-flex">
    <a href="../eo/<?php echo $fotoid1 ?>" target="_blank"><img class="thumbnail" src="../eo/<?php echo $fotoid1 ?>" style= "width:200px; height:200px;" id="eophotoid1" name="eophotoid1" /></a> 
    </div>
    </div>
    <div class="col-lg-8">
    <label for="image">Photo with ID Card</label>
    <div class="d-flex">
    <a href="../eo/<?php echo $fotoid2 ?>" target="_blank"><img class="thumbnail" src="../eo/<?php echo $fotoid2 ?>" style= "width:200px; height:200px;" id="eophotoid2" name="eophotoid2" /></a> 
    </div>
    </div>
    </div>
    </div>
    <div class="form-group">  
    <div class="row d-flex">
    <div class="col-lg-4">
    <label for="image">Photo of SIUP/TDP</label>
    <div class="d-flex">
    <a href="../eo/<?php echo $fotoid4 ?>" target="_blank"><img class="thumbnail" src="../eo/<?php echo $fotoid4 ?>" style= "width:200px; height:200px;" id="eophotoid4" name="eophotoid4" /></a> 
    </div>
    </div>
    <div class="col-lg-8">
    <label for="image">Photo of bills that includes address</label>
    <div class="d-flex">
    <a href="../eo/<?php echo $fotoid3 ?>" target="_blank"><img class="thumbnail" src="../eo/<?php echo $fotoid3 ?>" style= "width:200px; height:200px;" id="eophotoid3" name="eophotoid3" /></a> 
    </div>
    </div>
    </div>
    </div>
    <div class="form-group">
    <label for="year">Year of Establishment </label>
    <input type="text" class="form-control" name="eoyear" id="eoyear" value="<?php echo $tahuneo ?>" disabled>   
    </div>
    <div class="form-group">
    <label for="link">Website Link </label>
    <input type="text" class="form-control" name="eolink" id="eolink" value="<?php echo $linkeo ?>" disabled>   
    </div>
    <div class="form-group">
    <label for="status">Status </label>
    <div style="margin-left:5px; margin-top:5px;">
    <?php if ($statuseo == 'PENDING') { ?> 
    <div class="i-checks">
    <input id="eostatus" name="eostatus" type="radio" value="<?php echo $statuseo ?>" checked="" class="radio-template">
    <label for="stat"><?php echo $statuseo ?></label>
    </div>
    <div class="i-checks">
    <input id="eostatus" name="eostatus" type="radio" value="CONFIRMED" class="radio-template">
    <label for="stat">CONFIRMED</label>
    </div>
    <div class="i-checks">
    <input id="eostatus" name="eostatus" type="radio" value="VERIFIED" class="radio-template">
    <label for="stat">VERIFIED</label>
    </div>
    <div class="i-checks">
    <input id="eostatus" name="eostatus" type="radio" value="INACTIVE" class="radio-template">
    <label for="stat">INACTIVE</label>
    </div>
    <?php } 
    else if ($statuseo == 'CONFIRMED') { ?> 
    <div class="i-checks">
    <input id="eostatus" name="eostatus" type="radio" value="PENDING" class="radio-template">
    <label for="stat">PENDING</label>
    </div>
    <div class="i-checks">
    <input id="eostatus" name="eostatus" type="radio" value="<?php echo $statuseo ?>" checked="" class="radio-template">
    <label for="stat"><?php echo $statuseo ?></label>
    </div>
    <div class="i-checks">
    <input id="eostatus" name="eostatus" type="radio" value="VERIFIED" class="radio-template">
    <label for="stat">VERIFIED</label>
    </div>
    <div class="i-checks">
    <input id="eostatus" name="eostatus" type="radio" value="INACTIVE" class="radio-template">
    <label for="stat">INACTIVE</label>
    </div>
    <?php } 
    else if ($statuseo == 'VERIFIED') { ?> 
    <div class="i-checks">
    <input id="eostatus" name="eostatus" type="radio" value="PENDING" class="radio-template">
    <label for="stat">PENDING</label>
    </div>
    <div class="i-checks">
    <input id="eostatus" name="eostatus" type="radio" value="CONFIRMED" class="radio-template">
    <label for="stat">CONFIRMED</label>
    </div>
    <div class="i-checks">
    <input id="eostatus" name="eostatus" type="radio" value="<?php echo $statuseo ?>" checked="" class="radio-template">
    <label for="stat"><?php echo $statuseo ?></label>
    </div>
    <div class="i-checks">
    <input id="eostatus" name="eostatus" type="radio" value="INACTIVE" class="radio-template">
    <label for="stat">INACTIVE</label>
    </div>
    <?php } 
    else { ?>
    <div class="i-checks">
    <input id="eostatus" name="eostatus" type="radio" value="PENDING" class="radio-template">
    <label for="stat">PENDING</label>
    </div>
    <div class="i-checks">
    <input id="eostatus" name="eostatus" type="radio" value="CONFIRMED" class="radio-template">
    <label for="stat">CONFIRMED</label>
    </div>
    <div class="i-checks">
    <input id="eostatus" name="eostatus" type="radio" value="VERIFIED" class="radio-template">
    <label for="stat">VERIFIED</label>
    </div>
    <div class="i-checks">
    <input id="eostatus" name="eostatus" type="radio" value="<?php echo $statuseo ?>" checked="" class="radio-template">
    <label for="stat"><?php echo $statuseo ?></label>
    </div>
    <?php } ?>
    </div>   
    </div>
    <div class="form-group" style="margin-top:30px;">
    <a class="btn btn-danger" href="acc-eo.php">Cancel</a>
    <button type="submit" class="btn btn-primary submitBtn" id="simpan" name="simpan">Save Changes</button>
    </div>          
    </form></div></div></div>
    
            
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>F I Y E O &copy; 2018-2019</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>All Rights Reserved</p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="../temp-dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="../temp-dashboard/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../temp-dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../temp-dashboard/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../temp-dashboard/vendor/chart.js/Chart.min.js"></script>
    <script src="../temp-dashboard/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="../temp-dashboard/js/charts-home.js"></script>
    <script src="../temp-dashboard/assets/js/lib/moment/moment.js"></script>
    <script src="../temp-dashboard/assets/calendar/fullcalendar.min.js"></script>
    <script src="../temp-dashboard/assets/calendar/fullcalendar-init.js"></script>
    <!-- Main File-->
    <script src="../temp-dashboard/js/front.js"></script>
    <script src="../temp-dashboard/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="../temp-dashboard/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="../temp-dashboard/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../temp-dashboard/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="../temp-dashboard/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="../temp-dashboard/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="../temp-dashboard/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../temp-dashboard/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../temp-dashboard/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../temp-dashboard/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="../temp-dashboard/assets/js/lib/data-table/datatables-init.js"></script>
    <script src="../temp-fiyeo/js/jQuery-Mask-Plugin-master/dist/jquery.mask.js"></script>
    <script type="text/javascript" src="../temp-dashboard/jquery.imgzoom-0.2.2/scripts/jquery.imgzoom.pack.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.11/sweetalert2.all.js"></script>
      
<script type="text/javascript">
$(document).ready(function() {
$('#bootstrap-data-table-export').DataTable(); 
});      
</script>  
<script type="text/javascript">
  $(document).ready(function () {
    $('#img.thumbnail').imgZoom();
  });
</script>
      
  </body>
</html>