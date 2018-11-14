<?php
session_start();
include 'config.php';
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}


error_reporting(E_ALL ^ E_NOTICE);
$idbook = $_GET['id_bookmark'];


$delete = "delete from bookmark where id_bookmark = '$idbook'";

$tampil = mysqli_query($koneksi,$delete);
	if($tampil)
	{
		header("location:bookmarks-klien.php");
	}
	else
	{
		echo "Failed";
	}
	

?>
