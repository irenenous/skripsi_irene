<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $ideo = $_SESSION['id'];
}
	
	if (isset($_POST['tambah'])) {
    	     
        $tangkapTgl		= $_POST['datepickers'];
		$tangkapWkt		= $_POST['timepickers'];
		$tangkapKlien   = $_POST['client'];
		$tangkapNote    = $_POST['note'];
        $tangkapStatus  = 'ONGOING';
        
		$query = mysqli_query($koneksi , "insert into app_reminder values ('','$ideo', '$tangkapKlien', '$tangkapTgl', '$tangkapWkt', '$tangkapNote', '$tangkapStatus')");
        
         header('Location: appointment-eo.php'); 
	}


?>