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
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
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
    <link rel="stylesheet" href="../temp-dashboard/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <link rel="stylesheet" href="../temp-dashboard/assets/calendar/fullcalendar.css">
    <link rel="stylesheet" href="../../skripsitemplate/AdminLTE-2.4.5/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../../skripsitemplate/AdminLTE-2.4.5/plugins/timepicker/bootstrap-timepicker.min.css">
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
            <h2 class="no-margin-bottom">Appointments
            </h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard-eo.php">Home</a></li>
              <li class="breadcrumb-item active">Appointments     </li>
            </ul>
          </div>

            <div class="container-fluid">
            <div class="card">
            <div class="card-header" style="background-color: lightgray">
            <div class="pull-right"><button type="button" class="btn btn-primary" style="color: white;" data-toggle="modal" data-target="#event-modal"><i class="fa fa-plus-circle"></i> Add Reminder</button></div>
            </div>
	                
    <?php
	include("config.php");
	$query1="SELECT id_reminder, tgl_reminder, wkt_reminder, ket_reminder, app_reminder.status AS appstat, user.nama_user FROM app_reminder INNER JOIN user ON app_reminder.id_user = user.id_user where id_eo = '$ideo'";
	$simpan1= mysqli_query($koneksi,$query1);
    ?>     
            <div class="card-body">
		    <table class="table table-hover table-curved dataTable table-responsive" id="bootstrap-data-table">
              <thead>
				<tr role="row">
                <th style="width: 150px;">Date</th>
                <th style="width: 150px;">Time</th>
                <th style="width: 180px;">Client</th>
                <th style="width: 250px;">Note</th>
                <th style="width: 50px;">Status</th>
                <th style="width: 30px;">Action</th>
                </tr>
			</thead>
		      <tbody>
                  
                      
 <?php
		while($select = mysqli_fetch_assoc($simpan1))
        {
			$id			    = $select['id_reminder'];
			$tgl			= $select['tgl_reminder'];
			$wkt			= $select['wkt_reminder'];
			$klien 			= $select['nama_user'];
			$note	        = $select['ket_reminder'];
            $stat	        = $select['appstat'];
		
	?>
            <tr> 
			<td><?php echo $tgl ?></td>
			<td><?php echo $wkt ?></td>
			<td><?php echo $klien ?></td>
            <td><?php echo $note ?></td>
            <td><b><?php echo $stat ?></b></td>
			<td> 
                <div class="btn-group-xs">
                <a class="btn btn-sm btn-primary" href="editreminder.php?id_reminder=<?php echo $id ?>"><i class="fa fa-edit"></i></a>
                <script>
                    function deleteFunction(id){
                        swal({
                          title: 'Are you sure?',
                          text: "Deleted records can not be recovered!",
                          type: 'warning',
                          showCancelButton: true,
                          confirmButtonText: 'Yes',
                          showLoaderOnConfirm: true,
                          preConfirm: () => {
                            return fetch(`deletereminder.php?id_reminder=${id}`)
                          },
                          allowOutsideClick: () => !swal.isLoading()
                        }).then((status) => {
                            if (status.value.ok){
                                swal({
                                  type: 'success',
                                  title: 'Deleted!',
                                    text: "Your reminder record has been deleted",
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
                                  text: "Your reminder record can not be deleted",
                                  showConfirmButton: false,
                                  timer: 1500
                                })   
                            }       
                        })    
                      }    
                </script>
                <button onclick="deleteFunction(<?php echo $id ?>)" class="btn btn-sm btn-primary"><i class="fa fa-trash" ></i></button>
                </div>
            </td>
			</tr> 
    <?php }
            ?>
            </tbody>
            </table>   
            </div></div></div>   
            
            <div class="modal fade none-border" id="event-modal">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><strong>Add Reminder</strong></h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form role="form" method="POST" action="addreminder.php">
            <div class="modal-body">
             <div class="form-group">
                <label>Date</label>
                <div class="input-group date">
                  <input type="text" class="form-control pull-right datepicker" id="datepickers" name="datepickers" placeholder="mm/dd/yyyy" required>
                <div class="input-group-append"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
                </div>
              </div>
              <div class="form-group">
                <label>Time</label>
                 <div class="input-group">
                    <input type="text" class="form-control timepicker" id="timepickers" name="timepicker" required>
                    <div class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></div>
                  </div>
              </div>
            <div class="form-group">
                <label>Client</label>
               
            <select class="form-control" name="client" id="client" required>
            <?php 
            include 'config.php';
            $tampil=mysqli_query($koneksi, "SELECT request_layanan.id_user AS iduser, user.nama_user AS klien, user.email_user AS email FROM request_layanan INNER JOIN user ON request_layanan.id_user = user.id_user where id_eo = '$ideo'");
            echo "<option value='' disabled selected>Choose client</option>";
            $iduser_email = array();
            while($iduser=mysqli_fetch_array($tampil)) {
            echo "<option value='".$iduser['iduser']."'> ".$iduser['klien']."</option>";
                $iduser_email[$iduser['iduser']] = $iduser['email'];
            }
            ?>
            </select>
              </div>
             <div class="form-group">
                <label>E-mail</label>
                 <div class="input-group">
<!--                    <input type="text" class="form-control" required disabled>-->
                     <select id="showemail" class="form-control" required disabled> 
                        echo "<option value='' disabled selected>Client email</option>"
                        <?php
                            foreach ($iduser_email as $key => $value) {
                                echo "<option value='".$key."'> ".$value."</option>";
                            }
                         ?>
                     </select>
                  </div>
              </div>
             <div class="form-group">
                <label for="inputNote">Notes</label>
                <textarea class="form-control" name="note" id="note" placeholder="Input note" required style="height:100px"></textarea>
            </div>
            </div>
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
     

    <script src="../../skripsitemplate/AdminLTE-2.4.5/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../temp-dashboard/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../temp-dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../temp-dashboard/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../temp-dashboard/vendor/chart.js/Chart.min.js"></script>
    <script src="../temp-dashboard/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="../temp-dashboard/assets/js/lib/moment/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
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
    <script src="../temp-fiyeo/js/jQuery-Mask-Plugin-master/dist/jquery.mask.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.11/sweetalert2.all.js"></script>
    <script src="../../skripsitemplate/AdminLTE-2.4.5/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../../skripsitemplate/AdminLTE-2.4.5/plugins/timepicker/bootstrap-timepicker.min.js"></script>
     
     
    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        }); 
  </script>

<script>
$(function() {
    $('.datepicker').datepicker({
      autoclose: true,
        startDate: '1d'
    })
    $('.timepicker').timepicker({
      showInputs: false,
        defaultTime: 'current',
        minuteStep: 1,
    })
});
</script>     
    <script type="text/javascript">
	$(document).ready(function() {
		$.fn.dataTable.ext.errMode = 'none';
		
	});
	
	function refreshTable() {
		$('#datatable').DataTable().ajax.reload();
	}
    $('#client').on('change', function() {
        $('#showemail').val($(this).val());
    });
 
    </script>
  </body>
</html>