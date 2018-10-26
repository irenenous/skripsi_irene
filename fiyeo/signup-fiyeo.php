<!DOCTYPE html>
<?php SESSION_START();   ?>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>F I Y E O</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

            <?php include 'header-fiyeo.php' ?>
            <!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12" style="padding-top: 150px; padding-bottom: 50px">
							<h1 class="text-white">
								Sign Up				
                            </h1>
                            <p class="text-white mt-3">Already have an account? please login <a href="login-fiyeo.php"><b>here.</b></a></p>
                        </div>	

            
				</div>	
                </div>        
			</section>
			<!-- End banner Area -->	
            
                    <div class="container" style="padding: 60px;">
							<form class="form-area" id="signup" action="" method="POST" onsubmit="validateForm()">	
                                <div class= "col-lg-6 offset-lg-3">
									<div class="form-group">
                                        <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fa fa-user fa-lg"></i></span></div>
                                        <input name="nama" placeholder="Input your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Input your name'" class="common-input mb-20 form-control" required type="text" id="name" aria-label="Name" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
				                    
                                    <div class="form-group">
                                        <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fa fa-phone fa-lg"></i></span></div>
                                        <input name="nohp" placeholder="Input your phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Input your phone number'" class="common-input mb-20 form-control" required type="number" id="phone" aria-label="Phone" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope fa"></i></span></div>
                                        <input name="email" placeholder="Input your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Input your email'" class="common-input mb-20 form-control" required type="email" id="email" aria-label="Email" aria-describedby="basic-addon1" onkeyup="checkemail();">
                                        </div>
                                    <div class="row justify-content-center">
                                    <span id="email_status"></span>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fa fa-lock fa-lg"></i></span></div>
                                        <input name="password" placeholder="Input your password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Input your password'" class="common-input mb-20 form-control" required type="password" id="password" aria-label="Password" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fa fa-lock fa-lg"></i></span></div>
                                        <input name="confirmpass" placeholder="Confirm your password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm your password'" class="common-input mb-20 form-control" required type="password" id="confirmpass" aria-label="ConfirmPass" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="row justify-content-center">
                                        <span id="alert"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="row justify-content-center">
                                    <label class="checkbox-inline"><input type="checkbox" required> I have read and accepted the <a href="#"><b>Terms of Use</b></a> &amp; <a href="#"><b>Privacy Policy</b></a></label>
                                    </div>
                                    </div>
				                    <div class="form-group">
                                        <div class="row justify-content-center">
                                            <button type="submit" class="primary-btn mt-10 text-white" id="btn-signup" name="signup" style="border-radius: 15px;border-color:white;">Sign Up</button>
                                        </div>
                                    </div>

										<div class="mt-20 alert-msg" style="text-align: center;"></div>
                                </div>
							</form>
                    </div>
            
 <?php
    
    if (isset($_POST['signup'])) {
        include 'config.php';
        
        
        $tangkapNama        = $_POST['nama'];
        $tangkapNohp        = $_POST['nohp'];
        $tangkapEmail        = $_POST['email'];
        $tangkapPassword     = $_POST['password'];
        $tangkapStatus     = 'ACTIVE';
        
        $tangkapPassword = ($tangkapPassword);
        
        
        $query = mysqli_query($koneksi , "insert into user values ('','$tangkapNama', '$tangkapNohp', '$tangkapEmail',
        '$tangkapPassword', '', '$tangkapStatus')");
    }

?>
    
    <script>
    function validateForm(){
        alert("Registration Successful !!");
        window.location.replace("http://localhost:8069/page/tentang-kami");
    } 
    </script>
            
			<!-- start footer Area -->		
			<footer class="footer-area section-gap" style="padding:50px 0; height:345px;">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6>F I Y E O</h6>
								<ul class="footer-nav">
                                    <li><a href="about-us.html">About Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Terms & Conditions</a></li>
									<li><a href="#">Help</a></li>
									
								</ul>
							</div>
						</div>
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Contact Us</h6>
								<p>E-mail : customerservice@fiyeo.com</p>
                                <p>Phone : (+62) 81250381345</p>	
							</div>
						</div>
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget mail-chimp justify-content-center">
								<h6 class="mb-20">Stay Connected With Us</h6>
								<ul class="d-flex footer-social justify-content-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
                           <a href="#"><i class="fa fa-instagram"></i></a>
								</ul>
							</div>
						</div>						
					</div>

					<div class="row footer-bottom d-flex justify-content-center" style="padding: 40px;">
						<p class="footer-text m-0 text-white">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<img src="img/irene/fiyeo2.png" alt=""> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | PT. XYZ
						</p>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>
            
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            
<script type="text/javascript">

$(document).ready(function () {
var phoneMask = new IMask(
document.getElementById('email'), {
mask: '+{7}(000)000-00-00'
});
    });

</script>
            
    <script type="text/javascript">
    $('#password, #confirmpass').on('keyup', function () {
        if ($('#password').val() == $('#confirmpass').val()) {
            $('#alert').html('Password match').css('color', 'green');
            document.getElementById("btn-signup").disabled=false;
        }
        else if ($('#password').val() != $('#confirmpass').val()) {
            $('#alert').html('Password does not match').css('color', 'red');
            document.getElementById("btn-signup").disabled=true;
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
  url: 'checkdata.php',
  data: {
   user_email:email,
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

</body>
</html>



