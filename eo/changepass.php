<?php
include 'config.php';
session_start();

    $ideo = $_SESSION['id'];
        
    $tangkapPass = $_POST['password'];
		
    $tangkapPass = ($tangkapPass);
	
	$query = "UPDATE eo SET
    password_eo='$tangkapPass' Where id_eo = '$ideo' AND STATUS = 'VERIFIED' ";
	$tampil = mysqli_query($koneksi,$query);
	if($tampil)
	{
		header("location:profile-eo.php");
	}
	else
	{
		echo (mysqli_error($koneksi));
	}
	
?>