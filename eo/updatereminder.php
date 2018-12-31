<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $ideo = $_SESSION['id'];
}

		
$id=$_GET['id_reminder'];
$tangkapStatus	 = $_POST['reminderstatus'];

    if ($tangkapStatus != "") {
	$query = "UPDATE app_reminder SET
	status='$tangkapStatus' Where id_reminder = '$id'";
	$tampil = mysqli_query($koneksi,$query);
	   if($tampil) {
		header("location:appointment-eo.php");
	   }
	   else {
		echo mysqli_error($koneksi);
	   } 
    }
    else {
       header("location:appointment-eo.php"); 
    }

?>