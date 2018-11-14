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
    	
        $tangkapEventDate   = $_POST['eventdate'];
        $tangkapType        = $_POST['eventtype'];
        $tangkapLocation    = $_POST['eventlocation'];
        $tangkapGuest       = $_POST['guestnumber'];
        $tangkapDuration    = $_POST['duration'];
        $tangkapDesc        = $_POST['eventdesc'];
        $tangkapPackage     = $_POST['package'];
        $tangkapName        = $_POST['name'];
        $tangkapPhone       = $_POST['phonenumber'];
        $tangkapEmail       = $_POST['email'];
        $tangkapStatus      = 'SENT';
        
		$query = mysqli_query($koneksi , "insert into request_layanan values ('','$iduser', '$ideo', '$date', '$tangkapEventDate', '$tangkapType', '$tangkapLocation', '$tangkapGuest', '$tangkapDuration', '$tangkapDesc', '$tangkapPackage', '$tangkapName', '$tangkapPhone', '$tangkapEmail', '$tangkapStatus')");
        
         header('Location: ../FRONTEND-WEB/view-profile-eo.php?id_eo='.$ideo);
	}


?>