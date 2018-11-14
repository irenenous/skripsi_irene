<?PHP
session_start();

if(!empty($_GET['id_eo'])){
	$ideo = $_GET['id_eo']; }
    
header ('location: ../FRONTEND-WEB/view-profile-eo.php?id_eo='.$ideo);

session_destroy();
?>