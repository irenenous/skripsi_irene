<?php
session_start();
include 'config.php';
if (isset ($_SESSION['id'])!="") {
    $ideo = $_SESSION['id'];
}


error_reporting(E_ALL ^ E_NOTICE);
$idport = $_GET['id_portfolio'];


$delete = "delete from portfolio where id_portfolio = '$idport' AND id_eo ='$ideo' ";

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
