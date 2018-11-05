<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $ideo = $_SESSION['id'];
}
	
	if (isset($_POST['tambah'])) {
    	
//        $tangkapFile		= $_POST['port-file'];
		$tangkapKetP		= $_POST['fileDesc'];
        
        // UPLOAD FOTO START
        $target_dir = "portfolio/";
		$target_filePort = $target_dir . basename($_FILES["port-file"]["name"]);
		$imageFileType = pathinfo($target_filePort,PATHINFO_EXTENSION);	
		
		if (move_uploaded_file($_FILES["port-file"]["tmp_name"], $target_filePort)) {
			echo "The file ". basename( $_FILES["port-file"]["name"]). " has been uploaded.";
    } 
		else {
			echo "Sorry, there was an error uploading your file.";
    }
		//UPLOAD FOTO END
        
		$query = mysqli_query($koneksi , "insert into portfolio values ('','$ideo', '$target_filePort', '$tangkapKetP')");
        
        header('Location: portfolio-eo.php'); 
	}


?>           