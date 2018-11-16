<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}
	
	if (isset($_POST['tambah'])) {
    	     
        $tangkapEO		   = $_POST['eo'];
		$tangkapBudget	   = $_POST['c1'];
        $tangkapReputasi   = $_POST['c2'];
        $tangkapFasilitas  = $_POST['c3'];
        $tangkapKonsep     = $_POST['c4'];
        
		$query = mysqli_query($koneksi , "insert into kriteria_eo values ('', '$tangkapEO', '$tangkapBudget', '$tangkapReputasi', '$tangkapFasilitas', '$tangkapKonsep')");
        
         header('Location: eo-criteria.php'); 
	}


?>