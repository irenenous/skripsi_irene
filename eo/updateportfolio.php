<?php
include 'config.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $ideo = $_SESSION['id'];
}

    if(!empty($_POST['id_portfolio'])){
		echo $idport= $_POST['id_portfolio'];}
	if(!empty($_POST['foto'])){
		echo $photo= $_POST['foto'];}
	if(!empty($_POST['ket_foto'])){
		echo $description= $_POST['ket_foto'];}
	
	
		$idport=$_GET['id_portfolio'];
        
		$tangkapKetP  = $_POST['fileDesc'];

		//UPLOAD FOTO END
	
	$query = "UPDATE portfolio SET
	ket_foto='$tangkapKetP' Where id_portfolio = '$idport' AND id_eo = '$ideo' ";
	$tampil = mysqli_query($koneksi,$query);
	if($tampil)
	{
		header("location:portfolio-eo.php");
	}
	else
	{
		echo (mysqli_error($koneksi));
	}
	
?>