<?php
session_start();
include 'config.php';
if (isset ($_SESSION['id'])!="") {
    $ideo = $_SESSION['id'];
}


$id = $_GET['id_request'];


$query = "UPDATE request_layanan SET status='HIDDEN' Where id_request = '$id' AND id_eo = '$ideo' ";

$tampil = mysqli_query($koneksi,$query);
	if($tampil)
	{
		header("location:request-eo.php");
	}
	else
	{
		echo mysqli_error($koneksi);
	}
	

?>
