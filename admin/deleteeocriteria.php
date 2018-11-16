<?php
session_start();
include 'config.php';
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}


error_reporting(E_ALL ^ E_NOTICE);
$idkriteriaeo = $_GET['id_kriteria_eo'];


$delete = "delete from kriteria_eo where id_kriteria_eo = '$idkriteriaeo'";

$tampil = mysqli_query($koneksi,$delete);
	if($tampil)
	{
		header("location:eo-criteria.php");
	}
	else
	{
		echo "Failed";
	}
	

?>
