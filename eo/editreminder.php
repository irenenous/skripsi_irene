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
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Appointments</title>
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
                    <li> <a href="request-eo.php"> <i class="fa fa-tasks"></i>Requests </a></li>
                    <li> <a href="portfolio-eo.php"> <i class="icon-picture"></i>Portfolio </a></li>
                    <li> <a href="paket-eo.php"> <i class="fa fa-money"></i>Packages </a></li>
                    <li class="active"> <a href="appointment-eo.php"> <i class="fa fa-calendar"></i>Appointments </a></li>
                    
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
            <h2 class="no-margin-bottom">Edit Reminder
            </h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard-eo.php">Home</a></li>
                <li class="breadcrumb-item"><a href="appointment-eo.php">Appointments</a></li>
            <li class="breadcrumb-item active">Edit</li>
            </ul>
          </div>
            <div class="container-fluid" style="margin-top:20px; margin-bottom:30px;">
            <div class="row">
            <div class="col-lg-6">
          
          
                    
    <?php
	include("config.php");
    if(!empty($_GET['id_reminder'])){
	$id = $_GET['id_reminder']; }

    $query="SELECT id_reminder, nama_user, email_user, nohp_user, tgl_reminder, wkt_reminder, ket_reminder, app_reminder.status FROM app_reminder INNER JOIN user ON app_reminder.id_user = user.id_user where id_reminder = '".$id."'";
	$tampil = mysqli_query($koneksi,$query);
    $select = mysqli_fetch_array($tampil);
        
    $id			    = $select['id_reminder'];
    $namaklien	    = $select['nama_user'];
    $emailklien	    = $select['email_user'];
    $tglreminder	= $select['tgl_reminder'];
    $wktreminder    = $select['wkt_reminder']; 
    $ketreminder	= $select['ket_reminder'];
    $statreminder   = $select['status'];
    
        
    ?>
        
    <form method="POST" action="updatereminder.php?id_reminder=<?php echo $id ?>" class="form-horizontal">            
                
    <div class="form-group">
    <label for="id">ID </label>
    <input type="text" class="form-control" name="reminderid" id="reminderid" value="<?php echo $id ?>" disabled>   
    </div>
    <div class="form-group">
    <label for="date">Date</label>
    <input type="text" class="form-control" name="reminderdate" id="reminderdate" value="<?php echo $tglreminder ?>" disabled/> 
    </div>
    <div class="form-group">
    <label for="time">Time</label>
    <input type="text" class="form-control" name="remindertime" id="remindertime" value="<?php echo $wktreminder ?>" disabled/> 
    </div>
    <div class="form-group">
    <label for="client">Client</label>
    <input type="text" class="form-control" name="client" id="client" value="<?php echo $namaklien ?>" disabled/> 
    </div>
    <div class="form-group">
    <label for="client">E-mail</label>
    <input type="text" class="form-control" name="clientemail" id="clientemail" value="<?php echo $emailklien ?>" disabled/> 
    </div>
    <div class="form-group">
    <label for="note">Notes</label>
    <textarea class="form-control" name="reminderket" id="reminderket" style="height:100px" disabled><?php echo $ketreminder ?></textarea>
    </div>
    <div class="form-group">
    <label for="status">Status </label> 
    <?php if ($statreminder == 'ONGOING') { ?> 
    <div style="margin-left:5px; margin-top:5px;">
    <div class="i-checks">
    <input id="reminderstatus" name="reminderstatus" type="radio" value="<?php echo $statreminder ?>" checked="" class="radio-template">
    <label for="stat"><?php echo $statreminder ?></label>
    </div>
    <div class="i-checks">
    <input id="reminderstatus" name="reminderstatus" type="radio" value="COMPLETED" class="radio-template">
    <label for="stat">COMPLETED</label>
    </div>
    </div>
    <?php } 
    else if ($statreminder == 'COMPLETED') { ?> 
    <input type="text" class="form-control" name="reminderstatus" id="reminderstatus" value="<?php echo $statreminder ?>" disabled/> 
    <?php } ?> 
    </div>
    <div class="form-group" style="margin-top:30px;">
    <a href="appointment-eo.php" class="btn btn-danger">Cancel</a>
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
    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
    <script type="text/javascript">
	$(document).ready(function() {
    $('#hargapaket').mask('000.000.000.000', {reverse: true});
	});
	
	function refreshTable() {
		$('#datatable').DataTable().ajax.reload();
	}
    </script>
     
     
  </body>
</html>