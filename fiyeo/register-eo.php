	<!DOCTYPE html>
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
            
            <link rel="stylesheet" href="wizard/assets/css/wizard.css">
            
<style>

</style>
		</head>
		<body>

			    <header id="header" id="home" style="background-color: black">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index-fiyeo.php"><img src="img/irene/fiyeo2.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index-fiyeo.php">Home</a></li>
				          <li class="menu-has-children"><a href="category.html">Category</a>
                            <ul>
                                <li><a href="elements.html">Wedding</a></li>
								<li><a href="search.html">Birthday</a></li>
								<li><a href="single.html">Private Party</a></li>
                                <li><a href="elements.html">Music & Entertainment</a></li>
								<li><a href="search.html">MICE</a></li>
								<li><a href="single.html">Brand Activation</a></li>
                                <li><a href="elements.html">Prom & Reunion</a></li>
                              </ul>
                            </li>
				          <li><a href="contact.html">Contact</a></li>
				          <li class="menu-has-children"><a href="">Pages</a>
				            <ul>
								<li><a href="elements.html">elements</a></li>
								<li><a href="search.html">search</a></li>
								<li><a href="single.html">single</a></li>
				            </ul>
				          </li>
                        <li><a class="ticker-btn" href="register-eo.php">Register as EO</a></li>
				          <li><a class="ticker-btn" href="signup-fiyeo.php">Sign Up</a></li>
				          <li><a class="ticker-btn" href="login-fiyeo.php">Log In</a></li>				          				          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
<section class="post-area section-gap" style="padding:80px;">
  <div class="container" style="text-align: center">
                
                <div class="row">
                    <div class="col-md-8 offset-md-2 form-box">
                    	<form role="form" action="" method="post" class="f1">

                            <h3><b style="color:black">Register As EO</b></h3>
                    		<p>Fill in the form to get instant access</p>
                    		<div class="f1-steps" style="text-align: center; margin-top: 40px;">
                    			<div class="f1-progress" style="text-align: center">
                    			    <div class="f1-progress-line" data-now-value="12.5" data-number-of-steps="4" style="width: 12.5%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon" style="text-align: center"><i class="fa fa-user-circle" style="text-align: center"></i></div>
                    				<p style="text-align: center">Account</p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon" style="text-align: center"><i class="fa fa-address-card" style="text-align: center"></i></div>
                    				<p style="text-align: center">Profile Details</p>
                    			</div>
                    		    <div class="f1-step">
                                <div class="f1-step-icon"><i class="fa fa-plus"></i></div>
                                <p>Additional Information</p>
                                </div>
                                 <div class="f1-step">
                    				<div class="f1-step-icon" style="text-align: center"><i class="fa fa-check"></i></div>
                    				<p style="text-align: center">Confirmation</p>
                    			</div>
                    		</div>
                    		
                    		<fieldset style="margin-top:10px;">
                                <div class="form-group">
                                    <label for="email"><b style="color:black">E-mail</b></label>
                                    <input type="email" name="email" id="email" placeholder="Input your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Example: eventorganizer@gmail.com'" required class="single-input" onkeyup="checkemail();">
                                    <div class="row justify-content-center">
                                    <span id="email_status"></span>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="password"><b style="color:black">Password</b></label>
                                    <input type="password" name="password" id="password" placeholder="Input your password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Input your password'" required class="single-input" min="8">
                                    <small id="passHelp" class="form-text text-muted">minimum 8 or more character</small>
                                </div>
                                <div class="form-group">
                                    <label for="confirmpass"><b style="color:black">Confirm Password</b></label>
                                    <input type="password" name="confirmpass" id="confirmpass" placeholder="Confirm your password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm your password'" required class="single-input">
                                    <div class="row justify-content-center">
                                    <span id="alert"></span>
                                    </div>
                                </div>
                                <div class="f1-buttons" style="margin-top: 40px;">
                                <button type="button" class="genric-btn success-border circle arrow btn-next" id="btn-next">Next<span class="lnr lnr-arrow-right"></span></button>
                                </div>
                            </fieldset>

                            <fieldset style="margin-top:10px;">
                                <div class="form-group">
                                    <div>
                                    <img id="blah" src="img/logo-up-resize.png" class="img-thumbnail" style="width:150px; height:150px;">
                                    <input type="file" id="foto" class="img-thumbnail" style="margin-left: 20px;" value="Upload" required />
                                    <small id="logoHelp" class="form-text text-muted">format file must be in JPG/JPEG/PNG, recommended size: 300px</small>
                                    </div>
                                </div>
                    			<div class="form-group">
                                <label for="companyname"><b style="color:black">Company Name</b></label>
                                <input type="text" name="companyname" placeholder="Input your company name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Input your company name'" required class="single-input"> 
                                </div>
                                <div class="form-group">
                                <label for="companydesc"><b style="color:black">Company Description</b></label>
                                <textarea class="single-textarea" placeholder="Describe more information about your company" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Describe more information about your company'" required></textarea>
                                </div>
                                <div class="form-group">
                                <div class="form-select" id="default-select">
                                <label for="category"><b style="color:black">Company Category</b></label>
                        <?php 
                        include 'config.php';
                        echo "<select required multiple='multiple' name='nama_kategori[]'>";
                        $tampil=mysqli_query($koneksi, "SELECT id_kategori, nama_kategori FROM kategori");
                       echo "<option value='belum milih' selected>- Choose Category -</option>";    while($id_kategori=mysqli_fetch_array($tampil)) {
                        echo "<option value='".$id_kategori[id_kategori]."' required> ".$id_kategori[nama_kategori]."</option>";}
                        echo "</select>"
                        ?>
                        </div>
                        </div>
                        <div class="form-row col-lg-12" style="padding-left: 0px; margin-top:45px;">
                        <div class="form-group col-lg-6">
                        <div class="form-select" id="default-select">
                        <label for="province"><b style="color:black">Province</b></label>
                  			        
                        <?php 
                        include 'config.php';
                        echo "<select id='province' name='nama_provinsi' required>";
                        $tampil=mysqli_query($koneksi, "SELECT id_provinsi, nama_provinsi FROM provinsi");
                                    
                        echo "<option value='0' selected>- Choose Province -</option>";      
                     while($id_provinsi=mysqli_fetch_array($tampil)) {
                        echo "<option value='".$id_provinsi[id_provinsi]."' required> ".$id_provinsi[nama_provinsi]."</option>";}
                        echo "</select>"
                        ?>
                        	
								</div>
                                </div>
                                <div class="form-group col-lg-6">
                                <div class="form-select" id="default-select">
                                <label for="city"><b style="color:black">City</b></label>
                        <?php 
                        include 'config.php';
                        echo "<select id='city' name='nama_kota' required>";
                        $tampil=mysqli_query($koneksi, "SELECT id_kota, nama_kota FROM kota");
                                    
                        echo "<option value='belum milih' selected>- Choose City -</option>";      
                     while($id_kota=mysqli_fetch_array($tampil)) {
                        echo "<option value='".$id_kota[id_kota]."' required> ".$id_kota[nama_kota]."</option>";}
                        echo "</select>"
                        ?>
								</div>
                                </div>
                                </div>
                                <div class="form-group">
                                <label for="address"><b style="color:black">Address</b></label>
                                <textarea class="single-textarea" placeholder="Input your complete address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Input your complete address'" required></textarea>
                                </div>
                                <div class="form-group">
                                <label for="number"><b style="color:black">Phone Number</b></label>
                                <input type="text" name="phonenumber" placeholder="Input your phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Input your phone number'" required class="single-input"> 
                                </div>
                                <div class="f1-buttons" style="margin-top: 40px;">
                                <button type="button" class="genric-btn success-border circle arrow btn-previous">Previous<span class="lnr lnr-arrow-left"></span></button>
                                <button type="button" class="genric-btn success-border circle arrow btn-next">Next<span class="lnr lnr-arrow-right"></span></button>
                                </div>
                            </fieldset>
                            <fieldset style="margin-top:20px;">
                            <div class="form-row col-lg-12" style="padding-left: 0px;">
                            <div class="form-group">
                            <input type="file" class="img-thumbnail" id="fotoid" required>
                            <small id="help" class="form-text text-muted">Photo/Scan of ID Card</small>
                            </div>
                            <div class="form-group" style="padding-left: 50px;">
                            <input type="file" class="img-thumbnail" id="fotoid1" required>
                            <small id="help" class="form-text text-muted">Photo of You and ID Card</small>
                            </div>
                            <div class="form-group" style="padding-left: 0px;">
                            <input type="file" class="img-thumbnail" id="fotoid2" required>
                            <small id="help" class="form-text text-muted">Photo of electricity/phone/water bill that includes address</small>
                            </div>
                            <div class="form-group" style="padding-left: 32px;">
                            <input type="file" class="img-thumbnail" id="fotoid3" required>
                            <small id="help" class="form-text text-muted">Photo of SIUP/TDP</small>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-select" id="default-select">
                            <label for="year"><b style="color:black">Year of Establishment</b></label>
                            <select id="yearoption" required>
                            <option value="0" disabled selected>Choose Year</option>
                            <option value="1">2018</option>
				            <option value="2">2017</option>
				            <option value="3">2016</option>
				            <option value="4">2015</option>
				            <option value="5">2014</option>
                            <option value="6">2013</option>
                            <option value="7">2012</option>
                            <option value="8">2011</option>
                            <option value="9">2010</option>
                            </select>
                            </div>
                            </div>
                            <div class="form-group" style="margin-top:45px;">
                            <label for="weblink"><b style="color:black">Website Link</b></label>
                            <input type="text" name="weblink" placeholder="Example: www.excellentevent.com" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Example: www.excellentevent.com'" required class="single-input"> 
                            </div>
                            <div class="f1-buttons" style="margin-top: 40px;">
                            <button type="button" class="genric-btn success-border circle arrow btn-previous">Previous<span class="lnr lnr-arrow-left"></span></button>
                            <button type="button" class="genric-btn success-border circle arrow btn-next">Next<span class="lnr lnr-arrow-right"></span></button>
                            </div>
                            </fieldset>
                            <fieldset style="margin-top:10px;">
                            <div class="form-group">
                            <div class="row" style="padding-left: 15px; margin-top: 20px;">
                            <label class="checkbox-inline"><input type="checkbox" required> I have read and accepted the <a href="#"><b>Terms of Use</b></a> &amp; <a href="#"><b>Privacy Policy</b></a></label>
                            </div>
                            </div>
                            <h4>Please make sure all the informations have been filled properly. By clicking the submit button below means you've requested to join and your business profile will be processed by us in 3 days.
                            </h4>
                            <div class="f1-buttons" style="margin-top: 40px;">
                            <button type="button" class="genric-btn success-border circle arrow btn-previous">Previous<span class="lnr lnr-arrow-left"></span></button>
                            <button type="submit" class="genric-btn success-border circle arrow" id="btn-submit">Submit</button>
                            </div>
                            </fieldset>
                    	
                    	</form>
                    </div>
                </div>
                    
            </div>   
</section>
            
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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
            
            <script src="wizard/assets/js/jquery.backstretch.min.js"></script>
            <script src="wizard/assets/js/retina-1.1.0.min.js"></script>
            <script src="wizard/assets/js/scripts.js"></script>
            
            
<script type="text/javascript">
$(document).ready(function(){
    $('#province').on('change',function(){
        var id_province = $(this).val();
        if(id_province){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'id_provinsi='+id_province,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select province first</option>'); 
        }
    });
  
});
</script>

<script type="text/javascript">
$('#password, #confirmpass').on('keyup', function () {
if ($('#password').val() == $('#confirmpass').val()) {
    $('#alert').html('Password match').css('color', 'green');
   document.getElementById("btn-submit").disabled=false;
}
else if ($('#password').val() != $('#confirmpass').val()) {
    $('#alert').html('Password does not match').css('color', 'red');
     document.getElementById("btn-submit").disabled=true;
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
   eo_email:email,
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
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#foto").change(function() {
  readURL(this);
}); 
    
</script>
            
    </body>
	</html>

