<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}

		
		$idbudget = $_GET['id_kriteria_budget'];
    
        $tangkapDetail	     = $_POST['detailbudget'];
        $tangkapIndikator	     = $_POST['indikator'];
	
	$query = "UPDATE kriteria_budget SET
	detail_kriteria='$tangkapDetail',
    id_indikator_penilaian='$tangkapIndikator' Where id_kriteria_budget = '$idbudget'";
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