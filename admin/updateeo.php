<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}

		
		$ideo=$_GET['id_eo'];
    
        $tangkapStatus	 = $_POST['eostatus'];
	
	$query = "UPDATE eo SET
	status='$tangkapStatus' Where id_eo = '$ideo'";
	$tampil = mysqli_query($koneksi,$query);
	if($tampil)
	{
		header("location:acc-eo.php");
	}
	else
	{
		echo mysqli_error($koneksi);
	}
	
?>