<?php
//Include the database configuration file
include 'config.php';

if(!empty($_POST["id_provinsi"])){
    //Fetch all state data
    $tampil=mysqli_query($koneksi, "SELECT id_provinsi, id_kota FROM lokasi");
    
    echo "<option value='belum milih' selected>- Choose City -</option>";      
    while($id_provinsi=mysqli_fetch_array($tampil)) {
    echo "<option value='".$id_provinsi[id_provinsi]."' required> ".$id_provinsi[id_kota]."</option>";}
    echo "</select>"
}
?>