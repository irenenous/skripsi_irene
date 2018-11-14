<?php
session_start();
include 'config.php';
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}


error_reporting(E_ALL ^ E_NOTICE);
$iddetail = $_GET['id_detail_kriteria'];


$delete = "delete from detail_kriteria where id_detail_kriteria = '$iddetail'";

$tampil = mysqli_query($koneksi,$delete);
	if($tampil)
	{
		header("location:criteria-detail.php");
	}
	else
	{
		echo "Failed";
	}
	

?>
