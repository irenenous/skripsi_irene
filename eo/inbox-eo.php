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
    <link rel="stylesheet" href="../temp-dashboard/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.11/sweetalert2.css" />
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
	$query1="SELECT c.*, e.*, f.* FROM pesan AS c INNER JOIN (SELECT MAX(a.id_pesan) AS id_pesan, STR_TO_DATE(a.tgl_pesan, '%m/%d/%Y %r') FROM pesan AS a INNER JOIN (SELECT MAX(STR_TO_DATE(tgl_pesan, '%m/%d/%Y %r')) AS tgl_max FROM pesan WHERE id_eo = '$ideo' GROUP BY subjek, id_eo, id_user) AS b ON STR_TO_DATE(a.tgl_pesan, '%m/%d/%Y %r') = b.tgl_max GROUP BY a.id_user, a.id_eo, a.subjek, STR_TO_DATE(a.tgl_pesan, '%m/%d/%Y %r')) AS d ON c.id_pesan = d.id_pesan INNER JOIN user AS e ON e.id_user = c.id_user INNER JOIN eo AS f ON f.id_eo = c.id_eo ORDER BY ".$order_criteria;
	$simpan1= mysqli_query($koneksi,$query1);
    ?>             
            
            <div class="container-fluid">                           
<div class="col-lg-12" style="border:1px solid #D3D3D3; border-radius:10px; padding:20px;">
<div class="row" style="padding:10px;">
  <div class="col-xs-12 col-md-12 filter filter-message" style="">
   <select id="sortFilter" class="sortFilter">
    <option value="">Default</option>
       <option value="date-desc">
           Date Newest » Oldest
       </option>
<!--       <?php $_GET['order_criteria'] == 'date-desc' ? 'selected' : '' ?>-->
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
			$klien      = $select['nama_user']; 
            $fotoklien  = $select['foto_user'];
            $subject    = $select['subjek'];
            $message    = $select['pesan'];
		
	   ?>
<div class="message-row" style="padding:10px;">
<a href="showconversation.php?subjek=<?php echo $subject ?>">
<div class="d-flex">
<div style="justify-content:center; width:70px;">
<img src="../user/<?php echo $fotoklien ?>" class="img-vendor-message" style="height:55px; width:55px;">  
</div>
<div style="width:750px;">
<div class="message-vendor-name" style="color: #aa80ff"><?php echo $klien ?></div>
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
<script>
  function create_custom_dropdowns() {
    $('select').each(function(i, select) {
      if (!$(this).next().hasClass('dropdown')) {
        $(this).after('<div class="dropdown ' + ($(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
        var dropdown = $(this).next();
        var options = $(select).find('option');
        var selected = $(this).find('option:selected');
        dropdown.find('.current').html(selected.data('display-text') || selected.text());
        options.each(function(j, o) {
          var display = $(o).data('display-text') || '';
          dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
        });
      }
    });
  }
// Event listeners

// Open/close
$(document).on('click', '.dropdown', function(event) {
  $('.dropdown').not($(this)).removeClass('open');
  $(this).toggleClass('open');
  if ($(this).hasClass('open')) {
    $(this).find('.option').attr('tabindex', 0);
    $(this).find('.selected').focus();
  } else {
    $(this).find('.option').removeAttr('tabindex');
    $(this).focus();
  }
});
// Close when clicking outside
$(document).on('click', function(event) {
  if ($(event.target).closest('.dropdown').length === 0) {
    $('.dropdown').removeClass('open');
    $('.dropdown .option').removeAttr('tabindex');
  }
  event.stopPropagation();
});
// Option click
$(document).on('click', '.dropdown .option', function(event) {
  $(this).closest('.list').find('.selected').removeClass('selected');
  $(this).addClass('selected');
  var text = $(this).data('display-text') || $(this).text();
  $(this).closest('.dropdown').find('.current').text(text);
  $(this).closest('.dropdown').prev('select').val($(this).data('value')).trigger('change');
});

// Keyboard events
$(document).on('keydown', '.dropdown', function(event) {
  var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
  // Space or Enter
  if (event.keyCode == 32 || event.keyCode == 13) {
    if ($(this).hasClass('open')) {
      focused_option.trigger('click');
    } else {
      $(this).trigger('click');
    }
    return false;
    // Down
  } else if (event.keyCode == 40) {
    if (!$(this).hasClass('open')) {
      $(this).trigger('click');
    } else {
      focused_option.next().focus();
    }
    return false;
    // Up
  } else if (event.keyCode == 38) {
    if (!$(this).hasClass('open')) {
      $(this).trigger('click');
    } else {
      var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
      focused_option.prev().focus();
    }
    return false;
  // Esc
} else if (event.keyCode == 27) {
  if ($(this).hasClass('open')) {
    $(this).trigger('click');
  }
  return false;
}
});

$(document).ready(function() {
  create_custom_dropdowns();
});

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
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable(); }
          
  </script>  
      
<script>

	function showConversation(user_id) {
		$.ajax({
			url : "https://partner.hellobeauty.id/message/conversation",
			data: 'user_id='+user_id,
			dataType: 'json',
			success: function(json) {
				if (json['error']) {
					$('#message').html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><i class="icon fa fa-ban"></i> '+json['error']+'</div>');
				} else if (json['content']) {
					$('body').append('<div class="modal fade" id="conv-modal" tabindex="-1" role="dialog" aria-hidden="true">'+json['content']+'</div>');
					$('#conv-modal').modal('show');
					$('#conv-modal').on('hidden.bs.modal', function (e) {
						$('#conv-modal').remove();
					});
					
					$('#conv-modal').on('shown.bs.modal', function (e) {
						var objDiv = $('#frame');
						$('#frame').animate({
							scrollTop: objDiv.prop('scrollHeight') - objDiv.prop('clientHeight')
						}, 500);
					});
				}
			}
		});
	}
      
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