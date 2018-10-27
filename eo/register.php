 <?php
        include 'config.php';
        
        
        $tangkapEmail     = $_POST['email'];
        $tangkapPassword  = $_POST['password'];
//        $tangkapFoto      = $_POST['foto'];
        $tangkapCName     = $_POST['companyname'];
        $tangkapCDesc     = $_POST['companydesc'];
        $tangkapCategory  = $_POST['nama_kategori'];
        $tangkapProvinsi  = $_POST['nama_provinsi'];
        $tangkapKota      = $_POST['nama_kota'];
        $tangkapAddress   = $_POST['address'];
        $tangkapNoHp      = $_POST['phonenumber'];
//        $tangkapFotoId    = $_POST['fotoid'];
//        $tangkapFotoId1   = $_POST['fotoid1'];
//        $tangkapFotoId2   = $_POST['fotoid2'];
//        $tangkapFotoId3   = $_POST['fotoid3'];
        $tangkapYear      = $_POST['year'];
        $tangkapWeb      = $_POST['weblink'];
        $tangkapStatus     = 'PENDING';
        
        $tangkapPassword = ($tangkapPassword);
        
        
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
            // UPLOAD FOTO START
        $target_dir = "image-eo/";
		$target_fileFotoId = $target_dir . basename($_FILES["fotoid"]["name"]);
		$imageFileType = pathinfo($target_fileFotoId,PATHINFO_EXTENSION);	
		
		if (move_uploaded_file($_FILES["fotoid"]["tmp_name"], $target_fileFotoId)) {
			echo "The file ". basename( $_FILES["fotoid"]["name"]). " has been uploaded.";
        } 
            else {
                echo "Sorry, there was an error uploading your file.";
        }
            //UPLOAD FOTO END 
    $target_fileFoto =array();
    for ($i = 1 ; $i <= 3 ; $i++) {
            // UPLOAD FOTO START
        $target_dir = "image-eo/";
		$target_fileFoto[] = $target_dir . basename($_FILES["fotoid".$i]["name"]);
		$imageFileType = pathinfo($target_dir . basename($_FILES["fotoid".$i]["name"]),PATHINFO_EXTENSION);	
		
		if (move_uploaded_file($_FILES["fotoid".$i]["tmp_name"], $target_dir . basename($_FILES["fotoid".$i]["name"]))) {
			echo "The file ". basename( $_FILES["fotoid".$i]["name"]). " has been uploaded.";
        } 
            else {
                echo "Sorry, there was an error uploading your file.";
        }
            //UPLOAD FOTO END  
    } 



        
        $query = mysqli_query($koneksi , "insert into eo values ('','$tangkapEmail', '$tangkapPassword', '$target_fileFoto0',
        '$tangkapCName', '$tangkapCDesc', '$tangkapProvinsi', '$tangkapKota', '$tangkapAddress', '$tangkapNoHp', '$target_fileFotoId', '$target_fileFoto[0]', '$target_fileFoto[1]', '$target_fileFoto[2]', '$tangkapYear', '$tangkapWeb', '$tangkapStatus')");
        
        if (!$query) { 
            echo '<script> alert("Registrasi gagal. Email sudah pernah terdaftar"); window.history.back(); </script>';
            
        } else {
         $eo_id = mysqli_insert_id($koneksi);
        for ($ix = 0 ; $ix < count($tangkapCategory) ; $ix++) {
            $query = mysqli_query($koneksi , "insert into kategori_eo values ('$eo_id', '$tangkapCategory[$ix]')");
        }  
        header('Location: index-fiyeo.php'); 
        } 
        

        
        

?>