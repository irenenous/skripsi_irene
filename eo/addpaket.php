<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $ideo = $_SESSION['id'];
}
	
	if (isset($_POST['tambah'])) {
    	     
        $tangkapNamaP		= $_POST['namapaket'];
		$tangkapJenisP		= $_POST['jenispaket'];
		$tangkapHargaP		= $_POST['hargapaket'];
		$tangkapKetP		= $_POST['ketpaket'];
        
		$query = mysqli_query($koneksi , "insert into paket values ('','$ideo','$tangkapNamaP', '$tangkapJenisP', '$tangkapHargaP', '$tangkapKetP')");
        
         header('Location: paket-eo.php'); 
	}


?>