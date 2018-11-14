<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}
	
date_default_timezone_set("Asia/Bangkok");
$date = date('m/d/Y h:i:s A');
        
    	$idklien        = $_POST['id_user'];     
        $ideo           = $_POST['id_eo'];
		$subject		= $_POST['subject'];
		$message		= $_POST['message'];
        $status         = 'SENT';
        $sender         = 'KLIEN';
        
		$query = mysqli_query($koneksi , "insert into pesan values ('','$idklien','$ideo', '$date', '$subject', '$message', '$status', '$sender')");
        
 


?>