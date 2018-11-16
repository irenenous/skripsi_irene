<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}

		
		$idreputasi = $_GET['id_kriteria_reputasi'];
    
        $tangkapDetail	     = $_POST['detailreputasi'];
        $tangkapIndikator	     = $_POST['indikator'];
	
	$query = "UPDATE kriteria_reputasi SET
	detail_kriteria='$tangkapDetail',
    id_indikator_penilaian='$tangkapIndikator' Where id_kriteria_reputasi = '$idreputasi'";
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