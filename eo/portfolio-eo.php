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
    <title>Portfolio</title>
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
    <link rel="stylesheet" href="../temp-dashboard/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.11/sweetalert2.css" />
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
                    <li class="active"> <a href="portfolio-eo.php"> <i class="icon-picture"></i>Portfolio </a></li>
                    <li> <a href="paket-eo.php"> <i class="fa fa-money"></i>Packages </a></li>
                    <li> <a href="appointment-eo.php"> <i class="fa fa-calendar"></i>Appointments </a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
            <h2 class="no-margin-bottom">Portfolio
            </h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index-eo.php">Home</a></li>
              <li class="breadcrumb-item active">Portfolio            </li>
            </ul>
          </div>

            <div class="container-fluid">
            <div>
	           <div class="card">
                <div class="card-header" style="background-color: lightgray;">
                <div class="pull-right">
               <button class="btn btn-primary" style="color: white;" data-toggle="modal" data-target="#modalForm"><i class="fa fa-plus-circle"></i> Add Photo</button> </div>   </div> 
                                 
          <!-- Modal -->
    <div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add Photo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            
            <!-- Modal Body -->
            <form role="form" method="POST" enctype="multipart/form-data" action="addportfolio.php">
            <div class="modal-body">
                <!-- <p class="statusMsg"></p> -->

                    <div class="form-group">
                        <label for="file">Select File</label>
                       <input type="file" name="port-file" id="port-file" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="fileDesc">Description</label>
                        <textarea class="form-control" name="fileDesc" id="fileDesc" placeholder="Give some description about the event" required></textarea>
                    </div>
                </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary submitBtn" id="tambah" name="tambah">Add</button>
            </div>
            </form>
        </div>
        </div>
        </div>   
                   
<?php
	include("config.php");
	$query1="SELECT * FROM portfolio where id_eo = '$ideo'";
	$simpan1= mysqli_query($koneksi,$query1);
?>             
                   
		<div class="card-body">
        <table class="table table-hover table-curved dataTable table-responsive" id="bootstrap-data-table">
        <thead>
            <tr role="row">
            <th style="width: 400px;">Photo</th>
            <th style="width: 500px;">Description</th>
            <th style="width: 80px;">Action</th>
            </tr>
        </thead>
		<tbody>
      
<?php
        while($select = mysqli_fetch_assoc($simpan1))
        {
			$idport          = $select['id_portfolio'];
            $photo			= $select['foto'];
			$description	= $select['ket_foto'];
		
?>
			<tr> 
			 <td><img src="<?php echo $photo ?>" width ='150px' height='150px'></td>
			<td><?php echo $description ?></td>
			<td> 
            <div class="btn-group-xs">
            <a class="btn btn-sm btn-primary" href="editportfolio.php?id_portfolio=<?php echo $idport?>"><i class="fa fa-edit"></i></a>
            <script>
                function deleteFunction(idport){
                swal({
                title: 'Are you sure?',
                text: "Deleted records can not be recovered!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                showLoaderOnConfirm: true,
                preConfirm: () => {
                return fetch(`deleteportfolio.php?id_portfolio=${idport}`)
                },
                allowOutsideClick: () => !swal.isLoading()
                }).then((status) => {
                if (status.value.ok){
                swal({
                type: 'success',
                title: 'Deleted!',
                text: "Your portfolio record has been deleted",
                showConfirmButton: false,
                timer: 1500
                }).then( () => {
                location.reload();
                })    
                } else {
                swal({
                type: 'error',
                title: 'Failed!',
                text: "Your portfolio record can not be deleted",
                showConfirmButton: false,
                timer: 1500
                })   
                }       
                })    
                }    
            </script>
           <button onclick="deleteFunction(<?php echo $idport ?>)" class="btn btn-sm btn-primary"><i class="fa fa-trash" ></i></button>
            </div>
		
          </td>
			</tr>
<?php }
        
?>
            
        </tbody>  
        </table></div></div>
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
    <script src="../temp-dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="../temp-dashboard/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../temp-dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../temp-dashboard/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../temp-dashboard/vendor/chart.js/Chart.min.js"></script>
    <script src="../temp-dashboard/vendor/jquery-validation/jquery.validate.min.js"></script>
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
     
    <script type="text/javascript">
	$(document).ready(function() {
		$.fn.dataTable.ext.errMode = 'none';
		
	    var table = $('#datatable').DataTable({
	    	"processing": true,
			"serverSide": true,
			"ajax": {
				"url": "https://partner.hellobeauty.id/service",
				"type": "POST",
			},
			"columns": [
				{"data": "name"},
				{"data": "service_category"},
				{"data": "price"},
				{"data": "duration"},
				{"orderable": false, "searchable" : false, "data": "service_id"},
			],
			"sDom":'r<"table-responsive" t>i<"tp-pagination" p>',
			"createdRow": function (row, data, index) {
				$('td', row).eq(4).addClass('text-right').html('<a onclick="getForm('+data.service_id+', \'service/edit\');">Edit</a>&nbsp;&nbsp;&nbsp;<a onclick="delRecord('+data.service_id+');">Delete</a>');
			},
			"order": [[4, 'asc']]
		});
	});
	
	function refreshTable() {
		$('#datatable').DataTable().ajax.reload();
	}
	
	function delRecord(service_id) {
		swal({
			title: "Are you sure?",
			text: "Deleted records can not be recovered!",
			type: "warning",
			showCancelButton: true,
			confirmButtonText: "Yes",
			cancelButtonText: "No",
			closeOnConfirm: false,
			closeOnCancel: true
		}, function(isConfirm) {
			if (isConfirm) {
				$.ajax({
					url : "https://partner.hellobeauty.id/service/delete",
					type : 'post',
					data: 'service_id='+service_id,
					dataType: 'json',
					success: function(json) {
						if (json['success']) {
							swal("Deleted!", json['success'], "success");
						} else if (json['error']) {
							swal("Error!", json['error'], "error");
						} else if (json['redirect']) {
							window.location = json['redirect'];
						}
						refreshTable();
					}
				});
			}
		});
	}
	
	function refreshTable() {
		$('#datatable').DataTable().ajax.reload();
	}
	
	function getForm(service_id, path) {
		$.ajax({
			url : "https://partner.hellobeauty.id/" + path,
			data: 'service_id='+service_id,
			dataType: 'json',
			success: function(json) {
				if (json['error']) {
					$('#message').html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><i class="icon fa fa-ban"></i> '+json['error']+'</div>');
				} else if (json['content']) {
					$('#modal').html('<div class="modal fade" id="form-modal" tabindex="-1" role="dialog" aria-hidden="true">'+json['content']+'</div>');
					$('#form-modal').modal('show');
					$('#form-modal').on('hidden.bs.modal', function (e) {
						refreshTable();
					});	
				}
			}
		});
	}
 
    </script>
  </body>
</html>