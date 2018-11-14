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
$date = date('m/d/Y h:i:s A');
?>

<?php
	if (isset($_POST['tambah'])) {
    	
        $tangkapSubjek    = $_POST['subject'];
        $tangkapPesan       = $_POST['message'];
        $tangkapStatus      = 'SENT';
        $tangkapSender      = 'KLIEN';
        
		$query = mysqli_query($koneksi , "insert into pesan values ('','$iduser', '$ideo', '$date', '$tangkapSubjek', '$tangkapPesan', '$tangkapStatus','$tangkapSender')");
        
         header('Location: ../FRONTEND-WEB/view-profile-eo.php?id_eo='.$ideo);
	}


?>