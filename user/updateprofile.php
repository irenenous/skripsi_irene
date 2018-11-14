<?php
include 'config.php';
session_start();

        $iduser = $_SESSION['id'];
        
        $tangkapName		 = $_POST['name'];
        $tangkapEmail		 = $_POST['email'];
		$tangkapPhone        = $_POST['phone'];

if($_FILES["foto"]["error"] == 0) {
// UPLOAD FOTO START
        $target_dir = "image-user/";
		$target_fileFoto = $target_dir . basename($_FILES["foto"]["name"]);
		$imageFileType = pathinfo($target_fileFoto,PATHINFO_EXTENSION);	
		
		if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_fileFoto)) {
			echo "The file ". basename( $_FILES["foto"]["name"]). " has been uploaded.";
    } 
		else {
			echo "Sorry, there was an error uploading your file.";
    }
		//UPLOAD FOTO END
    $query = "UPDATE user SET
    nama_user='$tangkapName',
    nohp_user='$tangkapPhone',
    email_user='$tangkapEmail',
    foto_user='$target_fileFoto' Where id_user = '$iduser' AND STATUS = 'ACTIVE' ";  
}

else {
   $query = "UPDATE user SET
    nama_user='$tangkapName',
    nohp_user='$tangkapPhone',
    email_user='$tangkapEmail'
    Where id_user = '$iduser' AND STATUS = 'ACTIVE' ";    
}
	$tampil = mysqli_query($koneksi,$query);
	if($tampil)
	{
		header("location:profile-klien.php");
	}
	else
	{
		echo '<script> alert("Email already exist. Please choose another email"); window.history.back(); </script>';
	}
	
?>