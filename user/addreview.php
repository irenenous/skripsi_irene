<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}
?>	

<?php
include("config.php");
if(!empty($_GET['id_eo'])){
$ideo = $_GET['id_eo'];
}   
?>	

<?php
date_default_timezone_set("Asia/Bangkok");
$date = date('m/d/Y');
?>

<?php
	if (isset($_POST['tambah'])) {
    	
        $tangkapRating   = $_POST['stars'];
        $tangkapKet      = $_POST['review'];
        
        
		$query = mysqli_query($koneksi , "insert into review values ('$iduser', '$ideo', '$date', '$tangkapRating', '$tangkapKet')");
        
         header('Location: ../FRONTEND-WEB/view-profile-eo.php?id_eo='.$ideo);
	}


?>