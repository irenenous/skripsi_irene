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
   <div class="page" style="">
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
                    <li> <a href="spk-result.php"><i class="menu-icon fa fa-file"></i>SPK Result </a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Criteria</h2>
            </div>
          </header>
         <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard-admin.php">Home</a></li>
            <li class="breadcrumb-item active">Criteria</li>
            </ul>
          </div>
            <section class="tables">   
            <div class="container-fluid">
              <div class="row">
               <div class="col-lg-6">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Budget (C1) </h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                
    <?php
	include("config.php");
	$query1="SELECT * FROM kriteria_budget INNER JOIN kriteria ON kriteria_budget.id_kriteria = kriteria.id_kriteria INNER JOIN fuzzy ON kriteria_budget.id_fuzzy = fuzzy.id_fuzzy";
	$simpan1= mysqli_query($koneksi,$query1);
    ?>
                    <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Criteria Detail</th>
                        <th>Fuzzy</th>
                        <th>Score</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
        <?php
		while($select = mysqli_fetch_assoc($simpan1))
        {
			$idbudget        = $select['id_kriteria_budget'];
            $idkriteria	     = $select['id_kriteria'];
			$namakriteria    = $select['nama_kriteria']; 
            $detailkriteria  = $select['detail_kriteria1'];
            $idfuzzy         = $select['id_fuzzy'];
            $fuzzy           = $select['nama_fuzzy'];
            $score           = $select['nilai'];
		
	   ?>          
                        <tr>
                        <th scope="row"><?php echo $idbudget ?></th>
                        <td><?php echo $detailkriteria ?></td>
                        <td><?php echo $fuzzy ?></td>
                        <td><?php echo $score ?></td>
                        <td>
                        <a class="btn btn-sm btn-primary" href="editkriteriabudget.php?id_kriteria_budget=<?php echo $idbudget ?>"><i class="fa fa-edit"></i></a>
                        </td>
                        </tr> 
    <?php }
    ?>
                    </tbody>
                    </table>
                    </div>
                    </div>
                  </div>
                </div>
                    <div class="col-lg-6">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Reputation (C2)</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">               
    <?php
	include("config.php");
	$query2="SELECT * FROM kriteria_reputasi INNER JOIN kriteria ON kriteria_reputasi.id_kriteria = kriteria.id_kriteria INNER JOIN fuzzy ON kriteria_reputasi.id_fuzzy = fuzzy.id_fuzzy";
	$simpan2= mysqli_query($koneksi,$query2);
    ?>
                    <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Criteria Detail</th>
                        <th>Fuzzy</th>
                        <th>Score</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
        <?php
		while($select = mysqli_fetch_assoc($simpan2))
        {
			$idreputasi      = $select['id_kriteria_reputasi'];
            $idkriteria	     = $select['id_kriteria'];
			$namakriteria    = $select['nama_kriteria']; 
            $detailkriteria  = $select['detail_kriteria2'];
            $idfuzzy         = $select['id_fuzzy'];
            $fuzzy           = $select['nama_fuzzy'];
            $score           = $select['nilai'];
		
	   ?>          
                        <tr>
                        <th scope="row"><?php echo $idreputasi ?></th>
                        <td><?php echo $detailkriteria ?></td>
                        <td><?php echo $fuzzy ?></td>
                        <td><?php echo $score ?></td>
                        <td>
                        <a class="btn btn-sm btn-primary" href="editkriteriareputasi.php?id_kriteria_reputasi=<?php echo $idreputasi ?>"><i class="fa fa-edit"></i></a>
                        </td>
                        </tr> 
    <?php }
    ?>
                    </tbody>
                    </table>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Facility & Service (C3) </h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                
    <?php
	include("config.php");
	$query3="SELECT * FROM kriteria_fasilitas INNER JOIN kriteria ON kriteria_fasilitas.id_kriteria = kriteria.id_kriteria INNER JOIN fuzzy ON kriteria_fasilitas.id_fuzzy = fuzzy.id_fuzzy";
	$simpan3= mysqli_query($koneksi,$query3);
    ?>
                    <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Criteria Detail</th>
                        <th>Fuzzy</th>
                        <th>Score</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
        <?php
		while($select = mysqli_fetch_assoc($simpan3))
        {
			$idfasilitas      = $select['id_kriteria_fasilitas'];
            $idkriteria	     = $select['id_kriteria'];
			$namakriteria    = $select['nama_kriteria']; 
            $detailkriteria  = $select['detail_kriteria3'];
            $idfuzzy         = $select['id_fuzzy'];
            $fuzzy           = $select['nama_fuzzy'];
            $score           = $select['nilai'];
		
	   ?>          
                        <tr>
                        <th scope="row"><?php echo $idfasilitas ?></th>
                        <td><?php echo $detailkriteria ?></td>
                        <td><?php echo $fuzzy ?></td>
                        <td><?php echo $score ?></td>
                        <td>
                        <a class="btn btn-sm btn-primary" href="editkriteriafasilitas.php?id_kriteria_fasilitas=<?php echo $idfasilitas ?>"><i class="fa fa-edit"></i></a>
                        </td>
                        </tr> 
    <?php }
    ?>                  </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
           <div class="col-lg-6">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Concept & Decoration (C4) </h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                
    <?php
	include("config.php");
	$query4="SELECT * FROM kriteria_konsep INNER JOIN kriteria ON kriteria_konsep.id_kriteria = kriteria.id_kriteria INNER JOIN fuzzy ON kriteria_konsep.id_fuzzy = fuzzy.id_fuzzy";
	$simpan4= mysqli_query($koneksi,$query4);
    ?>
                    <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Criteria Detail</th>
                        <th>Fuzzy</th>
                        <th>Score</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
        <?php
		while($select = mysqli_fetch_assoc($simpan4))
        {
			$idkonsep      = $select['id_kriteria_konsep'];
            $idkriteria	     = $select['id_kriteria'];
			$namakriteria    = $select['nama_kriteria']; 
            $detailkriteria  = $select['detail_kriteria4'];
            $idfuzzy         = $select['id_fuzzy'];
            $fuzzy           = $select['nama_fuzzy'];
            $score           = $select['nilai'];
		
	   ?>          
                        <tr>
                        <th scope="row"><?php echo $idkonsep ?></th>
                        <td><?php echo $detailkriteria ?></td>
                        <td><?php echo $fuzzy ?></td>
                        <td><?php echo $score ?></td>
                        <td>
                        <a class="btn btn-sm btn-primary" href="editkriteriakonsep.php?id_kriteria_konsep=<?php echo $idkonsep ?>"><i class="fa fa-edit"></i></a>
                        </td>
                        </tr> 
    <?php }
    ?>                  </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
               
            
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