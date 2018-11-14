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
    <!-- Favicon-->
    <link rel="shortcut icon" href="../temp-dashboard/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <link rel="stylesheet" href="../temp-dashboard/assets/calendar/fullcalendar.css">
    <link rel="stylesheet" href="../temp-dashboard/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.11/sweetalert2.css" />
    
  </head>
  <body>
   <div class="page" style="background: white">
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
            <li class="breadcrumb-item active">EO Criteria</li>
            </ul>
          </div>
            
            <div class="container-fluid">
              <div>
              <div class="card">
                <div class="card-header" style="background-color: lightgray;">
                <div class="pull-right">
               <button class="btn btn-primary" style="color: white;" data-toggle="modal" data-target="#modalForm"><i class="fa fa-plus-circle"></i> Add EO Criteria</button></div> </div> 
    <?php
	include("config.php");
	$query1="SELECT * FROM kriteria_eo INNER JOIN eo ON kriteria_eo.id_eo = eo.id_eo INNER JOIN kriteria_budget ON kriteria_eo.id_kriteria_budget = kriteria_budget.id_kriteria_budget INNER JOIN kriteria_reputasi ON kriteria_eo.id_kriteria_reputasi = kriteria_reputasi.id_kriteria_reputasi INNER JOIN kriteria_fasilitas ON kriteria_eo.id_kriteria_fasilitas = kriteria_fasilitas.id_kriteria_fasilitas INNER JOIN kriteria_konsep ON kriteria_eo.id_kriteria_konsep = kriteria_konsep.id_kriteria_konsep";
	$simpan1= mysqli_query($koneksi,$query1);
    ?>         
            
             <div class="card-body">
            <table class="table table-hover table-curved dataTable table-responsive" id="bootstrap-data-table">
              <thead>
				<tr role="row">
                <th style="width: 50px;">ID</th>
                <th style="width: 200px;">EO</th>
                <th style="width: 150px;">C1</th>
                <th style="width: 150px;">C2</th>
                <th style="width: 150px;">C3</th>
                <th style="width: 150px;">C4</th>
                <th style="width: 80px;">Action</th>
                </tr>
			</thead>
		  <tbody> 
    <?php
		while($select = mysqli_fetch_assoc($simpan1))
        {
			$idkriteriaeo  = $select['id_kriteria_eo'];
            $eo			   = $select['nama_eo'];
			$budget		   = $select['detail_kriteria1'];
			$reputasi	   = $select['detail_kriteria2'];
			$fasilitas	   = $select['detail_kriteria3'];
			$konsep        = $select['detail_kriteria4'];
		
	?>
            <tr> 
			<td><?php echo $idkriteriaeo ?></td>
			<td><?php echo $eo ?></td>
			<td><?php echo $budget ?></td>
			<td><?php echo $reputasi ?></td>
            <td><?php echo $fasilitas ?></td>
            <td><?php echo $konsep ?></td>
			<td> 
            <div class="btn-group-xs">
            <a class="btn btn-sm btn-primary" href="editeocriteria.php?id_kriteria_eo=<?php echo $idkriteriaeo ?>"><i class="fa fa-edit"></i></a>
            <button onclick="deleteFunction(<?php echo $idkriteriaeo ?>)" class="btn btn-sm btn-primary"><i class="fa fa-trash" ></i></button>
            </div>
            </td>
			</tr>
    <?php }
            ?>
            </tbody>
            </table></div></div>
            </div>
            </div>
            
               <!-- Modal -->
    <div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add EO Criteria</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <!-- Modal Body -->
            <form role="form" method="POST" action="addeocriteria.php">
            <div class="modal-body">
                <!-- <p class="statusMsg"></p> -->
            <div class="form-group">
            <label for="eo">Event Organizer</label>
            <select class="form-control" name="eo" id="eo" required>
            <?php 
            include 'config.php';
            $tampil=mysqli_query($koneksi, "SELECT id_eo, nama_eo FROM eo where status = 'verified'");
            echo "<option value='' disabled selected>Choose event organizer</option>"; while($id_eo=mysqli_fetch_array($tampil)) {
            echo "<option value='".$id_eo[id_eo]."' required> ".$id_eo[nama_eo]."</option>";}
            ?>
            </select>
            </div>
            <div class="form-group">
            <label for="c1">Budget (C1)</label>
            <select class="form-control" name="c1" id="c1" required>
            <?php 
            include 'config.php';
            $tampil=mysqli_query($koneksi, "SELECT id_kriteria_budget, detail_kriteria FROM kriteria_budget");
            echo "<option value='' disabled selected>Choose detail criteria</option>"; while($id_kriteria_budget=mysqli_fetch_array($tampil)) {
            echo "<option value='".$id_kriteria_budget[id_kriteria_budget]."' required> ".$id_kriteria_budget[detail_kriteria]."</option>";}
            ?>
            </select>
            </div>
            <div class="form-group">
            <label for="c2">Reputation (C2)</label>
            <select class="form-control" name="c2" id="c2" required>
            <?php 
            include 'config.php';
            $tampil=mysqli_query($koneksi, "SELECT id_kriteria_reputasi, detail_kriteria FROM kriteria_reputasi");
            echo "<option value='' disabled selected>Choose detail criteria</option>"; while($id_kriteria_reputasi=mysqli_fetch_array($tampil)) {
            echo "<option value='".$id_kriteria_reputasi[id_kriteria_reputasi]."' required> ".$id_kriteria_reputasi[detail_kriteria]."</option>";}
            ?>
            </select>
            </div> 
            <div class="form-group">
            <label for="c3">Facility & Service (C3)</label>
            <select class="form-control" name="c3" id="c3" required>
            <?php 
            include 'config.php';
            $tampil=mysqli_query($koneksi, "SELECT id_kriteria_fasilitas, detail_kriteria FROM kriteria_fasilitas");
            echo "<option value='' disabled selected>Choose detail criteria</option>"; while($id_kriteria_fasilitas=mysqli_fetch_array($tampil)) {
            echo "<option value='".$id_kriteria_fasilitas[id_kriteria_fasilitas]."' required> ".$id_kriteria_fasilitas[detail_kriteria]."</option>";}
            ?>
            </select>
            </div> 
            <div class="form-group">
            <label for="c4">Concept & Decoration (C4)</label>
            <select class="form-control" name="c4" id="c4" required>
            <?php 
            include 'config.php';
            $tampil=mysqli_query($koneksi, "SELECT id_kriteria_konsep, detail_kriteria FROM kriteria_konsep");
            echo "<option value='' disabled selected>Choose detail criteria</option>"; while($id_kriteria_konsep=mysqli_fetch_array($tampil)) {
            echo "<option value='".$id_kriteria_konsep[id_kriteria_konsep]."' required> ".$id_kriteria_konsep[detail_kriteria]."</option>";}
            ?>
            </select>
            </div>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary submitBtn" id="tambah" name="tambah">Add</button>
            </div>
        </form>
        </div>
        </div>
        </div>        
            
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.11/sweetalert2.all.js"></script>
      
<script type="text/javascript">
$(document).ready(function() {
$('#bootstrap-data-table-export').DataTable();  }        
</script>  
      
      
  </body>
</html>