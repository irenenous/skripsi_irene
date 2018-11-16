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
    <title>EO Criteria</title>
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
                    <li> <a href="criteria.php"><i class="menu-icon fa fa-tasks"></i>Criteria </a></li>
                    <li class="active"> <a href="eo-criteria.php"><i class="menu-icon fa fa-list"></i>EO Criteria </a></li>
                    <li> <a href="spk-result.php"><i class="menu-icon fa fa-file"></i>SPK Result </a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">EO Criteria</h2>
            </div>
          </header>
         <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard-admin.php">Home</a></li>
              <li class="breadcrumb-item"><a href="eo-criteria.php">EO Criteria</a></li>
            <li class="breadcrumb-item active">Edit</li>
            </ul>
          </div>
        <div class="container-fluid" style="margin-top:20px; margin-bottom:30px;">
        <div class="row">
        <div class="col-lg-8">
  
    <?php
	include("config.php");
    if(!empty($_GET['id_kriteria_eo'])){
	$idkriteriaeo = $_GET['id_kriteria_eo']; }

    $query1="SELECT id_kriteria_eo, kriteria_eo.id_eo, kriteria_eo.id_kriteria_budget, kriteria_eo.id_kriteria_reputasi, kriteria_eo.id_kriteria_fasilitas, kriteria_eo.id_kriteria_konsep, eo.nama_eo, kriteria_budget.detail_kriteria AS budget, kriteria_reputasi.detail_kriteria AS reputasi, kriteria_fasilitas.detail_kriteria AS fasilitas, kriteria_konsep.detail_kriteria as konsep FROM kriteria_eo INNER JOIN eo ON kriteria_eo.id_eo = eo.id_eo INNER JOIN kriteria_budget ON kriteria_eo.id_kriteria_budget = kriteria_budget.id_kriteria_budget INNER JOIN kriteria_reputasi ON kriteria_eo.id_kriteria_reputasi = kriteria_reputasi.id_kriteria_reputasi INNER JOIN kriteria_fasilitas ON kriteria_eo.id_kriteria_fasilitas = kriteria_fasilitas.id_kriteria_fasilitas INNER JOIN kriteria_konsep ON kriteria_eo.id_kriteria_konsep = kriteria_konsep.id_kriteria_konsep where id_kriteria_eo = '".$idkriteriaeo."'";
	$tampil1 = mysqli_query($koneksi,$query1);
    $select = mysqli_fetch_array($tampil1);
        
    $idkriteriaeo	  = $select['id_kriteria_eo'];
    $ideo             = $select['id_eo'];
    $eo               = $select['nama_eo'];
    $idbudget         = $select['id_kriteria_budget'];
    $budget           = $select['budget'];
    $idreputasi       = $select['id_kriteria_reputasi'];
    $reputasi	      = $select['reputasi'];
    $idfasilitas      = $select['id_kriteria_fasilitas'];
    $fasilitas	      = $select['fasilitas'];
    $idkonsep         = $select['id_kriteria_konsep'];
    $konsep           = $select['konsep'];
    ?>
            
    <form method="POST" action="updateeocriteria.php?id_kriteria_eo=<?php echo $idkriteriaeo ?>" class="form-horizontal">            
    <div class="form-group">
    <label for="id">ID </label>
    <input type="text" class="form-control" name="kriteriaeoid" id="kriteriaeoid" value="<?php echo $idkriteriaeo ?>" disabled>   
    </div>          
    <div class="form-group">
    <label for="eo">Event Organizer (EO) </label>
    <select name="eo" id="eo" class="form-control" required disabled>
    <?php 
    include 'config.php';
    $tampil=mysqli_query($koneksi, "SELECT id_eo, nama_eo FROM eo where status = 'verified'");  
    while($id_eo=mysqli_fetch_array($tampil)) {
    echo "<option value='".$id_eo[id_eo]."' ".($id_eo[id_eo] == $ideo ? "selected" : "")."> ".$id_eo[nama_eo]."</option>";}
    ?>
    </select>
    </div>
    <div class="form-group">
    <label for="c1">Budget (C1) </label>
    <select name="c1" id="c1" class="form-control" required>
    <?php 
    include 'config.php';
    $tampil=mysqli_query($koneksi, "SELECT id_kriteria_budget, detail_kriteria FROM kriteria_budget");  
    while($id_kriteria_budget=mysqli_fetch_array($tampil)) {
    echo "<option value='".$id_kriteria_budget[id_kriteria_budget]."' ".($id_kriteria_budget[id_kriteria_budget] == $idbudget ? "selected" : "")."> ".$id_kriteria_budget[detail_kriteria]."</option>";}
    ?>
    </select>
    </div>
    <div class="form-group">
    <label for="c2">Reputation (C2) </label>
    <select name="c2" id="c2" class="form-control" required>
    <?php 
    include 'config.php';
    $tampil=mysqli_query($koneksi, "SELECT id_kriteria_reputasi, detail_kriteria FROM kriteria_reputasi");  
    while($id_kriteria_reputasi=mysqli_fetch_array($tampil)) {
    echo "<option value='".$id_kriteria_reputasi[id_kriteria_reputasi]."' ".($id_kriteria_reputasi[id_kriteria_reputasi] == $idreputasi ? "selected" : "")."> ".$id_kriteria_reputasi[detail_kriteria]."</option>";}
    ?>
    </select>
    </div>
    <div class="form-group">
    <label for="c3">Facility & Service (C3) </label>
    <select name="c3" id="c3" class="form-control" required>
    <?php 
    include 'config.php';
    $tampil=mysqli_query($koneksi, "SELECT id_kriteria_fasilitas, detail_kriteria FROM kriteria_fasilitas");  
    while($id_kriteria_fasilitas=mysqli_fetch_array($tampil)) {
    echo "<option value='".$id_kriteria_fasilitas[id_kriteria_fasilitas]."' ".($id_kriteria_fasilitas[id_kriteria_fasilitas] == $idfasilitas ? "selected" : "")."> ".$id_kriteria_fasilitas[detail_kriteria]."</option>";}
    ?>
    </select>
    </div>
    <div class="form-group">
    <label for="c4">Concept & Decoration (C4) </label>
    <select name="c4" id="c4" class="form-control" required>
    <?php 
    include 'config.php';
    $tampil=mysqli_query($koneksi, "SELECT id_kriteria_konsep, detail_kriteria FROM kriteria_konsep");  
    while($id_kriteria_konsep=mysqli_fetch_array($tampil)) {
    echo "<option value='".$id_kriteria_konsep[id_kriteria_konsep]."' ".($id_kriteria_konsep[id_kriteria_konsep] == $idkonsep ? "selected" : "")."> ".$id_kriteria_konsep[detail_kriteria]."</option>";}
    ?>
    </select>
    </div>
    <div class="form-group" style="margin-top:30px;">
    <a class="btn btn-danger" href="eo-criteria.php">Cancel</a>
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