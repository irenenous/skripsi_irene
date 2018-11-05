<?php
include 'config.php';
session_start();

// munculin kategori
// provinsi, kota

        $ideo = $_SESSION['id'];
        
        $tangkapName		 = $_POST['name'];
		$tangkapDesc		 = $_POST['description'];
		$tangkapAddress		 = $_POST['address'];
        $tangkapEmail		 = $_POST['email'];
		$tangkapPhone        = $_POST['phone'];
        $tangkapLink         = $_POST['weblink'];


// UPLOAD FOTO START
        $target_dir = "image-eo/";
		$target_fileFoto0 = $target_dir . basename($_FILES["foto"]["name"]);
		$imageFileType = pathinfo($target_fileFoto0,PATHINFO_EXTENSION);	
		
		if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_fileFoto0)) {
			echo "The file ". basename( $_FILES["foto"]["name"]). " has been uploaded.";
    } 
		else {
			echo "Sorry, there was an error uploading your file.";
    }
		//UPLOAD FOTO END
	
	$query = "UPDATE eo SET
    email_eo='$tangkapEmail',
    foto_eo='$target_fileFoto0',
    nama_eo='$tangkapName',
	ket_eo='$tangkapDesc',
	alamat_eo='$tangkapAddress', 
    nohp_eo='$tangkapPhone',
	link_web='$tangkapLink' Where id_eo = '$ideo' AND STATUS = 'VERIFIED' ";
	$tampil = mysqli_query($koneksi,$query);
	if($tampil)
	{
		header("location:profile-eo.php");
	}
	else
	{
		echo '<script> alert("Email already exist. Please choose another email"); window.history.back(); </script>';
	}
	
?>