<?php 
session_start(); 
?>	
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
			<link rel="stylesheet" href="../temp-fiyeo/css/linearicons.css">
			<link rel="stylesheet" href="../temp-fiyeo/css/font-awesome.min.css">
			<link rel="stylesheet" href="../temp-fiyeo/css/bootstrap.css">
			<link rel="stylesheet" href="../temp-fiyeo/css/magnific-popup.css">
			<link rel="stylesheet" href="../temp-fiyeo/css/nice-select.css">	
			<link rel="stylesheet" href="../temp-fiyeo/css/animate.min.css">
			<link rel="stylesheet" href="../temp-fiyeo/css/owl.carousel.css">
			<link rel="stylesheet" href="../temp-fiyeo/css/main.css">
            <link rel="stylesheet" href="../temp-fiyeo/wizard/assets/css/wizard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.11/sweetalert2.css" />
            
<style>
.nice-select .list { max-height: 300px; overflow: scroll; }
</style>
		</head>
		<body>

			   <?php include '../FRONTEND-WEB/header-fiyeo.php' ?>
            <!-- #header -->
            
            		<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12" style="padding-top: 150px; padding-bottom: 50px">
							<h1 class="text-white">
								Register As EO				
                            </h1>
                            <p class="text-white mt-3">Fill in the form to get instant access</p>
                        </div>	

            
				</div>	
                </div>        
			</section>
  <div class="container" style="text-align: center; margin-bottom:50px;">
                
                <div class="row">
                    <div class="col-md-8 offset-md-2 form-box">
                    	<form role="form" action="register.php" method="post" class="f1" id="register-form" enctype="multipart/form-data"
                        onsubmit="registerFunction()">

                    		<div class="f1-steps" style="text-align: center; margin-top: 1px;">
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
                                    <img id="blah" src="../../skripsi/fiyeo/img/logo-up-resize.png" class="img-thumbnail" style="width:150px; height:150px;">
                                    <input type="file" id="foto" class="img-thumbnail" name="foto" style="margin-left: 20px;" value="Upload" required />
                                    <small id="logoHelp" class="form-text text-muted">format file must be in JPG/JPEG/PNG, recommended size: 300px</small>
                                    </div>
                                </div>
                    			<div class="form-group">
                                <label for="companyname"><b style="color:black">Company Name</b></label>
                                <input type="text" name="companyname" id="companyname" placeholder="Input your company name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Input your company name'" required class="single-input"> 
                                </div>
                                <div class="form-group">
                                <label for="companydesc"><b style="color:black">Company Description</b></label>
                                <textarea class="single-textarea" placeholder="Describe more information about your company" id="companydesc" name="companydesc" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Describe more information about your company'" required></textarea>
                                </div>
                        <div style="margin-bottom: 1rem;">
                        <div id ="nice-select-group">
					<div class="form-group">
						
						<label for="category"><b style="color:black">Company Category</b></label>
                        <div class="d-flex">
                        <div id="div-of-category" class="col-lg-6" style="padding-left:0px;">
                        <div class="form-select" id="default-select">
						<select id="category" required multiple='multiple' name='nama_kategori[]'>
                        <option value='belum milih' selected>- Choose Category -</option>
						<?php 
                        include 'config.php';
                        $tampil=mysqli_query($koneksi, "SELECT id_kategori, nama_kategori FROM kategori");
                    while($id_kategori=mysqli_fetch_array($tampil)) {
                        echo "<option value='".$id_kategori[id_kategori]."' required> ".$id_kategori[nama_kategori]."</option>";}
                        ?>
						</select>
                        </div>
						</div>
                        <button type="button" onclick="$('#nice-select-group').append($('#div-of-category').clone().attr('id', 'div-of-category'+ clone_count++));" class="genric-btn success-border radius" style="width:"><i class="fa fa-plus fa-lg"></i> </button>
					   </div>
                        </div>
                        </div> 
                        </div>
                        <div class="form-row col-lg-12" style="padding-left: 0px;">
                        <div class="form-group col-lg-6">
                        <div class="form-select" id="default-select">
                        <label for="province"><b style="color:black">Province</b></label>
                  		<select id='province' name='nama_provinsi' required>	        
                        <?php 
                        include 'config.php';
                        $tampil=mysqli_query($koneksi, "SELECT id_provinsi, nama_provinsi FROM provinsi");
                                    
                        echo "<option value='0' selected>- Choose Province -</option>";      
                        while($id_provinsi=mysqli_fetch_array($tampil)) {
                        echo "<option value='".$id_provinsi[id_provinsi]."' required> ".$id_provinsi[nama_provinsi]."</option>";}
                        ?>
                        </select>	
								</div>
                                </div>
                                <div id="form-city" class="form-group col-lg-6">
                                <div class="form-select" id="default-select">
                                <label for="city"><b style="color:black">City</b></label>
                                <select id="city" name='nama_kota'>
                                    <option value="">Select province first</option>
                                </select>
								</div>
                                </div>
                                </div>
                                <div class="form-group">
                                <label for="address"><b style="color:black">Address</b></label>
                                <textarea class="single-textarea" id="address" name="address" placeholder="Input your complete address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Input your complete address'" required></textarea>
                                </div>
                                <div class="form-group">
                                <label for="number"><b style="color:black">Phone Number</b></label>
                                <input type="text" name="phonenumber" id="phonenumber" placeholder="Input your phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Input your phone number'" required class="single-input"> 
                                </div>
                                <div class="f1-buttons" style="margin-top: 40px;">
                                <button type="button" class="genric-btn success-border circle arrow btn-previous">Previous<span class="lnr lnr-arrow-left"></span></button>
                                <button type="button" class="genric-btn success-border circle arrow btn-next">Next<span class="lnr lnr-arrow-right"></span></button>
                                </div>
                            </fieldset>
                            <fieldset style="margin-top:20px;">
                            <div class="form-row col-lg-12" style="padding-left: 0px;">
                            <div class="form-group">
                            <input type="file" name="fotoid" class="img-thumbnail" id="fotoid" required>
                            <small id="help" class="form-text text-muted">Photo/Scan of ID Card</small>
                            </div>
                            <div class="form-group" style="padding-left: 50px;">
                            <input type="file" name="fotoid1" class="img-thumbnail" id="fotoid1" required>
                            <small id="help" class="form-text text-muted">Photo of You and ID Card</small>
                            </div>
                            <div class="form-group" style="padding-left: 0px;">
                            <input type="file" name="fotoid2" class="img-thumbnail" id="fotoid2" required>
                            <small id="help" class="form-text text-muted">Photo of electricity/phone/water bill that includes address</small>
                            </div>
                            <div class="form-group" style="padding-left: 32px;">
                            <input type="file" name="fotoid3" class="img-thumbnail" id="fotoid3" required>
                            <small id="help" class="form-text text-muted">Photo of SIUP/TDP</small>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-select" id="default-select">
                            <label for="year"><b style="color:black">Year of Establishment</b></label>
                            <select id="year" name="year" required>
                            <?php
                                $current_year = (int)date("Y");
                                for ($ix = $current_year ; $ix >= $current_year - 30 ; $ix--) {         echo "<option>".$ix."</option>";
                                    
                                }
                            ?>
                            </select>
                            </div>
                            </div>
                            <div class="form-group" style="margin-top:45px;">
                            <label for="weblink"><b style="color:black">Website Link</b></label>
                            <input type="text" name="weblink" id="weblink" placeholder="Example: www.excellentevent.com" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Example: www.excellentevent.com'" required class="single-input"> 
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
            
	<!-- start footer Area -->		
			<footer class="footer-area section-gap" style="padding:50px 0; height:345px;">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6>F I Y E O</h6>
								<ul class="footer-nav">
                                    <li><a href="../FRONTEND-WEB/about-us.php">About Us</a></li>
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
<img src="../temp-fiyeo/img/irene/fiyeo2.png" alt=""> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | PT. XYZ
						</p>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	
			<script src="../temp-fiyeo/js/vendor/jquery-2.2.4.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="../temp-fiyeo/js/vendor/bootstrap.min.js"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="../temp-fiyeo/js/easing.min.js"></script>			
			<script src="../temp-fiyeo/js/hoverIntent.js"></script>
			<script src="../temp-fiyeo/js/superfish.min.js"></script>	
			<script src="../temp-fiyeo/js/jquery.ajaxchimp.min.js"></script>
			<script src="../temp-fiyeo/js/jquery.magnific-popup.min.js"></script>	
			<script src="../temp-fiyeo/js/owl.carousel.min.js"></script>		
			<script src="../temp-fiyeo/js/jquery.sticky.js"></script>
            <script src="../temp-fiyeo/js/jquery.nice-select.min.js"></script>
			<script src="../temp-fiyeo/js/parallax.min.js"></script>		
			<script src="../temp-fiyeo/js/mail-script.js"></script>	
			<script src="../temp-fiyeo/js/main.js"></script>
            <script src="../temp-fiyeo/js/jQuery-Mask-Plugin-master/dist/jquery.mask.js"></script>
            <script src="../temp-fiyeo/wizard/assets/js/jquery.backstretch.min.js"></script>
            <script src="../temp-fiyeo/wizard/assets/js/retina-1.1.0.min.js"></script>
            <script src="../temp-fiyeo/wizard/assets/js/scripts.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.11/sweetalert2.all.js"></script>
            
              <script>
                    function registerFunction(){
                        var frm = $('#register-form');
                        frm.submit(function (ev) {
                            $.ajax({                                     type: "POST",
                                enctype: 'multipart/form-data',
                                url: frm.attr('action'),
                                processData: false,
                                contentType: false,
                                cache: false,
                                timeout: 600000,
                                data: new FormData(frm[0]),
                                success: function (data) {
                                    swal({
                                      type: 'success',
                                      title: 'Registration successful!',
                                      text: 'Your business profile will be processed by us in 1-2 days. Go activate your account by clicking the link we have sent you by email. Thankyou for joining us',
                                      showConfirmButton: false,
                                      timer: 2000
                                    }).then( () => {
                                    location.replace("../user/login-fiyeo.php");
                                    });      
                                    
                                },
                                error: function () {
                                    swal({
                                      type: 'error',
                                      title: 'Registration failed!',
                                      text: 'Please fill in the registration form properly',
                                      showConfirmButton: false,
                                      timer: 1500
                                    });  
                                }
                            });
                            ev.preventDefault();
                            ev.cancelBubble();
                        });   
                      }    
                </script>
            
<script type="text/javascript">
$(document).ready(function(){
    $('#province').on('change',function(){
        var id_province = $(this).val();
        if(id_province){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'id_provinsi='+id_province,
                success:function(data){
                    d = JSON.parse(data);
                    $('#city').empty();
                    for (i = 0 ; i < d.length ; i++) {
                        $('#city').append($("<option></option>")
                        .attr("value",d[i]['id_kota'])
                        .text(d[i]['nama_kota']));
                    };
                    $('#city').niceSelect('update');
                }
            }); 
        }else{
            $('#city').html('<option value="">Select province first</option>'); 
        }
    });
  
$(document).ready(function(){
  $('#phonenumber').mask('0000-0000-0000');
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
  url: 'checkData.php',
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
          
<script type="text/javascript">
var clone_count = 0;
</script>
            
    </body>
	</html>

