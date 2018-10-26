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
              <li class="breadcrumb-item"><a href="index-eo.php">Home</a></li>
              <li class="breadcrumb-item active">Profile            </li>
            </ul>
          </div>

            <div class="main-container" style="min-height:600px; ">
 <div class="container-fluid">
<!-- <div class="container"> -->
    <div>
	<form action="https://partner.hellobeauty.id/profile/validate" id="form" class="form-horizontal" method="post" accept-charset="utf-8">
    <div class="panel with-nav-tabs panel-default">
    <div class="panel-heading">
		<input type="hidden" name="user_id" value="8668">
		<ul class="nav nav-tabs">
			<li class="nav-item active"><a href="#tab1default" data-toggle="tab">Main Profile</a></li>
			<li class="nav-item"><a href="#tab2default" data-toggle="tab">Password</a></li>
		</ul>
    </div>
        <div class="panel-body">
		<div class="tab-content" style="padding-top:20px; background-color: #fff;">
			<div class="tab-pane active" id="tab1default">
				<div class="form-group">
				<label class="col-md-3 control-label">Company Logo</label>
				<div class="col-md-3">
				<img id="image" src="img/avatar-1.jpg" class="img-thumbnail"> <button type="button" class="btn btn-default" id="upload" style="margin-left: 20px;">Upload</button>
				</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-3">Company Name</label>
				<div class="col-sm-9">
				<input type="text" class="form-control" name="name" value="Excellent Event Organizer">
				</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-3">Company Description</label>
				<div class="col-sm-9">
				<textarea class="single-textarea form-control" value=""></textarea>
				</div>
				</div>
                <div class="form-group">
				<label class="control-label col-sm-3">Company Category</label>
				<div class="col-sm-9">
				<select name="category" class="form-control mb-3" disabled="">
                <option>Wedding</option>
                <option>Birthday</option>
                <option>Private Party</option>
                <option>MICE</option>
                </select>
				</div>
				</div>
                <div class="form-group">
                <div class="row">
				<div class="col-md-4">
                <label class="control-label col-sm-3">Province</label>
				<select name="provinsi" class="form-control ml-3">
                <option>Banten</option>
                <option>Jakarta</option>
                <option>Kalimantan Barat</option>
                <option>Jawa Barat</option>
                </select>
				</div>
                <div class="col-md-4">
                <label class="control-label col-sm-3">City</label>
				<select name="provinsi" class="form-control ml-3">
                <option>Tangerang</option>
                <option>Jakarta Barat</option>
                <option>Pontianak</option>
                <option>Bandung</option>
                </select>
				</div>
                </div>
				</div>
                <div class="form-group">
				<label class="control-label col-sm-3">Address</label>
				<div class="col-sm-9">
				<textarea class="single-textarea form-control" value=""></textarea>
				</div>
				</div>
                <div class="form-group">
				<label class="control-label col-sm-3">E-mail</label>
				<div class="col-sm-9">
				<input type="text" class="form-control" name="email" value="excellenteo@gmail.com">
				</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-3">Phone Number</label>
				<div class="col-sm-9">
				<input type="text" class="form-control" name="telephone" value="085921471595">
				</div>
				</div>
                <div class="form-group">
				<label class="control-label col-sm-3">Year Of Establishment</label>
				<div class="col-sm-9">
				<select name="category" class="form-control mb-3" disabled="">
                <option>2018</option>
                <option>2017</option>
                <option>2016</option>
                <option>2015</option>
                </select>
				</div>
				</div>
                <div class="form-group">
				<label class="control-label col-sm-3">Website Link</label>
				<div class="col-sm-9">
				<input type="text" class="form-control" name="weblink" value="www.excellentevent.com">
				</div>
				</div>
        <div class="justify-content-center col-sm-3" style="margin-top:20px; margin-bottom:50px;">
		  <a id="submit" class="btn btn-primary text-white"><i class="fa fa-check"></i> Save</a>
            </div>
			</div>
			<div class="tab-pane" id="tab2default">
				<div class="alert alert-info">Leave password blank if you don't want to change your password</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Password</label>
					<div class="col-sm-9">
						<input type="password" class="form-control" name="password" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Re-type Password</label>
					<div class="col-sm-9">
						<input type="password" class="form-control" name="confirm" value="">
					</div>
				</div>
              <div class="justify-content-center col-sm-3" style="margin-top:20px; margin-bottom:30px;">
		  <a id="submit" class="btn btn-primary text-white"><i class="fa fa-check"></i> Save</a>
            </div>
			</div>
        </div>
        </div>
	</div>
     </form>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>