<?php
include "config.php";
error_reporting(E_ALL ^ E_NOTICE);
$idport = $_GET['id_portfolio'];


$delete = "delete from portfolio where id_portfolio = '$idport'";

$tampil = mysqli_query($koneksi,$delete);
	if($tampil)
	{
		header("location:portfolio-eo.php");
	}
	else
	{
		echo "Failed";
	}
	

?>
