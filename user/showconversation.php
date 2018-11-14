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

<?php
	include("config.php");
    if(!empty($_GET['subjek'])){
	$subject = $_GET['subjek']; }
    $updatestat = "UPDATE pesan SET status = 'READ' Where id_user = '$iduser' AND subjek ='$subject' AND sender = 'EO'";
    $simpan = mysqli_query($koneksi, $updatestat);
    if ($simpan) {

    $query1="SELECT * FROM pesan INNER JOIN eo ON pesan.id_eo = eo.id_eo where subjek = '".$subject."' AND id_user = ".$iduser;
	$tampil1 = mysqli_query($koneksi,$query1);
    $select1 = mysqli_fetch_array($tampil1);     
            $idmsg	    = $select1['id_pesan'];
			$date	    = $select1['tgl_pesan'];
            $ideo       = $select1['id_eo'];
			$eo         = $select1['nama_eo']; 
            $fotoeo     = $select1['foto_eo'];
            $subject    = $select1['subjek'];
            $message    = $select1['pesan'];    }  
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
              <h2 class="no-margin-bottom">Conversation</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard-klien.php">Home</a></li>
            <li class="breadcrumb-item"><a href="inbox-klien.php">Inbox</a></li>
            <li class="breadcrumb-item active">Conversation</li>
            </ul>
          </div>
             
     
<div class="container-fluid" style="margin-bottom:70px;">                           
<div class="col-lg-12" style="border:1px solid #D3D3D3; border-radius:10px; padding:20px;">
<div class="conversation-name" style="padding:15px;">
<div class="row">
		<div class="col-lg-12">
			<div class="backto-message">
				<button class="back-message" onclick="window.history.go(-1)">
					<i class="fa fa-chevron-left"></i> Back
				</button>
			</div>
			<div class="message-vendor-img-detail">
				<img src="../eo/<?php echo $fotoeo ?>" class="img-vendor-message">
			</div>
			<div class="section-message-detail">
				<div class="message-detail-name">
					<span class="vendor-name"><?php echo $eo ?></span>
				</div>
				<div class="message-detail-name">
		      <span class="subject"  style="color:gray"><small>Subject: <?php echo $subject ?></small></span>
				</div>
			</div>
		</div>
	</div>
</div>
<hr>
<?php
	include("config.php");
    if(!empty($_GET['subjek'])){
	$subject = $_GET['subjek']; }

    $query2="SELECT * FROM pesan INNER JOIN eo ON pesan.id_eo = eo.id_eo where subjek = '".$subject."'";
	$simpan2 = mysqli_query($koneksi,$query1);
?>
<div class="no-border col-lg-12" style="padding:5px;">
<div class="max-height-message col-lg-12" id="frame">

<?php
		while($select = mysqli_fetch_assoc($simpan2))
        {
            $idmsg	    = $select['id_pesan'];
			$date	    = $select['tgl_pesan'];
            $ideo    = $select['id_eo'];
			$eo      = $select['nama_eo']; 
            $fotoeo  = $select['foto_eo'];
            $subject    = $select['subjek'];
            $message    = $select['pesan']; 
            $sender     = $select['sender'];
            
            if ($sender == 'KLIEN') {
?>                  
                    <div class="row">
                    <div style="width:1200px;">    
                    <div class="message-box-client">
                    <div class="message-client"><?php echo $message ?>	
                    <span class="timestamp-client"><?php echo $date ?></span></div>
                    </div>
                    </div>
                    </div>
    
<?php
                } else {
?>
                    <div class="row">
                    <div class="message-box-vendor">
                    <div class="message-vendor"><?php echo $message ?>	
                    <span class="timestamp-vendor"><?php echo $date ?></span>
                    </div>
                    </div>
                    </div>
<?php
                }      
		
}
?>
</div>
<div class="row">
<div style="width:1200px;">
<div class="chat-message-row">
<script>
    function send_message_function() {
                console.log('asdf');
                $.ajax({                                     
                    type: "POST",
                    url: 'replymessage.php',
                    timeout: 600000,
                    data: {
                        "id_user" : "<?php echo( ($_SESSION['is_eo']) ? $ideo : $iduser); ?>",
                        "id_eo": "<?php echo(($_SESSION['is_eo']) ? $iduser : $ideo); ?>",
                        "subject": "<?php echo $subject; ?>",
                        "message": $('#message_box').val()
                    },
                    success: function (data) {
                        location.reload();
                    },
                    error: function () {
                    }
                });    
            };
</script>
<button id="send_button" onclick="send_message_function()" class="send-message">Send</button>
<textarea id="message_box" class="chat-message" name="chat-message" placeholder="Enter text message"></textarea>
</div>
</div>
</div>
</div>
</div>
</div>
<!--<script src="https://www.hellobeauty.id/assets/js/jscroll.min.js"></script>--> 
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
//        $(document).ready(function() {
//          $('#bootstrap-data-table-export').DataTable(); 
//            
//        }
//              
  </script>  
      
      
  </body>
</html>