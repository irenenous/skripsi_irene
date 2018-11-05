<?php
session_start();
include 'config.php';
if (isset ($_SESSION['id'])!="") {
    $ideo = $_SESSION['id'];
}


error_reporting(E_ALL ^ E_NOTICE);
$id = $_GET['id_paket'];


$delete = "delete from paket where id_paket = '$id' AND id_eo = '$ideo' ";

$tampil = mysqli_query($koneksi,$delete);
	if($tampil)
	{
		header("location:paket-eo.php");
	}
	else
	{
		echo "Failed";
	}
	

?>
