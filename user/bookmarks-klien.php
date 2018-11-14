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
    <title>Bookmarks</title>
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.11/sweetalert2.css" />
      <link rel="stylesheet" href="../temp-dashboard/css/message.css">

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
                    <li> <a href="inbox-klien.php"> <i class="icon-mail"></i>Inbox </a></li>
                    <li> <a href="request-klien.php"> <i class="fa fa-tasks"></i>Requests </a></li>
                    <li class="active"> <a href="bookmarks-klien.php"> <i class="fa fa-bookmark"></i>Bookmarks </a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Bookmarks</h2>
            </div>
          </header>
        <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index-klien.php">Home</a></li>
              <li class="breadcrumb-item active">Bookmarks            </li>
            </ul>
          </div>
            
    <?php
	include("config.php");
	$query1="SELECT * FROM bookmark INNER JOIN eo ON bookmark.id_eo = eo.id_eo where id_user = '$iduser'";
	$simpan1= mysqli_query($koneksi,$query1);
    ?>          
            
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12" style="margin-top: 20px; margin-bottom:50px;">
                                <div class="ov-h">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                    <th class="avatar">Picture</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        
    <?php
		while($select = mysqli_fetch_assoc($simpan1))
        {
			$idbook	  = $select['id_bookmark'];
            $ideo     = $select['id_eo'];
            $emaileo  = $select['email_eo'];
            $fotoeo   = $select['foto_eo'];
            $namaeo   = $select['nama_eo'];
            $nohpeo   = $select['nohp_eo'];
		
	?>
			
			<tr> 
			<td class="avatar"><img src="../eo/<?php echo $fotoeo ?>" style="width:100px; height:100px;" class="rounded-circle imgcenter"></td>
			<td><?php echo $namaeo ?></td>
            <td><?php echo $emaileo ?></td>
            <td><?php echo $nohpeo ?></td>
			<td> 
            <a href ="../FRONTEND-WEB/view-profile-eo.php?id_eo=<?php echo $ideo ?>" class="btn btn-sm btn-primary"><i class="fa fa-user"></i></a> 
            <script>
                    function deleteFunction(idbook){
                        swal({
                          title: 'Are you sure?',
                          type: 'warning',
                          showCancelButton: true,
                          confirmButtonText: 'Yes',
                          showLoaderOnConfirm: true,
                          preConfirm: () => {
                            return fetch(`deletebookmark.php?id_bookmark=${idbook}`)
                          },
                          allowOutsideClick: () => !swal.isLoading()
                        }).then((status) => {
                            if (status.value.ok){
                                swal({
                                  type: 'success',
                                  title: 'EO has been unbookmarked!',
                                  showConfirmButton: false,
                                  timer: 1500
                                }).then( () => {
                                    location.reload();
                                }

                                )    
                            } else {
                                swal({
                                  type: 'error',
                                  title: 'Failed!',
                                  showConfirmButton: false,
                                  timer: 1500
                                })   
                            }       
                        })    
                      }    
                </script>
                <button onclick="deleteFunction(<?php echo $idbook ?>)" class="btn btn-sm btn-primary"><i class="fa fa-trash" ></i></button>
            </td>
			</tr>
	<?php }
    ?>    
                                                             
            </tbody>
            </table>
            </div>
            </div>
            </div>
            </div><!-- .animated -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.11/sweetalert2.all.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
      
  </body>
</html>