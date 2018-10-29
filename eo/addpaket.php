<?php

	
	if (isset($_POST['tambah'])) {
		include 'config.php';
    	
        $tangkapNamaP		= $_POST['namapaket'];
		$tangkapJenisP		= $_POST['jenispaket'];
		$tangkapHargaP		= $_POST['hargapaket'];
		$tangkapKetP		= $_POST['ketpaket'];
        
		$query = mysqli_query($koneksi , "insert into paket values ('', '$tangkapNamaP', '$tangkapJenisP', '$tangkapHargaP', '$tangkapKetP')");
        
         header('Location: paket-eo.php'); 
	}


?>