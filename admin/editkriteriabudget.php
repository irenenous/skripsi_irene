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
    <title>Criteria</title>
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
                    <li><a href="#exampledropdown" aria-expanded="false" data-toggle="collapse"><i class="fa fa-user"></i>Accounts </a>
                    <ul id="exampledropdown" class="collapse list-unstyled ">
                    <li><a href="acc-klien.php"><i class="fa fa-user"></i>Client</a></li>
                    <li><a href="acc-eo.php"><i class="fa fa-users"></i>EO</a></li>
                    </ul>
                    </li>
                    <li class="active"> <a href="criteria.php"><i class="menu-icon fa fa-tasks"></i>Criteria </a></li>
                    <li> <a href="eo-criteria.php"><i class="menu-icon fa fa-list"></i>EO Criteria </a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Budget Criteria (C1)</h2>
            </div>
          </header>
         <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard-admin.php">Home</a></li>
              <li class="breadcrumb-item"><a href="criteria.php">Criteria</a></li>
            <li class="breadcrumb-item active">Edit</li>
            </ul>
          </div>
        <div class="container-fluid" style="margin-top:20px; margin-bottom:30px;">
        <div class="row">
        <div class="col-lg-8">
  
    <?php
	include("config.php");
    if(!empty($_GET['id_kriteria_budget'])){
	$idbudget = $_GET['id_kriteria_budget']; }

    $query1="SELECT * FROM kriteria_budget INNER JOIN indikator_penilaian ON kriteria_budget.id_indikator_penilaian = indikator_penilaian.id_indikator_penilaian where id_kriteria_budget = '".$idbudget."'";
	$tampil1 = mysqli_query($koneksi,$query1);
    $select = mysqli_fetch_array($tampil1);
        
    $idbudget	      = $select['id_kriteria_budget'];
    $detailkriteria   = $select['detail_kriteria']; 
    $idindikator       = $select['id_indikator_penilaian'];
    $indikatorpenilaian   = $select['indikator_penilaian'];
    ?>
            
    <form method="POST" action="updatekriteriabudget.php?id_kriteria_budget=<?php echo $idbudget ?>" class="form-horizontal">            
    <div class="form-group">
    <label for="id">ID </label>
    <input type="text" class="form-control" name="budgetid" id="budgetid" value="<?php echo $idbudget ?>" disabled>   
    </div>          
    <div class="form-group">
    <label for="name">Criteria Detail </label>
    <input type="text" class="form-control" name="detailbudget" id="detailbudget" value="<?php echo $detailkriteria ?>" required> 
    </div>
    <div class="form-group">
    <label for="indikator">Indikator Penilaian </label>
    <select name="indikator" id="indikator" class="form-control" required>
    <?php 
    include 'config.php';
    $tampil=mysqli_query($koneksi, "SELECT id_indikator_penilaian, indikator_penilaian FROM indikator_penilaian");  
    while($id_indikator_penilaian=mysqli_fetch_array($tampil)) {
    echo "<option value='".$id_indikator_penilaian[id_indikator_penilaian]."' ".($id_indikator_penilaian[id_indikator_penilaian] == $idindikator ? "selected" : "")."> ".$id_indikator_penilaian[indikator_penilaian]."</option>";}
    ?>
    </select>
    </div>
    <div class="form-group" style="margin-top:30px;">
    <a class="btn btn-danger" href="criteria.php">Cancel</a>
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