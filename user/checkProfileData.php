<?php 
session_start();
include 'config.php';
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}
?>
<?php 
$query = "SELECT * FROM user where id_user = '$iduser' AND status = 'ACTIVE'";
$tampil = mysqli_query($koneksi, $query);
$select = mysqli_fetch_array($tampil); 
        $namauser = $select['nama_user'];
        $nohpuser = $select['nohp_user']; 
        $emailuser = $select['email_user'];
        $fotouser = $select['foto_user'];     
?>


<?php
if(isset($_POST['update_email']))
{
 $emailId=$_POST['update_email'];
    
if ($emailId != $emailuser) {

 $checkdata=" SELECT email_user FROM user WHERE email_user='$emailId' ";

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
?>2