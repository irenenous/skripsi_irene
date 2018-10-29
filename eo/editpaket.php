<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Packages</title>
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
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="../temp-dashboard/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
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
            <div class="avatar"><img src="../temp-dashboard/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Excellent</h1>
              <p>Event Organizer</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled">
                    <li><a href="index-eo.php"> <i class="icon-home"></i>Home </a></li>
                    <li> <a href="profile-eo.php"> <i class="fa fa-user"></i>Profile </a></li>
                    <li> <a href="inbox-eo.php"> <i class="icon-mail"></i>Inbox </a></li>
                    <li> <a href="request-eo.php"> <i class="fa fa-tasks"></i>Requests </a></li>
                    <li> <a href="portfolio-eo.php"> <i class="icon-picture"></i>Portfolio </a></li>
                    <li class="active"> <a href="paket-eo.php"> <i class="fa fa-money"></i>Packages </a></li>
                    <li> <a href="appointment-eo.php"> <i class="fa fa-calendar"></i>Appointments </a></li>
                    
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
            <h2 class="no-margin-bottom">Edit Package
            </h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index-eo.php">Home</a></li>
                <li class="breadcrumb-item"><a href="paket-eo.php">Packages</a></li>
            <li class="breadcrumb-item active">Edit</li>
            </ul>
          </div>
            <div class="container-fluid" style="margin-top:20px; margin-bottom:30px;">
            <div class="row">
            <div class="col-lg-6">
          
          
                    
    <?php
	include("config.php");
    if(!empty($_GET['id_paket'])){
	$id = $_GET['id_paket']; }

    $query="SELECT * FROM paket where id_paket = '".$id."'";
	$tampil = mysqli_query($koneksi,$query);
    $select = mysqli_fetch_array($tampil);
        
    $id			    = $select['id_paket'];
    $pname			= $select['nama_paket'];
    $type			= $select['jenis_paket'];
    $price			= $select['harga_paket'];
    $description	= $select['ket_paket'];
                    
    if(!$id ||!$pname ||!$type || !$price || !$description )
	{
		echo "some data still empty";
	}   
        
    ?>
        
    <form method="POST" action="updatepaket.php?id_paket=<?php echo $id ?>" class="form-horizontal">            
                
    <div class="form-group">
    <label for="inputName">Package Name </label>
    <input type="text" class="form-control" name="namapaket" id="namapaket" placeholder="Enter package Name" value="<?php echo $pname; ?>" required>   
    </div>
    <div class="form-group">
    <label for="inputType">Type (Event)</label>
    <input type="text" class="form-control" name="jenispaket" id="jenispaket" placeholder="Example: Wedding/Birthday/Prom" value="<?php echo $type; ?>" required/> 
    </div>
    <div class="form-group">
    <label for="inputPrice">Price (Start From) </label>
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">IDR</span>
    </div>
    <input type="text" class="form-control" name="hargapaket" id="hargapaket" placeholder="Enter package price" value="<?php echo $price; ?>" required/>
    </div>
    </div>
    <div class="form-group">
    <label for="inputDescription">Description</label>
    <textarea class="form-control" name="ketpaket" id="ketpaket" placeholder="Describe all the services included in the package" required><?php echo $description; ?></textarea>
    </div>
    <div class="form-group" style="margin-top:30px;">
    <input type="reset" class="btn btn-danger">
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