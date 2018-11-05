<?php
session_start();
include 'config.php';

if (isset ($_SESSION['id'])!="") {
    $ideo = $_SESSION['id'];
}

$query = "SELECT * FROM eo where id_eo = '$ideo' AND status = 'VERIFIED'";
$tampil = mysqli_query($koneksi, $query);
$select = mysqli_fetch_array($tampil); 
        $emaileo = $select['email_eo'];
        $namaeo = $select['nama_eo'];
        $fotoeo = $select['foto_eo'];
        $desceo = $select['ket_eo'];

?>

<?php
if(isset($_POST['update_email']))
{
 $emailId=$_POST['update_email'];
    
if ($emailId != $emaileo) {

 $checkdata=" SELECT email_eo FROM eo WHERE email_eo='$emailId' ";

 $query=mysqli_query($koneksi, $checkdata);

 if(mysqli_num_rows($query)>0)
 {
  echo "Email already exist";
 }
 else
 {
  echo "";
 }
 exit();
}
}
?>