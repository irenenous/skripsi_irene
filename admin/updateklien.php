<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}

		
		$idklien=$_GET['id_user'];
    
        $tangkapStatus	 = $_POST['clientstatus'];
	
	$query = "UPDATE user SET
	status='$tangkapStatus' Where id_user = '$idklien'";
	$tampil = mysqli_query($koneksi,$query);
	if($tampil)
	{
		header("location:acc-klien.php");
	}
	else
	{
		echo mysqli_error($koneksi);
	}
	
?>