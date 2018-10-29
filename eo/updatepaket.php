<?php
	include("config.php");
    if(!empty($_POST['id_paket'])){
		echo $id= $_POST['id_paket'];}
	if(!empty($_POST['nama_paket'])){
		echo $namapaket= $_POST['nama_paket'];}
	if(!empty($_POST['jenis_paket'])){
		echo $jenispaket= $_POST['jenis_paket'];}
	if(!empty($_POST['harga_paket'])){
	         $hargapaket= $_POST['harga_paket'];}
	if(!empty($_POST['ket_paket'])){
		echo $ketpaket= $_POST['ket_paket'];}
	
	
		$id=$_GET['id_paket'];
        
        $tangkapPname		 = $_POST['namapaket'];
		$tangkapType		 = $_POST['jenispaket'];
		$tangkapPrice		 = $_POST['hargapaket'];
		$tangkapDescription  = $_POST['ketpaket'];
	
	$query = "UPDATE paket SET
    nama_paket='$tangkapPname',
	jenis_paket='$tangkapType',
	harga_paket='$tangkapPrice',
	ket_paket='$tangkapDescription' Where id_paket = '$id' ";
	$tampil = mysqli_query($koneksi,$query);
	if($tampil)
	{
		header("location:paket-eo.php");
	}
	else
	{
		echo (mysqli_error($koneksi));
	}
	
?>