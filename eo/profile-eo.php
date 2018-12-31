<?php 
session_start();
include 'config.php';
if (isset ($_SESSION['id'])!="") {
    $ideo = $_SESSION['id'];
}

?>	

<?php 
$query = "SELECT * FROM eo INNER JOIN kota ON eo.id_kota = kota.id_kota INNER JOIN provinsi ON kota.id_provinsi = provinsi.id_provinsi where id_eo = '$ideo' AND status = 'VERIFIED'";
$tampil = mysqli_query($koneksi, $query);
$select = mysqli_fetch_array($tampil);
        $emaileo = $select['email_eo'];
        $namaeo = $select['nama_eo'];
        $fotoeo = $select['foto_eo'];
        $desceo = $select['ket_eo'];
        $alamat = $select['alamat_eo'];
        $nohp = $select['nohp_eo'];
        $tahun = $select['tahun_diri'];
        $link = $select['link_web'];
        $idprov = $select['id_provinsi'];
        $provname  = $select['nama_provinsi'];
        $idcity = $select['id_kota'];
        $cityname  = $select['nama_kota'];
        $fotoid1 = $select['foto_ktp'];
        $fotoid2 = $select['fotodiri_ktp'];
        $fotoid3 = $select['foto_alamat'];
        $fotoid4 = $select['foto_siup'];
        
?>

<!--
<?php 
$query2 = "SELECT * FROM kategori_eo INNER JOIN kategori ON kategori_eo.id_kategori = kategori.id_kategori where id_eo = '$ideo'";
$tampil2 = mysqli_query($koneksi, $query2);
$select2 = mysqli_fetch_array($tampil2); 
        $namakat = $select['nama_kategori'];
?>
-->

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
    <link rel="stylesheet" href="../temp-dashboard/css/message.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../temp-dashboard/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../temp-dashboard/jquery.imgzoom-0.2.2/css/imgzoom.css" />  
    
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
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
                    <li class="active"> <a href="profile-eo.php"> <i class="fa fa-user"></i>Profile </a></li>
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
            <h2 class="no-margin-bottom">My Profile
            </h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard-eo.php">Home</a></li>
              <li class="breadcrumb-item active">Profile            </li>
            </ul>
          </div>

            <div class="main-container" style="min-height:600px; ">
 <div class="container-fluid">
<!-- <div class="container"> -->
    <div>
    <div class="panel with-nav-tabs panel-default">
    <div class="panel-heading">
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
				<label class="col-md-3 control-label">Company Logo</label>
				<div class="col-md-3 d-flex">
				<img id="image" src="<?php echo $fotoeo ?>" style= "width:150px; height:150px;"> 
                <div class="align-self-center" style="margin-left: 20px;">
                <div class="upload-btn-wrapper">
                <button class="btn">Upload</button>
                <input type="file" name="foto" id="foto" value="<?php echo $fotoeo ?>"/>
                </div>
                </div>
				</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-3">Company Name</label>
				<div class="col-sm-9">
				<input type="text" class="form-control" id="name" name="name" value="<?php echo $namaeo ?>" required>
				</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-3">Company Description</label>
				<div class="col-sm-9">
				<textarea class="single-textarea form-control" name="description" id="description" style="height:150px;" required><?php echo $desceo ?></textarea>
				</div>
				</div>
                <div class="form-group">
				<label class="control-label col-sm-3">Company Category</label>
                <div class="col-sm-9">
                <?php 
                $query2 = "SELECT * FROM kategori_eo INNER JOIN kategori ON kategori_eo.id_kategori = kategori.id_kategori where id_eo = '$ideo'";
                $tampil2 = mysqli_query($koneksi, $query2);
                while ($row = mysqli_fetch_array($tampil2)) {
                ?>    
                    <select name="nama_kategori[]" id="kategori" class="form-control mb-3" disabled="" required>
                    <option value="<?php echo $row['id_kategori'] ?>" selected><?php echo $row['nama_kategori'] ?></option>
                    </select>    
                <?php }
                ?>

				</div>
                </div>
                <div class="form-group">
                <div class="row">
				<div class="col-md-4">
                <label class="control-label col-sm-3">Province</label>
				<select name="provinsi" id="provinsi" class="form-control ml-3" required>
              
                <?php 
                include 'config.php';
                $tampil=mysqli_query($koneksi, "SELECT id_provinsi, nama_provinsi FROM provinsi");  
                while($id_provinsi=mysqli_fetch_array($tampil)) {
                echo "<option value='".$id_provinsi[id_provinsi]."' ".($id_provinsi[id_provinsi] == $idprov ? "selected" : "")."> ".$id_provinsi[nama_provinsi]."</option>";}
                ?>
                </select>
				</div>
                <div class="col-md-4">
                <label class="control-label col-sm-3">City</label>
				<select name="kota" id="kota" class="form-control ml-3" required>
                    <option value="<?php echo $idcity ?>"><?php echo $cityname ?></option>
                </select>
				</div>
                </div>
				</div>
                <div class="form-group">
				<label class="control-label col-sm-3">Address</label>
				<div class="col-sm-9">
				<textarea name="address" id="address" class="single-textarea form-control" required><?php echo $alamat ?></textarea>
				</div>
				</div>
                <div class="form-group">
				<label class="control-label col-sm-3">E-mail</label>
				<div class="col-sm-9">
				<input type="email" class="form-control" name="email" id="email" value="<?php echo $emaileo ?>" required onkeyup="checkemail();">
                <div class="row justify-content-center">
                <span id="email_status"></span>
                </div>
				</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-3">Phone Number</label>
				<div class="col-sm-9">
				<input type="text" class="form-control" name="phone" id="phone" value="<?php echo $nohp ?>" required>
				</div>
				</div>
                <div class="form-group">
                <div class="row d-flex" style="margin-left:2px">
                <div class="col-lg-3">
                <label for="image">Photo/Scan of ID Card</label>
                <div class="d-flex">
                <a href="<?php echo $fotoid1 ?>" target="_blank"><img class="thumbnail" src="<?php echo $fotoid1 ?>" style= "width:200px; height:200px;" id="eophotoid1" name="eophotoid1" /></a> 
                </div>
                </div>
                <div class="col-lg-5">
                <label for="image">Photo with ID Card</label>
                <div class="d-flex">
                <a href="<?php echo $fotoid2 ?>" target="_blank"><img class="thumbnail" src="<?php echo $fotoid2 ?>" style= "width:200px; height:200px;" id="eophotoid2" name="eophotoid2" /></a> 
                </div>
                </div>
                </div>
                </div>
                <div class="form-group">  
                <div class="row d-flex" style="margin-left:2px;">
                <div class="col-lg-3">
                <label for="image">Photo of SIUP/TDP</label>
                <div class="d-flex">
                <a href="<?php echo $fotoid4 ?>" target="_blank"><img class="thumbnail" src="<?php echo $fotoid4 ?>" style= "width:200px; height:200px;" id="eophotoid4" name="eophotoid4" /></a> 
                </div>
                </div>
                <div class="col-lg-5">
                <label for="image">Photo of bills that includes address</label>
                <div class="d-flex">
                <a href="<?php echo $fotoid3 ?>" target="_blank"><img class="thumbnail" src="<?php echo $fotoid3 ?>" style= "width:200px; height:200px;" id="eophotoid3" name="eophotoid3" /></a> 
                </div>
                </div>
                </div>
                </div>
                <div class="form-group">
				<label class="control-label col-sm-3">Year Of Establishment</label>
				<div class="col-sm-9">
				<select name="year" id="year" class="form-control mb-3" disabled="" required>
                <option><?php echo $tahun ?></option>
                </select>
				</div>
				</div>
                <div class="form-group">
				<label class="control-label col-sm-3">Website Link</label>
				<div class="col-sm-9">
				<input type="text" class="form-control" name="weblink" id="weblink" value="<?php echo $link ?>" required>
				</div>
				</div>
        <div class="justify-content-center col-sm-3" style="margin-top:20px; margin-bottom:50px;">
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
              <div class="justify-content-center col-sm-3" style="margin-top:20px; margin-bottom:30px;">
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
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../temp-dashboard/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../temp-dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../temp-dashboard/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../temp-dashboard/vendor/chart.js/Chart.min.js"></script>
    <script src="../temp-dashboard/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="../temp-fiyeo/js/jQuery-Mask-Plugin-master/dist/jquery.mask.js"></script>
    <!-- Main File-->
    <script src="../temp-dashboard/js/front.js"></script>
    <script type="text/javascript" src="../temp-dashboard/jquery.imgzoom-0.2.2/scripts/jquery.imgzoom.pack.js"></script>

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
$(document).ready(function(){
    $('#provinsi').on('change',function(){
        var id_provinsi = $(this).val();
        if(id_provinsi){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'id_provinsi='+id_provinsi,
                success:function(data){
                    d = JSON.parse(data);
                    $('#kota').empty();
                    for (i = 0 ; i < d.length ; i++) {
                        $('#kota').append($("<option></option>")
                        .attr("value",d[i]['id_kota'])
                        .text(d[i]['nama_kota']));
                    };
                }
            }); 
        }else{
            $('#kota').html('<option value="">Select province first</option>'); 
        }
    });
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
<script type="text/javascript">
  $(document).ready(function () {
    $('#img.thumbnail').imgZoom();
  });
</script>  
  </body>
</html>