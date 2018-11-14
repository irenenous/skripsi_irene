<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}

		
		$idfasilitas = $_GET['id_kriteria_fasilitas'];
    
        $tangkapDetail	     = $_POST['detailfasilitas'];
        $tangkapFuzzy	     = $_POST['fuzzy'];
	
	$query = "UPDATE kriteria_fasilitas SET
	detail_kriteria3='$tangkapDetail',
    id_fuzzy='$tangkapFuzzy' Where id_kriteria_fasilitas = '$idfasilitas'";
	$tampil = mysqli_query($koneksi,$query);
	if($tampil)
	{
		header("location:criteria.php");
	}
	else
	{
		echo mysqli_error($koneksi);
	}
	
?>