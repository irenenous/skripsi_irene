<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}

		
		$ideo=$_GET['id_eo'];
        $tangkapNama       = $_POST['eoname'];
        $tangkapEmail      = $_POST['eoemail'];
        $tangkapPassword   = $_POST['eopass'];
        $tangkapNohp       = $_POST['eophone'];
        $tangkapStatus	   = $_POST['eostatus'];
	
	$query = "UPDATE eo SET
	status='$tangkapStatus' Where id_eo = '$ideo'";
	$tampil = mysqli_query($koneksi,$query);
	if($tampil)
	{
		
        if ($tangkapStatus == 'CONFIRMED') {
        $msg = '
        <html>
        <body>
        <div align="center">
        <img src="http://localhost:81/skripsi_irene/temp-fiyeo/img/irene/fiyeobg.png">
        </div>
        <hr>
        <p>Hello '.$tangkapNama.', </p>
        <p>Your business profile has been confirmed. Thank you for registering your account. Below is some of your account details: </p>
        Full Name : '.$tangkapNama.'
        <br>
        Phone Number : '.$tangkapNohp.'
        <br>
        E-mail : '.$tangkapEmail.'
        <br>
        Password : '.$tangkapPassword.'
        <br>
        <p>Please verify your account by clicking <a href="http://localhost:81/skripsi_irene/eo/verify-eo.php?id_eo='.$ideo.'">here</a> and login using your account information. </p>
        <p>Thank You</p>
        <hr>
        <div align="center">
        F I Y E O
        <br>
        E-mail : customerservice@fiyeo.com
        <br>
        Phone : (+62) 81250381345
        </div>
        </body>
        </html>
        '; 
            
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        mail($tangkapEmail, "Registration Successful", $msg, implode("\r\n", $headers));
            
        header("location:acc-eo.php");    
        }
        
        else {
        header("location:acc-eo.php"); }
	}
	else
	{
		echo mysqli_error($koneksi);
	}
	
?>