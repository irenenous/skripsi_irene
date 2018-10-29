<?php
include "config.php";
error_reporting(E_ALL ^ E_NOTICE);
$id = $_GET['id_paket'];


$delete = "delete from paket where id_paket = '$id'";

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
