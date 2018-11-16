<?php 
session_start();
include 'config.php';
if (isset ($_SESSION['id'])!="") {
    $ideo = $_SESSION['id'];
}

?>	

<?php 
$query = "SELECT * FROM eo where id_eo = '$ideo' AND status = 'VERIFIED'";
$tampil = mysqli_query($koneksi, $query);
$select = mysqli_fetch_array($tampil); 
        $emaileo = $select['email_eo'];
        $namaeo = $select['nama_eo'];
        $fotoeo = $select['foto_eo'];
        $desceo = $select['ket_eo'];
        
?>

    <?php
	include("config.php");
    if(!empty($_GET['id_request'])){
	$id = $_GET['id_request']; }
    $updatestat = "UPDATE request_layanan SET status = 'READ' Where id_eo = '$ideo' AND id_request ='$id'";
    $simpan = mysqli_query($koneksi, $updatestat);
    if ($simpan) {
    $query1="SELECT * FROM request_layanan INNER JOIN paket ON request_layanan.id_paket = paket.id_paket INNER JOIN user ON request_layanan.id_user = user.id_user where id_request = '".$id."'";
	$tampil1 = mysqli_query($koneksi,$query1);
    $select = mysqli_fetch_array($tampil1);
        
    $tglrequest    = $select['tgl_request'];
    $tglacara        = $select['tgl_acara'];
    $tipeacara    = $select['tipe_acara'];
    $lokasiacara    = $select['lokasi_acara'];
    $jmlpeserta       = $select['jml_peserta'];
    $durasi    = $select['durasi_acara'];
    $ketacara        = $select['ket_acara'];
    $idpaket     = $select['id_paket'];
    $namapaket      = $select['nama_paket'];
    $hargapaket    = $select['harga_paket'];
    $tipepaket    = $select['jenis_paket'];
    $namaklien      = $select['nama_user'];
    $nohpklien       = $select['nohp_user'];
    $emailklien       = $select['email_user'];
    $statusreq      = $select['status'];   }           
        
    ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Request Detail</title>
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
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="../temp-dashboard/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.11/sweetalert2.css" />
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
 <body>
    <div class="page" style="background-color: white;">
       
        <?php include 'header-eo.php' ?>
       
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="<?php echo $fotoeo ?>" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4"><?php echo $namaeo ?></h1>
              <p>Event Organizer</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled">
                    <li><a href="dashboard-eo.php"> <i class="icon-home"></i>Home </a></li>
                    <li> <a href="profile-eo.php"> <i class="fa fa-user"></i>Profile </a></li>
                    <li> <a href="inbox-eo.php"> <i class="icon-mail"></i>Inbox </a></li>
                    <li class="active"> <a href="request-eo.php"> <i class="fa fa-tasks"></i>Requests </a></li>
                    <li> <a href="portfolio-eo.php"> <i class="icon-picture"></i>Portfolio </a></li>
                    <li> <a href="paket-eo.php"> <i class="fa fa-money"></i>Packages </a></li>
                    <li> <a href="appointment-eo.php"> <i class="fa fa-calendar"></i>Appointments </a></li>
                    
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
            <h2 class="no-margin-bottom">Request #<?php echo $id ?>
            </h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard-eo.php">Home</a></li>
                <li class="breadcrumb-item"><a href="request-eo.php">Request</a></li>
            <li class="breadcrumb-item active">View</li>
            </ul>
              <div class="pull-right">
               <button onclick="window.history.go(-1)" class="btn btn-primary"><i class="fa fa-undo"></i>&nbsp; Back</button>
              </div>
          </div>
            <div class="container-fluid" style="margin-top:20px; margin-bottom:50px;">
            <div class="row">
            <div class="col-lg-12">
    <h3>Request Details</h3>
    <hr>
    <div class="row d-flex">
    <div class="col-lg-6">
    <table>
    <tr>
    <td align="right" width="150px;"><b>Request ID</b></td>
    <td align="left" width="30px;">&nbsp; :</td>
    <td width="200px;"><?php echo $id ?></td>
    </tr>
    <tr>
    <td align="right"><b>Date & Time</b></td>
    <td align="left">&nbsp; :</td>
    <td><?php echo $tglrequest ?></td>
    </tr>
    </table>    
    </div>
    <div class="col-lg-6">
    <table>
    <tr>
    <td align="right" width="150px;"><b>Client Name</b></td>
    <td align="left" width="30px;">&nbsp; :</td>
    <td width="200px;"><?php echo $namaklien ?></td>
    </tr>
    <tr>
    <td align="right"><b>Phone Number</b></td>
    <td align="left">&nbsp; :</td>
    <td><?php echo $nohpklien ?></td>
    </tr>
    <tr>
    <td align="right"><b>E-mail</b></td>
    <td align="left">&nbsp; :</td>
    <td><?php echo $emailklien ?></td>
    </tr>
    </table>    
    </div>            
    </div>
    <br>
    <h5>Event Details</h5>
    <hr>
    <div class="row d-flex">
    <div class="col-lg-7">
    <table>
    <tr>
    <td align="right" width="150px;"><b>Event Date</b></td>
    <td align="left" width="30px;">&nbsp; :</td>
    <td width="250px;"><?php echo $tglacara ?></td>
    </tr>
    <tr>
    <td align="right"><b>Type</b></td>
    <td align="left">&nbsp; :</td>
    <td><?php echo $tipeacara ?></td>
    </tr>
    <tr>
    <td align="right"><b>Location</b></td>
    <td align="left">&nbsp; :</td>
    <td><?php echo $lokasiacara ?></td>
    </tr>
    <tr>
    <td align="right"><b>Number of Guests</b></td>
    <td align="left">&nbsp; :</td>
    <td><?php echo $jmlpeserta ?>&nbsp;person(s)</td>
    </tr>
    <tr>
    <td align="right"><b>Duration</b></td>
    <td align="left">&nbsp; :</td>
    <td><?php echo $durasi ?></td>
    </tr>
   
    </table> 
    </div>
    <div class="col-lg-5" style="padding:10px;">
    <table style="border: 2px solid gray;">
    <tr>
    <td align="right" width="150px;"><b>Service Package</b></td>
    <td align="left" width="30px;">&nbsp; :</td>
    <td width="250px;"><?php echo $namapaket ?></td>
    </tr>
    <tr>
    <td align="right"><b>Package Type</b></td>
    <td align="left">&nbsp; :</td>
    <td><?php echo $tipepaket ?></td>
    </tr>
    <tr>
    <td align="right"><b>Package Price</b></td>
    <td align="left">&nbsp; :</td>
    <td>Start From IDR <?php echo $hargapaket ?></td>
    </tr>
    </table> 
    </div>
    </div>
    <br>
    <div class="row" style="margin-left:50px;">
    <div class="col-lg-10">
    <p style="color:grey"><b>Event Description</b></p>
    <hr>
    <?php echo $ketacara ?>
    </div>
    </div>
    <hr>
    </div></div></div>
   
    
       
                
 
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
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../temp-dashboard/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../temp-dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../temp-dashboard/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../temp-dashboard/vendor/chart.js/Chart.min.js"></script>
    <script src="../temp-dashboard/vendor/jquery-validation/jquery.validate.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="../temp-dashboard/js/front.js"></script>

     <!-- data table -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.11/sweetalert2.all.js"></script>
     
     
  </body>
</html>