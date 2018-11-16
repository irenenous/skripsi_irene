<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}

		
		$idkriteriaeo      = $_GET['id_kriteria_eo'];
        $tangkapBudget     = $_POST['c1'];
        $tangkapReputasi   = $_POST['c2'];
        $tangkapFasilitas  = $_POST['c3'];
        $tangkapKonsep     = $_POST['c4'];
      
	
	$query = "UPDATE kriteria_eo SET
	id_kriteria_budget='$tangkapBudget',
    id_kriteria_reputasi='$tangkapReputasi', id_kriteria_fasilitas='$tangkapFasilitas',
    id_kriteria_konsep='$tangkapKonsep' Where id_kriteria_eo = '$idkriteriaeo'";
	$tampil = mysqli_query($koneksi,$query);
	if($tampil)
	{
		header("location:eo-criteria.php");
	}
	else
	{
		echo mysqli_error($koneksi);
	}
	
?>