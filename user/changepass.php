<?php
include 'config.php';
session_start();

    $iduser = $_SESSION['id'];
        
    $tangkapPass = $_POST['password'];
		
    $tangkapPass = ($tangkapPass);
	
	$query = "UPDATE user SET
    password_user='$tangkapPass' Where id_user = '$iduser' AND STATUS = 'ACTIVE' ";
	$tampil = mysqli_query($koneksi,$query);
	if($tampil)
	{
		header("location:profile-klien.php");
	}
	else
	{
		echo (mysqli_error($koneksi));
	}
	
?>