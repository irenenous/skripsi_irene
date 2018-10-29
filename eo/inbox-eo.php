<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inbox</title>
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
                    <li><a href="dashboard-eo.php"> <i class="icon-home"></i>Home </a></li>
                    <li> <a href="profile-eo.php"> <i class="fa fa-user"></i>Profile </a></li>
                    <li class="active"> <a href="inbox-eo.php"> <i class="icon-mail"></i>Inbox </a></li>
                    <li> <a href="request-eo.php"> <i class="fa fa-tasks"></i>Requests </a></li>
                    <li> <a href="portfolio-eo.php"> <i class="icon-picture"></i>Portfolio </a></li>
                    <li> <a href="paket-eo.php"> <i class="fa fa-money"></i>Packages </a></li>
                    <li> <a href="appointment-eo.php"> <i class="fa fa-calendar"></i>Appointments </a></li>
              
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Inbox</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard-eo.php">Home</a></li>
              <li class="breadcrumb-item active">Inbox            </li>
            </ul>
          </div>
           
            <div class="container-fluid">
            
            <div class>
            <div id="datatable1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="table-responsive">
            <table class="table table-hover table-curved dataTable no-footer" width="100%" id="datatable1" role="grid" style="width: 100%;">
		    <thead class="hide">
			<tr role="row">
            <th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 0px;" aria-label=": activate to sort column ascending"></th>
            <th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 0px;" aria-label=": activate to sort column ascending"></th>
            <th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 0px;" aria-label=": activate to sort column ascending"></th>
            <th class="sorting_desc" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 0px;" aria-sort="descending" aria-label=": activate to sort column ascending"></th>
            </tr>
		  </thead>
	      <tbody>
          <tr role="row" class="odd" style="cursor: pointer;">
          <td><img src="img/avatar-0.jpg" class="img-circle" style="width:50px; height: 50px;"></td>
          <td style="font-weight: bold;">From: Irene Andriani<br><span class="text-muted">hey</span></td><td></td><td class="sorting_1">11/10/2018 22:29</td></tr>
          </tbody>
          </table></div>
          <div class="tp-pagination">
          <div class="dataTables_paginate paging_simple_numbers" id="datatable1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="datatable1_previous"><a href="#" aria-controls="datatable1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="datatable1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="datatable1_next"><a href="#" aria-controls="datatable1" data-dt-idx="2" tabindex="0">Next</a></li></ul></div></div></div>
        </div></div>
         
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
    <!-- Main File-->
    <script src="../temp-dashboard/js/front.js"></script>
  </body>
</html>