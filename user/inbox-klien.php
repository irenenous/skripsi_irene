<?php 
session_start();
include 'config.php';
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}
?>
<?php 
$query = "SELECT * FROM user where id_user = '$iduser' AND role = 'KLIEN' AND status = 'ACTIVE'";
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
    <link rel="stylesheet" href="../temp-dashboard/css/message.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../temp-dashboard/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
     <link rel="stylesheet" href="../temp-dashboard/assets/calendar/fullcalendar.css">
    
      <link rel="stylesheet" href="../temp-dashboard/assets/css/lib/datatable/dataTables.bootstrap.min.css">

  </head>
  <body>
   <div class="page" style="background-color: #fff">
        <?php include 'header-klien.php' ?>
        
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="<?php echo $fotouser ?>" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4"><?php echo $namauser ?></h1>
                <p>Client</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled">
                    <li><a href="dashboard-klien.php"> <i class="icon-home"></i>Home </a></li>
                    <li> <a href="profile-klien.php"> <i class="fa fa-user"></i>Profile </a></li>
                    <li class="active"> <a href="inbox-klien.php"> <i class="icon-mail"></i>Inbox </a></li>
                    <li> <a href="request-klien.php"> <i class="fa fa-tasks"></i>Requests </a></li>
                    <li> <a href="bookmarks-klien.php"> <i class="fa fa-bookmark"></i>Bookmarks </a></li>
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
              <li class="breadcrumb-item"><a href="index-klien.php">Home</a></li>
              <li class="breadcrumb-item active">Inbox</li>
            </ul>
          </div>
 
    <?php
	include("config.php");
    $order_criteria = 'id_pesan';
    if (isset($_GET['order_criteria'])) {
        if ($_GET['order_criteria'] == 'date-asc') {
            $order_criteria = 'STR_TO_DATE(c.tgl_pesan, \'%m/%d/%Y %r\') ASC';
        } else if ($_GET['order_criteria'] == 'date-desc') {
            $order_criteria = 'STR_TO_DATE(c.tgl_pesan, \'%m/%d/%Y %r\') DESC';
        }
    }
	$query1="SELECT c.*, e.*, f.* FROM pesan AS c INNER JOIN (SELECT MAX(a.id_pesan) AS id_pesan, STR_TO_DATE(a.tgl_pesan, '%m/%d/%Y %r') FROM pesan AS a INNER JOIN (SELECT MAX(STR_TO_DATE(tgl_pesan, '%m/%d/%Y %r')) AS tgl_max FROM pesan WHERE id_user = '$iduser' GROUP BY subjek, id_eo, id_user) AS b ON STR_TO_DATE(a.tgl_pesan, '%m/%d/%Y %r') = b.tgl_max GROUP BY a.id_user, a.id_eo, a.subjek, STR_TO_DATE(a.tgl_pesan, '%m/%d/%Y %r')) AS d ON c.id_pesan = d.id_pesan INNER JOIN user AS e ON e.id_user = c.id_user INNER JOIN eo AS f ON f.id_eo = c.id_eo ORDER BY ".$order_criteria;
	$simpan1= mysqli_query($koneksi,$query1);
    ?> 
<div class="container-fluid">                           
<div class="col-lg-12" style="border:1px solid #D3D3D3; border-radius:10px; padding:20px;">
<div class="row" style="padding:10px;">
  <div class="col-xs-12 col-md-12 filter filter-message" style="display: none;">
   <select id="sortFilter" class="sortFilter">
    <option value="">Default</option>
    <option value="date-desc">Date Newest » Oldest</option>
    <option value="date-asc">Date Oldest » Newest</option>
    <!-- <option value="budget-asc">Read Message » Newest Message</option> -->
  </select>
</div>
</div>
<div id="message">
<div class="scroll">
<div class="jscroll-inner">	
<hr>  
    <?php
		while($select = mysqli_fetch_assoc($simpan1))
        {
			$idmsg	    = $select['id_pesan'];
			$date	    = $select['tgl_pesan'];
			$eo         = $select['nama_eo']; 
            $fotoeo     = $select['foto_eo'];
            $subject    = $select['subjek'];
            $message    = $select['pesan'];
		
	   ?>
<div class="message-row" style="padding:10px;">
<a href="showconversation.php?subjek=<?php echo $subject ?>">
<div class="d-flex">
<div style="justify-content:center; width:70px;">
<img src="../eo/<?php echo $fotoeo ?>" alt="Irene Andriani" class="img-vendor-message" style="height:55px; width:55px;">  
</div>
<div style="width:750px;">
<div class="message-vendor-name" style="color: #aa80ff"><?php echo $eo ?></div>
<div class="message-subject"><?php echo $subject ?></div>
<div class="message-deskripsi"><?php echo $message ?></div>
</div>
<div style="width:150px;">
<div class="message-date" style="text-align:right"><?php echo $date ?></div>
</div>
</div>    
</a> 
</div>
<hr>
<?php }
?>
</div></div> </div></div></div>

<script src="https://www.hellobeauty.id/assets/js/jscroll.min.js"></script>
<script type="text/javascript">
		$('.filter-message').show();
</script>

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
    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
    <script type="text/javascript">
		$('.filter-message').show();
	</script>
<script type="text/javascript">
$(document).ready(function(){
    $('#sortFilter').on('change',function(){
        console.log($(this).val());
        var url = new URL(window.location.href);
        url.searchParams.set('order_criteria', $(this).val());
        window.location.href = url.href; 
    });    
});
</script>
      
  </body>
</html>