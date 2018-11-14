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
$query1 = "SELECT count(1) FROM portfolio where id_eo = '$ideo'";
$result1 = mysqli_query($koneksi, $query1);
$row = mysqli_fetch_array($result1); 
$totalport = $row[0];       
?>

<?php 
$query2 = "SELECT count(1) FROM paket where id_eo = '$ideo'";
$result2 = mysqli_query($koneksi, $query2);
$row = mysqli_fetch_array($result2); 
$totalpaket = $row[0];       
?>

<?php 
$query3 = "SELECT count(1) FROM app_reminder where id_eo = '$ideo'";
$result3 = mysqli_query($koneksi, $query3);
$row = mysqli_fetch_array($result3); 
$totalreminder = $row[0];       
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
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
    
  </head>
  <body>
   <div class="page" style="">
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
                    <li class="active"><a href="dashboard-eo.php"> <i class="icon-home"></i>Home </a></li>
                    <li> <a href="profile-eo.php"> <i class="fa fa-user"></i>Profile </a></li>
                    <li> <a href="inbox-eo.php"> <i class="icon-mail"></i>Inbox </a></li>
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
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-picture"></i></div>
                    <div class="title"><span>Portfolio</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $totalport ?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="fa fa-money"></i></div>
                    <div class="title"><span>Packages</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $totalpaket ?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="fa fa-calendar"></i></div>
                    <div class="title"><span>Appointments</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $totalreminder ?></strong></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">
                <!-- Statistics -->
                <div class="col-lg-6">
                <div class="card">
                <div class="card-close">
                <a href="inbox-eo.php" class="btn pull-right">See All</a>
                </div>
                <div class="card-header d-flex align-items-center">           
                <h2 class="h3">Latest Message</h2>
                </div>
                <div class="card-body">
                <div class="list-group">
               <?php 
        include("config.php");      
        $query2 = "SELECT * from pesan INNER JOIN user ON pesan.id_user = user.id_user where id_eo = '$ideo' AND pesan.status = 'SENT' AND sender = 'KLIEN' GROUP BY subjek";
        $simpan2 = mysqli_query($koneksi, $query2);
        if (mysqli_num_rows($simpan2) > 0) {
		while($select = mysqli_fetch_assoc($simpan2))
        {
			$idmsg	    = $select['id_pesan'];
			$klien      = $select['nama_user']; 
            $subject    = $select['subjek'];
		
	   ?>
                <div class="message-row" style="padding:5px;">
                <a href="showconversation.php?subjek=<?php echo $subject ?>">
                <div class="message-vendor-name" style="color: #aa80ff"><?php echo $klien ?></div>
                <div class="message-subject">Subject: <?php echo $subject ?></div> 
                <div class="message-deskripsi">You've got new message!</div>
                </a>
                </div>
        <?php } } 
        else { ?>
                <p>No message found!</p>
        <?php } ?>
                </div>
                </div>
                </div>
                <div class="card">
                <div class="card-close">
                <a href="request-eo.php" class="btn pull-right">See All</a>
                </div>
                <div class="card-header d-flex align-items-center">           
                <h2 class="h3">Latest Request</h2>
                </div>
                <div class="card-body">
                <div class="list-group">
                
        <?php 
        include("config.php");      
        $query3 = "SELECT * from request_layanan INNER JOIN user ON request_layanan.id_user = user.id_user INNER JOIN paket ON request_layanan.id_paket = paket.id_paket where request_layanan.id_eo = '$ideo' AND request_layanan.status = 'SENT'";
        $simpan3 = mysqli_query($koneksi, $query3);
        if (mysqli_num_rows($simpan3) > 0) {
		while($select = mysqli_fetch_assoc($simpan3))
        {
			$idreq	    = $select['id_request'];
			$klien      = $select['nama_user']; 
            $fotoklien  = $select['foto_user'];
            $paket      = $select['nama_paket'];
            $date       = $select['tgl_request'];
		
	   ?>
                <div class="d-flex">
				<div class="col-lg-2" href="#" style="margin-right:0px; padding-right:0px;">
				<img class="media-object img-circle" src="../user/<?php echo $fotoklien ?>" style="width:60px; height:60px; border-radius: 50%;">
				</div>
				<div class="col-lg-12 media-body">
				<strong class="media-heading"><?php echo $klien ?></strong><a href="viewrequest.php?id_request=<?php echo $idreq ?>" class="btn btn-primary btn-xs pull-right" style="height:32px;"><p style="font-size:10pt">View Detail</p></a><br>
				<?php echo $paket ?><br>
				<?php echo $date ?><br>
				</div>
                </div>
				<hr style="margin: 15px 0;">
        <?php } } 
        else { ?>
                <p>No request found!</p>
        <?php } ?>
                
                </div>
                </div>
                </div>
                </div>
                <!--Calendar-->
                   <div class="col-lg-6">
                    <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">           
                    <h2 class="h3">My Calendar</h2>
                    </div>
                    <div class="card-body">  
                    <div class="calender-cont widget-calender">
                    <div id="calendar"></div>
                    </div>
                    </div>
                    </div><!-- /.card -->
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
  </body>
</html>