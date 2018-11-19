<?php
session_start();
include 'config.php';
if (isset ($_SESSION['id'])!="") {
    $ideo = $_SESSION['id'];
}


error_reporting(E_ALL ^ E_NOTICE);
$id = $_GET['id_reminder'];


$delete = "delete from app_reminder where id_reminder = '$id' AND id_eo = '$ideo' ";

$tampil = mysqli_query($koneksi,$delete);
	if($tampil)
	{
		header("location:appointment-eo.php");
	}
	else
	{
		echo "Failed";
	}
	

?>
