<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}

		
		$idkonsep = $_GET['id_kriteria_konsep'];
    
        $tangkapDetail	     = $_POST['detailkonsep'];
        $tangkapIndikator	     = $_POST['indikator'];
	
	$query = "UPDATE kriteria_konsep SET
	detail_kriteria='$tangkapDetail',
    id_indikator_penilaian='$tangkapIndikator' Where id_kriteria_konsep = '$idkonsep'";
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