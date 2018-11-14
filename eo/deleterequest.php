<?php
session_start();
include 'config.php';
if (isset ($_SESSION['id'])!="") {
    $ideo = $_SESSION['id'];
}


error_reporting(E_ALL ^ E_NOTICE);
$id = $_GET['id_request'];


$delete = "delete from request_layanan where id_request = '$id' AND id_eo = '$ideo' ";

$tampil = mysqli_query($koneksi,$delete);
	if($tampil)
	{
		header("location:request-eo.php");
	}
	else
	{
		echo "Failed";
	}
	

?>
