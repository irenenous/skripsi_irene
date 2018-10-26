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
    <link rel="stylesheet" href="css/message.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
     <link rel="stylesheet" href="assets/calendar/fullcalendar.css">
    
      <link rel="stylesheet" href="../admin/assets/css/lib/datatable/dataTables.bootstrap.min.css">

  </head>
  <body>
   <div class="page" style="background-color: #fff">
        <?php include 'header-klien.php' ?>
        
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Irene Andriani</h1>
                <p>Client</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled">
                    <li><a href="index-klien.php"> <i class="icon-home"></i>Home </a></li>
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
              <li class="breadcrumb-item active">Inbox            </li>
            </ul>
          </div>
           <div class="col-md-9">



<div id="message">
<div class="scroll">
<div class="jscroll-inner">									
<div class="message-row">
<a href="https://www.hellobeauty.id/user/message/conversation/8668">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="section-message-middle">
<div class="message-vendor-img">
<img src="https://www.hellobeauty.id/storage/images/cache/user/8668/220649ddbf88405709ad5d3fd049d51a-50-50.jpg" alt="Irene Andriani" class="img-vendor-message">
</div>
<div class="message-vendor-name">To: Irene Andriani					</div>
<div class="message-date">10 days ago</div>
<div class="message-subject">halo</div>
<div class="message-deskripsi">hey</div></div></div></div>
</a></div>
	
    <script type="text/javascript">
		$('.filter-message').show();
	</script>

</div></div></div>

<script src="https://www.hellobeauty.id/assets/js/jscroll.min.js"></script>
<script>
  $(document).ready(function() {
    function getMessage(){
      $('.overlay').show();
      $.ajax({
        url: "https://www.hellobeauty.id/user/message/inbox",
        type: 'POST',
        data: {search:$('.searchTerm').val(), sort: $('.sortFilter').val()},
        dataType: 'html',
        success: function (html) {
         $('#message').html('<div class="scroll">'+html+'</div>');
         $('.scroll').jscroll({
          autoTrigger: false,
          loadingHtml: '<div class="col-md-12"><div class="tulisan brand-color rata-tengah"><i class="fa fa-refresh fa-spin"></i> Loading...</div></div>',
          padding: 20,
          nextSelector: 'a.show-more',
          contentSelector: ''
        });
       }
     })
      .always(function() {
        console.log("complete");
        $('.overlay').hide();
      });
    }

    $('.sortFilter, .searchTerm').change(function(event) {
      getMessage();
    });
    getMessage();
  });

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
    <script src="js/charts-home.js"></script>
    <script src="assets/js/lib/moment/moment.js"></script>
    <script src="assets/calendar/fullcalendar.min.js"></script>
    <script src="assets/calendar/fullcalendar-init.js"></script>
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
    <script type="text/javascript">
		$('.filter-message').show();
	</script>
      
  </body>
</html>