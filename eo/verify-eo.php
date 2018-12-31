<?php

include 'config.php';


$ideo = $_GET['id_eo'];


$query = "UPDATE eo SET status='VERIFIED' Where id_eo = '$ideo'";

$tampil = mysqli_query($koneksi,$query);
	if($tampil)
	{
		header("location:../user/login-fiyeo.php");
	}
	else
	{
		echo mysqli_error($koneksi);
	}
	

?>
