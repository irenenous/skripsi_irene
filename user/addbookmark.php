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
$ideo = $_GET['id_eo']; }   
        
    $query2 = mysqli_query($koneksi , "insert into bookmark values ('','$iduser', '$ideo', 'BOOKMARKED')");
        
    header('Location: ../FRONTEND-WEB/view-profile-eo.php?id_eo=<?php echo $ideo ?>'); 
        
//         echo '<script> window.history.back(); </script>';


?>