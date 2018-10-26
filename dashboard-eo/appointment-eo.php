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
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/calendar/fullcalendar.css">
  </head>
 <body>
    <div class="page" style="background-color: white;">
       
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
              <li class="breadcrumb-item"><a href="index-eo.php">Home</a></li>
              <li class="breadcrumb-item active">Appointments     </li>
            </ul>
          </div>

            <div class="container-fluid">
            <div class="card">
            <div class="card-header" style="background-color: lightgray">
            <div class="pull-right"><button type="button" class="btn btn-primary" style="color: white;" data-toggle="modal" data-target="#event-modal"><i class="fa fa-plus-circle"></i> Add Reminder</button></div>
    
            </div>
	
            <div class="card-body">
		    <div class="row">
            <div class="col-md-12">      
            <div class="calender-cont widget-calender">
            <div id="calendar"></div>   
            </div></div></div></div></div></div>   
            
            <div class="modal fade none-border" id="event-modal">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><strong>Add Reminder</strong></h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
            </div>
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
     

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/js/lib/moment/moment.js"></script>
    <script src="assets/calendar/fullcalendar.min.js"></script>
    <script src="assets/calendar/fullcalendar-init.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
     
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