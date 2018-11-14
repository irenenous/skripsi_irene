<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}

		
		$idbudget = $_GET['id_kriteria_budget'];
    
        $tangkapDetail	     = $_POST['detailbudget'];
        $tangkapFuzzy	     = $_POST['fuzzy'];
	
	$query = "UPDATE kriteria_budget SET
	detail_kriteria1='$tangkapDetail',
    id_fuzzy='$tangkapFuzzy' Where id_kriteria_budget = '$idbudget'";
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