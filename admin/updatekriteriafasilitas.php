<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}

		
		$idfasilitas = $_GET['id_kriteria_fasilitas'];
    
        $tangkapDetail	     = $_POST['detailfasilitas'];
        $tangkapIndikator	     = $_POST['indikator'];
	
	$query = "UPDATE kriteria_fasilitas SET
	detail_kriteria='$tangkapDetail',
    id_indikator_penilaian='$tangkapIndikator' Where id_kriteria_fasilitas = '$idfasilitas'";
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