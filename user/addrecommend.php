<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}
?>	

<?php
	if (isset($_POST['tambah'])) {
    	
        $tangkapKategori   = $_POST['kategori'];
        $tangkapBudget     = $_POST['budget'];
        $tangkapReputasi   = $_POST['reputasi'];
        $tangkapFasilitas  = $_POST['fasilitas'];
        $tangkapKonsep     = $_POST['konsep'];
        
		$query = mysqli_query($koneksi , "insert into rekomendasi_eo values ('', '$iduser', '$tangkapKategori', '$tangkapBudget', '$tangkapReputasi', '$tangkapFasilitas', '$tangkapKonsep')");
        echo mysqli_error($koneksi);
         header('Location: ../FRONTEND-WEB/eo-recommendation.php');
	}


?>