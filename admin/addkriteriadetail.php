<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}
	
	if (isset($_POST['tambah'])) {
    	     
        $tangkapNamaC		= $_POST['kriteria'];
		$tangkapDetail		= $_POST['detailkriteria'];
        $tangkapFuzzy		= $_POST['fuzzy'];
        
		$query = mysqli_query($koneksi , "insert into detail_kriteria values ('', '$tangkapNamaC', '$tangkapDetail', '$tangkapFuzzy')");
        
         header('Location: criteria-detail.php'); 
	}


?>