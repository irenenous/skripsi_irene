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
    <title>Profile</title>
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
    <link rel="stylesheet" href="../temp-dashboard/css/message.css">
    
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      
</head>
<style>
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}


.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}    
</style>
 <body>
    <div class="page" style="background-color: white;">
        
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
                    <li class="active"> <a href="profile-klien.php"> <i class="fa fa-user"></i>Profile </a></li>
                    <li> <a href="inbox-klien.php"> <i class="icon-mail"></i>Inbox </a></li>
                    <li> <a href="request-klien.php"> <i class="fa fa-tasks"></i>Requests </a></li>
                    <li> <a href="bookmarks-klien.php"> <i class="fa fa-bookmark"></i>Bookmarks </a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
            <h2 class="no-margin-bottom">My Profile
            </h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index-klien.php">Home</a></li>
              <li class="breadcrumb-item active">Profile            </li>
            </ul>
          </div>

            <div class="main-container" style="min-height:600px; ">
 <div class="container-fluid">
<!-- <div class="container"> -->
    <div>

    <div class="panel with-nav-tabs panel-default">
    <div class="panel-heading">
		<input type="hidden" name="user_id" value="8668">
		<ul class="nav nav-tabs">
			<li class="nav-item">
            <a href="#tab1default" data-toggle="tab" class="nav-link active">Main Profile</a>
            </li>
			<li class="nav-item">
            <a href="#tab2default" data-toggle="tab" class="nav-link">Password</a>
            </li>
		</ul>
    </div>
    <hr>
        <div class="panel-body">
		<div class="tab-content" style="background-color: #fff;">
			<div class="tab-pane active" id="tab1default">
                <form action="updateprofile.php" id="form" class="form-horizontal" method="post" enctype="multipart/form-data">
				<div class="form-group">
				<label class="col-md-3 control-label">Profile Picture</label>
				<div class="col-md-3 d-flex">
				<img id="image" src="<?php echo $fotouser ?>" style= "width:150px; height:150px;"> 
                <div class="align-self-center" style="margin-left: 20px;">
                <div class="upload-btn-wrapper">
                <button class="btn">Upload</button>
                <input type="file" name="foto" id="foto" />
                </div>
                </div>
				</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-3">Full Name</label>
				<div class="col-sm-9">
				<input type="text" class="form-control" id="name" name="name" value="<?php echo $namauser ?>" required>
				</div>
				</div>
                <div class="form-group">
				<label class="control-label col-sm-3">E-mail</label>
				<div class="col-sm-9">
				<input type="email" class="form-control" name="email" id="email" value="<?php echo $emailuser ?>" required onkeyup="checkemail();">
                <div class="row justify-content-center">
                <span id="email_status"></span>
                </div>
				</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-3">Phone Number</label>
				<div class="col-sm-9">
				<input type="text" class="form-control" name="phone" id="phone" value="<?php echo $nohpuser ?>" required>
				</div>
				</div>
        <div class="justify-content-center col-sm-3" style="margin-top:20px; margin-bottom:30px;">
		   <button type="submit" class="btn btn-primary submitBtn" id="btn-simpan" name="btn-simpan"><i class="fa fa-check"></i> Save</button>
            </div>
            </form>
			</div>
			<div class="tab-pane" id="tab2default">
                 <form action="changepass.php" id="form" class="form-horizontal" method="post">
				<div class="alert alert-info">Leave password blank if you don't want to change your password</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Password</label>
					<div class="col-sm-9">
						<input type="password" class="form-control" name="password" id="password" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Re-type Password</label>
					<div class="col-sm-9">
						<input type="password" class="form-control" name="confirmpass" id="confirmpass" value="">
                        <div class="row justify-content-center">
                        <span id="alert"></span>
                        </div>
					</div>
				</div>
              <div class="justify-content-center col-sm-3" style="margin-top:20px;">
		<button type="submit" class="btn btn-primary submitBtn" id="btn-simpan1" name="btn-simpan1"><i class="fa fa-check"></i> Save</button>
            </div>
            </form>
			</div>
        </div>
        </div>
	</div>
     </div>
    </div>
    </div>
<!-- </div> -->

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
    <script src="../temp-fiyeo/js/jQuery-Mask-Plugin-master/dist/jquery.mask.js"></script>

<script type="text/javascript">
    $('#password, #confirmpass').on('keyup', function () {
        if ($('#password').val() == $('#confirmpass').val()) {
            $('#alert').html('Password match').css('color', 'green');
            document.getElementById("btn-simpan1").disabled=false;
        }
        else if ($('#password').val() != $('#confirmpass').val()) {
            $('#alert').html('Password does not match').css('color', 'red');
            document.getElementById("btn-simpan1").disabled=true;
        }        
    });
</script>    

<script type="text/javascript">
function checkemail()
{
 var email=document.getElementById("email").value;
	
 if(email)
 {
  $.ajax({
  type: 'post',
  url: 'checkProfileData.php',
  data: {
   update_email:email,
  },
  success: function (response) {
   $( '#email_status' ).html(response).css('color', 'red');
   if(response=="OK")	
   {
    return true;
   }
   else
   {
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#email_status' ).html("").css('color', 'red');
  return false;
 }
}            
</script> 
     
<script type="text/javascript">
function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#image').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#foto").change(function() {
  readURL(this);
});  
</script> 
     
<script type="text/javascript">
	$(document).ready(function() {
    $('#phone').mask('0000-0000-0000', {reverse: true});
	});
</script>
     
  </body>
</html>