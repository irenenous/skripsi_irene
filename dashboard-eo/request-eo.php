<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Requests</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="../admin/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
 <body>
    <div class="page" style="background-color: #fff;">
      
        <?php include 'header-eo.php' ?>
       
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
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
              <h2 class="no-margin-bottom">Requests</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index-eo.php">Home</a></li>
              <li class="breadcrumb-item active">Requests            </li>
            </ul>
          </div>

        <div class="animated fadeIn">
        <div class="row">
        <div class="col-md-12" style="margin-top: 20px; margin-bottom:50px;">
        <div class="ov-h">
        <table id="bootstrap-data-table" class="table table-striped table-bordered">
		<thead>
			<tr role="row">
            <th style="width: 200px;">Request ID</th>
            <th style="width: 200px;">Request Date</th>
            <th style="width: 300px;">Client</th>
            <th style="width: 100px;">Action</th></tr>
		</thead>
	   <tbody>
        <tr role="row" class="odd">
        <td class="sorting_1">4947</td>
        <td>17/10/2018</td>
        <td>Irene Andriani</td>
        <td class="text-center">
        <div class="btn-group btn-group-xs"><a class="btn btn-default btn-sm">View</a><a onclick="delRecord(4947)" class="btn btn-default btn-sm">Delete</a></div>
        </td>
        </tr>
        </tbody>
        </table></div></div></div></div>
             
        
          
 
 
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
     
     <!-- data table -->
    <script src="../admin/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="../admin/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="../admin/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../admin/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="../admin/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="../admin/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="../admin/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../admin/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../admin/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../admin/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="../admin/assets/js/lib/data-table/datatables-init.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
     
  </body>
</html>