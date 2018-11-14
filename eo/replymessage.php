<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $ideo = $_SESSION['id'];
}
	
date_default_timezone_set("Asia/Bangkok");
$date = date('m/d/Y h:i:s A');

    	     
        $idklien        = $_POST['id_user'];
		$subject		= $_POST['subject'];
		$message		= $_POST['message'];
        $status         = 'SENT';
        $sender         = 'EO';
        
		$query = mysqli_query($koneksi , "insert into pesan values ('','$idklien','$ideo', '$date', '$subject', '$message', '$status', '$sender')");
        
 


?>