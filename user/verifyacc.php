<?php

include 'config.php';


$user_id = $_GET['id_user'];


$query = "UPDATE user SET status='ACTIVE' Where id_user = '$user_id'";

$tampil = mysqli_query($koneksi,$query);
	if($tampil)
	{
		header("location:login-fiyeo.php");
	}
	else
	{
		echo mysqli_error($koneksi);
	}
	

?>
